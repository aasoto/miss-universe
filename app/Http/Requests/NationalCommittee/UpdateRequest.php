<?php

namespace App\Http\Requests\NationalCommittee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'business_name' => 'required|max:200|regex:/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/i',
            'national_director' => 'required|string|max:200',
            'country_id' => 'required|integer'
        ];
    }
}
