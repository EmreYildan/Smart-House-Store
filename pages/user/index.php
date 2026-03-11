<?php
$pageTitle = 'NexaHome | Akilli Ev Urunleri';
include '../../components/header.php';
?>

<main>
  <section class="hero reveal">
    <div class="container hero-layout">
      <div>
        <span class="eyebrow">Yeni Nesil Yasam</span>
        <h1>Evinizi daha akilli, daha guvenli, daha konforlu hale getirin.</h1>
        <p>Isiklardan guvenlik kameralarina, enerji yonetiminden otomasyona kadar tum akilli ev urunleri tek platformda.</p>
        <div class="hero-actions">
          <a href="products.php" class="btn btn-primary">Urunleri Kesfet</a>
          <a href="about.php" class="btn btn-secondary">Neden NexaHome</a>
        </div>
      </div>
      <div class="hero-card">
        <p class="hero-card-title">Canli Durum</p>
        <ul>
          <li><strong>12</strong> yeni urun bugun eklendi</li>
          <li><strong>%18</strong> enerji tasarrufu kampanyasi</li>
          <li><strong>24/7</strong> teknik destek aktif</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section reveal">
    <div class="container">
      <div class="section-heading">
        <h2>Populer Kategoriler</h2>
        <p>Akilli ev ekosisteminizi adim adim kurmaniz icin secilen kategoriler.</p>
      </div>
      <div class="category-grid">
        <article class="category-card"><h3>Aydinlatma</h3><p>Akilli ampul, renk senaryolari ve uzaktan kontrol.</p></article>
        <article class="category-card"><h3>Guvenlik</h3><p>Kamera, alarm, hareket sensorleri ve anlik bildirim.</p></article>
        <article class="category-card"><h3>Konfor</h3><p>Termostat, perde motoru ve sesli komut uyumu.</p></article>
        <article class="category-card"><h3>Enerji</h3><p>Akilli priz ve tuketim analizi ile verimli kullanim.</p></article>
      </div>
    </div>
  </section>

  <section class="section reveal">
    <div class="container">
      <div class="section-heading">
        <h2>One Cikan Urunler</h2>
        <p>En cok tercih edilen akilli ev urunlerini inceleyin.</p>
      </div>
      <div class="product-grid">
        <article class="product-card">
          <div class="thumb">Nexa Cam Pro</div>
          <h3>360 Guvenlik Kamerasi</h3>
          <p class="price">2.399 TL</p>
          <a class="btn btn-primary" href="product-detail.php">Detayi Gor</a>
        </article>
        <article class="product-card">
          <div class="thumb">Glow Mini</div>
          <h3>Akilli LED Ampul Seti</h3>
          <p class="price">899 TL</p>
          <a class="btn btn-primary" href="product-detail.php">Detayi Gor</a>
        </article>
        <article class="product-card">
          <div class="thumb">Safe Entry</div>
          <h3>Akilli Kapi Kilidi</h3>
          <p class="price">3.250 TL</p>
          <a class="btn btn-primary" href="product-detail.php">Detayi Gor</a>
        </article>
        <article class="product-card">
          <div class="thumb">Thermo X</div>
          <h3>Akilli Oda Termostati</h3>
          <p class="price">1.790 TL</p>
          <a class="btn btn-primary" href="product-detail.php">Detayi Gor</a>
        </article>
      </div>
    </div>
  </section>

  <section class="section reveal">
    <div class="container promo">
      <h2>Ilk Siparise Ozel %15 Indirim</h2>
      <p>Hemen uye olun, kupon kodunuzu alin ve akilli ev donusumune avantajli basin.</p>
      <a class="btn btn-light" href="register.php">Hemen Kayit Ol</a>
    </div>
  </section>
</main>

<?php include '../../components/footer.php'; ?>
