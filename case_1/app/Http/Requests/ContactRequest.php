<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function prepareForValidation()
    {
        if ($this->email_domain && $this->email_tld){
            $this->merge([
                'email'=>$this->email_domain . '@' . $this->email_tld,
                ]);
            }

        if($this->tel1 && $this->tel2 && $this->tel3){
            $this->merge([
                'tel'=>$this->tel1 . $this->tel2 . $this->tel3,
                ]);
            }    
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {  
        return [
            'name' => 'required|string|max:50',
            'email' =>'required|email|max:255',
            'tel'=>'required|digits_between:10,11',
            'content_id' => 'nullable|array',
            'content_id.*' => 'exists:contents,id',

            // その他の内容
            'other_content' => [
                'nullable',
                'string',
                Rule::requiredIf(function () {
                    return request('other_content_check')==1;
                }),
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'お名前を入力してください',
            'name.string' =>'お名前を文字で入力してください',
            'name.max'=> 'お名前を50文字以内で入力してください',
            'email.required'=>'メールアドレスを入力してください',
            'email.email' =>'メールアドレスはメール形式で入力してください',
            'email.max' =>'メールアドレスは255文字以内で入力してください',
            'tel.required' =>'電話番号を入力してください',
            'tel.digits_between' => '10桁または11桁になるように入力してください' ,
            'content_id.array' => 'お問い合わせ内容の形式が正しくありません',
            'content_id.*.exists' => '選択されたお問い合わせ内容は存在しません',
            'other_content.string' => 'その他を選択された場合は詳細をご記入ください',
            'other_content.required' => '「その他」を選択された場合は、内容をご記入ください',
        ];
    }

}
