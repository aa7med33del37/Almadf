<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'website_name'  => ['string', 'nullable'],
            'about'         => ['string', 'nullable'],
            'logo'          => ['image', 'mimes:png,jpg,jpeg','nullable'],
            'favicon'       => ['image', 'mimes:png,jpg,jpeg','nullable'],
            'phone'         => ['string', 'nullable'],
            'whatsapp'      => ['string', 'nullable'],
            'email'         => ['string', 'nullable'],
            'address'       => ['string', 'nullable'],
            'facebook'      => ['string', 'nullable'],
            'x'             => ['string', 'nullable'],
            'instagram'     => ['string', 'nullable'],
            'youtube'       => ['string', 'nullable'],
            'linkedin'      => ['string', 'nullable'],
        ];
    }
}
