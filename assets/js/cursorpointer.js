const cursorpointer = document.querySelector('.cursorpointer');
const cursordot = document.querySelector('.cursordot');

document.addEventListener('mousemove', e => {
    cursorpointer.setAttribute("style", "top: "+(e.pageY - 20)+"px; left: "+(e.pageX - 20)+"px;");
    cursordot.setAttribute("style", "top: "+(e.pageY - 20)+"px; left: "+(e.pageX - 20)+"px;");

})

document.addEventListener('click', () => {
    cursorpointer.classList.add("expand");

    setTimeout(() => {
        cursorpointer.classList.remove("expand");
    }, 500)
})