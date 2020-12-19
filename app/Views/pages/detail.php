<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="content">
    <div class="content1">
        <div class="imgbox">
            <img class="detail-img" src="/img/shoes/<?= $sepatu['foto1']; ?>" alt="">
        </div>
        <br><br>
        <div class="imgbox">
            <img class="detail-img" src="/img/shoes/<?= $sepatu['foto2']; ?>" alt="">
        </div>
    </div>
    <div class="content2">
        <div class="imgbox">
            <img class="detail-img" src="/img/shoes/<?= $sepatu['foto3']; ?>" alt="">
        </div>
        <br><br>
        <div class="imgbox">
            <img class="detail-img" src="/img/shoes/<?= $sepatu['foto4']; ?>" alt="">
        </div>
    </div>
    <div class="content3 ">
        <div class="row">
            <div class="col-8"><?= $sepatu['jenis']; ?> shoes</div>
            <div class="col-4">Rp <?= $sepatu['harga']; ?></div>
        </div>
        <div class="row">
            <div class="col">
                <h2 style="color: #c781ff;"><?= $brand['nama_brand']; ?></h2>
                <h3><?= $sepatu['tipe']; ?></h3>
            </div>
        </div>
        <div class="div"></div>
        <div class="row">
            <div class="col">
                <h4 style="color: #c781ff;">Available on :</h4>
                <h5><?= $sepatu['warna']; ?></h5>
            </div>
        </div>
        <div class="div"></div>
        <h1>Size</h1>
        <div class="size">
            <div class="sizeNum">38</div>
            <div class="sizeNum">39</div>
            <div class="sizeNum">40</div>
            <div class="sizeNum">41</div>
            <div class="sizeNum">42</div>
            <div class="sizeNum">43</div>
        </div>


        <a href="/cart" class="btn btn-add">Add to cart</a>
    </div>
</div>
<?= $this->endSection('content'); ?>