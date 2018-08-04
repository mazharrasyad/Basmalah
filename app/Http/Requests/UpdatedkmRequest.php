<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\dkm;

class UpdatedkmRequest extends FormRequest
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
            'alamat' => 'required',
            'no_handphone' => 'numeric|unique:dkms,no_handphone,'.$this->dkm,
            'email' => 'email|unique:dkms,email,'.$this->dkm,
            'nama_masjid' => 'required',
            'alamat_masjid' => 'required',
            'jabatan_di_masjid' => 'required',
            'no_rekening_masjid' => 'required'
        ];
    }
}
