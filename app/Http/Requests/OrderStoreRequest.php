<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderStoreRequest extends FormRequest
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
        'first_name' => 'required|min:2|max:100',
        'last_name' => 'required|min:2|max:100',
        'linkedin' => 'required|min:2|max:100',
        'email' => 'required|email',
        'phone' => 'required|min:6|max:20',
        'company' => 'nullable|min:3|max:100',
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Please, set your first name',
            'first_name.max' => 'Shorter please, max 100 characters',
            'first_name.min' => 'Very short name. At least 2 characters',
            'last_name.required' => 'Please, set your last name',
            'last_name.max' => 'Shorter please, max 100 characters',
            'last_name.min' => 'Very short name. At least 2 characters',
            'email.required' => 'Please, set your email',
            'email.regex' => 'Please, follow to the format email',
            'phone.required' => 'Please, set your phone number',
            'phone.min' => 'Very short phone number',
            'phone.max' => 'Shorter please, max 20 characters',
            'company.min' => 'Very short company name',
            'company.max' => 'Shorter please, max 100 characters',
        ];
    }
}
