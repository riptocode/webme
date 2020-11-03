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
            <div class="col-sm-8">
                <div class="bg-picture card-box">
                    <div class="profile-info-name">
                        <img src="assets/images/profile.jpg"
                            class="rounded-circle avatar-xl img-thumbnail float-left mr-3" alt="profile-image">

                        <div class="profile-info-detail overflow-hidden">
                            <h4 class="m-0"><?= $ids['nama']; ?></h4>
                            <p class="text-muted"><i>@<?= $ids['username']; ?></i></p>
                            <p class="font-13">Hi I'm Alexandra Clarkson,has been the industry's standard dummy text
                                ever since the 1500s, when an unknown printer took a galley of type.Contrary to popular
                                belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical
                                Latin literature it over 2000 years to popular belief Ipsum is not simplyrandom text.
                            </p>

                            <ul class="social-list list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-purple text-purple"><i
                                            class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                            class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i
                                            class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);"
                                        class="social-list-item border-secondary text-secondary"><i
                                            class="mdi mdi-github-circle"></i></a>
                                </li>
                            </ul>

                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <!--/ meta -->
            </div>

            <div class="col-sm-4">
                <div class="card-box">

                    <h4 class="header-title mt-0 mb-3"><i class="mdi mdi-face-profile mr-1"></i> Profile</h4>

                    <ul class="list-group mb-0 user-list">
                        <li class="list-group-item">
                            <a class="user-list-item">
                                <div class="user avatar-sm float-left mr-2">
                                    <img src="assets/images/users/user-3.jpg" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="user-desc">
                                    <h5 class="name mt-0 mb-1">Email</h5>
                                    <p class="desc text-muted mb-0 font-12"><?= $ids['email']; ?></p>
                                </div>
                            </a>
                        </li>

                        <li class="list-group-item">
                            <a class="user-list-item">
                                <div class="user avatar-sm float-left mr-2">
                                    <img src="assets/images/users/user-5.jpg" alt="" class="img-fluid rounded-circle">
                                </div>
                                <div class="user-desc">
                                    <h5 class="name mt-0 mb-1">No Telp</h5>
                                    <p class="desc text-muted mb-0 font-12"><?= $ids['telp']; ?></p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="card-box">
                    <h4 class="header-title mt-0 mb-3"><i class="mdi mdi-notification-clear-all mr-1"></i> Action</h4>

                    <div class="list-group mb-0 user-list">
                        <table style="text-align: center;">
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="btn btn-info" href="/dashboard/edit/<?= $ids['id']; ?>"
                                            title="Edit Profile"><i class="fas fa-pen"></i>
                                            Edit
                                        </a>
                                        <form action="/dashboard/users/<?= $ids['id']; ?>" method="POST">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger d-inline" title="Delete Profile"
                                                onclick="return confirm('Are you sure you want to delete?');"><i
                                                    class="fas fa-trash-alt"></i>
                                                Delete </button>
                                        </form>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end container -->
</div>

<?= $this->endSection(); ?>