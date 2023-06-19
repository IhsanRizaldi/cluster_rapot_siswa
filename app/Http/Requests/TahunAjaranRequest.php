<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TahunAjaranRequest extends FormRequest
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
            'nama_tahun_ajaran' => 'required||string',
            'kode_tahun_ajaran' => 'required||unique:tahun_ajaran,kode_tahun_ajaran||string',
            'is_active' => 'required||boolean',
        ];
    }
}
