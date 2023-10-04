<?php
// Giriş bilgileri
$admin_id = "muyankran";
$admin_password = "wintersun1337";

// Çıkış işlemi
if (isset($_GET["action"]) && $_GET["action"] === "logout") {
    session_start();
    session_unset();
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit();
}

// Kullanıcı girişi kontrolü
session_start();
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
}

// Kullanıcı girişi yapılmışsa, veri girişi panelini göster
if ($_SESSION["loggedin"] === true) {
    // Veriyi kaydet
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $kapakresmi = $_POST["kapakresmi"];
        $isim = $_POST["isim"];
        $aciklama = substr($_POST["aciklama"], 0, 200); // Açıklamayı ilk 200 karakterle sınırla
        $discord = $_POST["discord"];
        $youtube = $_POST["youtube"];
        $website = $_POST["website"];

        // Eksik veri kontrolü
        if ($kapakresmi != "" && $isim != "" && $aciklama != "" && $discord != "" && $youtube != "" && $website != "") {
            // JSON dosyasını oku
            $dosyaAdi = "srojsonverisi.json";
            $eskiVeriler = json_decode(file_get_contents($dosyaAdi), true);

            // Mevcut en yüksek ID'yi bul
            $enYuksekID = 0;
            foreach ($eskiVeriler as $veri) {
                if ($veri["id"] > $enYuksekID) {
                    $enYuksekID = $veri["id"];
                }
            }

            // Yeni veriye otomatik bir ID ata
            $yeniVeri = [
                "id" => $enYuksekID + 1, // En yüksek ID'nin bir üstünü ata
                "kapakresmi" => $kapakresmi,
                "isim" => substr($isim, 0, 15),
                "aciklama" => $aciklama,
                "discord" => $discord,
                "youtube" => $youtube,
                "website" => $website
            ];

            // Mevcut verilerin önüne ekle
            array_unshift($eskiVeriler, $yeniVeri);

            // JSON dosyasına veriyi kaydet
            file_put_contents($dosyaAdi, json_encode($eskiVeriler, JSON_PRETTY_PRINT));

            echo "Veri başarıyla kaydedildi.";
        } else {
            echo "Eksik veya hatalı veri girişi tespit edildi. Lütfen tüm verileri eksiksiz girin.";
        }
    }

    // Veri girişi panelini göster
    ?>
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Silkroad Online Server Tanıtım Formu</title>
        <style>
            body {
                text-align: center;
                background-image: url('https://firebasestorage.googleapis.com/v0/b/silkroad-online-forum.appspot.com/o/silkroadonline.png?alt=media&token=f502295a-6321-45ee-8e4c-b641534ca51a');
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }

            .header {
                margin: 0 auto;
                max-width: 400px;
                text-align: center;
            }

            .header img {
                width: 200px;
                margin-bottom: 20px;
            }

            form {
                margin: 0 auto;
                max-width: 400px;
                background-color: rgba(255, 255, 255, 0.8); /* Sayfa içeriğinin üzerine yarı saydamlık ekler */
                padding: 20px;
            }

            label {
                display: block;
                text-align: left;
                margin-bottom: 10px;
            }

            .icon {
                width: 20px;
                vertical-align: middle;
                margin-right: 5px;
            }

            input[type="text"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                font-weight: bold;
                font-size: 15px;
            }

            input[type="submit"] {
                background-color: #007BFF;
                color: #fff;
                padding: 10px 20px;
                border: none;
                cursor: pointer;
            }

            /* Başlıkların renkleri */
            .baslik {
                color: red;
            }

            .alt-baslik {
                color: green;
            }

            .alt-baslik a {
                color: blue; /* Bağlantı rengi */
                text-decoration: underline; /* Altı çizili bağlantı */
                cursor: pointer;
            }

            /* Mira Security yazısına bağlantı ekleyin */
            .mirasecurity-link {
                color: #007BFF; /* Bağlantı rengi */
                text-decoration: underline; /* Altı çizili bağlantı */
                cursor: pointer;
            }

            /* Mobil cihazlar için ek stiller */
            @media screen and (max-width: 768px) {
                body {
                    background-attachment: scroll;
                }

                .header img {
                    width: 150px;
                }

                form {
                    padding: 10px;
                }
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1 class="baslik">Silkroad Online Server Tanıtım Formu</h1>
            <h3><a href="https://play.google.com/store/apps/developer?id=MiraSecurity" class="mirasecurity-link">Mira Security</a></h3>
        </div>

        <form method="POST" action="">
            <label for="kapakresmi" style="color: blue;">Kapak Resmi URL:</label>
            <input type="text" id="kapakresmi" name="kapakresmi" required>

            <label for="isim" style="color: green;">İsim (Max 15 Karakter):</label>
            <input type="text" id="isim" name="isim" required>

            <label for="aciklama" style="color: red;">Açıklama (Max 200 Karakter):</label>
            <input type="text" id="aciklama" name="aciklama" required>

            <label for="discord" style="color: orange;"><img src="https://logodownload.org/wp-content/uploads/2017/11/discord-logo-0.png" alt="Discord" class="icon"> Discord URL:</label>
            <input type="text" id="discord" name="discord" required>

            <label for="youtube" style="color: purple;"><img src="https://cdn-icons-png.flaticon.com/512/3128/3128307.png" alt="YouTube" class="icon"> YouTube URL:</label>
            <input type="text" id="youtube" name="youtube" required>

            <label for="website" style="color: #FF5733;">Website URL:</label>
            <input type="text" id="website" name="website" required>

            <input type="submit" value="Serveri Kaydet">
        </form>
    </body>
    </html>
    <?php
} else {
    // Giriş panelini göster
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Giriş Paneli</title>
        <style>
            body {
                text-align: center;
                background-image: url('arkaplan_resmi_url'); /* Kendi arkaplan resminizin URL'sini ekleyin */
                background-size: cover;
                background-position: center;
                background-attachment: fixed;
            }

            .login-container {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(255, 255, 255, 0.8);
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
                text-align: center;
            }

            label {
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
                color: #333;
            }input[type="text"], input[type="password"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid #ccc;
                border-radius: 5px;
                font-size: 16px;
            }

            input[type="submit"] {background-color: #007BFF;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <div class="login-container">
            <h1>Giriş Paneli</h1>
            <form method="post" action="">
                <label for="id">Kullanıcı Adı:</label>
                <input type="text" id="id" name="id" required>

                <label for="sifre">Şifre:</label>
                <input type="password" id="sifre" name="sifre" required>

                <input type="submit" value="Giriş">
            </form>
        </div>
    </body>
    </html>
    <?php
}
?>
