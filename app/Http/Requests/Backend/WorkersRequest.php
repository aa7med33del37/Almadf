<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class WorkersRequest extends FormRequest
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
            'name'              => ['required', 'string'],
            'age'               => ['required', 'numeric'],
            'job'               => ['required', 'string'],
            'country'           => ['required', 'string'],
            'religion'          => ['required', 'string'],
            'experience'        => ['required', 'numeric'],
            'description'       => ['required', 'string'],
            'long_description'  => ['nullable', 'string'],
            'rating'            => ['required', 'numeric'],
            'cv'                => ['nullable', 'file'],
            'image'             => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
        ];
    }
}
