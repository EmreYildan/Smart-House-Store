<?php
require_once '../../core/bootstrap.php';
require_auth();

$orderNo = (int) ($_GET['id'] ?? 1042);
$activeStep = 4;
$steps = [
  'Urunleriniz tedarik ediliyor',
  'Urunleriniz kutulaniyor',
  'Urunleriniz kargoya veriliyor',
  'Urunleriniz size dogru yola cikti',
  'Urunleriniz size teslim edilmistir',
  'Teslim alindi onayi verildi',
];

$pageTitle = 'NexaHome | Siparis Takip';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="section-heading">
      <h1>Siparis Takip</h1>
      <p>Siparis #<?php echo $orderNo; ?> asamalarini adim adim inceleyin.</p>
    </div>

    <div class="panel timeline">
      <?php foreach ($steps as $index => $step): ?>
        <?php $stateClass = $index < $activeStep ? 'done' : ($index === $activeStep ? 'current' : 'todo'); ?>
        <div class="timeline-item <?php echo $stateClass; ?>">
          <div class="timeline-dot"></div>
          <div>
            <h3><?php echo htmlspecialchars($step, ENT_QUOTES, 'UTF-8'); ?></h3>
            <p>Durum adimi: <?php echo (int) ($index + 1); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="panel">
      <h3>Teslim Alma Onayi</h3>
      <p>Bu buton, "Urunleriniz size teslim edilmistir" asamasindan sonra aktif olur.</p>
      <button class="btn btn-primary" type="button">Urunlerimi Teslim Aldim</button>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>
