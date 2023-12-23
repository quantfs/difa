<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
{
    public function rules(): array
    {
        return [
//            'file' => 'required|files'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
