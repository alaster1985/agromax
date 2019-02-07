<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:100|min:3',
            'photo' => 'required_without:category_id|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'type' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Please, set category name',
            'name.max' => 'Shorter please, max 100 characters',
            'name.min' => 'Very short name. At least 3 characters',
            'photo.required_without' => 'Please, choose a photo for new category',
            'photo.image' => 'It was not an image',
            'photo.mime' => 'Nice try! But It was not an image',
            'photo.max' => 'Please give some a little smaller picture. Max 2 Mb',
            'type.required' => 'Please, choose current type for category',
        ];
    }
}
