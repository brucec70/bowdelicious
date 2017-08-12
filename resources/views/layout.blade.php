<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bowdelicious | Welcome</title>

    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Merriweather:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Responsivity for older IE -->
    <script src="js/respond.min.js"></script>

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.png">
@yield('dochead')
</head>

<body class="no-padding">

    <!-- *** NAVBAR ***
_________________________________________________________ -->

    <div class="navbar navbar-default navbar-fixed-top yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="/">
                    <img src="img/logo.png" alt="Bowdelicious logo" class="hidden-xs hidden-sm">
                    <img src="img/logo-small.png" alt="Bowdelicious logo" class="visible-xs visible-sm"><span class="sr-only">Bowdelicious - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <a class="btn btn-primary navbar-toggle" href="basket.html">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs">3 items in cart</span>
                    </a>
                    <button type="button" class="navbar-toggle btn-default" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <button type="button" class="navbar-toggle btn-default" data-toggle="modal" data-target="#login-modal">
                        <span class="sr-only">User login</span>
                        <i class="fa fa-users"></i>
                    </button>

                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                 
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Baby/Toddler<b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <img src="img/baby.jpg" class="img-responsive hidden-xs" alt="">
                                        </div>
                                        <div class="col-sm-4">
                                            <h3>Baby</h3>
                                            <ul>
                                                <li><a href="category.html">Baby Brights</a>
                                                </li>
                                                <li><a href="category.html">Baby Pastel</a>
                                                </li>
                                                <li><a href="category.html">Baby Animal</a>
                                                </li>
                                                <li><a href="category.html">Baby Love</a>
                                                </li>
                                                 <li><a href="category.html">Baby Bling</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <h3>Toddler</h3>
                                            <ul>
                                                 <li><a href="category.html">Toddler Brights</a>
                                                </li>
                                                <li><a href="category.html">Toddler Pastel</a>
                                                </li>
                                                <li><a href="category.html">Toddler Animal</a>
                                                </li>
                                                <li><a href="category.html">Toddler Love</a>
                                                </li>
                                                 <li><a href="category.html">Toddler Bling</a>
                                                </li>
                                            </ul>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="footer clearfix hidden-xs">
                                    <h4 class="pull-right">Baby/Toddler</h4>
                                    <div class="buttons pull-left">
                                        <a href="#" class="btn btn-default"><i class="fa fa-tags"></i> Sales</a>
                                        <a href="#" class="btn btn-default"><i class="fa fa-star-o"></i> Favourites</a>
                                        <a href="#" class="btn btn-default"><i class="fa fa-globe"></i> Brands</a>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Schools <b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="img/school.jpg" class="img-responsive hidden-xs" alt="">
                                        </div>
                                        <div class="col-sm-3">
                                            <h3>East Dunbartonshire</h3>
                                            <ul>
                                                <li><a href="category.html">Mosshead</a>
                                                </li>
                                                <li><a href="category.html">Westerton</a>
                                                </li>
                                                <li><a href="category.html">Colquhoun</a>
                                                </li>
                                                <li><a href="category.html">Bearsden</a>
                                                </li>
                                                <li><a href="category.html">Baljaffrey</a>
                                                </li>
                                                 <li><a href="category.html">Killermont</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h3>East Dunbartonshire</h3>
                                            <ul>
                                                <li><a href="category.html">Craigdhu</a>
                                                </li>
                                                <li><a href="category.html">Clober</a>
                                                </li>
                                                <li><a href="category.html">Milngavie</a>
                                                </li>
                                                <li><a href="category.html">Lenzie Moss</a>
                                                </li>
                                                <li><a href="category.html">Millersneuk</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h3>Other Schools</h3>
                                            <ul>
                                                <li><a href="category.html">Jordanhill</a>
                                                </li>
                                                <li><a href="category.html">St Ninians</a>
                                                </li>
                                                <li><a href="category.html">Glasgow Academy</a>
                                                </li>
                                                <li><a href="category.html">Hamilton College</a>
                                                </li>
                                                <li><a href="category.html">Summer Uniform</a>
                                                </li>
                                            </ul>
                                             
                                        </div>
                                    </div>
                                </div>
                                <div class="footer clearfix hidden-xs">
                                    <h4 class="pull-right">Schools</h4>
                                    <div class="buttons pull-left">
                                        <a href="#" class="btn btn-default"><i class="fa fa-tags"></i> Sales</a>
                                        <a href="#" class="btn btn-default"><i class="fa fa-star-o"></i> Favourites</a>
                                        <a href="#" class="btn btn-default"><i class="fa fa-globe"></i> Brands</a>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </li>
                     <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Specials<b class="caret"></b></a>
                        <ul class="dropdown-menu">

                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <img src="img/special.jpg" class="img-responsive hidden-xs" alt="">
                                        </div>
                                        <div class="col-sm-3">
                                            <h3>Rainbows & Brownies</h3>
                                            <ul>
                                                <li><a href="category.html">Rainbows</a>
                                                </li>
                                                <li><a href="category.html">Brownies</a>
                                                </li>
                                                
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h3>Wedding</h3>
                                            <ul>
                                                 <li><a href="category.html">Bride</a>
                                                </li>
                                                <li><a href="category.html">Bridesmaids</a>
                                                </li>
                                                <li><a href="category.html">Flower Girls</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                         <div class="col-sm-3">
                                            <h3>Sparkle</h3>
                                            <ul>
                                                 <li><a href="category.html">Sparkly Type 1</a>
                                                </li>
                                                <li><a href="category.html">Sparkly Type 2</a>
                                                </li>
                                                <li><a href="category.html">Sparkly Type 3</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                      
                                    </div>
                                </div>
                                <div class="footer clearfix hidden-xs">
                                    <h4 class="pull-right">Specials</h4>
                                    <div class="buttons pull-left">
                                        <a href="#" class="btn btn-default"><i class="fa fa-tags"></i> Sales</a>
                                        <a href="#" class="btn btn-default"><i class="fa fa-star-o"></i> Favourites</a>
                                        <a href="#" class="btn btn-default"><i class="fa fa-globe"></i> Brands</a>
                                    </div>
                                </div>

                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">More Info <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content" style="col-sm-8 col-offset-2">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h5>Bow Information</h5>
                                            <ul>
                                                <li><a href="clipstyles">Clip Styles</a>
                                                </li>
                                                <li><a href="colourcharts">Colour Charts</a>
                                                </li>
                                                <li><a href="schoolrange">School Range</a>
                                                </li>
                                                 <li><a href="faq">FAQ</a>
                                                </li>
                                            </ul>
                                           
                                        </div>
                                      
                                        <div class="col-sm-4">
                                            <h5>Your Account</h5>
                                            <ul>
                                                <li><a href="">Your Details</a>
                                                </li>
                                                 <li><a href="orders">Your Orders</a>
                                                </li>
                                                <li><a href="paymentmethods">Payment Method</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                        <div class="col-sm-4">
                                            <h5>Bow News</h5>
                                            <ul>
                                                <li><a href="latestproducts">Latest Products</a>
                                                </li>
                                                <li><a href="fairsandevents">Fairs and Events</a>
                                                </li>
                                               
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                               <!--- yamm-content-->
                            </li>
                        </ul>
                    </li>
                    <li><a href="/contact">Contact</a>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse-->

            <div class="navbar-collapse collapse right" id="basket-overview">
                <a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">no items <span class="hidden-md">in cart</span></span></a>
            </div>
            <!--/.nav-collapse -->

          <!--   <div class="navbar-collapse collapse right">
                <button type="button" class="btn navbar-btn btn-default" data-toggle="collapse" data-target="#search">
                    <span class="sr-only">Toggle search</span>
                    <i class="fa fa-search"></i>
                </button>
            </div> -->

            <div class="navbar-collapse collapse right">
                <button type="button" class="btn navbar-btn btn-default" data-toggle="modal" data-target="#login-modal">
                    <span class="sr-only">User login</span>
                    <i class="fa fa-users"></i>
                </button>
            </div>

          <!--   <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

            </span>
                    </div>
                </form>

            </div> -->
            <!--/.nav-collapse -->

        </div>


    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
        <div class="modal-dialog modal-sm">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="Login">Customer login</h4>
                </div>
                <div class="modal-body">
                    <form action="customer-orders.html" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" placeholder="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="password" placeholder="password">
                        </div>

                        <p class="text-center">
                            <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                        </p>

                    </form>

                    <p class="text-center text-muted">Not registered yet?</p>
                    <p class="text-center text-muted"><a href="register.html"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                </div>
            </div>
        </div>
    </div>

    <!-- *** LOGIN MODAL END *** -->

    <!-- *** INTRO IMAGE ***
    _________________________________________________________ -->
  @yield('contents')

    <!-- *** INTRO IMAGE END *** -->

    <div id="all">

      




        <!-- *** COPYRIGHT ***
_________________________________________________________ -->

        <div id="copyright">
            <div class="container">
                <div class="col-md-12">
                    <p class="pull-left">&copy; 2017. Bowdelicious .</p>
                    <!-- <p class="pull-right">
                        <img src="img/payment.png" alt="payments accepted">
                    </p> -->

                </div>
            </div>
        </div>
        <!-- /#copyright -->

        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/front.js"></script>

    

    <!-- #### JAVASCRIPT FILES FOR DEMO PURPOSE ### -->

    <script src="js/jquery.cookie.js"></script>





</body>

</html>