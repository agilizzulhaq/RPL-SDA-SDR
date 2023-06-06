<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateStudentsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtemail' => [
                'required',
                Rule::unique('mahasiswa_alyzar', 'email')->ignore($this->txtid, 'idstudents'),
                'email'
            ],
            'txtnik' => [
                'required',
                Rule::unique('mahasiswa_alyzar', 'nik')->ignore($this->txtid, 'idstudents'),
                'nik'
            ],
            'txtaddress' => 'required',
            'txtphone' => 'required|numeric',
            'txtprodi' => 'required',
            'txtnik' => 'required|numeric'
        ];
    }
}
