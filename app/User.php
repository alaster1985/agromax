<?php

namespace App;

use App\Http\Requests\ChangePasswordRequest;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public static function getUsers()
    {
        $users = User::all()->where('isdeleted', '=', 0);
        return $users;
    }

    public static function getUserById($id)
    {
        $user = User::find($id);
        return $user;
    }

    public static function updateUser($request)
    {
        $userForUpdate = User::find($request->user_id);
        $userForUpdate->name = $request->name;
        $userForUpdate->email = $request->email;
        $userForUpdate->role_id = $request->role;
        $userForUpdate->save();
    }

    public static function addUser($request)
    {
        $newUser = new User();
        $newUser->name = $request->name;
        $newUser->email = $request->email;
        $newUser->role_id = $request->role;
        $newUser->password = Hash::make($request->password);
        $newUser->save();
    }

    public static function deleteUser($id)
    {
        $userForDelete = User::find($id);
        $userForDelete->isdeleted = 1;
        $userForDelete->password = Hash::make('default' . $userForDelete->name);
        $userForDelete->save();
    }

    public static function updatePassword(ChangePasswordRequest $request)
    {
        $current_password = $request->current_password;
        $user = User::find(json_decode($request->user)->id)->first();
        if (Hash::check($current_password, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();
            return true;
        } else {
            return false;
        }

    }
}
