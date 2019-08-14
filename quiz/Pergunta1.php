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
    body {
 background-image: url("https://www.speedrun.com/themes/botw/background.png");
 background-color: #cccccc;
 color: white;
}
@font-face{
font-family: Zelda;
src: url("Triforce.ttf");
}

@font-face{
font-family: Zelda;
src: url("Triforce.eot");
}
    input[type=submit] {

  width: 40%;
  background-color: #0748E5;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
   letter-spacing: 2px;
   font-family: Zelda;
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
  letter-spacing: 2px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
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

<h1>Onde você encontra a Master Sword?</h1>
<form method="post">
<label class="container">Hyrule Castle
 <input type="radio" name="p1" checked value="Hyrule Castle">
  <span class="checkmark"></span>
</label>
<label class="container">Death Moutain
<input type="radio" name="p1" value="Death Moutain">
  <span class="checkmark"></span>
</label>
<label class="container">Spring of Courage
 <input type="radio" name="p1" value="Spring of Courage">
  <span class="checkmark"></span>
</label>
<label class="container">Korok Forest
 <input type="radio" name="p1" value="Korok Forest">
  <span class="checkmark"></span>
 



</label>
 
</body> 
<input type="submit" value="Proxima">
</form>
<?php
if (isset($_POST['p1'])) {
$_SESSION['p1']=$_POST['p1'];
header('location:Pergunta2.php');
}


  ?>
</html>
