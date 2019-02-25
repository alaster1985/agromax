<?php

namespace App;

use App\Services\UploadPhotoService;
use Illuminate\Database\Eloquent\Model;

class Charity extends Model
{
    protected $fillable = [
        'title',
        'photo',
        'post',
        'disable',
    ];

    public static function getCharityPosts()
    {
        $charityPosts = Charity::all();
        return $charityPosts;
    }

    public static function createCharityPost($request)
    {
        $photo = new UploadPhotoService();
        $photo->uploadCharityPhoto($request);
        $photoName = $photo->newFileName;
        $photoPath = 'images/charity/';
        $newPhoto = $photoPath . $photoName;
        $newCharityPost = new Charity($request->input() + [
                'photo' => $newPhoto,
            ]);
        $newCharityPost->save();
    }

    public static function getCharityPostById($id)
    {
        $charityPostById = Charity::find($id);
        return $charityPostById;
    }

    public static function updateCharityPost($request)
    {
        $charityPostToUpdate = Charity::find($request->post_id);
        $charityPostToUpdate->title = $request->title;
        $charityPostToUpdate->post = $request->post;
        $charityPostToUpdate->disable = $request->disable;

        if (isset($request->photo)) {
            $newCharityPostPhoto = new UploadPhotoService();
            $newCharityPostPhoto->uploadCharityPhoto($request);
            $photoName = $newCharityPostPhoto->newFileName;
            $photoPath = 'images/charity/';
            $newPhoto = $photoPath . $photoName;
            $charityPostToUpdate->photo = $newPhoto;
        }

        $charityPostToUpdate->save();
    }
}
