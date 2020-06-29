
  var firebaseConfig = {
    apiKey: "AIzaSyBwL2U31DJvuTFukWTEoJAUtaqhFs9DHhU",
    authDomain: "ecdb-june2020-9854a.firebaseapp.com",
    databaseURL: "https://ecdb-june2020-9854a.firebaseio.com",
    projectId: "ecdb-june2020-9854a",
    storageBucket: "ecdb-june2020-9854a.appspot.com",
    messagingSenderId: "319346996251",
    appId: "1:319346996251:web:6ad73724339d7784d134be",
    measurementId: "G-G65X3LZP18"
  };
  
  firebase.initializeApp(firebaseConfig);
  const db = firebase.firestore();
  db.settings({timestampsInSnapshots: true});

