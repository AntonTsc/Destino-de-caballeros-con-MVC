<?php
    require_once("Vista.php");

    class VEscudos extends Vista{
        public function tablaEscudos($escudos){ ?>
            <h1>Escudos</h1>
            <a href="escudo_insertVentana.php">Insertar</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Defensa</th>
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
                            <td><a href="escudo_delete.php?id=<?=$escudo['id']?>">Eliminar</a> | <a href="xxxxxxxxxxxx">Editar</a> </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        <?php
        }

        public function formEscudo(){ ?>
            <form action="escudo_insert.php" method="get">
                <div>
                    <label for="defensa">Defensa</label>
                    <input type="number" id="defensa" name="defensa" required>
                </div>
                <div>
                    <label for="tipo">Tipo</label>
                    <input type="text" id="tipo" name="tipo" required>
                </div>
                <button type="submit">Crear</button>
            </form>
        <?php
        }
    }

?>