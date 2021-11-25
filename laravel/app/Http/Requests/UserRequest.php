<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            //
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|exists:users',
            'password' => 'required',
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => '名前は必須です。',
            'name.max' => '名前は50字以下にしてください。',
            'email.required' => 'メールアドレスは必須です。',
            'email.unique' => '入力したメールアドレスは既に使われています。',
            'email.exists' => '入力したメールアドレスが見つかりません。',
            'password.required' => 'パスワードは必須です。',
        ];
    }
}
