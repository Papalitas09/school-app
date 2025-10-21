<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest; 
use Illuminate\Validation\Rule;

class UpdateStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
          $studentId = $this->route('student')->id; 
 
        return [ 
            'nis' => ['sometimes', 'required', Rule::unique('students')->ignore($studentId)], 
            'nama' => 'sometimes|required|string|max:255', 
            'email' => ['sometimes', 'required', 'email', Rule::unique('students')->ignore($studentId)], 
            'school_class_id' => 'sometimes|required|exists:school_classes,id', 
            'gender' => 'sometimes|required', 
            'alamat' => 'sometimes|required', 
            'tanggal_lahir' => 'sometimes|required|date', 
        ];
    }
}
