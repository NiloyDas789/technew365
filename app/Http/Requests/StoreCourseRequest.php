<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
            'title' => 'required|string',
            'course_category_id' => 'required|integer',
            'description' => 'required|string',
            'total_class' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:1024',
        ];
    }
}
