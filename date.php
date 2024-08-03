<?php
$currentDate = new DateTime();// 現在の日時を取得
$targetDate = new DateTime('2024-12-31'); // 目標日時をここで登録する
$interval = $currentDate->diff($targetDate);// 日数の差をここで計算
$daysRemaining = $interval->format('%a');　// 残りの日数を取得
$targetDay = $targetDate->format('d');　//  目標日の「日」を取得
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>残りの日数表示</title>
</head>
<body>
    <h1>目標日までの残り日数</h1>
    <p>目標日（<?php echo $targetDay; ?>日）まであと <strong><?php echo $daysRemaining; ?></strong> 日です。</p>
</body>
</html>