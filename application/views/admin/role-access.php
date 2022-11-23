<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <!-- pesan error -->
            <?= $this->session->flashdata('message'); ?>
            <!-- akhir pesan error -->

            
            <h5>Role : <?= $role['role'] ?></h5>
            <!-- tabel -->
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Access</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($menu as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m['menu'] ?></td>
                            <td>
                                <input class="form-check-input" type="checkbox"
                                <?= check_access($role['id'], $m['id']); ?>
                                data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>"></input>
                         </td>       
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <!-- akhit tabel -->
        </div>
    </div>
</div>
</div>


                