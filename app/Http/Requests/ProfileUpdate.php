<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdate extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = auth()->guard('admin')->user()->id;

        return [
            'name' => 'required',
            'email' => 'required|email|unique:admins,email,' . $id,
            'current_password' => 'nullable|required_with:password|required_with:password_confirmation',
            'password' => 'nullable|required_with:current_password|confirmed|min:6',
            'password_confirmation' => 'required_with:current_password',
        ];
    }
}
