<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Xác định xem người dùng có được phép thực hiện yêu cầu này hay không.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Lấy các quy tắc xác thực áp dụng cho yêu cầu.
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255|string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string',
        ];
    }

    /**
     * Lấy thông báo lỗi cho các quy tắc xác thực được định nghĩa.
     */
    public function messages()
    {
        return [
            'name.string' => 'Vui lòng điền tên cho đúng.',
            'age.numeric' => 'Vui lòng nhập tuổi cho đúng.',
            'date.string' => 'Vui lòng điền lại ngày tháng.',
            'phone.numeric' => 'Vui lòng kiểm tra lại số điện thoại.',
            'web.string' => 'Vui lòng nhập kiểm tra lại kí tự.',
            'address.string' => 'Vui lòng nhập lại địa chỉ.',
        ];
    }
}
