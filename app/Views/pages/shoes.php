<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- content -->
<div class="container">
    <div class="row">
        <?php foreach ($sepatu as $s) : ?>
            <div class="col-sm-4 kartu">
                <div class="card" style="width: 18rem;">
                    <img src="/img/shoes/<?= $s['foto1']; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h3 class="card-title" style="height: 30px;"><?= $s['tipe']; ?></h3>
                        <p class="card-text harga"> Rp <?= $s['harga']; ?></p>
                        <a href="/detail/<?= $s['id_sepatu']; ?>" class="btn btn-detail">Detail</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!-- end of content -->
<?= $this->endSection('content'); ?>