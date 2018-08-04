<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\pengajar;

class UpdatepengajarRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'agama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_handphone' => 'numeric|unique:pengajars,no_handphone,'.$this->pengajar,
            'email' => 'email|unique:pengajars,email,'.$this->pengajar,
            'bidang_keahlian' => 'required'
        ];
    }
}
