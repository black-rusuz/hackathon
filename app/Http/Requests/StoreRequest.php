<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'time' => 'required',
            'levelup_id' => 'required|string',
            'topic_id' => 'required|string',
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
