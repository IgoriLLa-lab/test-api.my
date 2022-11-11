<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreNotebookRequest extends FormRequest
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
            'full_name' => ['required'],
            'company_name' => ['required'],
            'telephone_number' => ['required'],
            'email' => ['required', 'email'],
            'date_of_birth' => ['required'],
            'photo' => ['required']
        ];
    }
}
