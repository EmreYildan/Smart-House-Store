<?php

namespace App\Controllers;

class Store extends BaseController
{
    public function home(): string
    {
        return \view('store/home', ['pageTitle' => 'NexaHome | CI4 Ana Sayfa']);
    }

    public function products(): string
    {
        return \view('store/products', ['pageTitle' => 'NexaHome | CI4 Urunler']);
    }

    public function productDetail(): string
    {
        return \view('store/product_detail', ['pageTitle' => 'NexaHome | CI4 Urun Detay']);
    }

    public function cart(): string
    {
        return \view('store/cart', ['pageTitle' => 'NexaHome | CI4 Sepet']);
    }

    public function checkout(): string
    {
        return \view('store/checkout', ['pageTitle' => 'NexaHome | CI4 Odeme']);
    }

    public function orderSuccess(): string
    {
        return \view('store/order_success', ['pageTitle' => 'NexaHome | CI4 Siparis Basarili']);
    }

    public function orders(): string
    {
        return \view('store/orders', ['pageTitle' => 'NexaHome | CI4 Siparislerim']);
    }

    public function orderTrack(): string
    {
        return \view('store/order_track', ['pageTitle' => 'NexaHome | CI4 Siparis Takip']);
    }

    public function profile(): string
    {
        return \view('store/profile', ['pageTitle' => 'NexaHome | CI4 Profil']);
    }

    public function about(): string
    {
        return \view('store/about', ['pageTitle' => 'NexaHome | CI4 Hakkimizda']);
    }

    public function contact(): string
    {
        return \view('store/contact', ['pageTitle' => 'NexaHome | CI4 Iletisim']);
    }

    public function login(): string
    {
        return \view('store/login', ['pageTitle' => 'NexaHome | CI4 Giris']);
    }

    public function register(): string
    {
        return \view('store/register', ['pageTitle' => 'NexaHome | CI4 Kayit']);
    }
}

