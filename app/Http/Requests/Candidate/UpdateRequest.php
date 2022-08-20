<?php

namespace App\Http\Requests\Candidate;

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
        //dd($this->route('candidate'));
        return [
            'country_id' => 'required|integer',
            'first_name' => 'required|max:100|string',
            'second_name' => 'nullable|string|max:100',
            'first_last_name' => 'required|max:100|string',
            'second_last_name' => 'nullable|string|max:100',
            'gender' => 'required',
            'birthdate' => 'required|date',
            'national_committee_id' => 'required|integer',
            'official_picture' => 'image|mimes:jpeg,jpg,png|max:10240',
        ];
    }
}
