const studentList = document.querySelector('#student-list');


const displayImg = (url, id ) => {
    const img = document.createElement('img');
    img.src = url;
    img.id = id;
    return img;
  }


function renderStudent(doc){
    
    let li = document.createElement('li');
    let name = document.createElement('span');
    let year = document.createElement('span');
    let img = displayImg(doc.data().studentPhoto,doc.id);
    let cross =  document.createElement('a');

    cross.href = "student-detail.php?uid="+doc.data().uid;

    li.setAttribute('data-id', doc.id);
    name.textContent = doc.data().studentName;
    year.textContent = doc.data().studentRoll;
    cross.textContent = 'Go Detail';
   

    li.appendChild(img);
    li.appendChild(name);
     li.appendChild(year);
     li.appendChild(cross);
    

    studentList.appendChild(li);
}

db.collection('users').get().then(snapshot => {
    snapshot.docs.forEach(doc => {
        renderStudent(doc);
    });
});

