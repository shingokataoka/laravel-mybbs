<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:3',
            'body' => 'required|min:3',
        ];
    }

    public function messages()
    {
        return [
            'title.min' => 'タイトルは:min文字以上入力してください。',
            'title.required' => 'タイトルは入力必須です',
            'body.min' => '本文は:min文字以上入力してください。',
            'body.required' => '本文は入力必須です',
        ];
    }
}
