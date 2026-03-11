<?php
require_once '../../core/bootstrap.php';

if (is_logged_in()) {
  redirect('index.php');
}

$error = null;

if (is_post()) {
  $name = trim((string) ($_POST['name'] ?? ''));
  $email = trim((string) ($_POST['email'] ?? ''));
  $password = (string) ($_POST['password'] ?? '');
  $token = $_POST['_csrf'] ?? null;

  if (!csrf_check($token)) {
    $error = 'Gecersiz istek. Lutfen sayfayi yenileyip tekrar deneyin.';
  } elseif (mb_strlen($name) < 2) {
    $error = 'Ad Soyad en az 2 karakter olmali.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = 'Gecerli bir e-posta adresi girin.';
  } elseif (strlen($password) < 6) {
    $error = 'Sifre en az 6 karakter olmali.';
  } else {
    try {
      $checkStmt = db()->prepare('SELECT id FROM users WHERE email = :email LIMIT 1');
      $checkStmt->execute(['email' => $email]);

      if ($checkStmt->fetch()) {
        $error = 'Bu e-posta zaten kayitli.';
      } else {
        $insertStmt = db()->prepare('INSERT INTO users (name, email, password_hash, role) VALUES (:name, :email, :password_hash, :role)');
        $insertStmt->execute([
          'name' => $name,
          'email' => $email,
          'password_hash' => password_hash($password, PASSWORD_DEFAULT),
          'role' => 'user',
        ]);

        $userId = (int) db()->lastInsertId();
        login_user([
          'id' => $userId,
          'name' => $name,
          'email' => $email,
          'role' => 'user',
        ]);

        redirect('index.php');
      }
    } catch (Throwable $e) {
      $error = 'Sistem baglanti hatasi. Veritabani ayarlarini kontrol edin.';
    }
  }
}

$pageTitle = 'NexaHome | Kayit Ol';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="auth-card panel">
      <h1>Kayit Ol</h1>
      <p>Yeni hesap olustur, kampanya ve siparis takibini aninda kullan.</p>
      <?php if ($error): ?>
        <p class="form-error"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
      <?php endif; ?>
      <form action="" method="post" class="form-grid">
        <input type="hidden" name="_csrf" value="<?php echo htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8'); ?>">
        <label>Ad Soyad<input type="text" name="name" required></label>
        <label>E-posta<input type="email" name="email" required></label>
        <label>Sifre<input type="password" name="password" required></label>
        <button class="btn btn-primary" type="submit">Hesap Olustur</button>
      </form>
      <p class="auth-meta">Zaten uyeyim diyorsan <a href="login.php">giris yap</a>.</p>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>