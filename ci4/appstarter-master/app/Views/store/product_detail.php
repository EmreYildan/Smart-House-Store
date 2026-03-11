<?= \view('layout/header', ['pageTitle' => $pageTitle]) ?>
<main class="section">
  <div class="container reveal">
    <div class="detail-layout">
      <div class="detail-gallery">
        <div class="detail-image">Nexa Cam Pro</div>
      </div>
      <div class="detail-info">
        <span class="eyebrow">Guvenlik Serisi</span>
        <h1>360 Derece Akilli Guvenlik Kamerasi</h1>
        <p class="price">2.399 TL</p>
        <p>Detay sayfasi CI4'e tasindi. Sepete ekle aksiyonu sonraki fazda gerÃ§eklestirilecek.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="<?= \site_url('cart') ?>">Sepete Ekle</a>
          <a class="btn btn-secondary" href="<?= \site_url('products') ?>">Urunlere Don</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?= \view('layout/footer') ?>

