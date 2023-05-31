<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:150',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required|max:30',
            'series' => 'required|max:70',
            'sale_date' => 'required|date',
            'type' => 'required|max:70',
            'artists' => 'required',
            'writers' => 'required'
        ];
    }
}
