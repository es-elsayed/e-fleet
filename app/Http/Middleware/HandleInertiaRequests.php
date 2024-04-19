<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user(),
            ],
            'flash' => [
                'success' => $request->session()->get('success'),
                'error' => $request->session()->get('error'),
            ],
            'settings' => [
                'company_info' => ['en' =>  'company info in english', 'ar' =>   'معلومات الشركة بالعربي'],
                'company_address' => ['en' =>  'company address in english', 'ar' =>   'عنوان الشركة بالعربي'],
                'company_phone' => ['en' =>  'company phone in english', 'ar' =>   'هاتف الشركة بالعربي'],
                'company_tax' => ['en' =>  'company tax in english', 'ar' =>   'السجل الضريبي بالعربي'],
            ],
        ];
    }
}
