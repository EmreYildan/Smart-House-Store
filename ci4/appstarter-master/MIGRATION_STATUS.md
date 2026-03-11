# CI4 Migration Status

Bu klasor, `smart-store-house` projesinin CodeIgniter 4 gecisinin ilk asamasidir.

## Tamamlananlar
- CI4 appstarter tabani eklendi.
- Frontend `assets/` dosyalari `public/assets` altina kopyalandi.
- Store ve Admin controllerlari eklendi.
- Route haritasi olusturuldu.
- Store/Admin view dosyalari eklendi.

## Mevcut Engel
Bu makinede su anda:
- `composer` global kurulu degil.
- PHP tarafinda `openssl` extension eksik oldugu icin HTTPS ile paket cekilemiyor.
- Bu nedenle `vendor/` bagimliliklari kurulamiyor ve `php spark` calistirirken hata olusuyor.

## Devam Icin Gerekenler
1. PHP `openssl` extension aktif edilmeli.
2. Composer kurulumu yapilmali (global veya local).
3. Bu klasorde asagidaki komut calistirilmali:
   - `php composer.phar install` veya `composer install`
4. Sonra test:
   - `php spark routes`
   - `php spark serve`

## Sonraki Kod Fazi
- Auth katmani: Filter + Session + UserModel
- ProductModel, CartModel, OrderModel
- Checkout ve wallet kurallari
- Admin siparis asama ilerletme
