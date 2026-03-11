<?php
$pageTitle = 'NexaHome | Urun Detayi';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="detail-layout">
      <div class="detail-gallery">
        <div class="detail-image">Nexa Cam Pro</div>
        <div class="detail-thumbs">
          <span>On Gorunum</span>
          <span>Arka Gorunum</span>
          <span>Uygulama Ekrani</span>
        </div>
      </div>

      <div class="detail-info">
        <span class="eyebrow">Guvenlik Serisi</span>
        <h1>360 Derece Akilli Guvenlik Kamerasi</h1>
        <p class="price">2.399 TL</p>
        <p>Gece gorusu, hareket algilama, iki yonlu ses iletimi ve mobil uygulama entegrasyonu ile evinizi her an kontrol edin.</p>

        <ul class="feature-list">
          <li>2K video kalitesi</li>
          <li>Bulut ve hafiza karti destegi</li>
          <li>Alexa ve Google Home uyumlu</li>
          <li>Anlik bildirim ve aktivite gecmisi</li>
        </ul>

        <div class="quantity-box">
          <button type="button" data-qty-down>-</button>
          <input type="number" value="1" min="1" data-qty-input>
          <button type="button" data-qty-up>+</button>
        </div>

        <div class="hero-actions">
          <a class="btn btn-primary" href="cart.php">Sepete Ekle</a>
          <a class="btn btn-secondary" href="products.php">Urunlere Don</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>