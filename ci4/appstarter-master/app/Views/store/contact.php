<?= \view('layout/header', ['pageTitle' => $pageTitle]) ?>
<main class="section"><div class="container reveal"><div class="section-heading"><h1>Iletisim (CI4)</h1></div><form class="panel form-grid"><label>Ad Soyad<input type="text"></label><label>E-posta<input type="email"></label><label class="full">Mesaj<textarea rows="4"></textarea></label><button class="btn btn-primary" type="button">Gonder</button></form></div></main>
<?= \view('layout/footer') ?>

