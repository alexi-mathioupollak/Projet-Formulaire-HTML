// $('button').click(function(){
//     $('body').css("background-color", "red");
// })
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

    $("#drop").droppable({
        accept: ".drag",

        drop: function (event, ui) {
            $(this)
                .append($(ui.draggable).clone()
                    .removeClass("ui-draggable-dragging")
                    .addClass('dropped')
                    .removeClass("drag ui-draggable ui-draggable-handle ui-draggable-dragging")
                );
            // $("#code_generated").val($("#droppable").html())
        }
    });
});

// manipuler le formulaire (emplacement)
$(function () {
    $("#drop").sortable({
        cancel: false
    });
});

$('#drop').dblclick(function(){
    let texte = prompt("Entrer un texte", "Texte");
    $ ( this )
        .html(texte)
});
