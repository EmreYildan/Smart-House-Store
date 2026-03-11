<?php
require_once '../../core/bootstrap.php';
require_auth();

$pageTitle = 'NexaHome | Odeme';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Odeme Bilgileri</h1>
      <p>Siparisinizi guvenli sekilde tamamlamak icin bilgileri girin.</p>
    </div>
    <form class="panel form-grid" action="order-complete.php" method="get">
      <label>Ad Soyad<input type="text" name="full_name" required></label>
      <label>Telefon<input type="tel" name="phone" required></label>
      <label class="full">Adres<textarea name="address" rows="4" required></textarea></label>
      <label>Kart Numarasi<input type="text" name="card_number" placeholder="0000 0000 0000 0000" required></label>
      <label>Son Kullanma<input type="text" name="expiry" placeholder="AA/YY" required></label>
      <label>CVV<input type="text" name="cvv" required></label>
      <button class="btn btn-primary full" type="submit">Siparisi Tamamla</button>
    </form>
  </div>
</main>

<?php include '../../components/footer.php'; ?>