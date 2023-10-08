<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'email' => [
                'required',
                'email',
                'max:255'
            ],
            'password' => [
                'required',
                'min:6',
                'max:255',
                'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/'
            ]
        ];
    }
    public function messages(): array
    {
        return [
            'email' => [
                'required' => 'Bạn chưa nhập email',
                'email' => 'Email chưa đúng định dạng. Ví dụ: abc@gmail.com',
                'max' => 'Email không được quá :max ký tự'
            ],
            'password' => [
                'required' => 'Bạn chưa nhập mật khẩu',
                'min' => 'Mật khẩu phải có ít nhất :min ký tự',
                'max' => 'Mật khẩu không được quá :max ký tự',
                'regex' => 'Mật khẩu phải có ít nhất một chữ hoa, một chữ thường, một số, một ký tự đặc biết'
            ],
        ];
    }
}
