<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
    public function messages(){
        return[
            'title.required' => "Il campo titolo è obbligatorio",
            'title.max' => "Il campo titolo non può essere più lungo di 150 caratteri",
            'description.required' => "Il campo descrizione è obbligatorio",
            'thumb.required' => "Il campo immagine è obbligatorio",
            'thumb.url' => "Il campo immagine deve essere una url",
            'price.required' => "Il campo prezzo è obbligatorio",
            'price.max' => "Il campo prezzo non può essere più lungo di 30 caratteri",
            'series.required' => "Il campo serie è obbligatorio",
            'series.max' => "Il campo serie non può essere più lungo di 70 caratteri",
            'sale_date.required' => "Il campo data di uscita è obbligatorio",
            'sale_date.date' => "Il campo data di uscite deve essere una data",
            'type.required' => "Il campo genere è obbligatorio",
            'type.max' => "Il campo genere non può essere più lungo di 70 caratteri",
            'artists.required' => "Il campo artisti è obbligatorio",
            'writers.required' => "Il campo scrittori è obbligatorio",
        ];
    }
}
