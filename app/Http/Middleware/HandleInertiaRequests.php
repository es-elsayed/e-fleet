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
            'about' => [
                'tax_register' => "101044524553",
                'name' => [
                    'en' =>  'E-Fleet Platfrom',
                    'ar' =>   'منصة الأسطول الإلكتروني'
                ],
                'description' => [
                    'en' =>  'E-Fleet platform is the largest car booking platform in Saudi Arabia, as it allows visitors to the Sacred House of God to search and browse for a variety of cars that meet their needs, and allows users to book directly through the platform for luxury and regular cars as well as the mass transit service.',
                    'ar' =>   '  منصة الأسطول الإلكتروني هي أكبر منصة لحجز السيارات في السعودية ، حيث يتيح لزوار بيت الله الحرام إمكانية  البحث والتصفح عن مجموعة متنوعة من السيارات التي تلبي إحتياجاتهم، كما يسمح للمستخدمين إمكانية الحجز المباشر عن طريق المنصة للسيارات الفاخرة والعادية وأيضًا خدمة النقل الجماعي.'
                ],
                'info' => ['en' =>  'company info in english', 'ar' =>   'معلومات الشركة بالعربي'],
                'address' => ['en' =>  'company address in english', 'ar' =>   'عنوان الشركة بالعربي'],
                'phone' => ['en' =>  'company phone in english', 'ar' =>   'هاتف الشركة بالعربي'],
                'tax' => ['en' =>  'company tax in english', 'ar' =>   'السجل الضريبي بالعربي'],
            ],
            'settings' => [
                'car_list' => "grid",
                'follow_us' => [
                    'github' => 'https://github.com/es-elsayed',
                    'linkedin' => 'https://www.linkedin.com/in/e-elsayed/',
                    'x' => 'https://twitter.com/Islam3bdu',
                    'instagram' => 'https://www.instagram.com/islam.3bdu/',
                    'facebook' => 'https://www.facebook.com/Islam.3bdu',
                    'whatsapp' => 'https://api.whatsapp.com/send?phone=+201001074075&text=follow',
                ]
            ],
            'info' => [
                'brands' => [
                    [
                        'id' => "1",
                        'name' => "BMW",
                    ],
                    [
                        'id' => "2",
                        'name' => "Audi",
                    ],
                ],
                'models' => [
                    [
                        'id' => "1",
                        'name' => "2020",
                    ],
                    [
                        'id' => "2",
                        'name' => "2121",
                    ],
                ],
                'min_price' => [
                    [
                        'id' => "0",
                        'name' => "0",
                    ],
                    [
                        'id' => "1000",
                        'name' => "1000",
                    ],
                ],
                'max_price' => [
                    [
                        'id' => "0",
                        'name' => "0",
                    ],
                    [
                        'id' => "1000",
                        'name' => "1000",
                    ],
                ],
            ]
        ];
    }
}
