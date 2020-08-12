<div class="box-content left w100">

    <h2><i class="fa fa-home"></i>Painel de controle - Workspace</h2>
    <div class="w100">
        <div class="box-metricas w33 left">
            <div class="box-metricas-single">
                    <h2>Usuarios Online</h2>
                    <p>10</p>
            </div>
        </div>

        <div class="box-metricas w33 left">
            <div class="box-metricas-single">
                    <h2>Total de Visitas</h2>
                    <p>10</p>
            </div>
        </div>

        <div class="box-metricas w33 left">
            <div class="box-metricas-single">
                <h2>Visitas hoje</h2>
                    <p>10</p>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<div class="clear"></div>

<div class="box-content w100">

    <h2><i class="fa fa-home"></i> Usuarios Online</h2>
    <div class="table">
        <div class="row">
            <div class="col">
                <span>IP</span>
            </div>
            <div class="col">
                <span>Ultima acao</span>
            </div>
        </div>

        <!--um looping -->
        <?php 
            for($i =0; $i < 10; $i++){
        ?>
        <div class="row">
            <div class="col">
                <span>192.168.0.112</span>
            </div>
            <div class="col">
                <span>19/09/2020</span>
            </div>

            <?php
            }
            ?>

        </div>
    </div>

</div>
<div class="clear"></div>