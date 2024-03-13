<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class AboutBannerRequest extends FormRequest
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
            'subTitle'      => ['string', 'nullable'],
            'title'         => ['string', 'required'],
            'description'       => ['string','nullable'],

            'text1'         => ['string', 'nullable'],
            'text2'         => ['string', 'nullable'],
            'text3'         => ['string', 'nullable'],

            'image1'        => ['image', 'mimes:png,jpg,jpeg'],
            'image2'        => ['image', 'mimes:png,jpg,jpeg'],

            'button_text'   => ['string', 'required'],
            'button_link'   => ['string', 'required'],
            'background'    => ['string', 'nullable'],
        ];
    }
}
