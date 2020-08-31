<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-database.js"></script>


<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyDg_Ze_i4QxElh87_ks93c1gf-Dn5P-lHE",
    authDomain: "testing-page-909e0.firebaseapp.com",
    databaseURL: "https://testing-page-909e0.firebaseio.com",
    projectId: "testing-page-909e0",
    storageBucket: "testing-page-909e0.appspot.com",
    messagingSenderId: "312549787776",
    appId: "1:312549787776:web:19f1ebc9da442e943f7e65"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

   var myName = prompt("Enter your name");

   function sendMessage() {
        // get message
        var message = document.getElementById("message").value;
 
        // save in database
        firebase.database().ref("messages").push().set({
            "sender": myName,
            "message": message
        });
 
        // prevent form from submitting
        return false;
</script>

<form onsubmit="return sendMessage();">
    <input id="message" placeholder="Enter message" autocomplete="off">
 
    <input type="submit">
</form>