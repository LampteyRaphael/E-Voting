<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinancialVoltRequest extends FormRequest
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
            'user_id'=>'unique:volt_finances',
            'name'=>'required'
        ];
    }

    public function messages()
    {
        return [
          'name.required'=>'Financial Secretary Position Is Required',
            'user_id.unique'=>'Already Voted For Financial Secretary Position',
        ];
    }
}
