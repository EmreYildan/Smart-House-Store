<?php
require_once '../../core/bootstrap.php';
require_auth();
require_admin();

$mockOrders = [
  ['id' => 1042, 'user' => 'Ayse Demir', 'total' => '3.347 TL', 'stage' => 'Tedarik', 'status' => 'Onay Bekliyor'],
  ['id' => 1031, 'user' => 'Mehmet Arda', 'total' => '1.790 TL', 'stage' => 'Kargoya Verildi', 'status' => 'Onaylandi'],
  ['id' => 1020, 'user' => 'Selin Kaya', 'total' => '2.399 TL', 'stage' => 'Teslim Edildi', 'status' => 'Teslim'],
];

$pageTitle = 'NexaHome | Admin Siparis Yonetimi';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Siparis Yonetimi</h1>
      <p>Admin onayi ve hazirlama asamasi bu ekrandan birer adim ilerletilir.</p>
    </div>

    <div class="panel">
      <table class="app-table">
        <thead>
          <tr>
            <th>Siparis</th>
            <th>Kullanici</th>
            <th>Tutar</th>
            <th>Asama</th>
            <th>Durum</th>
            <th>Islem</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($mockOrders as $order): ?>
            <tr>
              <td>#<?php echo (int) $order['id']; ?></td>
              <td><?php echo htmlspecialchars($order['user'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($order['total'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($order['stage'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><span class="status-chip"><?php echo htmlspecialchars($order['status'], ENT_QUOTES, 'UTF-8'); ?></span></td>
              <td class="table-actions">
                <button class="btn btn-primary btn-sm" type="button">Siparisi Onayla</button>
                <button class="btn btn-light btn-sm" type="button">Asamayi Ilerlet</button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>
