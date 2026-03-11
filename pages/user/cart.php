<?php
require_once '../../core/bootstrap.php';
require_auth();

$pageTitle = 'NexaHome | Sepet';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Sepetim</h1>
      <p>Secili urunlerinizi kontrol edip odeme adimina gecebilirsiniz.</p>
    </div>

    <div class="cart-layout">
      <div class="panel">
        <table class="cart-table">
          <thead>
            <tr>
              <th>Urun</th>
              <th>Adet</th>
              <th>Birim</th>
              <th>Tutar</th>
            </tr>
          </thead>
          <tbody>
            <tr><td>360 Guvenlik Kamerasi</td><td>1</td><td>2.399 TL</td><td>2.399 TL</td></tr>
            <tr><td>Akilli Priz</td><td>2</td><td>549 TL</td><td>1.098 TL</td></tr>
          </tbody>
        </table>
      </div>

      <aside class="panel summary-box">
        <h3>Siparis Ozeti</h3>
        <p><span>Ara Toplam</span><strong>3.497 TL</strong></p>
        <p><span>Kargo</span><strong>Ucretsiz</strong></p>
        <p><span>Indirim</span><strong>-150 TL</strong></p>
        <hr>
        <p><span>Genel Toplam</span><strong>3.347 TL</strong></p>
        <a class="btn btn-primary" href="checkout.php">Odeme Adimina Gec</a>
      </aside>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>