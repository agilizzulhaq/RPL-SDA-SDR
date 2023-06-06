<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMahasiswaRequest extends FormRequest
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
            'txtkode' => 'required|numeric|unique:mahasiswas,id',
            'txtnik' => 'required|numeric|unique:mahasiswas,NIK',
            'txtjenis' => 'required',
            'txtprodi' => 'required',
            'txtagama' => 'required',
            'txtnotelp' => 'required|numeric',
            'txtalamat' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'txtkode.required' => 'Oops, :attribute tidak boleh kosong',
            'txtkode.numeric' => 'Oops, :attribute tidak valid',
            'txtkode.unique' => 'Oops, :attribute sudah ada',
            'txtnik.required' => 'Oops, :attribute tidak boleh kosong',
            'txtnik.numeric' => 'Oops, :attribute tidak valid',
            'txtnik.unique' => 'Oops, :attribute sudah ada',
            'txtjenis.required' => 'Oops, :attribute tidak boleh kosong',
            'txtprodi.required' => 'Oops, :attribute tidak boleh kosong',
            'txtagama.required' => 'Oops, :attribute tidak boleh kosong',
            'txtnotelp.numeric' => 'Oops, :attribute harus diisi angka',
            'txtnotelp.required' => 'Oops, :attribute tidak boleh kosong',
            'txtalamat.required' => 'Oops, :attribute tidak boleh kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtkode' => 'ID Mahasiswa',
            'txtnik' => 'Nama Mahasiswa',
            'txtjenis' => 'Jenis Kelamin',
            'txtprodi' => 'Prodi',
            'txtagama' => 'Agama',
            'txtnotelp' => 'No. Telp',
            'txtalamat' => 'Alamat',
        ];
    }
}
