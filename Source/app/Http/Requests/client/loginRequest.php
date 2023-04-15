<?php

namespace App\Http\Requests\client;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email'=>'required',
            'password'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Bạn chưa nhập tên đăng nhập hoặc email',
            'password.required'=>'Bạn chưa nhập mật khẩu'
        ];
    }
}
