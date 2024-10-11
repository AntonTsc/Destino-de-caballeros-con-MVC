<?php
    require_once 'Vista.php';

    class VArmas extends Vista{
        public function tablaArmas($armas){ ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Daño</th>
                        <th>Tipo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($armas as $arma){ ?>
                        <tr>
                            <td><?=$arma['id']?></td>
                            <td><?=$arma['daño']?></td>
                            <td><?=$arma['tipo']?></td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        <?php
        }
    }
?>