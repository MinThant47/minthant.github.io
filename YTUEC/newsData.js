const newsList = document.querySelector('#news-list');


const displayImg = (url, id ) => {
    const img = document.createElement('img');
    img.src = url;
    img.id = id;
    return img;
  }

// create element & render cafe
function renderNews(doc){
    
    let li = document.createElement('li');
    let name = document.createElement('p');
    let date = document.createElement('p');
    let img = displayImg(doc.data().newsPhoto,doc.id);
    let cross =  document.createElement('a');
    let del =  document.createElement('a');

    cross.href = "news-edit.php?id="+doc.id + "&&" + "news="+doc.data().newsText+ "&&" + "date="+doc.data().date;
    del.href = "news-delete.php?id="+doc.id;


    li.setAttribute('data-id', doc.id);
    name.textContent = doc.data().newsText;
    date.textContent = doc.data().date;
    cross.textContent = 'Edit';
    del.textContent = 'Delete';
   
    li.appendChild(img);
    li.appendChild(name);
     li.appendChild(date);
     li.appendChild(cross);
     li.appendChild(del);
    

    newsList.appendChild(li);
}

// getting data
db.collection('news').orderBy('date', 'desc').get().then(snapshot => {
    snapshot.docs.forEach(doc => {
        renderNews(doc);
    });
});

