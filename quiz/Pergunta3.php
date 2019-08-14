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
  cursor: pointer;
  font-family: Zelda;
   letter-spacing: 2px;
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
h1{
  font-family: Zelda;
   letter-spacing: 2px;
}
</style>
<body>
  <center>
  <header>

</header>

<h1>Qual dessas Armas é a mais poderosa?</h1>
<form method="post">
<label class="container">Fully Charged Master Sword
 <input type="radio" name="p3" checked value="Fully Charged Master Sword">
  <span class="checkmark"></span>
</label>
<label class="container">Savage Lynel Crusher
<input type="radio" name="p3" value="Savage Lynel Crusher">
  <span class="checkmark"></span>
</label>
<label class="container">Royal Claymore
 <input type="radio" name="p3" value="Royal Claymore">
  <span class="checkmark"></span>
</label>
<label class="container">
 <input type="radio" name="p3" value="Torch">Torch
  <span class="checkmark"></span>
 



</label>
 
</body> 
<input type="submit" value="Proxima">
</form>
<?php
if (isset($_POST['p3'])) {
$_SESSION['p3']=$_POST['p3'];
header('location:Pergunta4.php');
}


  ?>
</html>
