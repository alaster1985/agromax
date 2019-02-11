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
        'linkedin' => [
            'required',
            'active_url',
            'regex:"^https?://((www|\w\w)\.)?linkedin.com/((in/[^/]+/?)|(pub/[^/]+/((\w|\d)+/?){3}))$"',
//            function ($attribute, $value, $fail) {
//                $ch = curl_init($value);
//                curl_setopt($ch, CURLOPT_HEADER, true);
//                curl_setopt($ch, CURLOPT_NOBODY, true);
//                curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
//                curl_setopt($ch, CURLOPT_TIMEOUT,10);
//                $output = curl_exec($ch);
//                $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//                curl_close($ch);
//                dd($httpCode);
//                if ($httpCode != 200) {
//                    $fail($attribute.' is invalid.');
//                }
//            },
        ],
        'email' => 'required|email|max:100',
        'phone' => 'required|min:6|max:20|regex:"^(\+)*[0-9]*$"',
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
            'linkedin.required' => 'Please, set your linkedIn personal page',
            'linkedin.active_url' => 'Please, set your current existing linkedIn personal page',
            'email.required' => 'Please, set your email',
            'email.regex' => 'Please, follow to the format email',
            'email.max' => 'Shorter please, max 100 characters',
            'phone.required' => 'Please, set your phone number',
            'phone.min' => 'Very short phone number',
            'phone.max' => 'It is too much numbers for phone',
            'phone.regex' => 'Please, use only numbers fot phone',
            'company.min' => 'Very short company name',
            'company.max' => 'Shorter please, max 100 characters',
        ];
    }
}
