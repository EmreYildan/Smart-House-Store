<?= \view('layout/header', ['pageTitle' => $pageTitle]) ?>
<main class="section">
  <div class="container reveal">
    <div class="section-heading"><h1>Sepetim (CI4)</h1></div>
    <div class="panel">
      <table class="app-table">
        <thead><tr><th>Urun</th><th>Adet</th><th>Birim</th><th>Tutar</th></tr></thead>
        <tbody><tr><td>360 Guvenlik Kamerasi</td><td>1</td><td>2.399 TL</td><td>2.399 TL</td></tr></tbody>
      </table>
      <div class="hero-actions" style="margin-top:16px;"><a class="btn btn-primary" href="<?= \site_url('checkout') ?>">Odeme Adimi</a></div>
    </div>
  </div>
</main>
<?= \view('layout/footer') ?>

