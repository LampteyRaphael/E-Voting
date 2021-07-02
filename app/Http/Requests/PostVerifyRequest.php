<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostVerifyRequest extends FormRequest
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
            'verify_code'=>'required',
            'user_id'=>'required|unique:post_verifies'
        ];
    }
}
