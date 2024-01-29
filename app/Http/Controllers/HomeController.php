<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $heroSection = [
            [
                'headTitle' => 'Best Health training Institute',
                'titleDescription' => 'Center of Excellence for Health Professionals',
                'img' => 'img/liheti/maktaba.jpg'
            ],
            [
                'headTitle' => 'Best Health training Institute',
                'titleDescription' => 'High Quality Health Training',
                'img' => 'img/liheti/outside.jpg',
            ]
        ];

        $coreValues = [
            [
                'title' => 'Integrity',
                'description' => 'Uadilifu',
                'icon' => 'shield-alt'
            ],
            [
                'title' => 'Equity and social justice',
                'description' => ' usawa na haki ya kijamii',
                'icon' => 'balance-scale'
            ],
            [
                'title' => 'Accountability',
                'description' => 'Uwajibikaji',
                'icon' => 'balance-scale-left'
            ],
            [
                'title' => 'Transparency',
                'description' => 'Uwazi',
                'icon' => 'eye'
            ],
            [
                'title' => 'Customers service oriented',
                'description' => 'Huduma kwa wateja',
                'icon' => 'headset'
            ],
            [
                'title' => 'Professional ethics',
                'description' => 'Maadili ya kitaalamu',
                'icon' => 'handshake'
            ],
            [
                'title' => 'Teamwork',
                'description' => 'Umoja katika kazi',
                'icon' => 'hands-helping'
            ],
            [
                'title' => 'Quality Service oriented',
                'description' => 'Ubora wa huduma',
                'icon' => 'star'
            ],
        ];
        return view('pages.home.index', compact('heroSection', 'coreValues'));
    }
}
