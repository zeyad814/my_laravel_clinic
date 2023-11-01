<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;

class bookingRequest extends FormRequest
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
            'name' => ['required','string'],
            'phone' => ['required','string'],
            'email' => ['required','string', 'email'],
            'doctor_id' => ['required'],
        ];
    }
}
