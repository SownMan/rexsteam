<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'category' => [
                'required', 
                Rule::in(['Idle', 'Strategy', 'Horror', 'Role-Playing', 'Adventure', 'Puzzle', 'Action', 'Simulation', 'Sports'])
            ],
            'release_date' => 'required|date',
            'developer' => 'required',
            'publisher' => 'required',
            'description' => 'required|max:500',
            'long_desc' => 'required|max:2000',
            'price' => 'required',
            'cover' => 'required',
            'trailer' => 'required'
        ];
    }
}
