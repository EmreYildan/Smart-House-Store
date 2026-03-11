<?php
require_once '../../core/bootstrap.php';

if (is_logged_in()) {
  redirect('index.php');
}

$error = null;

if (is_post()) {
  $email = trim((string) ($_POST['email'] ?? ''));
  $password = (string) ($_POST['password'] ?? '');
  $token = $_POST['_csrf'] ?? null;

  if (!csrf_check($token)) {
    $error = 'Gecersiz istek. Lutfen sayfayi yenileyip tekrar deneyin.';
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = 'Gecerli bir e-posta adresi girin.';
  } elseif ($password === '') {
    $error = 'Sifre alani bos birakilamaz.';
  } else {
    try {
      $stmt = db()->prepare('SELECT id, name, email, password_hash, role FROM users WHERE email = :email LIMIT 1');
      $stmt->execute(['email' => $email]);
      $user = $stmt->fetch();

      if (!$user || !password_verify($password, $user['password_hash'])) {
        $error = 'E-posta veya sifre hatali.';
      } else {
        login_user($user);
        redirect('index.php');
      }
    } catch (Throwable $e) {
      $error = 'Sistem baglanti hatasi. Veritabani ayarlarini kontrol edin.';
    }
  }
}

$pageTitle = 'NexaHome | Giris';
include '../../components/header.php';
?>

<main class="section">
  <div class="container reveal">
    <div class="auth-card panel">
      <h1>Giris Yap</h1>
      <p>Hesabiniza ulasarak siparis ve favori islemlerinizi yonetin.</p>
      <?php if ($error): ?>
        <p class="form-error"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
      <?php endif; ?>
      <form action="" method="post" class="form-grid">
        <input type="hidden" name="_csrf" value="<?php echo htmlspecialchars(csrf_token(), ENT_QUOTES, 'UTF-8'); ?>">
        <label>E-posta<input type="email" name="email" required></label>
        <label>Sifre<input type="password" name="password" required></label>
        <button class="btn btn-primary" type="submit">Giris</button>
      </form>
      <p class="auth-meta">Hesabin yok mu? <a href="register.php">Kayit ol</a></p>
    </div>
  </div>
</main>

<?php include '../../components/footer.php'; ?>