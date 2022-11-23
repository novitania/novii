<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <!-- pesan error -->
            <?= form_error(
                'menu',
                '<div class="alert alert-success" role="alert">
                </div>'
            ); ?>
            <?= $this->session->flashdata('message'); ?>
            <!-- akhir pesan error -->

            <!-- tombol tambah -->
            <a href="" class="btn btn-primary mb-3" class="btn btn-primary" data-toggle="modal" data-target="#Addnewrole"> Add New Role </a>

            <!-- tabel -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $r['role'] ?></td>
                            <td>
                                <button href="<?= base_url('admin/roleAccess/') . $r['id'] ?>" class="btn btn-warning btn-sm">Access</button>
                                <button href="" class="btn btn-success btn-sm" data-toggle="modal" data-popup="tooltip" data-placemnet="top" title="edit" data-target="#roleedit<?= $r['id']; ?>">Edit</button>
                                <button onclick="hapusRole('<?= base_url('admin/hapusrole/') . $r['id'] ?>')" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>
</div>
<!-- End of Main Content -->

<!-- modal -->
<div class="modal fade" id="Addnewrole" tabindex="-1" aria-labelledby="AddnewroleLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="AddnewroleLabel">Add New Role</h5>
                <button type="button" class="btn-close" date-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/role'); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Menu Role">
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--  Modal Edit  -->

<?php foreach ($role as $r) : ?>

    <div class="modal fade" id="roleedit<?= $r['id'] ?>" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="roleeditLabel">Edit Role</h5>
                    <button type="button" class="close" date-dismiss="modal" aria-label="Close">
                </div>
                <form action="<?= base_url('admin/editrole'); ?>" method="post">

                        <input type="hidden" class="form-control"
                        readenly value="<?= $r['id']; ?>" name="id">

                        <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="role" name="role"
                             placeholder="Menu Role" value="<?= $r['role']; ?>">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">
                        <i Class="fas fa-fw fa-pencil-alt fa-sm"></i> Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach;  ?>