<?php

namespace App\Http\Requests\Court;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    private const REQUIRED_STRING = "required|string";
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
            'name' => $this::REQUIRED_STRING,
            'address' => $this::REQUIRED_STRING,
            'region_id' => 'string',
            'cass_region' => $this::REQUIRED_STRING,
            'general_type_id' => $this::REQUIRED_STRING,
            'phone' => 'required',
            'email' => 'required|email',
            'site' => 'required|url',
        ];
    }
}
