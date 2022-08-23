@include('common.header')

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
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
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
                            <!-- LEFT BLOCK -->
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Badges </strong>
                                        <small>Use this class
                                            <code>&lt;a&gt;</code>,
                                            <code>&lt;button&gt;</code> or
                                            <code>&lt;input&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-secondary">Secondary</button>
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-link">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Button tags </strong>
                                        <small>Use this class
                                            <code>.btn</code> or
                                            <code>&lt;button&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <a class="btn btn-primary" href="#" role="button">Link</a>
                                        <button class="btn btn-danger" type="submit">Button</button>
                                        <input class="btn btn-info" type="button" value="Input">
                                        <input class="btn btn-success" type="submit" value="Submit">
                                        <input class="btn btn-warning" type="reset" value="Reset">
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Disabled state </strong>
                                        <small>Use this class
                                            <code>disabled="disabled"</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary" disabled>Primary</button>
                                        <button type="button" class="btn btn-secondary" disabled>Secondary</button>
                                        <button type="button" class="btn btn-success" disabled>Success</button>
                                        <button type="button" class="btn btn-danger" disabled>Danger</button>
                                        <button type="button" class="btn btn-warning" disabled>Warning</button>
                                        <button type="button" class="btn btn-info" disabled>Info</button>
                                        <button type="button" class="btn btn-link" disabled>Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Button with Icons </strong>
                                        <small>Use
                                            <code>&lt;i&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary">
                                            <i class="fa fa-star"></i>&nbsp; Primary</button>
                                        <button type="button" class="btn btn-secondary">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                        <button type="button" class="btn btn-success">
                                            <i class="fa fa-magic"></i>&nbsp; Success</button>
                                        <button type="button" class="btn btn-warning">
                                            <i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                        <button type="button" class="btn btn-danger">
                                            <i class="fa fa-rss"></i>&nbsp; Danger</button>
                                        <button type="button" class="btn btn-link">
                                            <i class="fa fa-link"></i>&nbsp; Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Small Button </strong>
                                        <small>Use this class
                                            <code>.btn-sm</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary btn-sm">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-sm">Secondary</button>
                                        <button type="button" class="btn btn-success btn-sm">Success</button>
                                        <button type="button" class="btn btn-warning btn-sm">Warning</button>
                                        <button type="button" class="btn btn-danger btn-sm">Danger</button>
                                        <button type="button" class="btn btn-link btn-sm">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Small Button with Icons </strong>
                                        <small>Use this class
                                            <code>.btn-sm</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            <i class="fa fa-star"></i>&nbsp; Primary</button>
                                        <button type="button" class="btn btn-secondary btn-sm">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                        <button type="button" class="btn btn-success btn-sm">
                                            <i class="fa fa-magic"></i>&nbsp; Success</button>
                                        <button type="button" class="btn btn-warning btn-sm">
                                            <i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                            <i class="fa fa-rss"></i>&nbsp;Danger</button>
                                        <button type="button" class="btn btn-link btn-sm">
                                            <i class="fa fa-link"></i>&nbsp; Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Large Button </strong>
                                        <small>Use this class
                                            <code>.btn-lg</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary btn-lg">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-lg">Secondary</button>
                                        <button type="button" class="btn btn-success btn-lg">Success</button>
                                        <button type="button" class="btn btn-warning btn-lg">Warning</button>
                                        <button type="button" class="btn btn-danger btn-lg">Danger</button>
                                        <button type="button" class="btn btn-link btn-lg">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Large Active Button </strong>
                                        <small>Use this class
                                            <code>.btn-lg .active</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary btn-lg active">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-lg active">Secondary</button>
                                        <button type="button" class="btn btn-success btn-lg active">Success</button>
                                        <button type="button" class="btn btn-warning btn-lg active">Warning</button>
                                        <button type="button" class="btn btn-danger btn-lg active">Danger</button>
                                        <button type="button" class="btn btn-link btn-lg active">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Block Level Buttons </strong>
                                        <small>Use this class
                                            <code>.btn-block</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-primary btn-lg btn-block">Block level button</button>
                                        <button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>

                                        <button type="button" class="btn btn-primary btn-lg btn-block">Primary</button>
                                        <button type="button" class="btn btn-secondary btn-lg btn-block">Secondary</button>
                                        <button type="button" class="btn btn-success btn-lg btn-block">Success</button>
                                        <button type="button" class="btn btn-warning btn-lg btn-block">Warning</button>
                                        <button type="button" class="btn btn-danger btn-lg btn-block">Danger</button>
                                        <button type="button" class="btn btn-link btn-lg btn-block">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- END LEFT BLOCK -->

                            <!-- RIGHT BLOCK -->
                            <div class="col-md-6">

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Outline Buttons </strong>
                                        <small>Use this class
                                            <code>&lt;a&gt;</code>,
                                            <code>&lt;button&gt;</code> or
                                            <code>&lt;input&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                        <button type="button" class="btn btn-outline-success">Success</button>
                                        <button type="button" class="btn btn-outline-danger">Danger</button>
                                        <button type="button" class="btn btn-outline-warning">Warning</button>
                                        <button type="button" class="btn btn-outline-info">Info</button>
                                        <button type="button" class="btn btn-outline-link">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Button tags </strong>
                                        <small>Use this class
                                            <code>.btn</code> or
                                            <code>&lt;button&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <a class="btn btn-outline-primary" href="#" role="button">Link</a>
                                        <button class="btn btn-outline-danger" type="submit">Button</button>
                                        <input class="btn btn-outline-info" type="button" value="Input">
                                        <input class="btn btn-outline-success" type="submit" value="Submit">
                                        <input class="btn btn-outline-warning" type="reset" value="Reset">
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Disabled state </strong>
                                        <small>Use this class
                                            <code>disabled="disabled"</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary" disabled>Primary</button>
                                        <button type="button" class="btn btn-outline-secondary" disabled>Secondary</button>
                                        <button type="button" class="btn btn-outline-success" disabled>Success</button>
                                        <button type="button" class="btn btn-outline-danger" disabled>Danger</button>
                                        <button type="button" class="btn btn-outline-warning" disabled>Warning</button>
                                        <button type="button" class="btn btn-outline-info" disabled>Info</button>
                                        <button type="button" class="btn btn-outline-link" disabled>Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Button with Icons </strong>
                                        <small>Use
                                            <code>&lt;i&gt;</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary">
                                            <i class="fa fa-star"></i>&nbsp; Primary</button>
                                        <button type="button" class="btn btn-outline-secondary">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                        <button type="button" class="btn btn-outline-success">
                                            <i class="fa fa-magic"></i>&nbsp; Success</button>
                                        <button type="button" class="btn btn-outline-warning">
                                            <i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                        <button type="button" class="btn btn-outline-danger">
                                            <i class="fa fa-rss"></i>&nbsp; Danger</button>
                                        <button type="button" class="btn btn-outline-link">
                                            <i class="fa fa-link"></i>&nbsp; Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->


                                <div class="card">
                                    <div class="card-header">
                                        <strong>Small Button </strong>
                                        <small>Use this class
                                            <code>.btn-sm</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary btn-sm">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-sm">Success</button>
                                        <button type="button" class="btn btn-outline-warning btn-sm">Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-sm">Danger</button>
                                        <button type="button" class="btn btn-outline-link btn-sm">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Small Button with Icons </strong>
                                        <small>Use this class
                                            <code>.btn-sm</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary btn-sm">
                                            <i class="fa fa-star"></i>&nbsp; Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-sm">
                                            <i class="fa fa-lightbulb-o"></i>&nbsp; Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-sm">
                                            <i class="fa fa-magic"></i>&nbsp; Success</button>
                                        <button type="button" class="btn btn-outline-warning btn-sm">
                                            <i class="fa fa-map-marker"></i>&nbsp; Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-sm">
                                            <i class="fa fa-rss"></i>&nbsp;Danger</button>
                                        <button type="button" class="btn btn-outline-link btn-sm">
                                            <i class="fa fa-link"></i>&nbsp; Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Large Button </strong>
                                        <small>Use this class
                                            <code>.btn-lg</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary btn-lg">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-lg">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-lg">Success</button>
                                        <button type="button" class="btn btn-outline-warning btn-lg">Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-lg">Danger</button>
                                        <button type="button" class="btn btn-outline-link btn-lg">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Large Active Button </strong>
                                        <small>Use this class
                                            <code>.btn-lg .active</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary btn-lg active">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-lg active">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-lg active">Success</button>
                                        <button type="button" class="btn btn-outline-warning btn-lg active">Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-lg active">Danger</button>
                                        <button type="button" class="btn btn-outline-link btn-lg active">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->

                                <div class="card">
                                    <div class="card-header">
                                        <strong>Block Level Buttons </strong>
                                        <small>Use this class
                                            <code>.btn-block</code>
                                        </small>
                                    </div>
                                    <div class="card-body">
                                        <button type="button" class="btn btn-outline-primary btn-lg btn-block">Block level button</button>
                                        <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Block level button</button>

                                        <button type="button" class="btn btn-outline-primary btn-lg btn-block">Primary</button>
                                        <button type="button" class="btn btn-outline-secondary btn-lg btn-block">Secondary</button>
                                        <button type="button" class="btn btn-outline-success btn-lg btn-block">Success</button>
                                        <button type="button" class="btn btn-outline-warning btn-lg btn-block">Warning</button>
                                        <button type="button" class="btn btn-outline-danger btn-lg btn-block">Danger</button>
                                        <button type="button" class="btn btn-outline-link btn-lg btn-block">Link</button>
                                    </div>
                                </div>
                                <!-- /# card -->
                            </div>
                            <!-- END RIGHT BLOCK -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE CONTAINER-->

    </div>

    <!-- Jquery JS-->
    @include('common.footer')

</body>

</html>
<!-- end document-->