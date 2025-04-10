<?php

namespace App\Http\Requests\Court;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @OA\Schema(
 *     schema="UpdateCourtRequest",
 *     title="Запрос на обновление суда",
 *     @OA\Property(property="name", type="string", example="Обновленный суд"),
 *     @OA\Property(property="address", type="string", example="Обновленный адрес"),
 *     @OA\Property(property="region_id", type="string", example="2"),
 *     @OA\Property(property="cass_region", type="string", example="Обновленный кассационный округ"),
 *     @OA\Property(property="general_type_id", type="string", example="3"),
 *     @OA\Property(property="phone", type="string", example="+7 495 000-00-00"),
 *     @OA\Property(property="email", type="string", example="updated@court.ru"),
 *     @OA\Property(property="site", type="string", example="http://updated-court.ru")
 * )
 */
class UpdateRequest extends FormRequest
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
            'region_id' => $this::REQUIRED_STRING,
            'cass_region' => $this::REQUIRED_STRING,
            'general_type_id' => $this::REQUIRED_STRING,
            'phone' => 'required',
            'email' => 'required|email',
            'site' => 'required|url',
        ];
    }
}
