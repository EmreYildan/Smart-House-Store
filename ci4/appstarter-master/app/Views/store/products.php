<?= \view('layout/header', ['pageTitle' => $pageTitle]) ?>
<main class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Urunler (CI4)</h1>
      <p>Listeleme ekrani CI4 yapisina tasindi. Sonraki fazda model ile DB'den dolacak.</p>
    </div>
    <div class="product-grid">
      <article class="product-card"><div class="thumb">Cam Pro</div><h3>360 Guvenlik Kamerasi</h3><p class="price">2.399 TL</p><a class="btn btn-primary" href="<?= \site_url('product-detail') ?>">Detay</a></article>
      <article class="product-card"><div class="thumb">Door Lock</div><h3>Akilli Kapi Kilidi</h3><p class="price">3.250 TL</p><a class="btn btn-primary" href="<?= \site_url('product-detail') ?>">Detay</a></article>
      <article class="product-card"><div class="thumb">Glow Mini</div><h3>LED Ampul Seti</h3><p class="price">899 TL</p><a class="btn btn-primary" href="<?= \site_url('product-detail') ?>">Detay</a></article>
      <article class="product-card"><div class="thumb">Thermo X</div><h3>Akilli Termostat</h3><p class="price">1.790 TL</p><a class="btn btn-primary" href="<?= \site_url('product-detail') ?>">Detay</a></article>
    </div>
  </div>
</main>
<?= \view('layout/footer') ?>

