<main>
    <div class="container">
        <div class="row justify-content-center py-4">
            
            <div class="col-md-6">
            <!-- obtener errores de validacion -->
            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>
                <form action="<?php echo base_url('register') ?>" method="post">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Nombre</label>
                        <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Ingrese su primer nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Apellido</label>
                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Ingrese su primer apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="document" class="form-label">Identificacion</label>
                        <input type="number" name="document" class="form-control" id="document" placeholder="Ingrese su N° de documento" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-success">Register</button>
            </div>
            </form>
        </div>
    </div>
</main>