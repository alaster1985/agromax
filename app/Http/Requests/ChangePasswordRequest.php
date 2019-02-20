<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangePasswordRequest extends FormRequest
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
            'current_password' => 'required',
            'password' => 'required|min:6|max:50',
            'password_confirmation' => 'same:password',
        ];
    }

    public function messages()
    {
        return [
            'current_password.required' => 'Please enter current password',
            'password.required' => 'Please enter new password',
            'password.max' => 'Shorter please, max 50 characters',
            'password.min' => 'Very short new password. At least 6 characters',
            'password_confirmation.same' => 'Confirmation password is not same new password',
        ];
    }
}
