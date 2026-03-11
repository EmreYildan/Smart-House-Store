<?php
$pageTitle = 'NexaHome | Iletisim';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Iletisim</h1>
      <p>Destek, urun danismanligi veya is birligi talepleriniz icin bize ulasin.</p>
    </div>

    <div class="contact-layout">
      <div class="panel">
        <h3>Iletisim Kanallari</h3>
        <p><strong>E-posta:</strong> destek@nexahome.com</p>
        <p><strong>Telefon:</strong> +90 850 900 00 00</p>
        <p><strong>Adres:</strong> Levent, Istanbul</p>
        <p><strong>Calisma Saatleri:</strong> Hafta ici 09:00 - 18:00</p>
      </div>

      <form class="panel form-grid" action="#" method="post">
        <label>Ad Soyad<input type="text" name="name" required></label>
        <label>E-posta<input type="email" name="email" required></label>
        <label>Konu<input type="text" name="subject" required></label>
        <label class="full">Mesaj<textarea name="message" rows="5" required></textarea></label>
        <button class="btn btn-primary" type="submit">Mesaj Gonder</button>
      </form>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>