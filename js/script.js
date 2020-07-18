$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        /*exemplo um de como funciona
        if(listaMenu.is(':hidden') == true){
            listaMenu.fadeIn();
        }else{
            listaMenu.fadeOut();
        }*/
        if(listaMenu.is(':hidden') == true){
            var iconeMenu = $('.botao-mobile').find('i');
            iconeMenu.removeClass('fas fa-ellipsis-v');
            iconeMenu.addClass('fas fa-times-circle');
            listaMenu.slideToggle();
        }else{
            var iconeMenu = $('.botao-mobile').find('i');
            iconeMenu.removeClass('fas fa-times-circle');
            iconeMenu.addClass('fas fa-ellipsis-v');
            listaMenu.slideToggle();
        }
        //listaMenu.slideToggle();
     });

    //barra de rolagem, quando click ele vai ate o conteudo o target
    //target e a tag q criamos com o switch, se o tamanho da escrita dela for maior q zero faca 
    if($('target').length > 0){
        var elemento = '#'+$('target').attr('target');
        var divScroll = $(elemento).offset().top;
        $('html,body').animate({'scrollTop':divScroll}, 2000);
    } 

})


