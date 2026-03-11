<?= \view('layout/header', ['pageTitle' => $pageTitle]) ?>
<main>
  <section class="hero reveal">
    <div class="container hero-layout">
      <div>
        <span class="eyebrow">CodeIgniter 4 Gecis</span>
        <h1>NexaHome artik MVC mimarisine tasiniyor.</h1>
        <p>Bu sayfa, mevcut frontendin CI4 route ve controller yapisina alinmis ilk calisan adimidir.</p>
        <div class="hero-actions">
          <a class="btn btn-primary" href="<?= \site_url('products') ?>">Urunleri Kesfet</a>
          <a class="btn btn-secondary" href="<?= \site_url('admin') ?>">Admin Panel</a>
        </div>
      </div>
      <div class="hero-card">
        <p class="hero-card-title">Durum</p>
        <ul>
          <li><strong>CI4</strong> route map hazir</li>
          <li><strong>Views</strong> tasima basladi</li>
          <li><strong>DB</strong> baglantisi sonraki faz</li>
        </ul>
      </div>
    </div>
  </section>
</main>
<?= \view('layout/footer') ?>

