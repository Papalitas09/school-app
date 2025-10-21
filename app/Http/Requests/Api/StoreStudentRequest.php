<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
        return [
            'nis' => 'required|unique:students,nis', 
            'nama' => 'required|string|max:255', 
            'email' => 'required|email|unique:students,email', 
            'school_class_id' => 'required|exists:school_classes,id', 
            'gender' => 'required', 
            'alamat' => 'required', 
            'tanggal_lahir' => 'required|date', 
        ];
    }
}
