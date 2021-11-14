<<<<<<< HEAD
$( function() {
    $( "#draggable" ).draggable(
        {
            revert: true
        }
    );
  } );
=======
$( function() {
    $( ".draggable" ).draggable({
        cancel: false,
        helper: 'clone',
        revert: 'invalid'
    });

    $( "#droppable" ).droppable({
        drop: function( event, ui ) {
            $( this )
                .addClass('dropped')
                .append($(ui.helper).clone());
            $("#code_generated").val($("#droppable").html())
        }
    });
});

$('.draggable').click(function(){
    let texte = prompt("Entrer un texte", "Texte");
    $ ( this )
        .text(texte)
});
>>>>>>> 4ef88f2de2485b1660c5d331013a15fb33a06c4a
