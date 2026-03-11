<?php
require_once '../../core/bootstrap.php';
require_auth();
require_admin();

$mockUsers = [
  ['name' => 'Ayse Demir', 'email' => 'ayse@mail.com', 'status' => 'Aktif', 'wallet' => '120.00 TL'],
  ['name' => 'Mehmet Arda', 'email' => 'mehmet@mail.com', 'status' => 'Donduruldu', 'wallet' => '0.00 TL'],
  ['name' => 'Selin Kaya', 'email' => 'selin@mail.com', 'status' => 'Aktif', 'wallet' => '45.50 TL'],
];

$pageTitle = 'NexaHome | Admin Kullanici Yonetimi';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Kullanici Yonetimi</h1>
      <p>Kullanicilari goruntuleme, dondurma ve profil bilgisi guncelleme islemleri.</p>
    </div>

    <div class="panel">
      <table class="app-table">
        <thead>
          <tr>
            <th>Ad Soyad</th>
            <th>E-posta</th>
            <th>Durum</th>
            <th>Bakiye</th>
            <th>Islem</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($mockUsers as $row): ?>
            <tr>
              <td><?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><?php echo htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td><span class="status-chip"><?php echo htmlspecialchars($row['status'], ENT_QUOTES, 'UTF-8'); ?></span></td>
              <td><?php echo htmlspecialchars($row['wallet'], ENT_QUOTES, 'UTF-8'); ?></td>
              <td class="table-actions">
                <button class="btn btn-light btn-sm" type="button">Goruntule</button>
                <button class="btn btn-primary btn-sm" type="button">Guncelle</button>
                <button class="btn btn-secondary btn-sm" type="button">Hesap Dondur</button>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>
