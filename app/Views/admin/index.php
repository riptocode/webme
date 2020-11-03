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

        <div class="row">

            <div class="col-xl-3 col-md-6">
                <div class="card-box">

                    <h4 class="header-title mt-0 mb-4">Users</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-left" dir="ltr">
                            <img class="imgicon" src="<?php echo base_url('assets/images/imgicon/017-boy.png') ?>">
                        </div>
                        <div class="widget-detail-1 text-right">
                            <h2 class="font-weight-normal pt-2 mb-1"> <?= $sum_users; ?>
                            </h2>
                            <p class="text mb-1">Orang Terdaftar</p>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card-box">

                    <h4 class="header-title mt-0 mb-4">File Upload</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-left" dir="ltr">
                            <img class="imgicon" src="<?php echo base_url('assets/images/imgicon/026-scrolls.png') ?>">
                        </div>
                        <div class="widget-detail-1 text-right">
                            <h2 class="font-weight-normal pt-2 mb-1"> 4569 </h2>
                            <p class="text-muted mb-1">File Manager</p>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card-box">

                    <h4 class="header-title mt-0 mb-4">Statistics</h4>

                    <div class="widget-chart-1">
                        <div class="widget-chart-box-1 float-left" dir="ltr">
                            <input data-plugin="knob" data-width="80" data-height="80" data-fgColor="#ffbd4a"
                                data-bgColor="#FFE6BA" value="80" data-skin="tron" data-angleOffset="180"
                                data-readOnly=true data-thickness=".15" />
                        </div>
                        <div class="widget-detail-1 text-right">
                            <h2 class="font-weight-normal pt-2 mb-1"> 4569 </h2>
                            <p class="text-muted mb-1">Revenue today</p>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

            <div class="col-xl-3 col-md-6">
                <div class="card-box">
                    <h4 class="header-title mt-0 mb-3">Daily Sales</h4>

                    <div class="widget-box-2">
                        <div class="widget-detail-2 text-right">
                            <span class="badge badge-pink badge-pill float-left mt-3">32% <i
                                    class="mdi mdi-trending-up"></i> </span>
                            <h2 class="font-weight-normal mb-1"> 158 </h2>
                            <p class="text-muted mb-3">Revenue today</p>
                        </div>
                        <div class="progress progress-bar-alt-pink progress-sm">
                            <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="77" aria-valuemin="0"
                                aria-valuemax="100" style="width: 77%;">
                                <span class="sr-only">77% Complete</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end col -->

        </div>
        <!-- end row -->

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
                                    <a class="btn btn-bordred-info" href="/dashboard/users/<?= $u['id']; ?>"
                                        title="Edit"><i class="fas fa-eye"></i> View</a>
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