# TBL304 Minimum Uyumluluk Checklist (MVP)

## Kritik Not
- Ders isterinde Laravel veya CodeIgniter MVC frameworku isteniyor.
- Mevcut kod tabani su an duz PHP tabanli.
- Sunumda puan kaybi yasamamak icin bir sonraki adimda CodeIgniter 4'e tasima yapilmasi onerilir.

## Isterlere Gore Minimum Hedef
- [x] Admin ve User rol yapisi
- [x] Kayit/Giris/Cikis
- [x] Veritabani CRUD altyapisi
- [x] 1 admin, 5 user, 20 urun seed
- [x] Urun, stok, fiyat alanlari
- [x] Urun gorsel tablosu
- [x] Sepet tablosu
- [x] Siparis + siparis kalemleri
- [x] Siparis asama alanlari
- [x] Iptal durumunda bakiye iade altyapisi (wallet + transaction)
- [ ] Admin panel CRUD ekranlari
- [ ] User profil guncelleme/sifre sifirlama ekranlari
- [ ] Odeme adimi ve siparis olusturma akisi
- [ ] Siparis takip sayfasi (user)
- [ ] Siparis asama ilerletme (admin)
- [ ] Hesap dondurma/pasif etme ekrani
- [ ] API entegrasyonu (hava durumu/harita vb.)
- [ ] IEEE raporu (akis + ER diyagram zorunlu)

## Siradaki Gelistirme Sirasi
1. Urun listeleme ve urun detayini DB baglamak.
2. Sepete ekle/cikar/guncelle islemleri.
3. Checkout + siparis olusturma + wallet onceligi.
4. Admin siparis onay ve asama ilerletme.
5. User siparis takip + iptal kurali.
6. Profil ve hesap yonetimi.
7. API entegrasyonu + rapor.
