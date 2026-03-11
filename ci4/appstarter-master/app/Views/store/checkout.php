<?= \view('layout/header', ['pageTitle' => $pageTitle]) ?>
<main class="section"><div class="container reveal"><div class="section-heading"><h1>Odeme (CI4)</h1></div><form class="panel form-grid" action="<?= \site_url('order-success') ?>" method="get"><label>Ad Soyad<input type="text" required></label><label>Telefon<input type="tel" required></label><label class="full">Adres<textarea rows="3" required></textarea></label><button class="btn btn-primary full" type="submit">Siparisi Tamamla</button></form></div></main>
<?= \view('layout/footer') ?>

