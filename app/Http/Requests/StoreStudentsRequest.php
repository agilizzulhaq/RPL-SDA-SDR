<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentsRequest extends FormRequest
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
            'txtid' => 'required|unique:mahasiswa_alyzar,idstudents|min:10|max:10',
            'txtfullname' => 'required',
            'txtgender' => 'required',
            'txtemail' => 'required|email|unique:mahasiswa_alyzar,email',
            'txtaddress' => 'required',
            'txtphone' => 'required|numeric',
            'txtprodi' => 'required',
            'txtagama' => 'required',
            'txtnik' => 'required|numeric'
        ];
    }
}
