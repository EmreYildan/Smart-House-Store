<?php
$pageTitle = 'NexaHome | Urunler';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Akilli Ev Urunleri</h1>
      <p>Kategori ve kullanim senaryosuna gore urun secimi yapin.</p>
    </div>

    <div class="chips">
      <button class="chip active" type="button">Tum Urunler</button>
      <button class="chip" type="button">Guvenlik</button>
      <button class="chip" type="button">Aydinlatma</button>
      <button class="chip" type="button">Enerji</button>
      <button class="chip" type="button">Konfor</button>
    </div>

    <div class="product-grid">
      <article class="product-card"><div class="thumb">Cam Pro</div><h3>360 Guvenlik Kamerasi</h3><p class="price">2.399 TL</p><a class="btn btn-primary" href="product-detail.php">Detay</a></article>
      <article class="product-card"><div class="thumb">Door Lock</div><h3>Akilli Kapi Kilidi</h3><p class="price">3.250 TL</p><a class="btn btn-primary" href="product-detail.php">Detay</a></article>
      <article class="product-card"><div class="thumb">Glow Mini</div><h3>LED Ampul Seti</h3><p class="price">899 TL</p><a class="btn btn-primary" href="product-detail.php">Detay</a></article>
      <article class="product-card"><div class="thumb">Nexa Plug</div><h3>Enerji Takipli Akilli Priz</h3><p class="price">549 TL</p><a class="btn btn-primary" href="product-detail.php">Detay</a></article>
      <article class="product-card"><div class="thumb">Thermo X</div><h3>Akilli Termostat</h3><p class="price">1.790 TL</p><a class="btn btn-primary" href="product-detail.php">Detay</a></article>
      <article class="product-card"><div class="thumb">Hub One</div><h3>Merkezi Kontrol Hub</h3><p class="price">1.299 TL</p><a class="btn btn-primary" href="product-detail.php">Detay</a></article>
      <article class="product-card"><div class="thumb">Curtain Go</div><h3>Akilli Perde Motoru</h3><p class="price">2.050 TL</p><a class="btn btn-primary" href="product-detail.php">Detay</a></article>
      <article class="product-card"><div class="thumb">Sensor Kit</div><h3>Coklu Sensor Paketi</h3><p class="price">1.150 TL</p><a class="btn btn-primary" href="product-detail.php">Detay</a></article>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>