<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
        $test_id = 'required';
        $admin_id = request('tests.id');
        if (!is_null($admin_id)) {
            $test_id .= ",{$admin_id}";
        }

        return [
            'id'    => $test_id,
            'title' => 'required|string',
            'time' => 'required',
            'levelup_id' => 'required|string',
            'topic_id' => 'required|string',
        ];
    }


}
