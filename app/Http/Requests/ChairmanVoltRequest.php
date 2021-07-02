<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChairmanVoltRequest extends FormRequest
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
            'user_id'=>'unique:volt_chairmen',
            'name'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'user_id.unique'=>'Already Voted For Chairmanship Position',
            'name.required' => 'Chairmanship Position Is Required',
        ];
    }
}
