<?php
    namespace App\Http\Requests;
    use Illuminate\Foundation\Http\FormRequest;

    class StoreCategoriaRequest extends FormRequest{
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
        public function rules(): array
        {
            return [
                'title' => 'required|string|max:500',
                'slug' => 'required|string|max:500'
            ];
        }

        public function messages(): array{
            return [
                'title.required' => 'El title es requerido',
                'title.string' => 'El title debe ser una cadena String',
                'slug.required' => 'El slug es requerido',
                'slug.string' => 'El slug debe ser una cadena String',
            ];
        }
    }
?>
