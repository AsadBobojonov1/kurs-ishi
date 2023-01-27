
function open_down_list(id){
    const div = document.getElementsByClassName("Wrapper__1")[id];
    div.classList.toggle("active")
    let anv = document.getElementsByClassName("answer__wrapper")[id];
    anv.classList.toggle("active")
    let button = document.getElementsByClassName("custom")[id];
    button.classList.toggle("rotate")
}