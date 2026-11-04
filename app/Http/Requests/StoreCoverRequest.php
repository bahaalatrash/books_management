<?php

namespace App\Http\Requests;

use App\FormatEnum;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCoverRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "book_id"=>['required','integer','exists:books,id'],
            "color"=>['required','string'],
            "format"=>['required',Rule::enum(FormatEnum::class)]
        ];
    }
}
