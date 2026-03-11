<?php
require_once '../../core/bootstrap.php';
require_auth();

$mockOrders = [
  [
    'id' => 1042,
    'date' => '09.03.2026',
    'total' => '3.347 TL',
    'status' => 'Admin Onayi Bekliyor',
    'can_cancel' => true,
  ],
  [
    'id' => 1031,
    'date' => '04.03.2026',
    'total' => '1.790 TL',
    'status' => 'Hazirlaniyor',
    'can_cancel' => false,
  ],
  [
    'id' => 1020,
    'date' => '25.02.2026',
    'total' => '2.399 TL',
    'status' => 'Teslim Edildi',
    'can_cancel' => false,
  ],
];

$pageTitle = 'NexaHome | Siparislerim';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Siparislerim</h1>
      <p>Siparis durumlarinizi tek ekranda takip edin. Iptal hakki sadece admin onayi oncesi aktiftir.</p>
    </div>

    <div class="panel">
      <table class="app-table">
        <thead>
          <tr>
            <th>Siparis No</th>
            <th>Tarih</th>
            <th>Tutar</th>
            <th>Durum</th>
            <th>Islem</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($mockOrders as $order): ?>
            <tr>
              <td>#<?php echo (int) $order['id']; ?></td>
              <td><?php echo htmlspecialchars($order['date'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($order['total'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><span class="status-chip"><?php echo htmlspecialchars($order['status'], ENT_QUOTES, 'UTF-8'); ?></span></td>
              <td class="table-actions">
                <a class="btn btn-light btn-sm" href="order-tracking.php?id=<?php echo (int) $order['id']; ?>">Takip</a>
                <?php if ($order['can_cancel']): ?>
                  <button class="btn btn-secondary btn-sm" type="button">Siparisi Iptal Et</button>
                <?php else: ?>
                  <button class="btn btn-secondary btn-sm" type="button" disabled>Iptal Pasif</button>
                <?php endif; ?>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>
