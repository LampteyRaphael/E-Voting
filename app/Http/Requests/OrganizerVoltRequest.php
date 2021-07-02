<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganizerVoltRequest extends FormRequest
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
            //
            'name'=>'required',
            'user_id'=>'unique:volt_organisers'

        ];
    }

    public function messages()
    {
        return [

            'name.required'=>'Organizer Position Is Required',
            'user_id.unique'=>'Already Voted For Organizer Position'
        ];
    }
}
