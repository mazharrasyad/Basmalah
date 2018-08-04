<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\belajar;

class UpdatebelajarRequest extends FormRequest
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
            'kode' => 'required|unique:belajars,kode,'.$this->belajar,
            'user_id' => 'required',
            'alamat_tempat_belajar' => 'required',
            'hari' => 'required',
            'pukul' => 'required',
            'status' => 'required'
        ];
    }
}
