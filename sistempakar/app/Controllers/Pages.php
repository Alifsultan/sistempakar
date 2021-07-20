<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about()
    {
        return view('pages/about');
    }
    public function data_uji()
    {
        return view('pages/data_uji');
    }
    public function gangguan()
    {
        $data = [
            'title' => 'Kesehatan Mental'
        ];
        echo view('layout/footerchild');
        echo view('pages/gangguan');
        echo view('layout/footer');
    }
    public function tips()
    {
        $data = [
            'title' => 'Tips Kesehatan'
        ];
        echo view('layout/footerchild');
        echo view('pages/tips');
        echo view('layout/footer');
    }
    public function contact()
    {
        $data = [
            'title' => 'Kontak Kami'
        ];
        echo view('layout/footerchild');
        echo view('pages/contact');
        echo view('layout/footer');
    }
    public function sign()
    {
        return view('auth/login');
    }
    public function register()
    {
        return view('auth/register');
    }

    public function admin()
    {
        return view('admin/index');
    }
}
