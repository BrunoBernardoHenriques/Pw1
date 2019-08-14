<?php
session_start()
  ?>
<!DOCTYPE html>
<html>

<meta charset="utf-8">
<style>
  header{
background-image:url(https://m.gamestop.com/gs/images/1024x300/1024x300_zeldabreathofwild.jpg);
height: 300px;
width: 1024px;

    }
    @font-face{
font-family: Zelda;
src: url("Triforce.ttf");
}

@font-face{
font-family: Zelda;
src: url("Triforce.eot");
}
body {
 background-image: url("https://www.speedrun.com/themes/botw/background.png");
 background-color: #cccccc;
 color: white;
}

    input[type=submit] {
  width: 40%;
  background-color: #0748E5;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  font-family: Zelda;
   letter-spacing: 2px;
  cursor: pointer;
}

/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
   letter-spacing: 2px;
   font-family: Zelda;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 500px;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
  top: 9px;
  left: 9px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}
h1{ letter-spacing: 2px;
  font-family: Zelda;
}
</style>
<body>
  <center>
  <header>

</header>

<h1> Por quanto tempo o jogo ficou em desenvolvimento?</h1>
<form method="post">
<label class="container">5 Anos
 <input type="radio" name="p4" checked value="5 Anos">
  <span class="checkmark"></span>
</label>
<label class="container">4 Anos
<input type="radio" name="p4" value="4 Anos">
  <span class="checkmark"></span>
</label>
<label class="container">6 Anos
 <input type="radio" name="p4" value="6 Anos">
  <span class="checkmark"></span>
</label>
<label class="container">2 Anos
 <input type="radio" name="p4" value="2 Anos">
  <span class="checkmark"></span>
 



</label>
 
</body> 
<input type="submit" value="Proxima">
</form>
<?php
if (isset($_POST['p4'])) {
$_SESSION['p4']=$_POST['p4'];
header('location:Pergunta5.php');
}


  ?>
</html>
