<?php

$news = $_REQUEST['newsText'];
$date = $_REQUEST['date'];
$id = $_REQUEST['id'];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://www.gstatic.com/firebasejs/5.0.3/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/5.0.3/firebase-firestore.js"></script>

    <title>Document</title>
</head>
<body>
    
</body>
 <script src="config.js"></script>
<script>
     db.collection('news').doc('<?= $id?>').update({
        newsText: '<?= $news?>',
        date: '<?= $date?>',
    }).then(() =>{
        return window.location.replace('news-list.html');
    }
    );
    
</script>
</html>

