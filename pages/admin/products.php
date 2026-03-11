<?php
require_once '../../core/bootstrap.php';
require_auth();
require_admin();

$mockProducts = [
  ['name' => '360 Guvenlik Kamerasi', 'stock' => 18, 'price' => '2.399 TL', 'active' => 'Aktif'],
  ['name' => 'Akilli Priz', 'stock' => 32, 'price' => '549 TL', 'active' => 'Aktif'],
  ['name' => 'Akilli Kapi Kilidi', 'stock' => 4, 'price' => '3.250 TL', 'active' => 'Pasif'],
];

$pageTitle = 'NexaHome | Admin Urun Yonetimi';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Urun Yonetimi</h1>
      <p>Urun ekleme, guncelleme, silme ve satis durumunu kontrol etme ekranlari.</p>
    </div>

    <div class="panel form-grid">
      <h3 class="full">Yeni Urun Ekle (Frontend Demo)</h3>
      <label>Urun Adi<input type="text"></label>
      <label>Kategori<input type="text"></label>
      <label>Fiyat<input type="text" placeholder="0.00"></label>
      <label>Stok<input type="number" min="0"></label>
      <label class="full">Aciklama<textarea rows="3"></textarea></label>
      <button class="btn btn-primary" type="button">Urunu Kaydet</button>
    </div>

    <div class="panel" style="margin-top:16px;">
      <table class="app-table">
        <thead>
          <tr>
            <th>Urun</th>
            <th>Stok</th>
            <th>Fiyat</th>
            <th>Satis Durumu</th>
            <th>Islem</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($mockProducts as $product): ?>
            <tr>
              <td><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo (int) $product['stock']; ?></td>
              <td><?php echo htmlspecialchars($product['price'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><span class="status-chip"><?php echo htmlspecialchars($product['active'], ENT_QUOTES, 'UTF-8'); ?></span></td>
              <td class="table-actions">
                <button class="btn btn-light btn-sm" type="button">Duzenle</button>
                <button class="btn btn-secondary btn-sm" type="button">Sil</button>
                <button class="btn btn-primary btn-sm" type="button">Durum Degistir</button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>
