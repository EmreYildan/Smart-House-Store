# Smart Store House

Akilli ev urunleri satisi icin gelistirilen web proje calismasi.

## Aktif Teknolojiler
- PHP
- CSS3
- JavaScript
- MySQL (schema + seed)

## Hizli Baslangic
1. `database/schema.sql` dosyasini calistirin.
2. `database/seed.sql` dosyasini calistirin.
3. `core/config.php` icinden DB ayarlarini guncelleyin.
4. Proje kokunden calistirin ve `index.php` ile acin.

## Proje Duzeni
- `index.php`: Giris noktasi, `pages/user/index.php` yonlendirmesi
- `components/`: Ortak layout dosyalari (`header.php`, `footer.php`)
- `pages/user/`: Kullanici sayfalari
- `pages/admin/`: Admin modulu sayfalari (`index.php`, `products.php`, `orders.php`, `users.php`)
- `core/`: Session, helper ve DB baglanti katmani
- `database/`: SQL dosyalari
- `docs/`: Ister ve teknik notlar
- `archive/legacy-html/`: Eski prototipler (aktif degil)

Detayli klasor aciklamalari icin: `docs/project-structure.md`

## Layout Standarti
Tum gorunum sayfalari ortak header/footer kullanir:
- `components/header.php`
- `components/footer.php`

Bu yapi sayesinde tekrar eden kod azalir ve tasarim guncellemeleri tek noktadan yapilir.

## Dosya Adlandirma Standarti
- Cok kelimeli user sayfalari `kebab-case` kullanir.
- Ornek: `order-tracking.php`, `order-complete.php`, `product-detail.php`.

## Akademik Not
TBL304 isterine gore Laravel veya CodeIgniter MVC beklenmektedir.
Bu repoda duz PHP surumu aktif, ayrica `ci4/appstarter-master/` altinda CI4 gecis calismasi bulunur.