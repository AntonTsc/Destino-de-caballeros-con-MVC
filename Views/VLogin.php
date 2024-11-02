<?php
    require_once('Vista.php');

    class VLogin extends Vista{
        public function formLogin(){ ?>
            <form action="login.php" method="post" class="mt-4">
                <div class="mb-3">
                    <label for="username" class="form-label">Nombre de caballero</label>
                    <input type="text" id="username" name="username" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
            </form>
        <?php
        }

        public function desktop(){ ?>
            <div class="mt-3">
                <a href="logout.php" class="btn btn-danger">Cerrar sesión</a>
                <h1>Bienvenido al sistema, <?= $_SESSION['usuario_logueado'] ?></h1>
            </div>
        <?php
        }
    }
?>