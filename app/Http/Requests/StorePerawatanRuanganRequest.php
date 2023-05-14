<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePerawatanRuanganRequest extends FormRequest
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
            'txtkode' => 'required|numeric|unique:perawatan_ruangans,kodeRuangan',
            'txtnama' => 'required',
            'txtlokasi' => 'required',
            'txtkondisi' => 'required',
            'txtstatusp' => 'required',
            'txthistory' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'txtkode.required' => 'Oops, :attribute tidak boleh kosong',
            'txtkode.numeric' => 'Oops, :attribute tidak valid',
            'txtkode.unique' => 'Oops, :attribute sudah ada',
            // 'txtkode.min' => 'Oops, :attribute kurang 7 karakter',
            // 'txtkode.max' => 'Oops, :attribute lebih 7 karakter',
            'txtnama.required' => 'Oops, :attribute  tidak boleh kosong',
            'txtlokasi.required' => 'Oops, :attribute  tidak boleh kosong',
            'txtkondisi.required' => 'Pilih salah satu',
            'txthistory.required' => 'Oops, :attribute tidak boleh kosong',
            'txtstatusp.required' => 'Oops, :attribute tidak boleh kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtkode' => 'Kode Ruangan',
            'txtnama' => 'Nama Ruangan',
            'txtlokasi' => 'lokasi',
            'txtkondisi' => 'Kondisi Ruangan',
            'txtstatusp' => 'Status Perawatan',
            'txthistory' => 'Tanggal Terakhir Dirawat',
        ];
    }
}
