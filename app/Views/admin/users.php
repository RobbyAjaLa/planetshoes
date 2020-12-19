<?= $this->extend('layout/dashTemplate'); ?>

<?= $this->section('dashContent'); ?>
<!-- Main Container -->
<main id="main-container">
    <div class="content">
        <div class="block-content bg-white mb-2">
            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td>nama</td>
                            <td>email</td>
                            <td>
                                <a href="/admin/userEdit/user_id" class="btn btn-primary">Promote</a>
                                <a href="/admin/users/delete" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>



<?= $this->endSection('dashContent'); ?>