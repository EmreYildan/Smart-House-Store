<?php
require_once __DIR__ . '/../core/bootstrap.php';

$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
$scriptDir = trim(str_replace('\\', '/', dirname($scriptName)), '/.');
$depth = $scriptDir === '' ? 0 : substr_count($scriptDir, '/') + 1;
$prefix = str_repeat('../', $depth);

$isUserPage = strpos($scriptName, '/pages/user/') !== false;
$isAdminPage = strpos($scriptName, '/pages/admin/') !== false;
$assetBase = $prefix . 'assets';
$pageBase = $isUserPage ? '' : ($prefix . 'pages/user/');

$pageTitle = isset($pageTitle) ? $pageTitle : 'Smart Store House';
$currentPage = basename(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH) ?? 'index.php');

function navActive($fileName, $currentPageName)
{
    return $fileName === $currentPageName ? 'active' : '';
}

$user = current_user();
$isAdmin = $user && (($user['role'] ?? 'user') === 'admin');
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/css/style.css">
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/css/responsive.css">
</head>
<body>
  <div class="bg-orb orb-1"></div>
  <div class="bg-orb orb-2"></div>

  <header class="header">
    <div class="container header-container">
      <a class="logo" href="<?php echo $pageBase; ?>index.php">NexaHome</a>

      <button class="menu-toggle" type="button" aria-label="Menüyü aç" aria-expanded="false" data-menu-toggle>
        <span></span><span></span><span></span>
      </button>

      <nav class="navbar" data-main-nav>
        <a class="<?php echo navActive('index.php', $currentPage); ?>" href="<?php echo $pageBase; ?>index.php">Ana Sayfa</a>
        <a class="<?php echo navActive('products.php', $currentPage); ?>" href="<?php echo $pageBase; ?>products.php">Urunler</a>
        <?php if ($user): ?>
          <a class="<?php echo navActive('orders.php', $currentPage); ?>" href="<?php echo $pageBase; ?>orders.php">Siparislerim</a>
          <a class="<?php echo navActive('profile.php', $currentPage); ?>" href="<?php echo $pageBase; ?>profile.php">Profil</a>
        <?php endif; ?>
        <a class="<?php echo navActive('about.php', $currentPage); ?>" href="<?php echo $pageBase; ?>about.php">Hakkimizda</a>
        <a class="<?php echo navActive('contact.php', $currentPage); ?>" href="<?php echo $pageBase; ?>contact.php">Iletisim</a>
        <a class="cart-link <?php echo navActive('cart.php', $currentPage); ?>" href="<?php echo $pageBase; ?>cart.php">
          Sepet <span class="cart-badge"><?php echo (int) ($_SESSION['mock_cart_count'] ?? 2); ?></span>
        </a>
        <?php if ($user): ?>
          <?php if ($isAdmin): ?>
            <a class="<?php echo $isAdminPage ? 'active' : ''; ?>" href="<?php echo $prefix; ?>pages/admin/index.php">Admin</a>
          <?php endif; ?>
          <span class="nav-user"><?php echo htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8'); ?></span>
          <a class="btn btn-outline" href="<?php echo $pageBase; ?>logout.php">Cikis</a>
        <?php else: ?>
          <a class="btn btn-outline" href="<?php echo $pageBase; ?>login.php">Giris</a>
        <?php endif; ?>
      </nav>
    </div>
  </header>
