<div class="col s12">
    <div class="container">
        <div class="row user-profile mt-1">
            <img class="responsive-img" alt="" src="<?= base_url('app-assets/'); ?>images/gallery/bg-profile.png">
        </div>
        <div class="section" id="user-profile">
            <div class="row">
                <!-- User Profile Feed -->
                <div class="col s12 m4 l3 user-section-negative-margin">
                    <div class="row">
                        <div class="col s12 center-align">
                            <img class="responsive-img circle z-depth-5" width="200" src="<?= base_url('assets/img/profile/') . $user['image']; ?>" alt="">
                            <br>
                        </div>
                    </div>
                    <div class="row mt-5">

                    </div>
                    <div class="row">
                        <div class="col s12">
                            <p class="m-0">Bergabung mulai</p>
                            <p class="m-0"><?= date('d F Y', $user['date_created']); ?></p>
                        </div>
                    </div>

                    <hr class="mt-5">
                </div>
                <!-- User Post Feed -->
                <div class="col s12 m9 ">
                    <div class="row">
                        <div class="card user-card-negative-margin z-depth-0" id="feed">
                            <div class="card-content card-border-gray">
                                <div class="row">
                                    <div class="col s12">
                                        <h5><?= $user['name']; ?></h5>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col s1 pr-0 circle">

                                    </div>
                                    <div class="col s11">
                                        <a href="#">
                                            <p class="m-0">Maestro Swim </p>
                                        </a>
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="card card-border z-depth-2">
                                                    <div class="card-image">
                                                        <img src="<?= base_url('app-assets/'); ?>images/gallery/maestro1.png" alt="">
                                                    </div>
                                                    <div class="card-content">
                                                        <h6 class="font-weight-900 text-uppercase"><a href="#">Maestro Swim Academy</a></h6>
                                                        <p>Program Baby Swim</p>
                                                    </div>
                                                </div>
                                                <div class="social-icon">
                                                    <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                                                    15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-5">
                                <div class="row mt-5">
                                    <div class="col s1 pr-0 circle">

                                    </div>
                                    <div class="col s11">
                                        <a href="#">
                                            <p class="m-0">Maestro Swim </p>
                                        </a>
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="card card-border z-depth-2">
                                                    <div class="card-image">
                                                        <img src="<?= base_url('app-assets/'); ?>images/gallery/maestro2.png" alt="">
                                                    </div>
                                                    <div class="card-content">
                                                        <h6 class="font-weight-900 text-uppercase"><a href="#">maestro Swim Academy</a></h6>
                                                        <p>Progra private</p>
                                                    </div>
                                                </div>
                                                <div class="social-icon">
                                                    <span><i class="material-icons vertical-align-bottom mr-1">favorite_border</i>90</span> <i class="material-icons vertical-align-bottom ml-3 mr-1">chat_bubble_outline</i>
                                                    15 <span><i class="material-icons vertical-align-bottom ml-3 mr-1">redo</i> 6</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mt-5">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
</div>
<!-- END: Page Main-->