<?php
require_once '../../core/bootstrap.php';
require_auth();
require_admin();

$pageTitle = 'NexaHome | Admin Panel';
include '../../components/header.php';
?>

<section class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Admin Panel</h1>
      <p>Yonetsel islemleri bu panelden yonetebilirsiniz.</p>
    </div>

    <div class="category-grid">
      <article class="category-card">
        <h3>Urun Yonetimi</h3>
        <p>Urun ekle, stok/fiyat guncelle, satis durumunu degistir.</p>
        <a class="btn btn-primary" href="products.php">Urunlere Git</a>
      </article>
      <article class="category-card">
        <h3>Siparis Yonetimi</h3>
        <p>Siparisleri onayla ve hazirlama asamalarini ilerlet.</p>
        <a class="btn btn-primary" href="orders.php">Siparislere Git</a>
      </article>
      <article class="category-card">
        <h3>Kullanici Yonetimi</h3>
        <p>Kullanicilari goruntule, hesap dondur, profil guncelle.</p>
        <a class="btn btn-primary" href="users.php">Kullanicilara Git</a>
      </article>
      <article class="category-card">
        <h3>Raporlama</h3>
        <p>Sunum icin siparis, gelir ve stok ozetini raporla.</p>
        <button class="btn btn-secondary" type="button">Cok Yakinda</button>
      </article>
    </div>
  </div>
</section>

<?php include '../../components/footer.php'; ?>