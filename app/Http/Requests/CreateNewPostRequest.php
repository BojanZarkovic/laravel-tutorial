<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateNewPostRequest extends FormRequest
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
            'title' => 'required|string',
            'keywords' => 'sometimes|string',
            'description' => 'sometimes|string',
            'body' => 'required|string',
            'categories' => 'sometimes|array',
            'image' => 'sometimes|image'
        ];
    }
}
