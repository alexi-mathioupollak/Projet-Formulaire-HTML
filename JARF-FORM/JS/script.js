// select the target node
var target = document.getElementById('drop')
// create an observer instance
var observer = new MutationObserver(function(mutations) {
    console.log($('mydiv').text());
});
// configuration of the observer:
var config = { attributes: true, childList: true, characterData: true };

const callback = function(mutationsList, observer) {
    for(const mutation of mutationsList) {
        if (mutation.type === 'childList') {
            console.log('A child node has been added or removed.');
        }
        else if (mutation.type === 'attributes') {
            console.log('The ' + mutation.attributeName + ' attribute was modified.');
        }
    }
};
// pass in the target node, as well as the observer options
observer.observe(target, config);

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
            //$("#code_generated").val($("#drop").html())
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
$('#dropped').dblclick(function(){
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