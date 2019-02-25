<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CharityStoreRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'photo' => 'required_without:post_id|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'post' => 'required|max:10000',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Please, set title',
            'title.max' => 'Shorter please, max 255 characters',
            'title.min' => 'Very short title. At least 3 characters',
            'photo.required_without' => 'Please, choose a photo for new charity post',
            'photo.image' => 'It was not an image',
            'photo.mime' => 'Nice try! But It was not an image',
            'photo.max' => 'Please give some a little smaller picture. Max 2 Mb',
            'post.required' => 'Please, set post description',
            'post.max' => 'Shorter please, max 10000 characters (post description)',
        ];
    }
}
