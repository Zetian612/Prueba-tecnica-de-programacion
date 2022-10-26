<main>
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-md-6">
            <?php if (session()->get('msg')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('msg') ?>
                </div>
            <?php endif; ?>
                <form action="<?php echo base_url('login') ?>" method="post">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-success">Login</button>
            </div>
            </form>
        </div>
    </div>
</main>