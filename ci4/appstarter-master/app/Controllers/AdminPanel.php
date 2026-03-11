<?php

namespace App\Controllers;

class AdminPanel extends BaseController
{
    public function dashboard(): string
    {
        return \view('admin/dashboard', ['pageTitle' => 'NexaHome | CI4 Admin']);
    }

    public function products(): string
    {
        return \view('admin/products', ['pageTitle' => 'NexaHome | CI4 Admin Urunler']);
    }

    public function orders(): string
    {
        return \view('admin/orders', ['pageTitle' => 'NexaHome | CI4 Admin Siparisler']);
    }

    public function users(): string
    {
        return \view('admin/users', ['pageTitle' => 'NexaHome | CI4 Admin Kullanicilar']);
    }
}

