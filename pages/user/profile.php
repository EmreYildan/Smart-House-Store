<?php
require_once '../../core/bootstrap.php';
require_auth();

$pageTitle = 'NexaHome | Profilim';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Hesap Bilgilerim</h1>
      <p>Bu ekran frontend tamamlama asamasinda ornek veri ile calisir. Sonraki fazda DB ile baglanacaktir.</p>
    </div>

    <div class="profile-layout">
      <form class="panel form-grid" action="#" method="post">
        <h3 class="full">Profil Bilgileri</h3>
        <label>Ad Soyad<input type="text" value="<?php echo htmlspecialchars((string) (current_user()['name'] ?? 'Kullanici'), ENT_QUOTES, 'UTF-8'); ?>"></label>
        <label>E-posta<input type="email" value="<?php echo htmlspecialchars((string) (current_user()['email'] ?? 'user@example.com'), ENT_QUOTES, 'UTF-8'); ?>"></label>
        <label>Telefon<input type="tel" value="+90 555 000 00 00"></label>
        <label class="full">Adres<textarea rows="4">Istanbul / Turkiye</textarea></label>
        <button class="btn btn-primary" type="button">Bilgileri Guncelle</button>
      </form>

      <form class="panel form-grid" action="#" method="post">
        <h3 class="full">Sifre Yenile</h3>
        <label class="full">Mevcut Sifre<input type="password"></label>
        <label>Yeni Sifre<input type="password"></label>
        <label>Yeni Sifre Tekrar<input type="password"></label>
        <button class="btn btn-secondary" type="button">Sifreyi Guncelle</button>
      </form>

      <div class="panel account-actions">
        <h3>Hesap Durumu</h3>
        <p>Uyeliginizi gecici olarak pasif edebilir veya destek ekibiyle iletisime gecebilirsiniz.</p>
        <div class="hero-actions">
          <button class="btn btn-secondary" type="button">Uyeligi Pasif Et</button>
          <a class="btn btn-light" href="contact.php">Destek Talebi Ac</a>
        </div>
      </div>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>
