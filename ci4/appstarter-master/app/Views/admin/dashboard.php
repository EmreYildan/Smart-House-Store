<?= \view('layout/header', ['pageTitle' => $pageTitle]) ?>
<main class="section"><div class="container reveal"><div class="section-heading"><h1>Admin Dashboard (CI4)</h1></div><div class="category-grid"><article class="category-card"><h3>Urunler</h3><a class="btn btn-primary" href="<?= \site_url('admin/products') ?>">Ac</a></article><article class="category-card"><h3>Siparisler</h3><a class="btn btn-primary" href="<?= \site_url('admin/orders') ?>">Ac</a></article><article class="category-card"><h3>Kullanicilar</h3><a class="btn btn-primary" href="<?= \site_url('admin/users') ?>">Ac</a></article></div></div></main>
<?= \view('layout/footer') ?>

