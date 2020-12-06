<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseFormRequest extends FormRequest
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
            'courseName' => 'bail|required|max:255',
            'courseDescription' => 'bail|required',
            'startDate' => 'bail|required|date:m/d/Y',
            'weeks' => 'bail|required|integer|min:1',
        ];
    }
}