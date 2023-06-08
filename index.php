<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
  <h1>Les conditions !</h1>
  <h3>La condition switch!</h3>
    
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
      h3{
        color:red;
      }
    </style>
    <?php 
    $note = 16;
  if($note == 0){
    echo "tu es null !";
  }else if($note == 4) {
    echo "C'est trés mauvais !";
  }elseif ($note == 8){
    echo " Ce n'est pas bon !";
  }elseif($note == 12){
    echo "C'est moyen !";
  }elseif($note == 16){
    echo "Bien joué !";
  }elseif( $note == 20){
    echo "Parfait !"; 
  }else{ // =>'else' prend en cahrge tout les cas incohérent que l'utilisateur peut saisir en cas d'un site web //
    echo "Je n'ai pas de commentaire";
  }

// ON VA FAIRE LE MEME CODE AVEC LA FONCTION "switch"0.

switch($note){
  case 0 :
    echo "tu es null !";
    breack;  
  case 4 :
    echo "C'est trés mauvais !" ;
    breack; 
  case 8 :
    echo "Ce n'est pas bon !";
    breack; 
  case 12 :
    echo "C'est moyen !";
    breack;
  case 16 :
    echo " Bien joué !";
    breack;
  case 20 :
    echo "parfait ! ";
    breack;
  default :
    echo " je n'ai pas de commentaire pour cette note !";
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