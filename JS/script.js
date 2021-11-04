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