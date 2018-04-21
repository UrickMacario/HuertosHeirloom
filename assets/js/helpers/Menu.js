import $ from 'jquery'

let Menu = {
    init(){
        //Menu movil
        $('.MenuFlat--abrirMenu,#MenuFlat').on('click', function () {
            $('body').toggleClass('movilAbierto');
        });
    },
};

export default Menu;