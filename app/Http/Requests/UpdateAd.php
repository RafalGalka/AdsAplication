<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAd extends FormRequest
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
            'name' => ['string', 'required', 'max:100'],
            'description' => ['string', 'nullable', 'max:1000'],
            'price' => ['numeric', 'max:999999', 'min:0', 'regex:/^(?:[1-9]\d+|\d)(?:\.\d\d|\.\d)?$/'],
        ];
    }

    public function messages()
    {
        return [
            'name.require' => 'Wymagany nazwa',
            'name.max' => 'Maksymalna liczba znaków w nazwie to: :max',
            'description.max' => 'Maksymalna liczba znaków w opisie to: :max',
            'price.numeric' => 'Cena nie może być ujemna',
            'price.max' => 'Maksymalna cena to: :max',
            'price.min' => 'Cena nie może być ujemna',
            'price.regex' => 'Cena do 2 miejsc dziesiętnych oddzielonych kropką',
        ];
    }
}
