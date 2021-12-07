$( function() {
    $( ".draggable" ).draggable({
        cancel: false,
        helper: 'clone',
        revert: 'invalid'
    });

    $( ".receive_list" ).droppable({
        accept: ".draggable",
        drop: function( event, ui ) {
            $( this )
                .addClass('dropped')
                .append($(ui.draggable).clone());
            $("#code_generated").val($("#droppable").html())
        }
    });
});s


$('.draggable').click(function(){
    let texte = prompt("Entrer un texte", "Texte");
    $ ( this )
        .text(texte)
});