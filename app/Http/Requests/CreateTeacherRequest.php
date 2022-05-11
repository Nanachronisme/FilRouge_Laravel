<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeacherRequest extends FormRequest
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
            //fields required for creating a Teacher
            //the max value required are taken from the max database values
            'gender' => ['required'], ['regex:[MFO]{1}'],
            'name' => 'required|string|max:50',
            'firstName' => 'required|string|max:50',
            'nickName' => 'required|string|max:50',
            'origin' => 'nullable',
            'section' => 'required|integer|between:1,3'
            'slug' => 'alpha_dash', 'unique:teachers'
        ];
    }
}
