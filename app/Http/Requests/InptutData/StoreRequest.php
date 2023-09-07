<?php

namespace App\Http\Requests\InptutData;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'op' => 'required|string',
            'city' => 'required|string',
            'company'=> 'required|string',
            'field' => 'required|string',
            'cluster' => 'required|alpha_num',
            'well' => 'required|alpha_num',
            'installation_date_at' => 'required|date',
            'start_date_at' => 'required|date',
            'stop_date_at' => 'required|date',
            'dismantling_date_at' => 'required|date',
            'operating_time' => 'required|integer',
            'stop_reason' => 'required|string',
            'mode' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'op.required' => 'Поле необходимо для заполнения',
            'city.required' => 'Поле необходимо для заполнения',
            'company.required' => 'Поле необходимо для заполнения',
            'field.required' => 'Поле необходимо для заполнения',
            'cluster.required' => 'Поле необходимо для заполнения',
            'well.required' => 'Поле необходимо для заполнения',
            'installation_date_at.required' => 'Поле необходимо для заполнения',
            'start_date_at.required' => 'Поле необходимо для заполнения',
            'stop_date_at.required' => 'Поле необходимо для заполнения',
            'dismantling_date_at.required' => 'Поле необходимо для заполнения',
            'operating_time.required' => 'Поле необходимо для заполнения',
            'stop_reason.required' => 'Поле необходимо для заполнения',
            'mode.required' => 'Поле необходимо для заполнения',
        ];
    }
}
