<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="utf-8" />
        <title>WEDOO Documentation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="WEDOO Documentation" />
        <!-- favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../../../unicons.iconscout.com/release/v2.1.9/css/unicons.css">
        <!-- Slider -->
        <link rel="stylesheet" href="css/owl.carousel.min.css"/>
        <link rel="stylesheet" href="css/owl.theme.default.min.css"/>
        <!-- Main Css -->
        <link href="css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="css/colors/default.css" rel="stylesheet" id="color-opt">
    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

        <!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo mt-3" href="/">
                        <h3>Wedoo Help Desk</h3>
                    </a>
                </div>
                <div class="buy-button">
                    <a href="https://wedoo.gr" target="_blank" class="btn btn-primary">ΕΠΙΣΤΡΟΦΗ ΣΤΗΝ ΙΣΤΟΣΕΛΙΔΑ</a>
                </div><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div id="navigation">
                    <!-- Navigation Menu-->
                    <ul class="navigation-menu">

                    </ul><!--end navigation menu-->
                    <div class="buy-menu-btn d-none">
                        <a href="https://wedoo.gr" target="_blank" class="btn btn-primary">ΕΠΙΣΤΡΟΦΗ ΣΤΗΝ ΙΣΤΟΣΕΛΙΔΑ</a>
                    </div><!--end login button-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End -->

        <!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Καλωσήρθατε <br> Πως μπορούμε να σας βοηθήσουμε; </h4>

                            <div class="subcribe-form mt-4 pt-2">
                                <form>
                                    <div class="form-group mb-0">
                                        <input type="text" id="help" name="name" class="border bg-white rounded-pill shadow" required="" placeholder="Πως περνάω προϊόντα σε Woocommerce...">
                                        <button type="submit" class="btn btn-pills btn-primary">Αναζήτηση</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->



      <section class="section">
           <div class="container">
               <div class="row justify-content-center">
                   <div class="col-12 text-center">
                     <div class="section-title text-center mb-4 pb-2">
                         <h4 class="mb-4">Επιλέξτε την βασική ενότητα</h4>
                         <p class="para-desc mx-auto text-muted">Βρείτε εύκολα & γρήγορα αυτό που ψάχνεται για αποτελεσματική διαχείριση της ιστοσελίδας ή του ηλεκτρονικού σας καταστήματος.</p>
                     </div>
                   </div><!--end col-->
               </div><!--end row-->

               <div class="row">

                   @foreach ($books as $book)
                   <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                       <div class="card features explore-feature p-4 px-md-3 border-0 rounded-md shadow text-center">
                           <div class="card-body p-0 content">
                               <h5 class="mt-4"><a href="/book/{{$book->id}}" class="title text-dark">{{$book->title}}</a></h5>
                               <p class="text-muted">{{$book->short_description}}</p>

                               <a href="/book/{{$book->id}}" class="text-primary">Περισσότερα <i data-feather="chevron-right" class="fea icon-sm"></i></a>
                           </div>
                       </div>
                   </div><!--end col-->
                   @endforeach

               </div><!--end row-->
           </div><!--end container-->




            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="media align-items-center shadow rounded p-4 features">
                            <div class="icons m-0 rounded h2 text-primary text-center px-3">
                                <i class="uil uil-envelope-check"></i>
                            </div>
                            <div class="content ml-4">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Ticket</a></h5>
                                <p class="text-muted mb-0">Εαν έχετε ακόμα απορίες ή δεν βρίσκεται αυτό που ψάχνεται.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Δημιουργία Ticket</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-6 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="media align-items-center shadow rounded p-4 features">
                            <div class="icons m-0 rounded h2 text-primary text-center px-3">
                                <i class="uil uil-webcam"></i>
                            </div>
                            <div class="content ml-4">
                                <h5 class="mb-1"><a href="javascript:void(0)" class="text-dark">Asana</a></h5>
                                <p class="text-muted mb-0">Στείλτε μας απευθείας μήνυμα στο Asana.</p>
                                <div class="mt-2">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary">Νέο Μήνυμα</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Section -->

        <!-- Footer Start -->
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-left">
                            <p class="mb-0">© 2020 Wedoo Documentation. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://www.wedoo.gr" target="_blank" class="text-reset">Wedoo team</a>.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled text-sm-right social-icon social mb-0">
                            <li class="list-inline-item"><a href="#" class="rounded" target="_blank"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="rounded" target="_blank"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->



        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-soft-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

        <!-- javascript -->
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <!-- SLIDER -->
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/owl.init.js"></script>
        <!-- Icons -->
        <script src="js/feather.min.js"></script>
        <script src="../../../unicons.iconscout.com/release/v2.1.9/script/monochrome/bundle.js"></script>
        <!-- Switcher -->
        <script src="js/switcher.js"></script>
        <!-- Main Js -->
        <script src="js/app.js"></script>
    </body>

</html>
