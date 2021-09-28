<!-- php -S localhost:8000 -->

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Générateur de formulaire HTML</title>
  <link rel="stylesheet" href="css/index.css">
  <style>
  #draggable { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $( function() {
        $( "#draggable" ).draggable();
        $( "#droppable" ).droppable({
        drop: function( event, ui ) {
            $( "#html p" )
            .text("<form><input name=\"textinput\" type=\"text\" placeholder=\"texte\"></form>")
        }
        });
    } );

  
  </script>
</head>
<body>


<div id="draggable"  class="bloc">
    <input name="textinput" type="text" placeholder="texte">
</div>
 
<div id="droppable" class="bloc droppable">
  <p>Placez l'élément ici</p>
</div>

<div id="html">
    <h1>Code HTML :</h1>
    <p></p>
</div>
 
 
</body>
</html>