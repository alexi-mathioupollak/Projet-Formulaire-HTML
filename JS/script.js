$( function() {
    $( "#draggable" ).draggable({revert: "invalid"}).sortable();
    $( "#draggable2" ).draggable({revert: "invalid"}).sortable();
    $( "#draggable3" ).draggable({revert: "invalid"}).sortable();
    $( "#draggable" ).disableSelection();
    $( "#droppable" ).droppable({
        classes: {
            "ui-droppable-active": "ui-state-active",
            "ui-droppable-hover": "ui-state-hover",
        },
      drop: function( event, ui ) {
        $( this )
          .addClass( "ui-state-highlight" )
          .find( "p" )
            .html( "Dropped!" );
      }
    });
  } );