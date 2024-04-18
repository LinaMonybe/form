<?php

  if (isset($_GET['nomPers']))
  {  
      if (!empty($_GET['nomPers']))
      {
    echo"Vous avez saisi '"
                   .$_GET['nomPers']."'\n" ;
      }
      else
              echo"Aucune valeur saisie\n";
            }
  
 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="hehe">
    <form action="form.php" method="get">

        <label> 
            <input type="text" name="fname" placeholder="First Name"> <br>
            <input type="text" name="lname" placeholder="Last name">   <br>        
            <button>Submit</button>
        </label>
    </form>
    </div>
</body>
</html>