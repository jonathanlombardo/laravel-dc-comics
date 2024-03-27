<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicStoreRequest extends FormRequest
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
      "title" => 'required|string|max:255',
      "description" => 'nullable|string',
      "thumb" => 'nullable|url',
      "price" => 'required|decimal:2|max:999999.99',
      "series" => 'required|string|max:255',
      "sale_date" => 'required|date',
      "type" => 'required|string|max:255',
    ];
  }

  /**
   * Get the error messages for the defined validation rules.
   *
   * @return array
   */
  public function messages()
  {
    return [
      //
    ];
  }
}
