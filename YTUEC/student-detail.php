<?php

$id = $_REQUEST['uid'];

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
<h1>Student Detail</h1>

<div class="content">
    <ul id="student-detail"></ul>
</body>

<script src="config.js"></script>

<script>
    const studentDetail = document.querySelector('#student-detail');


const displayImg = (url, id ) => {
    const img = document.createElement('img');
    img.src = url;
    img.id = id;
    return img;
  }

// create element & render cafe
function getstudent(doc){
    
    let li = document.createElement('li');
    let name = document.createElement('span');
    let year = document.createElement('span');
    let roll = document.createElement('span');
    let img = displayImg(doc.data().studentPhoto,doc.id);
 
    li.setAttribute('data-id', doc.id);
    name.textContent = doc.data().studentName;
    year.textContent = doc.data().studentYear;
    roll.textContent = doc.data().studentRoll;

    li.appendChild(img);
    li.appendChild(name);
    li.appendChild(roll);
    li.appendChild(year);

    studentDetail.appendChild(li);
}

// getting data
db.collection('users').where('uid','==','<?= $id?>').get().then(snapshot => {
    snapshot.docs.forEach(doc => {
        getstudent(doc);
    });
});

</script>

</html>