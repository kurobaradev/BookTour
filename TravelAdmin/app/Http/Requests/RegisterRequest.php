<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            // 'address' => 'required|string|max:255',
            // 'phone' => 'required|Numeric|min:10',
            'password' => 'required|string|min:8|confirmed',

        ];
    }
    
    public function messages()
    {
        return [
            'name.required'=>'Tên không được để trống',
            'name.string'=>'Tên phải là dạng chữ',
            'name.max'=>' không được quá 255 kí tự',
            'email.required'=>'email không được để trống',
            'email.string'=>'email phải là dạng chữ',
            'email.max'=>'email không được quá 255 kí tự',
            'email.email'=>'Không đúng định dạng gmail',
            'password.required'=>'Nội dung không được để trống',
            'password.string'=>'Mật khẩu phải là dạng chữ',
            'password.min'=>'Mật khẩu không được dưới 8 kí tự',
            'password.confirmed'=>'Xác thực mật khẩu không chính xác',
        ];
    }
}
