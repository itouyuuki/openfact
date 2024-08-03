<?php
$base = '.';
require_once $base . '/meta.php';
$title = '【TBD】';
$description = '【TBD】';
$keywords = '【TBD】';
$local_path = '/'; // サイトのルートからのパスを記入
$og_image = '【TBD】';  // 
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<?php include_once $base . '/tracking.php' ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= "$title | $site_name" ?></title>
<meta name="description" content="<?= $description ?>">
<link rel="icon" href="<?= $base . $favicon ?>">  
<link rel="canonical" href="<?= $site_url . $local_path ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="<?= $site_name ?>">
<meta property="og:url" content="<?= $site_url . $local_path ?>">
<meta property="og:title" content="<?= $title ?>">
<meta property="og:description" content="<?= $description ?>">
<meta property="og:image" content="<?= $site_url . $og_image ?>">
<link rel="stylesheet" href="<?= $base ?>/common.css?v=1">
<link rel="stylesheet" href="top.css?v=1">
<link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&family=Zen+Old+Mincho:wght@400;500;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
<?php include $base . '/header.php' ?>
    <div class="fv">
    </div>
    <section class="main">
        <p>
            NEXT RESERVATION株式会社は、長野県上田市のIT企業です。地元の上田市・東御市・坂城町の企業を中心に、ITを使用しマーケティング採用戦略、経営課題の解決を支援しています。また、長野県内の企業限定の求人サイト「めくろうワークス」を運営中です。
            　どの事業も、対話からお客様を知ることを第一とし、丁寧な取材をして第三者目線の提案をおこなっています。
        </p>
    </section>
    <?php include $base . '/footer.php'; ?>
</body>