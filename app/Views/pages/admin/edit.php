<main>
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-md-6">
                <form action="<?php echo base_url('/dashboard/admin/user/edit/' . $user['id']) ?>" method="post">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Nombre</label>
                        <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Ingrese su primer nombre" value="<?php echo $user['first_name'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Apellido</label>
                        <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Ingrese su primer apellido" value="<?php echo $user['last_name'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="document" class="form-label">Identificacion</label>
                        <input type="number" name="document" class="form-control" id="document" placeholder="Ingrese su N° de documento" value="<?php echo $user['document'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="rol" class="form-label">Rol</label>
                        <select name="rol" id="rol" class="form-select" required>
                            <option value="Admin" <?php if ($user['rol'] == 'Admin') echo 'selected' ?>>Administrador</option>
                            <option value="User" <?php if ($user['rol'] == 'User') echo 'selected' ?>>Usuario</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su correo" value="<?php echo $user['email'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" id="password" placeholder="Ingrese su contraseña" value="<?php echo $user['password'] ?>" required>
                    </div>
                    <div class="mb-3">
                        <labe for="registration_date" class="form-label">Recha de registro</labe>
                        <input type="date" name="registration_date" class="form-control" id="registration_date"  value="<?php echo $user['registration_date'] ?>" disabled>
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
            </div>
            </form>
        </div>
    </div>
</main>