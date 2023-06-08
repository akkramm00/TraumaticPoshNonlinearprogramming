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
    $note = 18;
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
    break;  // break permet d'arreter la bocle une fois le resultat trouvé.
  case 4 :
    echo "C'est trés mauvais !" ;
    break; 
  case 8 :
    echo "Ce n'est pas bon !";
    break; 
  case 12 :
    echo "C'est moyen !";
    break;
  case 16 :
    echo " Bien joué !";
    break;
  case 20 :
    echo "parfait ! ";
    break;
  default :
    echo " je n'ai pas de commentaire pour cette note ! <br/>";
   }



?>
<?php
// ====================LES BOOLEENS ++++++++++++++++++++++++++++++++++
$etudiant = true ;


if($etudiant ==true){
  echo "Vous etes etudiant !<br> ";
}else{
  echo "Vous n'etes pas etudiant ! <br>";
}
if($etudiant){            //______________________
  echo "Vous etes etudiant ! <br>" ;//____________|____
    }else {                         //____________|     \
  echo "Vous n'etes pas etudiant! <br>";//________|     ====>method conseillé pour les bool
          }                             //________|____ /
                                        //________|
// on peut meme ecrire :
if(!$etudiant){   // le "!" désigne l'inverse => false.
  echo "Vous n'etes pas etudiant !<br>";
}else{
  echo "Vous etes etudiant ! <br>";
}

// une autre méthode pour alterner du html et du php :méthode qui va nous faciliter la tache pour evietr d'échapper les caracteresavec des slaches.

if($etudiant){

  ?>
  <p>Vous etes etudiant 3!  </p>
  <?php
};



// Pour une autorisation de connexion :
$age = 22;

if($age >= 18){
  $autorisation = true ;
}else{
  $autorisation = false;
}

// la forme térnaire :
$autorisation = ($age >= 18) ? true : false ; 





  ?> 

  <!--
  This script places a badge on your repl's full-browser view back to your repl's cover
  page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
  teal, blue, blurple, magenta, pink!
  -->
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>