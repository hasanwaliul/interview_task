<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('admin-dashboard') }}" target="_blank"><i class="fa fa-tachometer"></i>&nbsp; Dashboard</a></li>
                    </ul>
                </div><!-- /.cnt-account -->

                <div class="cnt-block">
                    <ul class="list-unstyled list-inline">
                        <ul class="list-unstyled list-inline">

                            <li class="dropdown dropdown-small">
                            </li>
                        </ul><!-- /.list-unstyled -->
                </div><!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div><!-- /.header-top-inner -->
        </div><!-- /.container -->
    </div><!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo">
                        <a href=" {{ route('frontend') }} ">

                            <img src=" {{ asset('frontend') }}/assets/images/logo.png" alt="header-image" height="70px"
                                width="100px">

                        </a>
                    </div><!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div><!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form>
                            <div class="control-group">

                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown">

                                        <a class="dropdown-toggle" data-toggle="dropdown"
                                            href="category.html">Categories <b class="caret"></b></a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Electronics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Shoes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Watches</a></li>

                                        </ul>
                                    </li>
                                </ul>

                                <input class="search-field" placeholder="Search here..." />

                                <a class="search-button" href="#"></a>

                            </div>
                        </form>
                    </div><!-- /.search-area -->
                    <!-- ============================================================= SEARCH AREA : END ============================================================= -->
                </div><!-- /.top-search-holder -->

                <div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                    <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

                    <div class="dropdown dropdown-cart">
                        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
                            <div class="items-cart-inner">
                                <div class="basket">
                                    <i class="glyphicon glyphicon-shopping-cart"></i>
                                </div>
                                <div class="basket-item-count"><span class="count" id="cartProductQty"></span></div>
                                <div class="total-price-basket">
                                    @if (Session()->get('language') == 'bangla')
                                    <span class="lbl">মোট বাঁজার -</span>
                                    @else
                                    <span class="lbl">cart -</span>
                                    @endif
                                    <span class="total-price">
                                        @if (Session()->get('language') == 'bangla')
                                        <span class="sign">৳</span><span class="value" id="cartProductPrice"></span>
                                        @else
                                        <span class="sign">$</span><span class="value" id="cartProductPrice"></span>
                                        @endif
                                    </span>
                                </div>

                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                {{-- Mini Cart Selected Product Info Start --}}
                                <div id="miniCartArea">
                                </div>
                                {{-- Mini Cart Selected Product Info End --}}

                                <div class="clearfix cart-total">
                                    <div class="pull-right">

                                        <span class="text">Sub Total :</span><span class='price'
                                            id="cartProductPrice">$</span>

                                    </div>
                                    <div class="clearfix"></div>

                                    <a href="#" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                                </div><!-- /.cart-total-->

                            </li>
                        </ul><!-- /.dropdown-menu-->
                    </div><!-- /.dropdown-cart -->

                    <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
                </div><!-- /.top-cart-row -->
            </div><!-- /.row -->

        </div><!-- /.container -->

    </div><!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                        class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw">
                                    <a href="home.html" data-hover="dropdown" class="dropdown-toggle"
                                        data-toggle="dropdown">Home</a>

                                </li>
                                <li class="dropdown yamm mega-menu">
                                    <a href="home.html" data-hover="dropdown" class="dropdown-toggle"
                                        data-toggle="dropdown">Clothing</a>
                                    <ul class="dropdown-menu container">

                                    </ul>
                                </li>

                                <li class="dropdown mega-menu">
                                    <a href="category.html" data-hover="dropdown" class="dropdown-toggle"
                                        data-toggle="dropdown">Electronics
                                        <span class="menu-label hot-menu hidden-xs">hot</span>
                                    </a>
                                    <ul class="dropdown-menu container">

                                    </ul>
                                </li>
                                <li class="dropdown hidden-sm">

                                    <a href="category.html">Health & Beauty
                                        <span class="menu-label new-menu hidden-xs">new</span>
                                    </a>
                                </li>

                                <li class="dropdown hidden-sm">
                                    <a href="category.html">Watches</a>
                                </li>

                                <li class="dropdown">
                                    <a href="contact.html">Jewellery</a>
                                </li>

                                <li class="dropdown">
                                    <a href="contact.html">Shoes</a>
                                </li>
                                <li class="dropdown">
                                    <a href="contact.html">Kids & Girls</a>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown"
                                        data-toggle="dropdown">Pages</a>
                                    <ul class="dropdown-menu pages">

                                    </ul>
                                </li>
                                <li class="dropdown  navbar-right special-menu">
                                    <a href="#">Todays offer</a>
                                </li>


                            </ul><!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div><!-- /.nav-outer -->
                    </div><!-- /.navbar-collapse -->


                </div><!-- /.nav-bg-class -->
            </div><!-- /.navbar-default -->
        </div><!-- /.container-class -->

    </div><!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->
</header>
