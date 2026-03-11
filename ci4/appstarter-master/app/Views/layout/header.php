<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($pageTitle ?? 'NexaHome CI4') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
</head>
<body>
  <div class="bg-orb orb-1"></div>
  <div class="bg-orb orb-2"></div>

  <header class="header">
    <div class="container header-container">
      <a class="logo" href="<?= \site_url('/') ?>">NexaHome CI4</a>
      <button class="menu-toggle" type="button" aria-label="Menuyu ac" aria-expanded="false" data-menu-toggle>
        <span></span><span></span><span></span>
      </button>
      <nav class="navbar" data-main-nav>
        <a href="<?= \site_url('/') ?>">Ana Sayfa</a>
        <a href="<?= \site_url('products') ?>">Urunler</a>
        <a href="<?= \site_url('orders') ?>">Siparislerim</a>
        <a href="<?= \site_url('profile') ?>">Profil</a>
        <a href="<?= \site_url('about') ?>">Hakkimizda</a>
        <a href="<?= \site_url('contact') ?>">Iletisim</a>
        <a class="cart-link" href="<?= \site_url('cart') ?>">Sepet <span class="cart-badge">2</span></a>
        <a class="btn btn-outline" href="<?= \site_url('login') ?>">Giris</a>
      </nav>
    </div>
  </header>

