$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        /*exemplo um de como funciona
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        }else{
            listaMenu.fadeOut();
        }*/
        listaMenu.slideToggle();
     })
})