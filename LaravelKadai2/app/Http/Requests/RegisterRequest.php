<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// ユーザ登録のフォームリクエスト

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
            'username' => 'required',
            'email' => 'email',
            'password' => 'required|min:7|confirmed',
            'password_confirmation' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'username.required' => '名前が入力されていません',
            'email.email' => 'メールアドレスの形式で入力してください',
            'password.required' => 'パスワードが入力されていません',
            'password.min' => '7文字以上入力してください',
            'password.confirmed' => 'パスワードが一致しません',
            'password_confirmation.required' => '入力されていません',
        ];
    }
}
