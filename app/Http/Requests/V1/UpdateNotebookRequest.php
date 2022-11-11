<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNotebookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => ['sometimes', 'required'],
            'company_name' => ['sometimes', 'required'],
            'telephone_number' => ['sometimes', 'required'],
            'email' => ['sometimes', 'required', 'email'],
            'date_of_birth' => ['sometimes', 'required'],
            'photo' => ['sometimes', 'required']
        ];
    }
}
