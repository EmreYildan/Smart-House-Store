# Proje Yapisi ve Temizlik Notlari

Bu dosya, aktif klasorler ile arsiv klasorlerini ayirir.

## Aktif Klasorler
- `assets/`: CSS, JS, font ve gorseller
- `components/`: Ortak layout dosyalari (`header.php`, `footer.php`)
- `core/`: Konfig, baglanti ve yardimci fonksiyonlar
- `pages/`: Uygulamanin aktif sayfalari
  - `pages/admin/`: Admin modulu (index, products, orders, users)
  - `pages/user/`: User modulu
- `database/`: `schema.sql` ve `seed.sql`
- `docs/`: Proje checklist ve dokumantasyon

## Arsiv Klasorleri
- `archive/legacy-html/`: Eski HTML prototipleri (aktif degil)

## CI4 Gecis Klasoru
- `ci4/appstarter-master/`: CodeIgniter 4 gecis calismasi
- Uretim disi veya gecici dosyalar repoda tutulmamalidir (zip, installer vb.)

## Layout Standarti
- Tum gorunum sayfalari ortak layout kullanir:
  - `components/header.php`
  - `components/footer.php`
- Bu sayede tekrar eden HTML engellenir ve toplu degisiklik kolaylasir.

## Adlandirma Standarti
- Cok kelimeli PHP sayfalari `kebab-case` kullanir.
- User siparis akisi:
  - `order-tracking.php`
  - `order-complete.php`
