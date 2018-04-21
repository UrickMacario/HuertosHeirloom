import $ from 'jquery';

var IniciarWeb = {
    iniciada: false,
    init: function () {
        /*
         Acciones
         */
        $('window').resize(() => {
            IniciarWeb.configurar_Web();
        });
        /*
         Funciones
         */
        IniciarWeb.configurar_Web();
        IniciarWeb.link_actual();
        IniciarWeb.got_to();
        IniciarWeb.iniciada = true;
    },
    configurar_Web: function () {

    },
    link_actual: function () {
        let url = document.location.href;
        $('[href="' + url + '"]').addClass('link_actual');
    },
    got_to: function () {
        let $objetos = $("[data-goto]");
        $objetos.on('click', function () {
            let goto = $(this).data('goto');
            if (!!goto) {
                let $nuevoScroll = $(goto);
                if ($nuevoScroll.length > 0) {
                    $("body,html").stop().animate({
                        'scrollTop': $nuevoScroll.offset().top
                    }, 500)
                }
            }
        })
    }
};

export default IniciarWeb;