@include('Admin.common.header')

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            @include('Admin.common.menu_sidebar')
            <!-- END MENU SIDEBAR-->

            <!-- PAGE CONTAINER-->
            <div class="page-container">
                <!-- HEADER DESKTOP-->
                <header class="header-desktop">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="header-wrap">
                                <form class="form-header" action="" method="POST">
                                    <input class="au-input au-input--xl" type="text" name="search"
                                        placeholder="Search for datas &amp; reports..." />
                                    <button class="au-btn--submit" type="submit">
                                        <i class="zmdi zmdi-search"></i>
                                    </button>
                                </form>
                                <div class="header-button">
                                    <div class="noti-wrap">
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-comment-more"></i>
                                            <span class="quantity">1</span>
                                            <div class="mess-dropdown js-dropdown">
                                                <div class="mess__title">
                                                    <p>You have 2 news message</p>
                                                </div>
                                                <div class="mess__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Michelle Moreno</h6>
                                                        <p>Have sent a photo</p>
                                                        <span class="time">3 min ago</span>
                                                    </div>
                                                </div>
                                                <div class="mess__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                    </div>
                                                    <div class="content">
                                                        <h6>Diane Myers</h6>
                                                        <p>You are now connected on message</p>
                                                        <span class="time">Yesterday</span>
                                                    </div>
                                                </div>
                                                <div class="mess__footer">
                                                    <a href="#">View all messages</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-email"></i>
                                            <span class="quantity">1</span>
                                            <div class="email-dropdown js-dropdown">
                                                <div class="email__title">
                                                    <p>You have 3 New Emails</p>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, 3 min ago</span>
                                                    </div>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, Yesterday</span>
                                                    </div>
                                                </div>
                                                <div class="email__item">
                                                    <div class="image img-cir img-40">
                                                        <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                    </div>
                                                    <div class="content">
                                                        <p>Meeting about new dashboard...</p>
                                                        <span>Cynthia Harvey, April 12,,2018</span>
                                                    </div>
                                                </div>
                                                <div class="email__footer">
                                                    <a href="#">See all emails</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noti__item js-item-menu">
                                            <i class="zmdi zmdi-notifications"></i>
                                            <span class="quantity">3</span>
                                            <div class="notifi-dropdown js-dropdown">
                                                <div class="notifi__title">
                                                    <p>You have 3 Notifications</p>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c1 img-cir img-40">
                                                        <i class="zmdi zmdi-email-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a email notification</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c2 img-cir img-40">
                                                        <i class="zmdi zmdi-account-box"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>Your account has been blocked</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c3 img-cir img-40">
                                                        <i class="zmdi zmdi-file-text"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>You got a new file</p>
                                                        <span class="date">April 12, 2018 06:50</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__footer">
                                                    <a href="#">All notifications</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="account-wrap">
                                        <div class="account-item clearfix js-item-menu">
                                            <div class="image">
                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                            </div>
                                            <div class="content">
                                                <a class="js-acc-btn" href="#">john doe</a>
                                            </div>
                                            <div class="account-dropdown js-dropdown">
                                                <div class="info clearfix">
                                                    <div class="image">
                                                        <a href="#">
                                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                        </a>
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="name">
                                                            <a href="#">john doe</a>
                                                        </h5>
                                                        <span class="email">johndoe@example.com</span>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-account"></i>Account</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="#">
                                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                    </div>
                                                </div>
                                                <div class="account-dropdown__footer">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- HEADER DESKTOP-->
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6">

                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Alerts</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-primary" role="alert">
                                                This is a primary alert—check it out!
                                            </div>
                                            <div class="alert alert-secondary" role="alert">
                                                This is a secondary alert—check it out!
                                            </div>
                                            <div class="alert alert-success" role="alert">
                                                This is a success alert—check it out!
                                            </div>
                                            <div class="alert alert-danger" role="alert">
                                                This is a danger alert—check it out!
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                                This is a warning alert—check it out!
                                            </div>
                                            <div class="alert alert-info" role="alert">
                                                This is a info alert—check it out!
                                            </div>
                                            <div class="alert alert-light" role="alert">
                                                This is a light alert—check it out!
                                            </div>
                                            <div class="alert alert-dark" role="alert">
                                                This is a dark alert—check it out!
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Link Color Alerts</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-primary" role="alert">
                                                This is a primary alert with
                                                <a href="#" class="alert-link">an example link</a>. Give it a
                                                click if you like.
                                            </div>
                                            <div class="alert alert-secondary" role="alert">
                                                This is a secondary alert with
                                                <a href="#" class="alert-link">an example link</a>. Give it a
                                                click if you like.
                                            </div>
                                            <div class="alert alert-success" role="alert">
                                                This is a success alert with
                                                <a href="#" class="alert-link">an example link</a>. Give it a
                                                click if you like.
                                            </div>
                                            <div class="alert alert-danger" role="alert">
                                                This is a danger alert with
                                                <a href="#" class="alert-link">an example link</a>. Give it a
                                                click if you like.
                                            </div>
                                            <div class="alert alert-warning" role="alert">
                                                This is a warning alert with
                                                <a href="#" class="alert-link">an example link</a>. Give it a
                                                click if you like.
                                            </div>
                                            <div class="alert alert-info" role="alert">
                                                This is a info alert with
                                                <a href="#" class="alert-link">an example link</a>. Give it a
                                                click if you like.
                                            </div>
                                            <div class="alert alert-light" role="alert">
                                                This is a light alert with
                                                <a href="#" class="alert-link">an example link</a>. Give it a
                                                click if you like.
                                            </div>
                                            <div class="alert alert-dark" role="alert">
                                                This is a dark alert with
                                                <a href="#" class="alert-link">an example link</a>. Give it a
                                                click if you like.
                                            </div>
                                        </div>
                                    </div>


                                </div>


                                <div class="col-md-6">

                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Dismissing Alerts</strong>
                                        </div>
                                        <div class="card-body">
                                            <div
                                                class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                                <span class="badge badge-pill badge-primary">Success</span>
                                                You successfully read this important alert.
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div
                                                class="sufee-alert alert with-close alert-secondary alert-dismissible fade show">
                                                <span class="badge badge-pill badge-secondary">Success</span>
                                                You successfully read this important alert.
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div
                                                class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                                                <span class="badge badge-pill badge-success">Success</span>
                                                You successfully read this important alert.
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div
                                                class="sufee-alert alert with-close alert-danger alert-dismissible fade show">
                                                <span class="badge badge-pill badge-danger">Success</span>
                                                You successfully read this important alert.
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div
                                                class="sufee-alert alert with-close alert-warning alert-dismissible fade show">
                                                <span class="badge badge-pill badge-warning">Success</span>
                                                You successfully read this important alert.
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div
                                                class="sufee-alert alert with-close alert-info alert-dismissible fade show">
                                                <span class="badge badge-pill badge-info">Success</span>
                                                You successfully read this important alert.
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div
                                                class="sufee-alert alert with-close alert-light alert-dismissible fade show">
                                                <span class="badge badge-pill badge-light">Success</span>
                                                You successfully read this important alert.
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div
                                                class="sufee-alert alert with-close alert-dark alert-dismissible fade show">
                                                <span class="badge badge-pill badge-dark">Success</span>
                                                You successfully read this important alert.
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Contents</strong>
                                        </div>
                                        <div class="card-body">
                                            <div class="alert alert-success" role="alert">
                                                <h4 class="alert-heading">Well done!</h4>
                                                <p>Aww yeah, you successfully read this important alert message. This
                                                    example text is going to run a bit longer so
                                                    that you can see how spacing within an alert works with this kind of
                                                    content.</p>
                                                <hr>
                                                <p class="mb-0">Whenever you need to, be sure to use margin utilities
                                                    to keep things nice and tidy.</p>
                                            </div>

                                            <div class="alert alert-warning" role="alert">
                                                <h4 class="alert-heading">Well done!</h4>
                                                <p>Aww yeah, you successfully read this important alert message. This
                                                    example text is going to run a bit longer so
                                                    that you can see how spacing within an alert works with this kind of
                                                    content.</p>
                                                <hr>
                                                <p class="mb-0">Whenever you need to, be sure to use margin utilities
                                                    to keep things nice and tidy.</p>
                                            </div>

                                            <div class="alert alert-danger" role="alert">
                                                <h4 class="alert-heading">Well done!</h4>
                                                <p>Aww yeah, you successfully read this important alert message. This
                                                    example text is going to run a bit longer so
                                                    that you can see how spacing within an alert works with this kind of
                                                    content.</p>
                                                <hr>
                                                <p class="mb-0">Whenever you need to, be sure to use margin utilities
                                                    to keep things nice and tidy.</p>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                                href="https://colorlib.com">Colorlib</a>.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTAINER-->

    </div>

    @include('Admin.common.footer')
</body>

</html>
<!-- end document-->
