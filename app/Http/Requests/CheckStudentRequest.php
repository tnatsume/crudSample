<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckStudentRequest extends FormRequest
{

    public function authorize()
    {
        echo("aaa");
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required',
            'email'    => 'required|email|unique:students',
            'tel'     => 'required|numeric',
        ];
    }

    public function message(){
        return [
            'required' => '必須項目です。',
            'email'    => 'エールアドレスの形式で入力してください。',
            'numeric'  => '数値で入力してください。',
        ];
    }
}