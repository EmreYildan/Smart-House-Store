<?php
$year = date('Y');
?>
  <footer class="footer">
    <div class="container footer-grid">
      <div>
        <h3>NexaHome</h3>
        <p>Akilli ev urunlerinde guvenli alisveris, hizli kargo ve kesintisiz teknik destek.</p>
      </div>

      <div>
        <h4>Hizli Linkler</h4>
        <ul>
          <li><a href="<?php echo $pageBase; ?>products.php">Urunler</a></li>
          <li><a href="<?php echo $pageBase; ?>about.php">Hakkimizda</a></li>
          <li><a href="<?php echo $pageBase; ?>contact.php">Iletisim</a></li>
          <li><a href="<?php echo $pageBase; ?>checkout.php">Odeme</a></li>
        </ul>
      </div>

      <div>
        <h4>Iletisim</h4>
        <p>destek@nexahome.com</p>
        <p>+90 850 900 00 00</p>
        <p>Istanbul / Turkiye</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?php echo $year; ?> NexaHome. Tum haklari saklidir.</p>
    </div>
  </footer>

  <script src="<?php echo $assetBase; ?>/js/main.js"></script>
</body>
</html>
