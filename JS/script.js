const fill = document.querySelector('.b1');
const fill2 = document.querySelector('.b2');
const fill3 = document.querySelector('.b3');
const formlist = document.querySelectorAll('.form_list');
const backlist = document.querySelectorAll('.receive_list');

let fillDragged;

// Fill listeners
fill.addEventListener('dragstart', dragStart);
fill.addEventListener('dragend', dragEnd);
fill2.addEventListener('dragstart', dragStart);
fill2.addEventListener('dragend', dragEnd);
fill3.addEventListener('dragstart', dragStart);
fill3.addEventListener('dragend', dragEnd);

// Loop through empty boxes and add listeners
for (const empty of formlist) {
    empty.addEventListener('dragover', dragOver);
    empty.addEventListener('dragenter', dragEnter);
    empty.addEventListener('dragleave', dragLeaveBacklist);
    empty.addEventListener('drop', dragDropToBackList);
}

for (const empty of backlist) {
    empty.addEventListener('dragover', dragOver);
    empty.addEventListener('dragenter', dragEnter);
    empty.addEventListener('dragleave', dragLeaveFormList);
    empty.addEventListener('drop', dragDropToFormList);
}

// Drag Functions

function dragStart() {
    if (this.parentNode.id == 'form_list_#') {
        let copy = this.cloneNode(true);
        this.parentNode.appendChild(copy);
    }
    this.className += ' hold';
    setTimeout(() => (this.className = 'invisible'), 0);
    fillDragged = this;
}

function dragEnd() {
    this.className = 'b1';
}

function dragOver(e) {
    e.preventDefault();
}

function dragEnter(e) {
    e.preventDefault();
    this.className += ' hovered';
}

function dragLeaveFormList() {
    console.log("je tire vers back");
    this.className = 'form_list';
}

function dragLeaveBacklist() {
    console.log("je tire vers form");
    this.className = 'receive_list';
}
// drop to drag
function dragDropToBackList() {
    this.className = 'form_list';
    var box = document.getElementById(fillDragged.id);
    box.parentNode.removeChild(box);
    console.log("dragDropToBackList");
}
// drag to drop
function dragDropToFormList() {
    this.className = 'receive_list';
    let copy = fillDragged;
    this.appendChild(copy);
    console.log("dragDropToFormList");
    console.log(this.parentNode.id+ "ok");
}