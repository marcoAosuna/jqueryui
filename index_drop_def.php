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
  #droppable { width: 150px; height: 150px; padding: 0.5em; float: left; margin: 10px; }
  #draggable, #draggable-nonvalid { width: 100px; height: 100px; padding: 0.5em; float: left; margin: 10px 10px 10px 0; }
  </style>
  
  <script>
  $( function() {
    $( "#draggable, #draggable-nonvalid" ).draggable();
    $( "#droppable" ).droppable({
      accept: "#draggable",
      classes: {
        "ui-droppable-active": "ui-state-active",
        "ui-droppable-hover": "ui-state-hover"
      },
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );
  </script>
</head>
<body>
 
<div id="draggable-nonvalid" class="ui-widget-content">
  <p>I'm draggable but can't be dropped</p>
</div>
 
<div id="draggable" class="ui-widget-content">
  <p>Drag me to my target</p>
</div>
 
<div id="droppable" class="ui-widget-header">
  <p>accept: '#draggable'</p>
</div>
 
 
</body>
</html>