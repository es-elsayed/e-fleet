<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\ContactUsRequest;
use App\Models\Message;
use App\Services\ContactUsSubject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Inertia\Inertia;

class ContactUsController extends Controller
{
    public function create(Request $request)
    {
        return Inertia::render(
            'Site/ContactUs',
            [
                'subjectTypes' => ContactUsSubject::types()
            ]
        );
    }

    public function store(ContactUsRequest $request)
    {
        Message::create($request->validated());

        return back()->with('success', 'sended');
    }
}
