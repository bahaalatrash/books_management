<?php

namespace App\Http\Requests;

use App\FormatEnum;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBookRequest extends FormRequest
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
            'title' => ['required','string','max:255'],
            'author' => ['required','string','max:255'],
            'publication_year' => ['required','integer','min:1900','max:2100'],
            'is_available' => ['nullable','boolean'],
            'color'=>['nullable','string'],
            'format'=>['nullable',Rule::enum(FormatEnum::class)],
            'categories' => ['nullable','array'],
            'categories.*' => ['integer','exists:categories,id'],
        ];
    }
}
