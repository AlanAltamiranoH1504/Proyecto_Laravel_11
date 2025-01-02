<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

    class PutRequest extends FormRequest{
        /**
         * Determine if the user is authorized to make this request.
         */
        public function authorize(): bool
        {
            return true;
        }

        /**
         * Get the validation rules that apply to the request.
         *
         * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
         */
        public function rules(): array
        {
            return [
                'title' => 'required|string|max:500',
                'slug' => 'required|string|max:500',
                'description' => 'required|string',
                'content' => 'required|string',
                'image' => 'mimes:jpeg,jpg,png',
                'posted' => 'string',
                'categoria_id' => 'required|string'
            ];
        }

        public function messages(): array{
            return [
                'title.required' => 'El titulo es requerido',
                'slug.required' => 'El slug es requerido',
                'description.required' => 'La descripcion es requerida',
                'content.required' => 'La descripcion es requerida',
                'image.mimes' => 'El formato de la imagen no es el correcto',
                'posted.required' => 'El post es requerido',
                'categoria_id.required' => 'La categoria es requerida',
            ];
        }
    }
?>
