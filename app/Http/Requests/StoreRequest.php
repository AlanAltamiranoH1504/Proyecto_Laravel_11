<?php
    namespace App\Http\Requests;
    use Illuminate\Foundation\Http\FormRequest;

    class StoreRequest extends FormRequest{
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
            //Definimos las reglas que tendra la clase
            return [
                'title' => 'required|string|max:500',
                'slug' => 'required|string|max:500|unique:posts',
                'description' => 'required|string',
                'content' => 'required|string',
                'image' => 'string',
                'posted' => 'string',
                'categoria_id' => 'required|string'
            ];
        }

        public function messages(): array{
            return [
                'title.required' => 'El title es requerido',
                'slug.required' => 'El slug es requerido',
                'slug.unique' => 'El slug ya existe',
                'description.required' => 'La description es requerida',
                'content.required' => 'El content es requerido',
                'image.string' => 'La longitud de imagen debe ser de 7 minimo',
                'posted.string' => 'La longitud de posted debe ser de 7 minimo',
                'categoria_id.required' => 'La categoria es requerida'
            ];
        }
    }
?>
