<?php
session_start();

$hash = isset($_GET['paka']) ? preg_replace('/[^a-f0-9]/i', '', $_GET['paka']) : '';
if (strlen($hash) !== 32) {
    die('Błędny hash.');
}

require '../include/functions.php';


// =========================================
// ========== JSON Dane ====================
// =========================================
// Kolory PAKI
$PACKcolors = loadJsonFile('colors.json', [], '../json/');
// Kolory tekstu
$font_colors = loadJsonFile('font-colors.json', [], '../json/');
// Grawery => położenie i wyrównanie 
$grawer_positions = loadJsonFile('grawer-positions.json', [], '../json/');
// Tekst => położenie i wyrównanie 
$text_positions = loadJsonFile('text-positions.json', [], '../json/');
// Rozmiar tekstu
$sizes = loadJsonFile('font-sizes.json', [], '../json/');
// Formatowanie tekstu
$styles = loadJsonFile('font-styles.json', [], '../json/');
// Czcionki
$fonts = loadJsonFile('fonts.json', [], '../json/');
// Flags => położenie i wyrównanie
$flag_positions = loadJsonFile('flag-positions.json', [], '../json/');
// =========================================


// Załaduj konfigurację admina (zawiera secret_key)
$admin_config = require '../config/admin.php';


// Funkcja deszyfrowania
function decryptData($data, $key) {
    $data = base64_decode($data); // Dekodowanie z Base64
    $ivLength = openssl_cipher_iv_length('AES-128-CBC'); // Długość IV
    $iv = substr($data, 0, $ivLength); // Pobierz IV z początku danych
    $encrypted = substr($data, $ivLength); // Pobierz zaszyfrowane dane
    return openssl_decrypt($encrypted, 'AES-128-CBC', $key, 0, $iv); // Odszyfrowanie danych
}

// Funkcja wySzukania zamówienia po $key [date|timestamp]
function findOrderBy($orders, $key, $value, $secretKey) {

    foreach ($orders as $index => $encryptedOrder) {
        // Odszyfruj dane
        $json = decryptData($encryptedOrder, $secretKey);
        
        if ($json === false) {
            echo "<p><strong>Decryption failed:</strong>Zamówienia nie udało się odszyfrować!</strong></p>";
            continue;
        }

        // Dekodowanie JSON
        $orderData = json_decode($json, true);
        if (!is_array($orderData)) continue;

        if (isset($orderData[$key]) && md5($orderData[$key]) === $value) {
            return $orderData; // Zwraca pierwsze pasujące zamówienie
        }

    }

    return null; // Nie znaleziono
}






// Wczytaj plik zamówień
if (!file_exists($admin_config['admin']['save_to_file'])) {
    die("Plik zamówień nie istnieje.");
}

$orders = file($admin_config['admin']['save_to_file'], FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if (!$orders) {
    die("Brak zamówień do wyświetlenia.");
}


// Szukaj po DATA TIMESTAMP:
$foundOrder = findOrderBy($orders, 'timestamp', $hash, $admin_config['admin']['secret_key']);


?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Szczegóły zamówienia - Hussaria Electra</title>
    <link rel="icon" href="../img/hussaria-electra-100x100.png" sizes="32x32">
    <!-- Preconnecty -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Adobe Fonts -->
    <link rel="stylesheet" href="https://use.typekit.net/vfx4swx.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo version('../css/style.css') ?>">
</head>
<body>
<style type="text/css">
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        color: #000;
        background:#e1e1e1;
    }
    section {
        margin: 20px auto;
        padding: 20px;
        width: 80%;
        background: #fff;
        border-radius: 10px;
    }
    ul {
        margin: 0;
        padding: 0;
        list-style-position: inside;
    }
    li {
        padding: 5px;
        color: #707070;
    }

    .price {
        font-size: .8em;
        color: #000;
        padding: .25em .75em;
        background: #efefef;
        border-radius: 10px;
    }
    .prepayment {
        font-size: 1.2rem;
        color: #b11800;
    }
    .total {
        font-size: 1.25rem;
        color: #a14c00;
    }
    h4 {
        margin: .5rem 0;
        padding: .5rem;
        background: #d7def5;
    }
    p {
        padding: 5px;
    }
    .wait,
    .done {
        color: #000000;
        padding: 2px 6px;
        border-radius: 2em;
    }
    .wait {
        background: #f2b017;
    }
    .done {
        background: #b3e9a3;
    }
    .custom {
        position: relative;
        display: inline-block;
        padding: 10px;
        background: #f7f7f7;
        border: 1px dashed #bbbbbb;
    }
    .custom::before {
        content: '';
        position: absolute;
        width: 10px;
        height: 10px;
        left: -5px;
        border-radius: 3px;
        background: #b11800;
    }
    .custom strong {
        color: #d3d3d3;
    }
    .name {
        display: inline-block;
        width: 305px;
        text-transform: uppercase;
        color: #000;
    }
    .place {
        width: 100px;
        display: inline-block;
        color: #838383;
        text-transform: uppercase;
        font-size: 0.65em;
    }
    .text {
        width: 200px;
        display: inline-block;
        color: #000;
        font-family: system-ui;
    }
    span.show_color {
        display: inline-block;
        width: 3em;
        height: 3em;
        border-radius: 3px;
        margin: 0 .15em;
        vertical-align: middle;
        border: 1px solid #333;
    }
    ul.order li span {
        display: inline-block;
        margin: 0 1em;
        padding: .25em .5em;
        font-size: .75em;
        color: #fff;
        background: #666;
        border-radius: 5px;
    }
</style>


<?php

    if ($foundOrder) {
        // $foundOrder is a single order array, not an array of orders
        $orderData = $foundOrder;

        // echo '<pre>'. print_r($foundOrder, true) .'</pre>';

        if ($foundOrder['main_product']) {

            // TYLKO PAKA
            echo '<div id="order_paka_color"';
            echo 'data-ral="'. htmlspecialchars($foundOrder['main_product']['color']['ral']).'"';
            echo 'data-hex="'. htmlspecialchars($foundOrder['main_product']['color']['hex']) .'">';
            echo '<h2>Kolor paki: '. htmlspecialchars($foundOrder['main_product']['color']['name']) .' <small>['. htmlspecialchars($foundOrder['main_product']['color']['ral']) .' | '. htmlspecialchars($foundOrder['main_product']['color']['hex']) .']</small></h2>';
            echo '</div>';

            echo '<div class="col-12 configurator__model" style="height: 900px;">';
                echo '<div id="paka" class="configurator__model__view text-center">';
                $svgPath = '../svg/paka.svg';
                if (file_exists($svgPath)) {
                    echo file_get_contents($svgPath);
                } else {
                    echo '<!-- SVG file not found: ' . htmlspecialchars($svgPath) . ' -->';
                }
                echo '</div>';
                echo '</div>';
            echo '</div>';

            // PERSONALIZACJA
            if ($foundOrder['main_product']['customization']) {

                echo '<h2>Personalizacja:</h2>';
                
                if ($foundOrder['main_product']['customization'][0]) {

                    // ustawienia JSON dla pozycji ALIGN
                    $json_toppanel_position = $text_positions['toppanel'][0]['align'];

                    $jsonTopPanelAlignOptions = [];

                    foreach ($json_toppanel_position as $alignKey => $topPanel) {
                        // Jeśli nie ustawiono align w zamówieniu, pobierz domyślne (current == 1)
                        if (empty($foundOrder['main_product']['customization'][0]['align'])) {
                            if (isset($topPanel['current']) && $topPanel['current'] == 1) {
                                $jsonTopPanelAlignOptions = $topPanel;
                                break;
                            }
                        } else {
                            // Jeśli align jest ustawiony, znajdź po nazwie (multi-lang)
                            // Porównujemy po nazwie (np. "Do prawej", "Do lewej", "Wyśrodkuj")
                            if (
                                isset($topPanel['name']) &&
                                trim(mb_strtolower($topPanel['name']['pl'])) === trim(mb_strtolower($foundOrder['main_product']['customization'][0]['align']))
                            ) {
                                $jsonTopPanelAlignOptions = $topPanel;
                                break;
                            }
                        }
                    }

                    // ustawienia JSON dla pozycji SIZE
                    $json_toppanel_fontsize = $sizes;

                    $jsonTopPanelFontSizeOptions = [];

                    foreach ($json_toppanel_fontsize as $sizeKey => $topPanel) {
                        // Jeśli nie ustawiono size w zamówieniu, pobierz domyślne (current == 1)
                        if (empty($foundOrder['main_product']['customization'][0]['size'])) {
                            if (isset($topPanel['current']) && $topPanel['current'] == 1) {
                                $jsonTopPanelFontSizeOptions = $topPanel;
                                break;
                            }
                        } else {
                            // Jeśli size jest ustawiony, znajdź po nazwie (multi-lang)
                            // Porównujemy po nazwie (np. "Duży", "Średni")
                            if (
                                isset($topPanel['name']) &&
                                (
                                    // Pobierz ostatni wyraz z size i porównaj z name
                                    // Sprawdź czy którykolwiek język w name pasuje do ostatniego wyrazu z size lub całego size
                                    isset($topPanel['name']) && (
                                        in_array(
                                            trim(mb_strtolower(preg_replace('/^.*\s+/', '', $foundOrder['main_product']['customization'][0]['size']))),
                                            array_map('mb_strtolower', array_map('trim', $topPanel['name']))
                                        )
                                        ||
                                        in_array(
                                            trim(mb_strtolower($foundOrder['main_product']['customization'][0]['size'])),
                                            array_map('mb_strtolower', array_map('trim', $topPanel['name']))
                                        )
                                    )
                                )
                            ) {
                                $jsonTopPanelFontSizeOptions = $topPanel;
                                break;
                            }
                        }
                    }

                    // ustawienia JSON dla FORMAT
                    $json_toppanel_fontstyle = $styles;

                    $jsonTopPanelFontStyleOptions = [];

                    // Zamówienie może mieć format jako string z przecinkami lub tablicę
                    $orderFormats = $foundOrder['main_product']['customization'][0]['format'] ?? '';
                    if (is_string($orderFormats)) {
                        // Usuwamy "Style:" i dzielimy po przecinku
                        $orderFormats = array_map('trim', explode(',', str_replace('Style:', '', $orderFormats)));
                    } elseif (is_array($orderFormats)) {
                        $orderFormats = array_map('trim', $orderFormats);
                    } else {
                        $orderFormats = [];
                    }

                    // Szukamy pierwszego pasującego stylu z JSON
                    foreach ($json_toppanel_fontstyle as $styleKey => $topPanel) {
                        if (!isset($topPanel['name'])) continue;
                        $names = is_array($topPanel['name']) ? $topPanel['name'] : [$topPanel['name']];
                        foreach ($orderFormats as $format) {
                            foreach ($names as $name) {
                                if (mb_strtolower(trim($name)) === mb_strtolower(trim($format))) {
                                    $jsonTopPanelFontStyleOptions = $topPanel;
                                    break 3; // znaleziono, wychodzimy z pętli
                                }
                            }
                        }
                    }

                    // Jeśli nie znaleziono, ustaw domyślny styl
                    if (empty($jsonTopPanelFontStyleOptions)) {
                        $jsonTopPanelFontStyleOptions['style'] = 'normal';
                    }

                    



                    // print_r($json_toppanel_position);
                    echo '<h5 id="toppanel" 
                            data-value="'. htmlspecialchars($foundOrder['main_product']['customization'][0]['text']) .'"
                            data-color="'. htmlspecialchars($foundOrder['main_product']['customization'][0]['color']) .'"
                            data-anchor="'. htmlspecialchars($jsonTopPanelAlignOptions['anchor']) .'"
                            data-x="'. htmlspecialchars($jsonTopPanelAlignOptions['x']) .'"
                            data-y="'. htmlspecialchars($jsonTopPanelAlignOptions['y']) .'"
                            data-transform="'. htmlspecialchars($jsonTopPanelAlignOptions['transform']) .'"
                            data-fontsize="'. htmlspecialchars($jsonTopPanelFontSizeOptions['size']) .'"
                            data-fontformat="'. htmlspecialchars($jsonTopPanelFontStyleOptions['style']) .'"
                            >Nadstawka:</h5>';
                    echo '<ul class="order">';
                        echo '<li>Treść: '. htmlspecialchars($foundOrder['main_product']['customization'][0]['text']) .'</li>';
                        echo '<li>Kolor: <span class="show_color" style="background: '. htmlspecialchars($foundOrder['main_product']['customization'][0]['color']) .'"></span><span>'. htmlspecialchars($foundOrder['main_product']['customization'][0]['color']) .'</span></li>';
                        
                        if ($foundOrder['main_product']['customization'][0]['align']) {
                            echo '<li>Wyrównanie: '. htmlspecialchars($foundOrder['main_product']['customization'][0]['align']) .'</li>';
                        } else {
                            echo '<li>Wyrównanie: '. $jsonTopPanelAlignOptions['name']['pl'] .' <span>[domyślnie]</span></li>';
                        }

                        if ($foundOrder['main_product']['customization'][0]['font']) {
                            echo '<li>'. htmlspecialchars($foundOrder['main_product']['customization'][0]['font']) .'</li>';
                        } else {
                            echo '<li>Czcionka: --- <span>[domyślna ze strony]</span></li>';
                        }

                        if ($foundOrder['main_product']['customization'][0]['size']) {
                            echo '<li>'. htmlspecialchars($foundOrder['main_product']['customization'][0]['size']) .'</li>';
                        } else {
                            echo '<li>Rozmiar: '. $jsonTopPanelFontSizeOptions['name']['pl'] .' <span>[domyślnie]</span></li>';
                        }

                        if ($foundOrder['main_product']['customization'][0]['format']) {
                            echo '<li>'. htmlspecialchars($foundOrder['main_product']['customization'][0]['format']) .'</li>';
                        } else {
                            echo '<li>Formatowanie: <span>[domyślnie]</span></li>';
                        }
                    echo '</ul>';
                }

                if ($foundOrder['main_product']['customization'][1]) {

                    // ustawienia JSON dla pozycji ALIGN
                    $json_toppanel_position = $text_positions['door'][0]['align'];

                    $jsonTopPanelAlignOptions = [];

                    foreach ($json_toppanel_position as $alignKey => $topPanel) {
                        // Jeśli nie ustawiono align w zamówieniu, pobierz domyślne (current == 1)
                        if (empty($foundOrder['main_product']['customization'][1]['align'])) {
                            if (isset($topPanel['current']) && $topPanel['current'] == 1) {
                                $jsonTopPanelAlignOptions = $topPanel;
                                break;
                            }
                        } else {
                            // Jeśli align jest ustawiony, znajdź po nazwie (multi-lang)
                            // Porównujemy po nazwie (np. "Do prawej", "Do lewej", "Wyśrodkuj")
                            if (
                                isset($topPanel['name']) &&
                                trim(mb_strtolower($topPanel['name']['pl'])) === trim(mb_strtolower($foundOrder['main_product']['customization'][1]['align']))
                            ) {
                                $jsonTopPanelAlignOptions = $topPanel;
                                break;
                            }
                        }
                    }

                    // ustawienia JSON dla pozycji SIZE
                    $json_toppanel_fontsize = $sizes;

                    $jsonTopPanelFontSizeOptions = [];

                    foreach ($json_toppanel_fontsize as $sizeKey => $topPanel) {
                        // Jeśli nie ustawiono size w zamówieniu, pobierz domyślne (current == 1)
                        if (empty($foundOrder['main_product']['customization'][1]['size'])) {
                            if (isset($topPanel['current']) && $topPanel['current'] == 1) {
                                $jsonTopPanelFontSizeOptions = $topPanel;
                                break;
                            }
                        } else {
                            // Jeśli size jest ustawiony, znajdź po nazwie (multi-lang)
                            // Porównujemy po nazwie (np. "Duży", "Średni")
                            if (
                                isset($topPanel['name']) &&
                                (
                                    // Pobierz ostatni wyraz z size i porównaj z name
                                    // Sprawdź czy którykolwiek język w name pasuje do ostatniego wyrazu z size lub całego size
                                    isset($topPanel['name']) && (
                                        in_array(
                                            trim(mb_strtolower(preg_replace('/^.*\s+/', '', $foundOrder['main_product']['customization'][1]['size']))),
                                            array_map('mb_strtolower', array_map('trim', $topPanel['name']))
                                        )
                                        ||
                                        in_array(
                                            trim(mb_strtolower($foundOrder['main_product']['customization'][1]['size'])),
                                            array_map('mb_strtolower', array_map('trim', $topPanel['name']))
                                        )
                                    )
                                )
                            ) {
                                $jsonTopPanelFontSizeOptions = $topPanel;
                                break;
                            }
                        }
                    }

                    // ustawienia JSON dla FORMAT
                    $json_toppanel_fontstyle = $styles;

                    $jsonTopPanelFontStyleOptions = [];

                    // Zamówienie może mieć format jako string z przecinkami lub tablicę
                    $orderFormats = $foundOrder['main_product']['customization'][0]['format'] ?? '';
                    if (is_string($orderFormats)) {
                        // Usuwamy "Style:" i dzielimy po przecinku
                        $orderFormats = array_map('trim', explode(',', str_replace('Style:', '', $orderFormats)));
                    } elseif (is_array($orderFormats)) {
                        $orderFormats = array_map('trim', $orderFormats);
                    } else {
                        $orderFormats = [];
                    }

                    // Szukamy pierwszego pasującego stylu z JSON
                    foreach ($json_toppanel_fontstyle as $styleKey => $topPanel) {
                        if (!isset($topPanel['name'])) continue;
                        $names = is_array($topPanel['name']) ? $topPanel['name'] : [$topPanel['name']];
                        foreach ($orderFormats as $format) {
                            foreach ($names as $name) {
                                if (mb_strtolower(trim($name)) === mb_strtolower(trim($format))) {
                                    $jsonTopPanelFontStyleOptions = $topPanel;
                                    break 3; // znaleziono, wychodzimy z pętli
                                }
                            }
                        }
                    }

                    // Jeśli nie znaleziono, ustaw domyślny styl
                    if (empty($jsonTopPanelFontStyleOptions)) {
                        $jsonTopPanelFontStyleOptions['style'] = 'normal';
                    }

                    



                    // print_r($json_toppanel_position);
                    echo '<h5 id="toppanel" 
                            data-value="'. htmlspecialchars($foundOrder['main_product']['customization'][0]['text']) .'"
                            data-color="'. htmlspecialchars($foundOrder['main_product']['customization'][0]['color']) .'"
                            data-anchor="'. htmlspecialchars($jsonTopPanelAlignOptions['anchor']) .'"
                            data-x="'. htmlspecialchars($jsonTopPanelAlignOptions['x']) .'"
                            data-y="'. htmlspecialchars($jsonTopPanelAlignOptions['y']) .'"
                            data-transform="'. htmlspecialchars($jsonTopPanelAlignOptions['transform']) .'"
                            data-fontsize="'. htmlspecialchars($jsonTopPanelFontSizeOptions['size']) .'"
                            data-fontformat="'. htmlspecialchars($jsonTopPanelFontStyleOptions['style']) .'"
                            >Drzwi:</h5>';
                    echo '<ul class="order">';
                        echo '<li>Treść: '. htmlspecialchars($foundOrder['main_product']['customization'][1]['text']) .'</li>';
                        echo '<li>Kolor: <span class="show_color" style="background: '. htmlspecialchars($foundOrder['main_product']['customization'][1]['color']) .'"></span><span>'. htmlspecialchars($foundOrder['main_product']['customization'][1]['color']) .'</span></li>';
                        
                        if ($foundOrder['main_product']['customization'][1]['align']) {
                            echo '<li>Wyrównanie: '. htmlspecialchars($foundOrder['main_product']['customization'][1]['align']) .'</li>';
                        } else {
                            echo '<li>Wyrównanie: '. $jsonTopPanelAlignOptions['name']['pl'] .' <span>[domyślnie]</span></li>';
                        }

                        if ($foundOrder['main_product']['customization'][1]['font']) {
                            echo '<li>'. htmlspecialchars($foundOrder['main_product']['customization'][1]['font']) .'</li>';
                        } else {
                            echo '<li>Czcionka: --- <span>[domyślna ze strony]</span></li>';
                        }

                        if ($foundOrder['main_product']['customization'][1]['size']) {
                            echo '<li>'. htmlspecialchars($foundOrder['main_product']['customization'][1]['size']) .'</li>';
                        } else {
                            echo '<li>Rozmiar: '. $jsonTopPanelFontSizeOptions['name']['pl'] .' <span>[domyślnie]</span></li>';
                        }

                        if ($foundOrder['main_product']['customization'][1]['format']) {
                            echo '<li>'. htmlspecialchars($foundOrder['main_product']['customization'][1]['format']) .'</li>';
                        } else {
                            echo '<li>Formatowanie: <span>[domyślnie]</span></li>';
                        }
                    echo '</ul>';
                }



                

                if (!empty($foundOrder['main_product']['customization'][2])) {
                    echo '<h5>Nadstawka:</h5>';
                    echo '<ul>';
                        echo '<li>Treść: '. htmlspecialchars($foundOrder['main_product']['customization'][2]['text']) .'</li>';
                        echo '<li>Kolor: <span class="show_color" style="background: '. htmlspecialchars($foundOrder['main_product']['customization'][2]['color']) .'"></span>'. htmlspecialchars($foundOrder['main_product']['customization'][2]['color']) .'</li>';
                        
                        if ($foundOrder['main_product']['customization'][2]['align']) {
                            echo '<li>Wyrównanie: '. htmlspecialchars($foundOrder['main_product']['customization'][2]['align']) .'</li>';
                        } else {
                            echo '<li>Wyrównanie: Domyślne</li>';
                        }

                        if ($foundOrder['main_product']['customization'][2]['font']) {
                            echo '<li>'. htmlspecialchars($foundOrder['main_product']['customization'][2]['font']) .'</li>';
                        } else {
                            echo '<li>Czcionka: Domyślna</li>';
                        }

                        if ($foundOrder['main_product']['customization'][2]['size']) {
                            echo '<li>'. htmlspecialchars($foundOrder['main_product']['customization'][2]['size']) .'</li>';
                        } else {
                            echo '<li>Rozmiar: Domyślny</li>';
                        }

                        if ($foundOrder['main_product']['customization'][2]['format']) {
                            echo '<li>'. htmlspecialchars($foundOrder['main_product']['customization'][2]['format']) .'</li>';
                        } else {
                            echo '<li>Formatowanie: Domyślne</li>';
                        }
                    echo '</ul>';
                }
                

            }

        }

        echo "<section>";
        echo "<h4>ID<small style='font-size:15px; color:#007683; font-weight:400'>[{$orderData['timestamp']}]</small></h4>";

        echo "<p><strong>Zamówienie:</strong></p>";
        $main = $orderData['main_product'];
        echo "<ul>";
        echo "<li><strong>Produkt:</strong> {$main['name']} - {$main['price']} {$main['currency']}</li>";

        // Kolor
        if (!empty($main['color'])) {
            $color = $main['color'];
            echo "<li><strong>Kolor:</strong> {$color['name']} ({$color['hex']} / {$color['ral']}) + {$color['price']} {$color['currency']}</li>";
        }

        // Personalizacja
        if (!empty($main['customization'])) {
            foreach ($main['customization'] as $custom) {
                echo "<li><strong>{$custom['title']}:</strong> {$custom['text']} | {$custom['align']}, {$custom['font']}, {$custom['size']}, {$custom['color']} | +{$custom['price']} {$custom['currency']}</li>";
            }
        }

        // Flaga
        if (!empty($main['flag'])) {
            $flag = $main['flag'];
            echo "<li><strong>{$flag['title']}:</strong> {$flag['country']} + {$flag['price']} {$flag['currency']}</li>";
        }
        echo "</ul>";

        echo "<p><strong>Dodatkowo:</strong></p>";
        echo "<ul>";
        if (!empty($orderData['extra_products'])) {
            foreach ($orderData['extra_products'] as $extra) {
                $name = htmlspecialchars($extra['name']);
                $color = !empty($extra['color']) ? ' (' . htmlspecialchars($extra['color']) . ')' : '';
                $price = htmlspecialchars($extra['price']);
                $quantity = htmlspecialchars($extra['quantity']);
                $total = htmlspecialchars($extra['total']);
                $currency = htmlspecialchars($extra['currency']);

                echo "<li>{$name}{$color} — {$quantity} szt. x {$price} {$currency} = {$total} {$currency}</li>";
            }
        }
        echo "</ul>";
        echo "<hr>";
        echo "<p><small>Data zamówienia: {$orderData['date']}</small></p>";
        echo "</section>";
    } else {
        echo "<section><p>Nie znaleziono zamówienia.</p></section>";
    }
?>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const orderPakaColor = document.getElementById('order_paka_color');
 
    const frontPanel    = document.getElementById('front-panel'); // front panel w SVG
    const leftPanel     = document.getElementById('left-panel'); // lewy panel w SVG
    const glitterLayer  = document.getElementById('glitter-layer'); // // warstwa brokatu w SVG

  
    // 1. Ustaw kolor PAKI
    if (orderPakaColor && frontPanel && leftPanel) {
        frontPanel.setAttribute('fill', orderPakaColor.dataset.hex);
        leftPanel.setAttribute('fill', orderPakaColor.dataset.hex);

        // Usuń wybrane style
        frontPanel.style.removeProperty('mix-blend-mode');
        // frontPanel.style.removeProperty('opacity');
        leftPanel.style.removeProperty('mix-blend-mode');
        // leftPanel.style.removeProperty('opacity');

        // Sprawdź czy warstwa brokatu istnieje i czy kolor jest z kategorii 'brokatowe'
        // Lista kolorów z brokatem (HEX, małe litery)
        const glitterColors = ['#925387']; // Kolory brokatowe

        if (glitterLayer && glitterColors.includes(orderPakaColor.dataset.hex.toLowerCase())) {
            glitterLayer.style.display = 'block';
        }
    }


    // 2. Ustaw Personaliuzacje PAKI
    // SVG
    const prevText_toppanel = document.getElementById('previewText_toppanel'); // napis w nadstawce w SVG
    const previewText_door  = document.getElementById('previewText_door');     // napis na drzwiach w SVG
    const previewText_side  = document.getElementById('previewText_side');     // napis z boku w SVG
    
    // zamówienie
    const toppanel  = document.getElementById('toppanel'); // napis w zamówieniu

    if (toppanel && prevText_toppanel) {
        
        prevText_toppanel.textContent = toppanel.dataset.value;
        prevText_toppanel.setAttribute('fill', toppanel.dataset.color);
        prevText_toppanel.setAttribute('text-anchor', toppanel.dataset.anchor);
        prevText_toppanel.setAttribute('x', toppanel.dataset.x);
        prevText_toppanel.setAttribute('y', toppanel.dataset.y);
        prevText_toppanel.setAttribute('transform', toppanel.dataset.transform);
        prevText_toppanel.setAttribute('font-size', toppanel.dataset.fontsize);
        
    }



   

  });
</script>

</body>
</html>