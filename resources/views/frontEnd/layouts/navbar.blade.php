    <!-- Start Mainmenu Area -->
    <div class="mainmenu__wrapper bg--white sticky__header">
        <div class="container">
            <div class="row d-none d-lg-flex">
                <div class="col-sm-4 col-md-6 col-lg-2 order-1 order-lg-1">
                    <div class="logo">
                        <a href="#">
                            <img src="{{ asset('frontEnd/assets/images/logo/2.png') }}" alt="logo-images">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2 col-lg-9 order-3 order-lg-2">
                    <div class="mainmenu__wrap">
                        <nav class="mainmenu__nav">
                            <ul class="mainmenu">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li class="drop"><a href="#">Curriculum</a>
                                    <ul class="dropdown__menu">
                                        <li><a href="#"><i class="fa fa-futbol-o"
                                                    aria-hidden="true"></i> Pre-Nursery / Play-Group</a></li>
                                        <li><a href="#"><i class="fa fa-futbol-o"
                                                    aria-hidden="true"></i> Nursery / Montessori-1</a></li>
                                        <li><a href="#"><i class="fa fa-futbol-o"
                                                    aria-hidden="true"></i> LKG / Montessori-2</a></li>
                                        <li><a href="#"><i class="fa fa-futbol-o"
                                                    aria-hidden="true"></i> UKG / Montessori-3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Addmissions</a></li>
                                <li><a href="#">Image Gallery</a></li>
                                <li><a href="#">Video Gallery</a></li>
                                <li><a href="#">Contact Us</a></li>


                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
            <!-- Mobile Menu -->
            <div class="mobile-menu d-block d-lg-none">
                <div class="logo">
                    <a href="#"><img src="{{ URL::to('themes/public/assets/images/logo/2.png') }}"
                            alt="logo"></a>
                </div>

            </div>
            <!-- Mobile Menu -->
        </div>
    </div>
    <!-- End Mainmenu Area -->
    </header>
