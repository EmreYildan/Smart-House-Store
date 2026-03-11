  <footer class="footer">
    <div class="container footer-grid">
      <div>
        <h3>NexaHome</h3>
        <p>CodeIgniter 4 gecis iskeleti aktif. Sonraki adimda DB ve auth katmani eklenecek.</p>
      </div>
      <div>
        <h4>Hizli Linkler</h4>
        <ul>
          <li><a href="<?= \site_url('products') ?>">Urunler</a></li>
          <li><a href="<?= \site_url('checkout') ?>">Odeme</a></li>
          <li><a href="<?= \site_url('orders') ?>">Siparislerim</a></li>
          <li><a href="<?= \site_url('admin') ?>">Admin</a></li>
        </ul>
      </div>
      <div>
        <h4>Iletisim</h4>
        <p>destek@nexahome.com</p>
        <p>+90 850 900 00 00</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> NexaHome</p>
    </div>
  </footer>

  <script src="<?= base_url('assets/js/main.js') ?>"></script>
</body>
</html>

