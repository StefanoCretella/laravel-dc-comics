<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|string|max:255|unique:comics,title',
            'series' => 'required|string|max:255',
            'price' => 'required|numeric',
            'sale_date' => 'required|date',
            'thumb' => 'required|url'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.unique' => 'Il titolo deve essere unico.',
            'series.required' => 'La serie è obbligatoria.',
            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero.',
            'sale_date.required' => 'La data di vendita è obbligatoria.',
            'sale_date.date' => 'La data di vendita deve essere una data valida.',
            'thumb.required' => 'L\'URL della miniatura è obbligatorio.',
            'thumb.url' => 'L\'URL della miniatura deve essere un URL valido.'
        ];
    }
}
