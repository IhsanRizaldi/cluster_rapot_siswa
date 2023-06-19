<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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
            'nisn' => 'required||string||unique:siswa,nisn',
            'nis' => 'required||string||unique:siswa,nis',
            'nama_lengkap' => 'required||string',
            'tempat_lahir' => 'required||string',
            'tanggal_lahir' => 'required||string',
            'alamat' => 'required||string',
        ];
    }
}
