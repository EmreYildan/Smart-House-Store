<?= \view('layout/header', ['pageTitle' => $pageTitle]) ?>
<main class="section"><div class="container reveal"><div class="panel" style="text-align:center;"><h1>Siparisiniz Alindi</h1><p>CI4 akisinda siparis sonrasi ekran aktif.</p><div class="hero-actions" style="justify-content:center;"><a class="btn btn-primary" href="<?= \site_url('orders') ?>">Siparislerim</a><a class="btn btn-secondary" href="<?= \site_url('products') ?>">Alisverise Don</a></div></div></div></main>
<?= \view('layout/footer') ?>

