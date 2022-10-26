<main>
    <?php if (session()->get('rol') == 'Admin') : ?>
        <div class="container">
            <div class="row justify-content-center py-4">
                <h2>Admin Dashboard</h2>
                <p>
                    Bienvenido administrador <?= session()->get('first_name') . ' ' . session()->get('last_name') ?>
                </p>
                <div class="col-md-8 py-4">

                    <table class="table table-striped py-4">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Documento</th>
                                <th scope="col">Email</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <th scope="row"><?= $user['id'] ?></th>
                                    <td><?= $user['first_name'] ?></td>
                                    <td><?= $user['last_name'] ?></td>
                                    <td><?= $user['document'] ?></td>
                                    <td><?= $user['email'] ?></td>
                                    <td><?= $user['rol'] ?></td>
                                    <td>
                                        <a href="<?= base_url('/dashboard/admin/user/edit/' . $user['id']) ?>" class="btn btn-primary">Editar</a>
                                        <a href="<?= base_url('/dashboard/admin/user/delete/' . $user['id']) ?>" class="btn btn-danger">Eliminar</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="container">
            <div class="row justify-content-center py-4">
                <div class="col-md-6">
                    <h1>Dashboard</h1>
                    <p>Este es el dashboard de usuario</p>
                    <b>
                        Bienvenido <?= session()->get('first_name') . ' ' . session()->get('last_name') ?>
                    </b>

                </div>
            </div>
        </div>
    <?php endif; ?>
</main>