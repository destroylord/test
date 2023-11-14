<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdentityRequest extends FormRequest
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
            'fullname' => 'required|string',
            'nickname' => 'required|string',
            'gender' => 'required|string',
            'place_of_birth' => 'required|string',
            'date_of_birth' => 'required|date',
            'nationality' => 'required|string',
            'region' => 'required|string',
            'last_education' => 'required|string',
            'major' => 'required|string',
            'school' => 'required|string',
            'value' => 'required',
            'last_address' => 'required|string',
        ];
    }

    public function attributes(): array
    {
        return [
            'fullname' => 'Kolom nama lengkap',
            'nickname' => 'Kolom nama panggilan',
            'gender' => 'Kolom jenis kelamin',
            'place_of_birth' => 'Kolom tempat lahir',
            'date_of_birth' => 'Kolom tanggal lahir',
            'nationality' => 'Kolom kebangsaan/suku',
            'region' => 'Kolom wilayah',
            'last_education' => 'Kolom pendidikan terakhir',
            'major' => 'Kolom jurusan',
            'school' => 'Kolom sekolah',
            'value' => 'Kolom nilai',
            'last_address' => 'Kolom alamat terakhir',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => ':attribute harus diisi.',
        ];
    }
}
