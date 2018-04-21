<?php
/**
 * Vista del equipo
 *
 * @var \Huertos\Equipo[] $equipo
 */
?>
<div class="Equipo">
    <div class="contenedor">
        <div class="Equipo--miembros">
            <?php
            if (count($equipo) > 0) {
                foreach ($equipo as $miembro) {
                    ?>
                    <div class="Equipo--miembro">
                        <div class="Equipo--miembro--left">
                            <div class="Equipo--title Huertos--title">Nuestro equipo</div>
                            <img class="Equipo--miembro--fotoResponsiva" src="<?= $miembro->informacion_foto ?>"
                                 alt=""/>
                            <div class="Equipo--miembro--nombre"><?= $miembro->title ?></div>
                            <div class="Equipo--miembro--puesto"><?= $miembro->informacion_puesto ?></div>
                            <div class="Equipo--miembro--texto"><?= $miembro->informacion_bio ?></div>
                            <div class="Equipo--botones">
                                <span class="Equipo--boton Equipo--atras boton">atrás</span>
                                <span class="Equipo--boton Equipo--adelante boton">siguiente</span>
                            </div>
                        </div>
                        <div class="Equipo--miembro--right">
                            <img src="<?= $miembro->informacion_foto ?>" alt=""/>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            var slider = $('.Equipo--miembros');
            slider.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 6000
            });
            $('.Equipo--adelante').on('click', function () {
                slider.slick('slickNext');
            });
            $('.Equipo--atras').on('click', function () {
                slider.slick('slickPrev');
            });
        })
    </script>
</div>