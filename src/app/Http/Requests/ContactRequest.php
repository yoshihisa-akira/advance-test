<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'lastName' => ['required', 'string', 'max:255'],
            'firstName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'postcode' => ['required', 'between:8,8'],
            'address' => ['required'],
            'opinion' => ['required', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'lastName.required' => '苗字を入力してください',
            'lastName.string' => '苗字を文字列で入力してください',
            'lastName.max' => '苗字を255文字以下で入力してください',
            'firstName.required' => '名前を入力してください',
            'firstName.string' => '名前を文字列で入力してください',
            'firstName.max' => '名前を255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'postcode.required' => '郵便番号を入力してください',
            'postcode.between:8,8' => '郵便番号を8文字で入力してください',
            'address.required' => '住所を入力してください',
            'opinion.required' => 'ご意見を入力してください',
            'opinion.max' => 'ご意見を120文字以内で入力してください',
        ];
    }

    public function prepareForValidation()
    {
        mb_convert_kana('post',"an");
    }
}
