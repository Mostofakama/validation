<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return [
           'name' => 'required|string',
           'email' => 'required|email',
           'password' => 'required|alpha_num',
           'city' => 'required|string',
           'age' => 'required|numeric',
        ];

        
    }
    public function messages(){
        return [
            'name.required' => 'Your Name is required!',
            'name.string' => 'Your Name must be string!',
            'email.required' => 'Your email is required!',
            'name.email' => 'Your email is not valid!',
            'password.required' => 'Your password is required!', 
            'password.alpha_num' => 'Your password must be alpha_num!',  
            'city.required' => 'Your city is required!',  
            'city.string' => 'Your city must be string!',  
            'age.required' => 'Your age is required!',       
            'age.numeric' => 'Your age must be numeric!',
        ];
    }
}
