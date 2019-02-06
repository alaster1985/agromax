<?php

namespace App;

use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\PhotoUploadRequest;
use App\Services\UploadPhotoService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

//use Illuminate\Support\Facades\DB;

class Category extends Model
{
    protected $fillable = [
        'name',
        'photo',
        'type',
    ];

    public static function getUpperCategories()
    {
        $categories = Category::all()->where('type', '=', 'upper')->sortBy('name');
        return $categories;
    }

    public static function getLowerCategories()
    {
        $categories = Category::all()->where('type', '=', 'lower')->sortBy('name');
        return $categories;
    }

    public static function getCategories()
    {
        $categories = Category::all()
            ->where('id', '<>', 1)
            ->sortBy('name');
        return $categories;
    }

    public static function updateCategory($request)
    {
        $categoryToUpdate = Category::find($request->category_id);
        $categoryToUpdate->name = $request->name;
        $categoryToUpdate->type = $request->type;

        if (isset($request->photo)) {
            $newCategoryPhoto = new UploadPhotoService();
            $newCategoryPhoto->uploadProductPhoto($request);
            $photoName = $newCategoryPhoto->newFileName;
            $photoPath = 'images/categories/';
            $newPhoto = $photoPath . $photoName;
            $categoryToUpdate->photo = $newPhoto;
        }

        $categoryToUpdate->save();
    }

    public static function getCategoryById($id)
    {
        $categoryById = Category::find($id);
        return $categoryById;
    }

    public function product()
    {
        return $this->hasMany('App\Product');
    }

    public static function createCategory($request)
    {
        $photo = new UploadPhotoService();
        $photo->uploadProductPhoto($request);
        $photoName = $photo->newFileName;
        $photoPath = 'images/categories/';
        $newPhoto = $photoPath . $photoName;
        $newCategory = new Category($request->input() + [
                'photo' => $newPhoto,
            ]);
        $newCategory->save();
    }
}
