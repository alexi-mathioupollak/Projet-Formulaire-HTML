$(function () {
    $("#items").accordion({
        heightStyle: "content"
    });
});


// drop un items de la liste au formulaire
$(function () {
    $(".drag").draggable({
        cancel: false,
        helper: 'clone',
        revert: 'invalid'
    });

    $('.trash').droppable({
        accept: ".dropped",
        drop: function(event, ui) {
            ui.draggable.remove();
        }
    });

    $("#drop").droppable({
        accept: ".drag",

        drop: function (event, ui) {
            $(this)
                .append($(ui.draggable).clone()
                    .removeClass("ui-draggable-dragging")
                    .addClass('dropped')
                    .removeClass("drag ui-draggable ui-draggable-handle ui-draggable-dragging")
                );
        }
    });
});

// manipuler le formulaire
//(emplacement)
$(function () {
    $("#drop").sortable({
        cancel: false
    });
});

//personnalisation
$('.dropped').dblclick(function(){
    let texte = prompt("Entrer un texte", "Texte");
    $ ( this )
        .html(texte)
});


//génération de code html


$('#drop').bind('DOMNodeInserted DOMNodeRemoved', function() {
    $("#code_generated").val($("#drop").html())
});




/*
$('#red').click(function(){
    $('body').at("background-color", "red");
});
*/
