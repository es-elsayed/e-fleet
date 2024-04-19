<?php

namespace App\Http\Requests\Site;

use App\Services\ContactUsSubject;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ContactUsRequest extends FormRequest
{
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
        $subject = implode(',', ContactUsSubject::ids());
        return [
            'first_name' => 'required|string|min:3|max:155',
            'last_name' => 'required|string|min:3|max:155',
            'email' => 'nullable|email',
            'subject' => "required|in:$subject",
            'phone' => 'required',
            'message' => 'nullable|string',
        ];
    }
}
