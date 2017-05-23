<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Checkboxradio - Default functionality</title>
 
  <link rel="stylesheet" href="ui-css/jquery-ui.css">
  <link rel="stylesheet" href="style.css">
  
 




  <style>
  #draggable, #draggable2 { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 0 10px 10px 0; }
  </style>
   <script src="js/jquery_nuevo.js"></script>
 <script src="js/jquery-ui.js"></script>
  <script src="libs/ui_punch.js"></script>

  
  <script>
  $( function() {
    $( "#draggable" ).draggable({ revert: true });
    $( "#draggable2" ).draggable({ revert: true, helper: "clone" });
  } );
  </script>
</head>
<body>
 
<div id="draggable" class="ui-widget-content">
  <p>Revert the original</p>
</div>
 
<div id="draggable2" class="ui-widget-content">
  <p>Revert the helper</p>
</div>
 
 
</body>
</html>
