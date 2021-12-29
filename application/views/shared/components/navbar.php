<div class="navbar-custom">
    <div class="container-fluid">
        <ul class="list-unstyled topnav-menu float-right mb-0">





            <li class="dropdown d-none d-lg-inline-block">
                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-toggle="fullscreen" href="layouts-horizontal.html#">
                    <i class="fe-maximize noti-icon"></i>
                </a>
            </li>





            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="layouts-horizontal.html#" role="button" aria-haspopup="false" aria-expanded="false">
                    <i class="fe-bell noti-icon"></i>
                    <span class="badge badge-danger rounded-circle noti-icon-badge">9</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                    <!-- item-->
                    <div class="dropdown-item noti-title">
                        <h5 class="m-0">
                            <span class="float-right">
                                <a href="layouts-horizontal.html" class="text-dark">
                                    <small>Clear All</small>
                                </a>
                            </span>Notification
                        </h5>
                    </div>

                    <div class="noti-scroll" data-simplebar>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item active">
                            <div class="notify-icon">
                                <img src="/assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" />
                            </div>
                            <p class="notify-details">Cristina Pride</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Hi, How are you? What about our next meeting</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-primary">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">1 min ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon">
                                <img src="/assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" />
                            </div>
                            <p class="notify-details">Karen Robinson</p>
                            <p class="text-muted mb-0 user-msg">
                                <small>Wow ! this admin looks good and awesome design</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-warning">
                                <i class="mdi mdi-account-plus"></i>
                            </div>
                            <p class="notify-details">New user registered.
                                <small class="text-muted">5 hours ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-info">
                                <i class="mdi mdi-comment-account-outline"></i>
                            </div>
                            <p class="notify-details">Caleb Flakelar commented on Admin
                                <small class="text-muted">4 days ago</small>
                            </p>
                        </a>

                        <!-- item-->
                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                            <div class="notify-icon bg-secondary">
                                <i class="mdi mdi-heart"></i>
                            </div>
                            <p class="notify-details">Carlos Crouch liked
                                <b>Admin</b>
                                <small class="text-muted">13 days ago</small>
                            </p>
                        </a>
                    </div>

                    <!-- All-->
                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                        View all
                        <i class="fe-arrow-right"></i>
                    </a>

                </div>
            </li>

            <li class="dropdown notification-list topbar-dropdown">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="layouts-horizontal.html#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="/assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        <?= session_get_object('user')->name . ' ' . session_get_object('user')->surname ?><i class="mdi mdi-chevron-down"></i>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Hoşgeldiniz !</h6>
                    </div>

                    <!-- item-->
                    <a href="/users/profile/" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>Profilim</span>
                    </a>

                    <!-- item-->


                    <!-- item-->
                    <a href="/auth/lockscreen" class="dropdown-item notify-item">
                        <i class="fe-lock"></i>
                        <span>Ekranı Kilitle</span>
                    </a>

                    <div class="dropdown-divider"></div>

                    <!-- item-->
                    <a href="/auth/logout" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Sistemden Çık</span>
                    </a>

                </div>
            </li>



        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="index.html" class="logo logo-dark text-center">
                <span class="logo-sm">
                    <img src="/assets/images/logo-sm.png" alt="" height="25">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-lg">
                    <img src="/assets/images/logo-dark.png" alt="" height="50">
                    <!-- <span class="logo-lg-text-light">U</span> -->
                </span>
            </a>

            <a href="/" class="logo logo-light text-center">
                <span class="logo-sm">
                    <img src="/assets/images/logo-sm.png" alt="" height="25">
                </span>
                <span class="logo-lg">
                    <img src="/assets/images/logo-light.png" alt="" height="50">
                </span>
            </a>
        </div>
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>



            <li class="dropdown dropdown-mega d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="index.html#" role="button" aria-haspopup="false" aria-expanded="false">
                    Yönetici Paneli
                    <i class="mdi mdi-chevron-down"></i>
                </a>
                <div class="dropdown-menu dropdown-megamenu">
                    <div class="row">
                        <div class="col-sm-6">

                            <div class="row border-right-material-grey-200   mr-1">
                                <div class="col-md-4 col-lg-4 ">
                                    <h5 class="text-dark mt-0">Sözleşmeler</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Gizlilik Politikası</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">KVKK</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Uzaktan Satış</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Çerez Politikası</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    <h5 class="text-dark mt-0">Sabit Sayfalar</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Hakkımızda</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Bize Ulaşın</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Statik Bilgilendirme</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-4 ">
                                    <h5 class="text-dark mt-0">Site Ayarları</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Site Bilgileri</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sosyal Medya Ayarları</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Seo Ayarları</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="row ">
                                <div class="col-md-4 col-lg-4">
                                    <h5 class="text-dark mt-0">Kullanıcı İşlemleri</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Kullanıcılar</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Kullanıcı Yetkileri</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Kullanıcı Türleri</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Kullanıcı Grupları</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <h5 class="text-dark mt-0">Tanımlamalar</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Para Birimleri</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Ödeme Türleri</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Müşteri Tipleri</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Sipariş Türleri</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-4 col-lg-4">
                                    <h5 class="text-dark mt-0">Ürün Tanımlamaları</h5>
                                    <ul class="list-unstyled megamenu-list">
                                        <li>
                                            <a href="javascript:void(0);">Renkler</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Ölçü Grupları</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Ölçüler</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);">Ürün Kategorileri</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row border-top-material-grey-200  ">
                        <div class="col-12 ">
                            <h5 class="text-center"> Yönetici İşlemleri</h5>
                            <div class="row justify-content-center">
                                <nav class="navbar navbar-light navbar-expand-lg topnav-menu ">
                                    <ol class="navbar-nav">
                                        <li><a href="#" class="text-danger pr-1 pt-1 border-bottom-dark border-bottom-1">Modüller</a></li>
                                        <li><a href="#" class="text-danger pr-1 pt-1">İp Kısıtlama</a></li>
                                        <li><a href="#" class="text-danger pr-1 pt-1">Kullanıcı Logları</a></li>
                                       

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="clearfix"></div>
        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li>
                <!-- Mobile menu toggle (Horizontal Layout)-->
                <a class="navbar-toggle nav-link" data-toggle="collapse" data-target="#topnav-menu-content">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </li>


        </ul>
        <div class="clearfix"></div>
    </div>
</div>