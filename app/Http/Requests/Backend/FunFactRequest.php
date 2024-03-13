<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class FunFactRequest extends FormRequest
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
            'years'           => ['integer', 'required'],
            'years_desc'      => ['string', 'required'],
            'clients'         => ['integer', 'required'],
            'clients_desc'    => ['string', 'required'],
            'projects'        => ['integer', 'required'],
            'projects_desc'   => ['string', 'required'],
        ];
    }
}
