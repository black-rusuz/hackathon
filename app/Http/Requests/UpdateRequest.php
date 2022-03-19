<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'article' => 'required|string',
            'name' => 'required|string',
            'status' => 'string',
        ];
    }

    public function messages()
    {
        return [
            'article.required' =>'Это поле необходимо заполнить',
            'article.string' =>'Данные должны соответствовать строчному типу',
            'name.required' =>'Это поле необходимо заполнить',
            'name.string' =>'Данные должны соответствовать строчному типу',
            'status.required' =>'Нужно добавить картинку',
            'status.string' =>'Нужно выбрать файл',
        
            ];
    }
}
