<?php
require_once '../../core/bootstrap.php';
require_auth();

$pageTitle = 'NexaHome | Siparis Basarili';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="panel" style="max-width:760px; margin:0 auto; text-align:center;">
      <span class="eyebrow">Siparis Basariyla Alindi</span>
      <h1>Siparisiniz Olusturuldu</h1>
      <p>Siparisiniz admin onayina dusmustur. Onaydan once siparisinizi "Siparislerim" ekranindan iptal edebilirsiniz.</p>
      <div class="hero-actions" style="justify-content:center;">
        <a class="btn btn-primary" href="orders.php">Siparislerime Git</a>
        <a class="btn btn-secondary" href="products.php">Alisverise Devam Et</a>
      </div>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>
