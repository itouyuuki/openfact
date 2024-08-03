<?php
$base = '.';
require_once $base . '/meta.php';
$title = '【TBD】';
$description = '【TBD】';
$keywords = '【TBD】';
$local_path = '/'; // サイトのルートからのパスを記入
$og_image = '【TBD】';  // 
$currentDate = new DateTime();// 現在の日時を取得
$targetDate = new DateTime('2024-12-31'); // 目標日時をここで登録する
$interval = $currentDate->diff($targetDate);// 日数の差をここで計算
$daysRemaining = $interval->format('%a');// 残りの日数を取得
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
<div class="top-back" id="wrap">
    <?php include $base . '/header.php' ?>
    <section id="fv" class="g">
        <div class="fv-box">
            <p>開幕まで<br>あと<b> <?php echo $daysRemaining ?> </b>日</p>
            <img src="title.png" alt="">
        </div>
        <div class="eventdate">
            <p>開催日：</p>
            <p>2024年9月13日(金)、</p>
            <p>14日(土)</p>
        </div>
    </section>
</div>
<section id="intro">
    <div class="intro-box">
        <p>
            ものづくりの
        </p>
        <div class="intro-text">
            <p>「<b>仕事</b>に触れる」</p>
            <p>「<b>技</b>に触れる」</p>
            <p>「<b>思い</b>に触れる」</p>
        </div>
    </div>
    <p>この秋、上田市と坂城町の工場が特別に解放される。</p>
    <p>オープンファクトリーイベント「うえだ・さかき産業の陣」を開催。</p>
    <p>工場見学やものづくり体験を通じて、</p>
    <p>地元の誇るべき産業、こだわりの技術の数々、</p>
    <p>職人たちの熱き魂をぜひ体感してください。</p>
    <p>普段入ることが出来ない20社以上の工場が一斉に一般公開し、</p>
    <p>あなたを待っています。</p>
</section>
<section class="open">
    <div class="openback">
        <p>
            いざ、<br>
            「うえだ・さかき産業の陣」<br>
            <b>開幕</b>
        </p>
    </div>
</section>
<div class="backwindw"></div>
<section class="company comsec">
    <h2>参加企業一覧</h2>
    <dl class="overview">
        <div>
            <dt>開催日</dt>
            <dd>
                2024年9月13日(金)，14日(土) ※企業によって公開日は異なります。
            </dd>
        </div>
        <div>
            <dt>開催時間</dt>
            <dd>
                各社の見学・体験時間　9:30～17:00  イベント受付時間　9:00～16:00　※企業によって公開時間は異なります。
            </dd>
        </div>
        <div>
            <dt>開催地</dt>
            <dd>
                長野県 上田市、坂城町の企業、飲食店など
            </dd>
        </div>
        <div>
            <dt>主催</dt>
            <dd class="iinkai">
                産業の陣 実行委員会
            </dd>
        </div>
    </dl>
</section>
<section class="openview comsec">
    <h2>開催概要</h2>
    <dl class="overview">
        <div>
            <dt>開催日</dt>
            <dd>
                2024年9月13日(金)，14日(土) ※企業によって公開日は異なります。
            </dd>
        </div>
        <div>
            <dt>開催時間</dt>
            <dd>
                各社の見学・体験時間　9:30～17:00  イベント受付時間　9:00～16:00　※企業によって公開時間は異なります。
            </dd>
        </div>
        <div>
            <dt>開催地</dt>
            <dd>
                長野県 上田市、坂城町の企業、飲食店など
            </dd>
        </div>
        <div>
            <dt>主催</dt>
            <dd class="iinkai">
                産業の陣 実行委員会
            </dd>
        </div>
    </dl>
</section>
<div class="backwindw"></div>
    <?php include $base . '/footer.php'; ?>
</body>