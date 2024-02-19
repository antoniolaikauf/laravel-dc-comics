<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicFormRequests extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // qua si mette true cosi autorizza tutti i dati 
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // regole che devono seguire i form
        return [
            'nome' => 'required|string|min:3|max:100',
            'prezzo' => 'required|integer|between:5,100',
            'voto' => 'required|integer|between:1,5',
        ];
    }
}
