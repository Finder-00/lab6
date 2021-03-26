(function(){

    let carrousel2 = document.querySelector(".carrousel2")
    let bout = document.querySelectorAll('.bouton-radio');
    let noBouton = 0;
    bout[0].checked = true;
    for (const bt of bout){
        bt.value = noBouton++;
        bt.addEventListener('mousedown', function(){
            carrousel2.style.transform = "translateX(" + (-this.value*100) + "vw)";
        })
    }
}()) 