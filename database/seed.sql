USE nexahome;

-- TUM kullanicilarin sifresi: password
-- Bcrypt: $2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi

INSERT INTO users (name, email, password_hash, role, account_status, wallet_balance, phone, address)
VALUES
  ('Nexa Admin', 'admin@nexahome.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'admin', 'active', 0.00, '05000000001', 'Kocaeli'),
  ('Ali Yilmaz', 'ali@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'active', 120.00, '05000000002', 'Izmit'),
  ('Ayse Demir', 'ayse@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'active', 85.00, '05000000003', 'Gebze'),
  ('Mehmet Kaya', 'mehmet@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'active', 0.00, '05000000004', 'Derince'),
  ('Zeynep Acar', 'zeynep@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'active', 60.00, '05000000005', 'Kartepe'),
  ('Burak Sahin', 'burak@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'user', 'active', 25.00, '05000000006', 'Golcuk')
ON DUPLICATE KEY UPDATE
  name = VALUES(name),
  role = VALUES(role),
  account_status = VALUES(account_status),
  wallet_balance = VALUES(wallet_balance),
  phone = VALUES(phone),
  address = VALUES(address);

INSERT INTO categories (name, slug)
VALUES
  ('Guvenlik', 'guvenlik'),
  ('Aydinlatma', 'aydinlatma'),
  ('Enerji', 'enerji'),
  ('Konfor', 'konfor')
ON DUPLICATE KEY UPDATE name = VALUES(name);

INSERT INTO products (category_id, name, slug, description, price, stock, cover_image, is_active)
VALUES
  (1, '360 Guvenlik Kamerasi', '360-guvenlik-kamerasi', 'Gece gorusu ve mobil bildirim destekli kamera.', 2399.00, 15, NULL, 1),
  (2, 'Akilli LED Ampul Seti', 'akilli-led-ampul-seti', 'Uygulama kontrollu renk degistiren ampul seti.', 899.00, 30, NULL, 1),
  (3, 'Enerji Takipli Akilli Priz', 'enerji-takipli-akilli-priz', 'Tuketim analizi yapan uzaktan kontrollu priz.', 549.00, 50, NULL, 1),
  (1, 'Akilli Kapi Kilidi', 'akilli-kapi-kilidi', 'Parmak izi ve uygulama destekli kilit.', 3250.00, 11, NULL, 1),
  (4, 'Akilli Termostat', 'akilli-termostat', 'Oda sicakligini otomatik optimize eder.', 1790.00, 18, NULL, 1),
  (2, 'Renkli LED Serit', 'renkli-led-serit', 'Muzik senkronlu led serit seti.', 650.00, 40, NULL, 1),
  (1, 'Hareket Sensoru', 'hareket-sensoru', 'Guvenlik ve otomasyon icin hareket algilama.', 420.00, 45, NULL, 1),
  (3, 'Akilli Sigorta Modulu', 'akilli-sigorta-modulu', 'Anlik enerji kesme ve takip.', 1350.00, 9, NULL, 1),
  (4, 'Akilli Perde Motoru', 'akilli-perde-motoru', 'Uzaktan perde ac-kapa.', 2050.00, 13, NULL, 1),
  (1, 'Gaz Kacak Sensoru', 'gaz-kacak-sensoru', 'Gaz sizintisini erken tespit eder.', 780.00, 22, NULL, 1),
  (1, 'Duman Sensoru', 'duman-sensoru', 'Yangin riskine karsi anlik uyari.', 590.00, 28, NULL, 1),
  (3, 'Akilli Priz Mini', 'akilli-priz-mini', 'Kompakt priz modeli.', 430.00, 60, NULL, 1),
  (2, 'Akilli Gece Lambasi', 'akilli-gece-lambasi', 'Zamanlayici ve renk secenekleri.', 320.00, 70, NULL, 1),
  (4, 'Hava Kalitesi Sensoru', 'hava-kalitesi-sensoru', 'CO2 ve nem takibi.', 1240.00, 17, NULL, 1),
  (4, 'Akilli Hoparlor', 'akilli-hoparlor', 'Sesli komut destekli merkez cihaz.', 2790.00, 14, NULL, 1),
  (1, 'Video Kapi Zili', 'video-kapi-zili', 'Kapi onunu canli izleme ve konusma.', 2150.00, 16, NULL, 1),
  (3, 'Enerji Olcer Priz', 'enerji-olcer-priz', 'Gunluk tuketim raporu verir.', 610.00, 33, NULL, 1),
  (2, 'Akilli Masa Lambasi', 'akilli-masa-lambasi', 'Calisma modlari olan masa lambasi.', 740.00, 25, NULL, 1),
  (4, 'Akilli Oda Kumandasi', 'akilli-oda-kumandasi', 'Tek panelden tum cihazlari yonetim.', 980.00, 21, NULL, 1),
  (1, 'IP Bebek Kamerasi', 'ip-bebek-kamerasi', 'Ses ve hareket algilama destekli kamera.', 1680.00, 12, NULL, 1),
  (3, 'Akilli Sulama Kontrolu', 'akilli-sulama-kontrolu', 'Bahce sulamayi zamanlar.', 1490.00, 8, NULL, 1),
  (2, 'Ampul Baslangic Paketi', 'ampul-baslangic-paketi', '3lu ampul + mini hub.', 1190.00, 19, NULL, 1)
ON DUPLICATE KEY UPDATE
  description = VALUES(description),
  price = VALUES(price),
  stock = VALUES(stock),
  is_active = VALUES(is_active);
