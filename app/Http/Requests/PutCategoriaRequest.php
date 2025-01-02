<?php
    namespace App\Http\Requests;
    use Illuminate\Foundation\Http\FormRequest;

    class PutCategoriaRequest extends FormRequest{
        /**
         * Determine if the user is authorized to make this request.
         */
        public function authorize(): bool{
            return true;
        }

        /**
         * Get the validation rules that apply to the request.
         *
         * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
         */
        public function rules(): array{
            return [
                'title' => 'required|string|max:500',
                'slug' => 'required|string|max:500',
            ];
        }

        public function messages(): array{
            return [
                'title.required' => 'El nombre del categoria es requerido',
                'title.string' => 'El nombre del categoria debe ser una cadena String',
                'slug.required' => "El slug de la categoria es requerido",
                'slug.string' => 'El slug del categoria debe ser una cadena String',
            ];
        }
    }
?>
