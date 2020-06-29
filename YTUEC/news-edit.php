<?php

$id = $_REQUEST['id'];
$news = $_REQUEST['news'];
$date = $_REQUEST['date'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.gstatic.com/firebasejs/5.0.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.3/firebase-firestore.js"></script>
</head>
<body>
<h1>News Update</h1>
<form action="news-update.php" method="POST">
    <input type="hidden" name="id" value="<?= $id?>">
    <input type="text" name="newsText" value="<?= $news?>">
    <input type="text" name="date" value="<?= $date?>">
    <input type="submit" value="Update">
</form>
<div class="content">
    <ul id="news-detail"></ul>
</body>

<script src="config.js"></script>

</html>