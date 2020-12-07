<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnrollmentFormRequest extends FormRequest
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
            'studentsToEnroll' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'studentsToEnroll.required' => 'You must select at least one student to enroll to the course.',
        ];
    }
}