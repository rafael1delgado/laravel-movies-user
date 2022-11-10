<?php

namespace App\Http\Requests\Movie;

use Illuminate\Foundation\Http\FormRequest;

class MovieUpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'          => 'required|string|min:1|max:255',
            'genre'         => 'required|string|min:1|max:255',
            'release_year'  => 'required|integer|min:1900|max:2050',
            'remake'        => 'required|boolean',
            'country_id'    => 'required|exists:countries,id',
        ];
    }
}
