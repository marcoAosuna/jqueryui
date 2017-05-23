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
  #feedback { font-size: 1.4em; }
  #selectable .ui-selecting { background: #FECA40; }
  #selectable .ui-selected { background: #F39814; color: white; }
  #selectable { list-style-type: none; margin: 0; padding: 0; width: 450px; }
  #selectable li { margin: 3px; padding: 1px; float: left; width: 100px; height: 80px; font-size: 4em; text-align: center; }
  </style>
 
  <script>
  $( function() {
    $( "#selectable" ).selectable();
  } );
  </script>
</head>
<body>
 
<ol id="selectable">
  <li class="ui-state-default">1</li>
  <li class="ui-state-default">2</li>
  <li class="ui-state-default">3</li>
  <li class="ui-state-default">4</li>
  <li class="ui-state-default">5</li>
  <li class="ui-state-default">6</li>
  <li class="ui-state-default">7</li>
  <li class="ui-state-default">8</li>
  <li class="ui-state-default">9</li>
  <li class="ui-state-default">10</li>
  <li class="ui-state-default">11</li>
  <li class="ui-state-default">12</li>
</ol>
 
 
</body>
</html>