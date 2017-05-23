<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Checkboxradio - Default functionality</title>
 
  <link rel="stylesheet" href="ui-css/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  
  <script src="js/jquery_nuevo.js"></script>
 <script src="js/jquery-ui.js"></script>
  <script src="libs/ui_punch.js"></script>




  <style>
  .ui-resizable-se {
    bottom: 17px;
  }
  </style>
  
  <script>
  $( function() {
    $( "#resizable" ).resizable({
      handles: "se"
    });
  } );
  </script>
</head>
<body>
 
<textarea id="resizable" rows="5" cols="20"></textarea>
 
 
</body>
</html>