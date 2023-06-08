<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  <h1>Les conditions !</h1>
    <style>
      body{
        text-align:center;
        margin-top:50px;
        background :black;
        color:white;
        font-family:'arial' ,sans sérif;
        font-size:20px;
      }
      h1{
        color:green;
      }
    </style>
    <?php 
  echo "LA STRUCTURE IF ...ELSE <br>";
  $heure_connexion = 15;
 if($heure_connexion < 18) {
  echo "passez une bonne journée <br/>" ;
   $journee = "oui";
  }else{
    echo "passez bonne soirée <br/>";
   $journee = "Non";
  }
  echo 'fait_il jour? la reponse est ' . $journee. '.  <br><br>';
 // la structure if ...ellse if ...else :
$note = 0 ;
$difficulte = "facile";
if ($note <= 12 && $difficulte == "facile"){
  echo "vous auriez pu faire mieux";
}else if($note> 12 && $difficulte == "facile"){
  echo "Pas mal ,mais c'était facile !";
}else if($note <= 12 && $difficulte == "difficile") {
  echo "ne vous découragez pas ,c'était difficile!";
} else {
  echo "bravo" ;
  
}

?> 

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>