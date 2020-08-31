<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-database.js"></script>


<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCCijUwFO4BGmG5sZPoviLS31aWufuC3V4",
    authDomain: "mypage-186cc.firebaseapp.com",
    databaseURL: "https://mypage-186cc.firebaseio.com",
    projectId: "mypage-186cc",
    storageBucket: "mypage-186cc.appspot.com",
    messagingSenderId: "507315250971",
    appId: "1:507315250971:web:a6d3cc7cac3377f9ecd5be"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  var myNAme = prompt("enter your name");

  function sendMessage()
  {
    var message = document.getElementById("message").value;
    firebase.database().ref("messages").push().set({
            "sender": myNAme,
            "message": message

    return false;
  }
</script>

<form onsubmit="return sendMessage();">
  <input id ="message" placeholder="enter a message" autocomplete="off">

  <input type="submit">
</form>