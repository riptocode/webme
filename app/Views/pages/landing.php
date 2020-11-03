<?= $this->extend('layout/tportal'); ?>

<?= $this->section('content'); ?>

<section class="bg-home bg-gradient" id="home">
    <div class="home-center">
        <div class="home-desc-center">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-6">
                        <div class="home-title text-white">
                            <h5 class="mb-3 text-white-50">Hi..</h5>
                            <h2 class="mb-4">Ricode Apps</h2>
                            <p class="text-white-50 home-desc font-16 mb-5">This is a user management application
                                and sharing portal developed by ripto.id</p>
                            <div class="mt-5">
                                <a href="#" class="btn btn-dark mr-4"><span class="mdi mdi-account-plus"> Join
                                        Ricode</span> </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1 col-sm-6">
                        <div class="home-img mo-mt-20">
                            <img src="images/home-img.png" alt="" class="img-fluid mx-auto d-block">
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- end container-fluid -->
        </div>
    </div>
</section>
<!-- home end -->

<!-- features start -->
<section class="features" id="features">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-pills nav-justified features-tab mb-5" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="pills-code-tab" data-toggle="pill" href="#pills-code" role="tab"
                            aria-controls="pills-code" aria-selected="true">
                            <div class="clearfix">
                                <div class="features-icon float-right">
                                    <i class="pe-7s-notebook h1"></i>
                                </div>
                                <div class="d-none d-lg-block mr-4">
                                    <h5>Quality Code</h5>
                                    <p>At vero eos et accusam et</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-customize-tab" data-toggle="pill" href="#pills-customize"
                            role="tab" aria-controls="pills-customize" aria-selected="false">
                            <div class="clearfix">
                                <div class="features-icon float-right">
                                    <i class="pe-7s-edit h1"></i>
                                </div>
                                <div class="d-none d-lg-block mr-4">
                                    <h5>Easy to customize</h5>
                                    <p>Sed ut unde iste error sit</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-support-tab" data-toggle="pill" href="#pills-support" role="tab"
                            aria-controls="pills-support" aria-selected="false">
                            <div class="features-icon float-right">
                                <i class="pe-7s-headphones h1"></i>
                            </div>
                            <div class="d-none d-lg-block mr-4">
                                <h5>Awesome Support</h5>
                                <p>It will be as simple as fact</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade" id="pills-code" role="tabpanel" aria-labelledby="pills-code-tab">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div>
                                    <img src="images/features-img/img-1.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <div>
                                    <div class="feature-icon mb-4">
                                        <i class="pe-7s-notebook h1 text-primary"></i>
                                    </div>
                                    <h5 class="mb-3">Quality Code</h5>
                                    <p class="text-muted">It will be as simple as Occidental in fact, it will be
                                        Occidental. To an English person it will seem like simplified English as a
                                        skeptical Cambridge.</p>
                                    <p class="text-muted">If several languages coalesce the grammar of the resulting
                                        language </p>
                                    <div class="row pt-4">
                                        <div class="col-lg-6">
                                            <div class="text-muted">
                                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i>
                                                    Nemo enim ipsam quia</p>
                                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i>
                                                    Ut enim ad minima</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="text-muted">
                                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i>
                                                    At vero eos accusamus et </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="btn btn-custom">Learn More <i
                                                class="mdi mdi-arrow-right ml-1"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                    <div class="tab-pane fades how active" id="pills-customize" role="tabpanel"
                        aria-labelledby="pills-customize-tab">
                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div>
                                    <img src="images/features-img/img-2.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <div>
                                    <div class="feature-icon mb-4">
                                        <i class="pe-7s-edit h1 text-primary"></i>
                                    </div>
                                    <h5 class="mb-3">Easy to customize</h5>
                                    <p class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus
                                        qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
                                        et</p>
                                    <p class="text-muted">If several languages coalesce the grammar of the resulting
                                        language </p>
                                    <div class="row pt-4">
                                        <div class="col-lg-6">
                                            <div class="text-muted">
                                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i>
                                                    Nemo enim ipsam quia</p>
                                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i>
                                                    Ut enim ad minima</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="text-muted">
                                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i>
                                                    At vero eos accusamus et </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="btn btn-custom">Learn More <i
                                                class="mdi mdi-arrow-right ml-1"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <div class="tab-pane fade" id="pills-support" role="tabpanel" aria-labelledby="pills-support-tab">

                        <div class="row align-items-center justify-content-center">
                            <div class="col-lg-4 col-sm-6">
                                <div>
                                    <img src="images/features-img/img-3.png" alt="" class="img-fluid mx-auto d-block">
                                </div>
                            </div>
                            <div class="col-lg-6 offset-lg-1">
                                <div>
                                    <div class="feature-icon mb-4">
                                        <i class="pe-7s-headphones h1 text-primary"></i>
                                    </div>
                                    <h5 class="mb-3">Awesome Support</h5>
                                    <p class="text-muted">It will be as simple as Occidental in fact, it will be
                                        Occidental. To an English person it will seem like simplified English as a
                                        skeptical Cambridge.</p>
                                    <p class="text-muted">If several languages coalesce the grammar of the resulting
                                        language </p>
                                    <div class="row pt-4">
                                        <div class="col-lg-6">
                                            <div class="text-muted">
                                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i>
                                                    Nemo enim ipsam quia</p>
                                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i>
                                                    Ut enim ad minima</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="text-muted">
                                                <p><i class="mdi mdi-checkbox-marked-outline text-primary mr-2 h6"></i>
                                                    At vero eos accusamus et </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-4">
                                        <a href="#" class="btn btn-custom">Learn More <i
                                                class="mdi mdi-arrow-right ml-1"></i></a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- end row -->
                    </div>
                </div>
                <!-- end tab-content -->
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container-fluid -->
</section>
<!-- features end -->

<?= $this->endSection(); ?>