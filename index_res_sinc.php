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
  #resizable { background-position: top left; }
  #resizable, #also { width: 150px; height: 120px; padding: 0.5em; }
  #resizable h3, #also h3 { text-align: center; margin: 0; }
  #also { margin-top: 1em; }
  </style>
  
  <script>
  $( function() {
    $( "#resizable" ).resizable({
      alsoResize: "#also"
    });
    $( "#also" ).resizable();
  } );
  </script>
</head>
<body>
 
<div id="resizable" class="ui-widget-header">
  <h3 class="ui-state-active">Resize</h3>
</div>
 
<div id="also" class="ui-widget-content">
  <h3 class="ui-widget-header">will also resize</h3>
</div>
 
 
</body>
</html>