<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function customer()
    {
        $data = [
            'title' => 'Customers',
        ];

        return view('pages.customer', $data);
    }


    public function aboutUs()
    {
        $data = [
            'title' => 'About Us',
        ];

        return view('pages.about', $data);
    }


    public function legalDocumentation()
    {
        $data = [
            'title' => 'Legal Documentation',
        ];

        return view('pages.legal_documentation', $data);
    }
    public function helpCenter()
    {
        $data = [
            'title' => 'Help Center',
        ];

        return view('pages.help_center', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
        ];

        return view('pages.contact', $data);
    }
}
