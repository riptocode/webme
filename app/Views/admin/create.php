<?= $this->extend('layout/tadmin'); ?>

<?= $this->section('content'); ?>

<div class="wrapper">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">

                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Well done!</strong> you successfully input data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-xl-6">
                <div class="card-box">

                    <h4 class="header-title mt-0 mb-3">Basic Form</h4>
                    <form action="/dashboard/admin/save" method="POST" data-parsley-validate novalidate>

                        <?= csrf_field(); ?>

                        <div class="form-group">
                            <label for="nama">Name*</label>
                            <input type="text" name="nama" parsley-trigger="change" required placeholder="Enter name"
                                class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>"
                                id="nama" value="<?= old('nama'); ?>" autofocus>
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="username">Username*</label>
                            <input type="text" name="username" parsley-trigger="change" required
                                placeholder="Enter username"
                                class="form-control <?= ($validation->hasError('username')) ? 'is-invalid' : ''; ?>"
                                id="username" value="<?= old('username'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('username'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address*</label>
                            <input type="mail" name="email" parsley-trigger="change" required placeholder="Enter email"
                                class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>"
                                id="email" value="<?= old('email'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('email'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="telp">No Telp</label>
                            <input type="number" name="telp" parsley-trigger="change" required
                                placeholder="Enter no telp" class="form-control" id="telp" value="<?= old('telp'); ?>">
                        </div>

                </div>
            </div><!-- end col -->

            <div class="col-xl-6">
                <div class="card-box">

                    <h4 class="header-title mt-0 mb-3">Social Media</h4>

                    <div class="form-group row">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="mdi mdi-instagram"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="instagram" placeholder="Instagram">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="mdi mdi-twitter-box"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="twitter" placeholder="Twitter">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="mdi mdi-facebook-box"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="facebook" placeholder="Facebook">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="mdi mdi-discord"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="discord" placeholder="Discord">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="mdi mdi-telegram"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="telegram" placeholder="Telegram">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="mdi mdi-github-box"></i>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="github" placeholder="Github">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-sm-4 col-sm-8">
                            <button type="submit" class="btn btn-info waves-effect waves-light mr-1">
                                Submit
                            </button>
                            <button type="reset" class="btn btn-danger waves-effect waves-light">
                                Reset
                            </button>
                            <a href="/dashboard">
                                <button type="button" class="btn btn-dark waves-effect waves-light mr-1">
                                    Cancel
                                </button>
                            </a>
                        </div>
                    </div>
                    </form>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->
    </div> <!-- end container -->
</div>

<?= $this->endSection(); ?>