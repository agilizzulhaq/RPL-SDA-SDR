<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePerawatanRuanganRequest extends FormRequest
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
            'txtnama' => 'Nama Ruangan',
            'txtlokasi' => 'lokasi Ruangan',
            'txtkondisi' => 'Kondisi Ruangan',
            'txtstatus' => 'Status',
            'txtstatusp' => 'Status Perawatan',
            'txthistory' => 'Tanggal Terakhir Dirawat',
        ];
    }
}
