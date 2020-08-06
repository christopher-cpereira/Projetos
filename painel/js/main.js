$(function(){

    var open = true;
    var WindowSize = $(window)[0].innerWidth;

    if(WindowSize <= 768){
        open = false;
    }

    $('.menubotao').click(function(){
        if(open){
            //se estiver aberto precisamos fechar
            $('.menu').animate({'width':'0'});
            $('.content').animate({'left':'0'});
            $('.content').animate({'width':'100%'});
            $('header').animate({'left':'0'});
            $('header').animate({'width':'100%'});
        }else{
            //menu fechado

        }
    })

})