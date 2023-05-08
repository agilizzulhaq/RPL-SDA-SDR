<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePenjadwalanRuanganRequest extends FormRequest
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
            'txtkode' => 'required|numeric',
            // |unique:pemeliharaans',
            'txtnama' => 'required',
            'txtjenis' => 'required',
            'txtlokasi' => 'required',
            'txtkapasitas' => 'required',
            'txtstatus' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'txtkode.required' => 'Oops, :attribute tidak boleh kosong',
            'txtkode.numeric' => 'Oops, kode tidak valid',
            //'txtkode.unique' => 'Oops, kode sudah ada',
            // 'txtkode.min' => 'Oops, kode tidak valid',
            // 'txtkode.max' => 'Oops, kode tidak valid',
            'txtnama.required' => 'Oops, :attribute  tidak boleh kosong',
            'txtjenis.required' => 'Oops, :attribute tidak boleh kosong',
            'txtlokasi.required' => 'Oops, :attribute  tidak boleh kosong',
            'txtkapasitas.required' => 'Oops, :attribute tidak boleh kosong',
            'txtstatus.required' => 'Oops, :attribute tidak boleh kosong',

        ];
    }
    public function attributes(): array
    {
        return [
            'txtkode' => 'Kode Alat',
            'txtnama' => 'Nama Alat',
            'txtjenis' => 'Jenis Ruangan',
            'txtlokasi' => 'lokasi',
            'txtkapasitas' => 'Kapasitas Ruangan',
            'txtstatus' => 'Status',

        ];
    }
}
