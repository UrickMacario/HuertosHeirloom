<?php
/**
 * Vista clientes
 *
 * @var \Huertos\Cliente[] $clientes
 */
?>
<div class="Clientes">
    <div class="contenedor">
        <div class="Clientes--titulo Huertos--title">Nuestros clientes</div>
        <div class="Clientes--slider">
            <?php
            if (count($clientes) > 0) {
                foreach ($clientes as $cliente) {
                    ?>
                    <div class="Clientes--slide">
                        <img src="<?= $cliente->informacion_logo ?>" alt="" class=>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('.Clientes--slider').slick({
                slidesToShow: 5,
                slidesToScroll: 5,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 670,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 479,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        })
    </script>
</div>