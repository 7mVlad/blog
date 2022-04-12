<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'content' => 'required|string',
            'main-image' => 'required|string',
            'image-1' => 'nullable|string',
            'image-2' => 'nullable|string',
            'image-3' => 'nullable|string',
            'image-4' => 'nullable|string',
            'image-5' => 'nullable|string',

        ];
    }
}
