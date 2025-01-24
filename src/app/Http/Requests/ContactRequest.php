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
            'category_id' => 'required|exists:categories,id',
            'first-name' => 'required',
            'last-name' =>'required',
            'gender' => 'required',
            'email' => 'required|email',
            'phone-1' => 'required|digits_between:1,5',
            'phone-2' => 'required|digits_between:1,5',
            'phone-3' => 'required|digits_between:1,5',
            'address' => 'required',
            'detail' => 'required',
            'content' => 'required|max:120'
        ];
    }

    public function messages()
    {
        return [
            'last-name.required' => '姓を入力してください',
            'first-name.required' => '名を入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'tel.required' => '電話番号を入力してください',
            'address.required' => '住所を入力してください',
            'detail.required' => 'お問い合わせの種類を選択してください',
            'content.required' => 'お問い合わせ内容を入力してください',
            'email.email' => 'メールアドレスはメール形式で入力してください',
            'phone-1.digits_between:1,5' => '電話番号は5桁までの数字で入力してください',
            'phone-2.digits_between:1,5' => '電話番号は5桁までの数字で入力してください',
            'phone-3.digits_between:1,5' => '電話番号は5桁までの数字で入力してください',
            'content.max' => 'お問合せ内容は120文字以内で入力してください',
        ];
    }
}
