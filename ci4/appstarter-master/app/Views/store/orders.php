<?= \view('layout/header', ['pageTitle' => $pageTitle]) ?>
<main class="section"><div class="container reveal"><div class="section-heading"><h1>Siparislerim (CI4)</h1></div><div class="panel"><table class="app-table"><thead><tr><th>No</th><th>Durum</th><th>Islem</th></tr></thead><tbody><tr><td>#1042</td><td><span class="status-chip">Admin Onayi Bekliyor</span></td><td><a class="btn btn-light btn-sm" href="<?= \site_url('order-track') ?>">Takip</a></td></tr></tbody></table></div></div></main>
<?= \view('layout/footer') ?>

