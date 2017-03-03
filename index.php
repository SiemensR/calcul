<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Bootstrap 101 Template</title>

  <!-- Bootstrap -->

  <link href="css/main.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="js/main.js"></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <div class="container">
    <div class="greets">
      <h1>Here is a calculator</h1>
    </div>
    <div class="results">
      <input type="text" size="40" id="result" name="result">
    </div>
    <div class="butts">
      <input class="widthBut" type="button" name="one" value="1" onclick="ones()" id="1"></input>
      <input class="widthBut" type="button" name="twos" value="2" onclick="twos()"></input>
      <input class="widthBut" type="button" name="trees" value="3" onclick="trees()"></input>
      <input class="widthBut" type="button" name="fours" value="4" onclick="fours()"></input>
      <input class="widthBut" type="button" name="five" value="5" onclick="fives()"></input>
      <input class="widthBut" type="button" name="sixe" value="6" onclick="sixes()"></input>
      <input class="widthBut" type="button" name="sevene" value="7" onclick="sevens()"></input>
      <input class="widthBut" type="button" name="eighte" value="8" onclick="eights()"></input>
      <input class="widthBut" type="button" name="nine" value="9" onclick="nines()"></input>
      <input class="widthBut" type="button" name="zeroe" value="0" onclick="zeros()"></input>
      <input class="widthBut" type="button" name="pluse" value="+" onclick="pluses()"></input>
      <input class="widthBut" type="button" name="minuse" value="-" onclick="minuses()"></input>
      <input class="widthBut" type="button" name="devide" value="/" onclick="devides()"></input>
      <input class="widthBut" type="button" name="multiple" value="*" onclick="multiples()"></input>
      <input class="gleichBut" type="button" name="resulte" value="=" onclick="showMeResult()"></input>

    </div>
  </div>


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="/js/main.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>


</body>
</html>
