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

        <?php if (session()->getFlashdata('msgupdate')) : ?>
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Well done!</strong> you successfully update data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>

        <!-- end page title -->
        <?php if (session()->getFlashdata('msgdel')) : ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <strong>Huff!</strong> you successfully delete data.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <table id="datatable" class="table table-bordered dt-responsive nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Telp</th>
                                <th>Join Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($users as $u) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $u['nama']; ?></td>
                                <td><?= $u['email']; ?></td>
                                <td><?= $u['telp']; ?></td>
                                <td><?= $u['created_at']; ?></td>
                                <td style="text-align: center;">
                                    <form action="/dashboard/users/<?= $u['id']; ?>" method="POST">
                                        <?= csrf_field(); ?>

                                        <a class="btn btn-bordred-info" href="/dashboard/users/<?= $u['id']; ?>"
                                            title="View"><i class="fas fa-eye"></i></a>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger d-inline" title="Delete Profile"
                                            onclick="return confirm('Are you sure you want to delete?');"><i
                                                class="fas fa-trash-alt"></i> </button>
                                    </form>

                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end row -->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->

<?= $this->endSection(); ?>