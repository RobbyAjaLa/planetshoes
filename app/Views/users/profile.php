<?= $this->extend('layout/dashTemplate'); ?>



<?= $this->section('dashContent'); ?>
<!-- Main Container -->
<main id="main-container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10 mt-5 pt-5">
            <div class="row z-depth-3">
                <div class="col-sm-4 bg info rounded-left">
                    <div class="card-block text-center text-white">
                        <i class="fa fa-user fa-7x mt-5"></i>
                    </div>
                </div>
                <div class="col-sm-8 bg-white rounded-right">
                    <h3 class="mt-3 text-center"> Information</h3>
                    <hr class="bagde-primary mt-0 w-25">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="font-weight-bold"> Name : </p>
                            <h6 class="text-muted"> Romlah</h6>
                        </div>
                        <div class="col-sm-6">
                            <p class="font-weight-bold"> Addres: </p>
                            <h6 class="text-muted"> jl . Setia Budhi </h6>
                        </div>
                        <div class="col-sm-6">
                            <p class="font-weight-bold"> Birth : </p>
                            <h6 class="text-muted"> 08 Mei 1999</h6>
                        </div>
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-sm btn-success">
                                Edit
                            </button>
                            <button type="submit" class="btn btn-sm btn-danger">
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- END Main Container -->

<?= $this->endSection('dashContent'); ?>