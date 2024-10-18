<?php
    require_once("Vista.php");

    class VEscudos extends Vista{
        public function tablaEscudos($escudos){ ?>
            <h1>Armas</h1>
            <a href="xxxxxxxxxxx">Insertar</a> <!-- TODO -->
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Daño</th>
                        <th>Tipo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($escudos as $escudo){ ?>
                        <tr>
                            <td><?=$escudo['id']?></td>
                            <td><?=$escudo['defensa']?></td>
                            <td><?=$escudo['tipo']?></td>
                            <td><a href="xxxxxxxxxxxxxx">Eliminar</a> | <a href="xxxxxxxxxxxx">Editar</a> </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        <?php
        }
    }

?>