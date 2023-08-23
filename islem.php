<?php
// Giriş bilgileri
$admin_id = "admin";
$admin_password = "admin";

// Çıkış işlemi
if (isset($_GET["action"]) && $_GET["action"] === "logout") {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Verileri JSON dosyasına kaydet
function kayitEkle($kayit) {
    $dosyaAdi = 'zafer.json';
    $kayitlar = [];

    if (file_exists($dosyaAdi)) {
        $kayitlar = json_decode(file_get_contents($dosyaAdi), true);
    }

    array_unshift($kayitlar, $kayit);

    file_put_contents($dosyaAdi, json_encode($kayitlar, JSON_PRETTY_PRINT));
}

// Kullanıcı girişi kontrolü
session_start();
if ($_SESSION["loggedin"] === true) {
    // Veriyi kaydet
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $isim = $_POST["isim"];
        $soyisim = $_POST["soyisim"];
        $url = $_POST["url"];

        $kayit = array(
            "isim" => $isim,
            "soyisim" => $soyisim,
            "url" => $url
        );

        kayitEkle($kayit);

        echo "Kayıt başarıyla eklendi.";
    }

    // Gerçek formu göster
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Kayıt Formu</title>
    </head>
    <center>
    <body>
        <h1>Zafer Partisi Bildiri Aplikasyonu Veri Girişi Paneli</h1>
        <a href="?action=logout">Çıkış Yap</a><br><br>
        <img src="https://zaferpartisi.org.tr/wp-content/uploads/2023/01/logoalt.png" alt="Zafer Partisi Logo" style="display: block; margin: 0 auto;">
        <form method="post" action="">
            <label for="isim">BAŞLIK:</label>
            <input type="text" name="isim" required><br><br>

            <label for="soyisim">AÇIKLAMA BİLDİRİ:</label>
            <input type="text" name="soyisim" required><br><br>

            <label for="url">Görsel URL Adresi:</label>
            <input type="url" name="url" required><br><br>

            <input type="submit" value="Kaydet">
        </form>
    </body>
    </center>
    </html>
    <?php
} else {
    // Giriş panelini göster
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $girilen_id = $_POST["id"];
        $girilen_sifre = $_POST["sifre"];

        if ($girilen_id === $admin_id && $girilen_sifre === $admin_password) {
            $_SESSION["loggedin"] = true;
            header("Location: ".$_SERVER['PHP_SELF']);
            exit();
        } else {
            echo "Hatalı giriş bilgileri!";
        }
    } else {
        // Giriş panelini göster
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Giriş Paneli</title>
        </head>
        <body>
            <h1>Giriş Paneli</h1>
            <form method="post" action="">
                <label for="id">Kullanıcı Adı:</label>
                <input type="text" name="id" required><br><br>

                <label for="sifre">Şifre:</label>
                <input type="password" name="sifre" required><br><br>

                <input type="submit" value="Giriş">
            </form>
        </body>
        </html>
        <?php
    }
}
?>
