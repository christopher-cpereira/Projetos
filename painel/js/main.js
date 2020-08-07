$(function(){

    var open = true;
    var WindowSize = $(window)[0].innerWidth;

    if(WindowSize <= 768){
        open = false;
    }

    $('.menubotao').click(function(){
        if(open){
            //se estiver aberto precisamos fechar
            $('.menu').animate({'width':0, 'padding':0}, function(){
                open = false;
            });
            $('.content,header').css('width','100%');
            $('.content,header').animate({'left':0}, function(){
                open = false;
            });
        }else{
            //menu fechado vamos abri-lo
            $('.menu').animate({'width':'300px', 'padding':'10px 10px 10px 0px;'}, function(){
                open = true;
            });
            $('.content,header').css('width','calc(100% - 300px)');
            $('.content,header').animate({'left':'300px'}, function(){
                open = true;
            });
        }
    })

})