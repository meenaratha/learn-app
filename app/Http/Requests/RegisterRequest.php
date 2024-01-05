<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|unique:roles,name',
            'email' => 'required|email:rfc,dns|unique:roles,email',
            'phone' => 'required|numeric|max:10|unique:rules,phone',
            'position' => 'required|unique:roles,position',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
