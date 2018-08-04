<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\pengangguran;

class UpdatepengangguranRequest extends FormRequest
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
        'kode' => 'required|unique:penganggurans,kode,' . $this->pengangguran ,
        'nama_lengkap' => 'required',
        'agama' => 'required',
        'jenis_kelamin' => 'required',
        'alamat' => 'required',
        'pendidikan_terakhir' => 'required',
        'peminatan' => 'required',
        'lama_menganggur' => 'required',
        'jumlah_orang_tanggungan' => 'numeric',
        'status' => 'required',
        'user_id' => 'required'
      ];
    }
}
