<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class ReviewsBannerRequest extends FormRequest
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

            'client1'       => ['string', 'required'],
            'job1'          => ['string', 'required'],
            'message1'      => ['string', 'required'],
            'rating1'       => ['integer', 'required'],

            'client2'       => ['string', 'required'],
            'job2'          => ['string', 'required'],
            'message2'      => ['string', 'required'],
            'rating2'       => ['integer', 'required'],

            'client3'       => ['string', 'required'],
            'job3'          => ['string', 'required'],
            'message3'      => ['string', 'required'],
            'rating3'       => ['integer', 'required'],

            'image'         => ['image', 'mimes:png,jpg,jpeg'],
            'background'    => ['string', 'nullable'],
        ];
    }
}
