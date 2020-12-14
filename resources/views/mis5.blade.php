<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Evrískon</title>

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>

            html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
            .w3-sidebar 
            {
                z-index: 3;
                width: 250px;
                top: 43px;
                bottom: 0;
                height: inherit;
            }
        </style>

        <!-- Styles -->


        <style>
            body {
                font-family: 'Nunito';
                background-image: url("{{ URL::to('/img/CamoBack.jpg') }}");
            }
        </style>
    </head>
    <body class="antialiased">
        

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="/" class="w3-bar-item w3-button w3-theme-l1">Evrískon</a>
    
    <div class="right">
     @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('mis5/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ url('/login') }}"  class="w3-bar-item w3-button w3-theme-l1">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="w3-bar-item w3-button w3-theme-l1">Register</a>
                        @endif
                    @endif
                </div>
            @endif
    
      </div>
  
  </div>
</div>    
                <nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Menu</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" href="/">Home</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="/mis1">Mission 1</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="/mis2">Mission 2</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="/mis3">Mission 3</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="/mis4">Mission 4</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="/mis5">Mission 5</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="/mis6">Mission 6</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="/mis7">Mission 7</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="/mis8">Mission 8</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="/mis9">Mission 9</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="/mis10">Mission 10</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="text-block">
<div style="margin-top:20px"><center><h1>Mission 5</h1></center></div>
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:20px;margin-bottom:50px;margin-right: 20px">

<p>You may have to find every possible way with five numbers to find what you need.....</p>
<p>Email - mis5@evriskon.lk
</p>



<style>
body {
    font-family: Arial, Helvetica, sans-serif;
    
    }

.text-block {
  position: absolute;
  bottom:auto ;
  right: 5%;
  top: 20%;
  left: 20%;
  background-color: #3c7c33;
  color: white;
  padding-left: 10px;
  padding-right: 10px;
  margin: auto;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

.loginbtn{
  background-color: grey;
  color: white;
  margin: 0;
  border: none;
  cursor: pointer;
  width: 100%;
  float: right;
}
/* Set a style for all buttons */
button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.right {
  position: absolute;
  right: 0px;
  
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal { 
  display: none; /* Hidden by default */  
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
  padding-left: 220px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  margin-left:6% auto;
  margin-right:6% auto;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}


/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    </div>

  </div>


    
  </div>
</div>
  <!-- Pagination -->

  
  <footer id="MyFooter">
    <div class="footer" style="padding: 10px">
      Team Evriskon -> P.N.R.S Fernando (IT18049732), K.G.R.U Ishara (IT18053760)
    </div>

  </footer>

  <style>
  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: grey;
   color: white;
   text-align: center;
}
</style>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') 
  {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } 
  else 
  {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
  
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

            </div>
        </div>
    </body>
</html>
