<?php
    require_once 'Vista.php';

    class VArmas extends Vista{
        public function tablaArmas($armas){ ?>
            <h1>Armas</h1>
            <a href="arma_insert.php">Insertar</a>
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
                    foreach($armas as $arma){ ?>
                        <tr>
                            <td><?=$arma['id']?></td>
                            <td><?=$arma['dano']?></td>
                            <td><?=$arma['tipo']?></td>
                            <td><a href="arma_delete.php?id=<?=$arma['id']?>">Eliminar</a> | <a href="arma_editVentana.php?id=<?=$arma['id']?>">Editar</a> </td>
                        </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        <?php
        }

        public function formArma(){ ?>
            <form action="arma_insert.php" method="get">
                <div>
                    <label for="dano">Daño</label>
                    <input type="number" id="dano" name="dano" required>
                </div>
                <div>
                    <label for="tipo">Tipo</label>
                    <input type="text" id="tipo" name="tipo" required>
                </div>
                <button type="submit">Crear</button>
            </form>
        <?php
        }

        public function formEditArma($arma){ ?>
            <form action="arma_edit.php" method="get">
                <div>
                    <label for="id">ID</label>
                    <input type="number" id="id" name="id" value="xxxxxxx" readonly>
                </div>
                <div>
                    <label for="dano">Daño</label>
                    <input type="number" id="dano" name="dano" value="xxxxxxx" required>
                </div>
                <div>
                    <label for="tipo">Tipo</label>
                    <input form="tipo" id="tipo" name="tipo" value="xxxxxxx" required>
                </div>
                <button type="submit">Modificar</button>
            </form>
        <?php
        }
    }
?>