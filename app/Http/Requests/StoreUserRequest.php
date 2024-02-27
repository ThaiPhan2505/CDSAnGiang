<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'email' => 'required|string|email|unique:users|max:255',
            'vaitro' => 'required|integer|gt:0',
            'password' => 'required|string|min:6',
            're-password' => 'required|string|same:password', 
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => 'Bạn chưa nhập email',
            'name.string' => 'Họ tên phải thuộc dạng kí tự',
            'name.required' => 'Bạn chưa nhập họ tên',
            'password.required' => 'Bạn chưa nhập password',
            'password.min' => 'Password phải ít nhất 6 kí tự',
            'email.email' => 'Email chưa đúng định dạng, Ví dụ: abc@gmail.com',
            'email.unique' => 'Email đã tồn tại, Nhập email khác',
            'email.string' => 'Email phải thuộc dạng kí tự',
            'email.max' => 'Độ dài email tối đa là 255 kí tự',
            'vaitro.gt' => 'Bạn chưa chọn vai trò',
            're-password.required' => 'Bạn chưa nhập vào ô nhập lại mật khẩu',
            're-password.same' => 'Mật khẩu nhập lại không khớp'
        ];
    }
}
