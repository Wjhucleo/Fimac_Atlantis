<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('assets/images/logo/fimaclogo3.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/fimaclogo3.png') }}" type="image/x-icon">
    <title>Fimac Atlantis - Tableau de bord</title>
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/font-awesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/icofont.css') }}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/feather-icon.css') }}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/owlcarousel.css') }}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/vendors/bootstrap.css') }}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('adminAssets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/responsive.css') }}">

  </head>
  <body> 
    <!-- loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader">    
        <div class="loader-p"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start   -->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="{{route('dashboard')}}"> <img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo.png') }}"
              alt=""><img class="img-fluid for-dark" src="{{ asset('adminAssets/images/logo/logo_dark.png') }}"  alt=""></a></div>
            <div class="toggle-sidebar">
              <svg class="sidebar-toggle"> 
                <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#stroke-animation"></use>
              </svg>
            </div>
          </div>
          <form class="col-sm-4 form-inline search-full d-none d-xl-block" action="#" method="get">
            <div class="form-group">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  {{-- <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Type to Search .." name="q" title="" autofocus> --}}
                  {{-- <svg class="search-bg svg-color">
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#search"></use>
                  </svg> --}}
                </div>
              </div>
            </div>
          </form>
          <div class="nav-right col-xl-8 col-lg-12 col-auto pull-right right-header p-0">
            <ul class="nav-menus">
              <li class="serchinput">
                <div class="serchbox">
                  <svg>
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#search"></use>
                  </svg>
                </div>
                <div class="form-group search-form">
                  <input type="text" placeholder="Search here...">
                </div>
              </li>
              <li class="onhover-dropdown"> 
                <div class="notification-box">
                  <svg> 
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Bell"></use>
                  </svg>
                </div>
                <div class="onhover-show-div notification-dropdown"> 
                  <h6 class="f-18 mb-0 dropdown-title">Notifications</h6>
                  <div class="notification-card">
                    <ul>
                      <li>
                        <div class="user-notification">
                          <div><img src="../assets/images/avtar/2.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>You have new finical page design.</h4></a><span>Today 11:45pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="{{route('dashboard')}}"> <span>Show</span></a></div>
                      </li>
                      <li>
                        <div class="user-notification">
                          <div><img src="../assets/images/avtar/17.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>Congrats! you all task for today.</h4></a><span>Today 01:05pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="{{route('dashboard')}}"> <span>Show</span></a></div>
                      </li>
                      <li> 
                        <div class="user-notification">
                          <div> <img src="../assets/images/avtar/18.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>You have new in landing page design.</h4></a><span>Today 06:55pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"><a href="{{route('dashboard')}}"> <span>Show</span></a></div>
                      </li>
                      <li>
                        <div class="user-notification">
                          <div><img src="../assets/images/avtar/19.jpg" alt="avatar"></div>
                          <div class="user-description"><a href="letter-box.html">
                              <h4>Congrats! you all task for today.</h4></a><span>Today 06:55pm</span></div>
                        </div>
                        <div class="notification-btn">
                          <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                          <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                        </div>
                        <div class="show-btn"> <a href="{{route('dashboard')}}"> <span>Show</span></a></div>
                      </li>
                      <li> <a class="f-w-700" href="letter-box.html">Check all </a></li>
                    </ul>
                  </div>
                </div>
              </li>
              {{-- <li class="onhover-dropdown">
                <svg>
                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Bookmark"></use>
                </svg>
                <div class="onhover-show-div bookmark-flip">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="front">
                        <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                        <ul class="bookmark-dropdown">
                          <li>
                            <div class="row">
                              <div class="col-4 text-center"><a href="form-validation.html">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon bg-light-primary"><i data-feather="file-text"></i></div><span>Forms</span>
                                  </div></a></div>
                              <div class="col-4 text-center"><a href="user-profile.html">
                                  <div class="bookmark-content"> 
                                    <div class="bookmark-icon bg-light-secondary"><i data-feather="user"></i></div><span>Profile</span>
                                  </div></a></div>
                              <div class="col-4 text-center"><a href="bootstrap-basic-table.html">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon bg-light-warning"> <i data-feather="server"> </i></div><span>Tables </span>
                                  </div></a></div>
                            </div>
                          </li>
                          <li class="text-centermedia-body"> <a class="flip-btn f-w-700" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                        </ul>
                      </div>
                      <div class="back">
                        <ul>
                          <li>
                            <div class="bookmark-dropdown flip-back-content">
                              <input type="text" placeholder="search...">
                            </div>
                          </li>
                          <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </li> --}}
              <li class="onhover-dropdown"> 
                <div class="message position-relative">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M4 4h16v12H4z" fill="none" stroke="black" stroke-width="2"/>
                    <path d="M4 8h16M4 12h16" stroke="black" stroke-width="2"/>
                  </svg>
                  <span class="rounded-pill badge-danger"></span>
                </div>
                <div class="onhover-show-div message-dropdown">
                  <h6 class="f-18 mb-0 dropdown-title">Message</h6>
                  <ul>
                    <li>
                      <div class="d-flex align-items-start"> 
                        <div class="message-img bg-light-primary"><img src="../assets/images/user/10.jpg" alt=""></div>
                        <div class="flex-grow-1">
                          <h5> <a href="letter-box.html">Sarah Loren</a></h5>
                          <p>What`s the project report update?</p>
                        </div>
                        <div class="notification-right"><i data-feather="x"></i></div>
                      </div>
                    </li>
                    <li> <a class="f-w-700" href="private-chat.html">Check all</a></li>
                  </ul>
                </div>
              </li>
              {{-- <li class="cart-nav onhover-dropdown">
                <div class="cart-box"> 
                  <svg>
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Buy"></use>
                  </svg>
                </div>
                <div class="cart-dropdown onhover-show-div">
                  <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
                  <ul>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 img-50" src="../assets/images/ecommerce/05.jpg" alt="">
                        <div class="flex-grow-1"> <span>Women's Track Suit</span>
                          <h6 class="font-primary">8 x $65.00</h6>
                        </div>
                        <div class="close-circle"><a class="bg-primary" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex"><img class="img-fluid b-r-5 img-50" src="../assets/images/ecommerce/02.jpg" alt="">
                        <div class="flex-grow-1"><span>Men's Jacket</span>
                          <h6 class="font-primary">10 x $50.00</h6>
                        </div>
                        <div class="close-circle"><a class="bg-primary" href="#"><i data-feather="x"></i></a></div>
                      </div>
                    </li>
                    <li class="total">
                      <h6 class="mb-0">Order Total :<span class="f-right">$1020.00</span></h6>
                    </li>
                    <li class="text-center"> <a href="cart.html">
                        <button class="btn btn-outline-primary" type="button">View Cart</button></a><a class="btn btn-primary view-checkout" href="checkout.html">Checkout  </a></li>
                  </ul>
                </div>
              </li> --}}
              {{-- <li>
                <div class="mode">
                  <svg class="for-dark">
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#moon"></use>
                  </svg>
                  <svg class="for-light">
                    <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Sun"></use>
                  </svg>
                </div>
              </li> --}}
              {{-- <li class="language-nav">
                <div class="translate_wrapper">
                  <div class="current_lang">
                    <div class="lang"><i class="flag-icon flag-icon-gb"></i><span class="lang-txt box-col-none">EN            </span></div>
                  </div>
                  <div class="more_lang">
                    <div class="lang selected" data-value="en"><i class="flag-icon flag-icon-us"></i><span class="lang-txt">English<span> (US)</span></span></div>
                    <div class="lang" data-value="de"><i class="flag-icon flag-icon-de"></i><span class="lang-txt">Deutsch</span></div>
                    <div class="lang" data-value="es"><i class="flag-icon flag-icon-es"></i><span class="lang-txt">Español</span></div>
                    <div class="lang" data-value="fr"><i class="flag-icon flag-icon-fr"></i><span class="lang-txt">Français</span></div>
                    <div class="lang" data-value="pt"><i class="flag-icon flag-icon-pt"></i><span class="lang-txt">Português<span> (BR)</span></span></div>
                    <div class="lang" data-value="cn"><i class="flag-icon flag-icon-cn"></i><span class="lang-txt">简体中文</span></div>
                    <div class="lang" data-value="ae"><i class="flag-icon flag-icon-ae"></i><span class="lang-txt">لعربية <span> (ae)</span></span></div>
                  </div>
                </div>
              </li> --}}
              <li class="profile-nav onhover-dropdown pe-0 py-0">
                <div class="d-flex align-items-center profile-media">
                  <img class="b-r-25" src="{{ asset('adminAssets/images/dashboard/profile.png') }}" alt="Profile">                  
                  <div class="flex-grow-1 user"><span>{{ Auth::user()->name }}</span>
                    <p class="mb-0 font-nunito">Admin 
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M7 10l5 5 5-5z" fill="none" stroke="black" stroke-width="2"/>
                      </svg>                      
                    </p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="user-profile.html"><i data-feather="user"></i><span>Account </span></a></li>
                  {{-- <li><a href="letter-box.html"><i data-feather="mail"></i><span>Inbox</span></a></li> --}}
                  {{-- <li><a href="task.html"><i data-feather="file-text"></i><span>Taskboard</span></a></li> --}}
                  {{-- <li><a href="edit-profile.html"><i data-feather="settings"></i><span>Settings</span></a></li> --}}
                  <li>
                    <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" style="border: none; background: none; cursor: pointer;">
                            <i data-feather="log-out"></i><span>Log Out</span>
                        </button>
                    </form>
                </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page body Start -->
      <div class="page-body-wrapper"> 

        @include('admin.layouts.sidebar') 

        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title"> 
              <div class="row">
                <div class="col-xl-4 col-sm-7 box-col-3">
                  <h3>Tableau de bord</h3>
                </div>
                <div class="col-5 d-none d-xl-block">
                  <!-- Page Sub Header Start-->
                  {{-- <div class="left-header main-sub-header p-0">
                    <div class="left-menu-header">
                      <ul class="header-left"> 
                        <li class="onhover-dropdown"> <span class="f-w-700">General </span>
                          <ul class="onhover-show-div left-dropdown">
                            <li class="flyout-right"><a href="#">Dashboards</a><i class="fa fa-angle-right"></i>
                              <ul>
                                <li> <a href="{{route('dashboard')}}">Default  </a></li>
                                <li> <a href="dashboard-02.html">Ecommerce</a></li>
                              </ul>
                            </li>
                            <li class="flyout-right"><a href="#">Widgets</a><i class="fa fa-angle-right"></i>
                              <ul>
                                <li><a href="general-widget.html">General</a></li>
                                <li> <a href="chart-widget.html">chart</a></li>
                              </ul>
                            </li>
                            <li class="flyout-right"> <a href="#">Page layout</a><i class="fa fa-angle-right"></i>
                              <ul>
                                <li> <a href="box-layout.html">Boxed </a></li>
                                <li> <a href="layout-rtl.html">RTL</a></li>
                                <li> <a href="layout-dark.html">Dark Layout</a></li>
                                <li> <a href="footer-light.html">footer-light.html</a></li>
                                <li> <a href="footer-dark.html">footer-dark.html</a></li>
                                <li><a href="footer-fixed.html">footer-fixed.html</a></li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="onhover-dropdown"><span class="f-w-700">Components</span>
                          <ul class="onhover-show-div left-dropdown">
                            <li class="flyout-right"><a href="#">Ui Kits</a>
                              <ul>
                                <li><a href="typography.html">Typography</a></li>
                                <li><a href="avatars.html">Avatars</a></li>
                                <li><a href="helper-classes.html">helper classes</a></li>
                                <li><a href="grid.html">Grid</a></li>
                                <li><a href="tag-pills.html">Tag & pills</a></li>
                                <li><a href="progress-bar.html">Progress</a></li>
                                <li><a href="modal.html">Modal</a></li>
                                <li><a href="alert.html">Alert</a></li>
                                <li><a href="popover.html">Popover</a></li>
                                <li><a href="tooltip.html">Tooltip</a></li>
                                <li><a href="dropdown.html">Dropdown</a></li>
                                <li><a href="according.html">Accordion</a></li>
                                <li><a href="tab-bootstrap.html">Tabs</a></li>
                                <li><a href="list.html">Lists</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Bonus Ui</a>
                              <ul>
                                <li><a href="scrollable.html">Scrollable</a></li>
                                <li><a href="tree.html">Tree view</a></li>
                                <li><a href="toasts.html">Toasts</a></li>
                                <li><a href="rating.html">Rating</a></li>
                                <li><a href="dropzone.html">dropzone</a></li>
                                <li><a href="tour.html">Tour</a></li>
                                <li><a href="sweet-alert2.html">SweetAlert2</a></li>
                                <li><a href="modal-animated.html">Animated Modal</a></li>
                                <li><a href="owl-carousel.html">Owl Carousel</a></li>
                                <li><a href="ribbons.html">Ribbons</a></li>
                                <li><a href="pagination.html">Pagination</a></li>
                                <li><a href="breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="range-slider.html">Range Slider</a></li>
                                <li><a href="image-cropper.html">Image cropper</a></li>
                                <li><a href="basic-card.html">Basic Card</a></li>
                                <li><a href="creative-card.html">Creative Card</a></li>
                                <li><a href="dragable-card.html">Draggable Card</a></li>
                                <li><a href="timeline-v-1.html">Timeline </a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Animation</a>
                              <ul>
                                <li><a href="animate.html">Animate</a></li>
                                <li><a href="scroll-reval.html">Scroll Reveal</a></li>
                                <li><a href="AOS.html">AOS animation</a></li>
                                <li><a href="tilt.html">Tilt Animation</a></li>
                                <li><a href="wow.html">Wow Animation</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Icons</a>
                              <ul>
                                <li><a href="flag-icon.html">Flag icon</a></li>
                                <li><a href="font-awesome.html">Fontawesome Icon</a></li>
                                <li><a href="ico-icon.html">Ico Icon</a></li>
                                <li><a href="themify-icon.html">Themify Icon</a></li>
                                <li><a href="feather-icon.html">Feather icon</a></li>
                                <li><a href="whether-icon.html">Whether Icon</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Buttons</a>
                              <ul>
                                <li><a href="buttons.html">Default Style</a></li>
                                <li><a href="button-group.html">Button Group</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Charts</a>
                              <ul>
                                <li><a href="echarts.html">Echarts</a></li>
                                <li><a href="chart-apex.html">Apex Chart</a></li>
                                <li><a href="chart-google.html">Google Chart</a></li>
                                <li><a href="chart-sparkline.html">Sparkline chart</a></li>
                                <li><a href="chart-flot.html">Flot Chart </a></li>
                                <li><a href="chart-knob.html">Knob Chart</a></li>
                                <li><a href="chart-morris.html">Morris Chart</a></li>
                                <li><a href="chartjs.html">Chatjs Chart</a></li>
                                <li><a href="chartist.html">Chartist Chart</a></li>
                                <li><a href="chart-peity.html">Peity Chart</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                          </ul>
                        </li>
                        <li class="onhover-dropdown"> <span class="f-w-700">Applications</span>
                          <ul class="onhover-show-div left-dropdown">
                            <li class="flyout-right"><a href="#">Project</a>
                              <ul>
                                <li><a href="projects.html">Project List</a></li>
                                <li><a href="projectcreate.html">Create new</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li><a href="file-manager.html">File manager</a></li>
                            <li><a href="kanban.html">kanban Board </a></li>
                            <li class="flyout-right"> <a href="#">Ecommerce </a>
                              <ul>
                                <li><a href="add-products.html">Add Product</a></li>
                                <li><a href="product.html">Product</a></li>
                                <li><a href="product-page.html">Product page</a></li>
                                <li><a href="list-products.html">Product list</a></li>
                                <li><a href="payment-details.html">Payment Details</a></li>
                                <li><a href="order-history.html">Order History</a></li>
                                <li class="flyout-right"><a class="submenu-title" href="#">Invoices</a>
                                  <ul>
                                    <li><a href="invoice-1.html">Invoice-1</a></li>
                                    <li><a href="invoice-2.html">Invoice-2</a></li>
                                    <li><a href="invoice-3.html">Invoice-3</a></li>
                                    <li><a href="invoice-4.html">Invoice-4</a></li>
                                    <li><a href="invoice-5.html">Invoice-5</a></li>
                                    <li><a href="invoice-template.html">Invoice-6</a></li>
                                  </ul>
                                </li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="list-wish.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="pricing.html">Pricing  </a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Email</a>
                              <ul>
                                <li><a href="letter-box.html">Email App</a></li>
                                <li><a href="email-compose.html">Email Compose</a></li>
                                <li><a href="letter-box.html">Letter Box</a></li>
                              </ul><i class="fa fa-angle-right"> </i>
                            </li>
                            <li class="flyout-right"> <a href="#">Chat</a>
                              <ul>
                                <li><a href="private-chat.html">Private Chat</a></li>
                                <li><a href="group-chat.html">Group Chat</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">User</a>
                              <ul>
                                <li><a href="user-profile.html">Users Profile</a></li>
                                <li><a href="edit-profile.html">Users Edit</a></li>
                                <li><a href="user-cards.html">Users Cards</a></li>
                              </ul><i class="fa fa-angle-right"> </i>
                            </li>
                            <li><a href="bookmark.html">Bookmarks</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="task.html">Task</a></li>
                            <li><a href="calendar-basic.html">Calendar</a></li>
                            <li><a href="social-app.html">Social-app</a></li>
                            <li><a href="to-do.html">To-Do</a></li>
                            <li><a href="search.html">Search Result</a></li>
                          </ul>
                        </li>
                        <li class="onhover-dropdown"><span class="f-w-700">Pages</span>
                          <ul class="onhover-show-div left-dropdown">
                            <li><a href="blog.html">Landing page</a></li>
                            <li><a href="blog-single.html">Sample page</a></li>
                            <li><a href="add-post.html">Starter kit</a></li>
                            <li class="flyout-right"><a href="#">Others </a><i class="fa fa-angle-right"></i>
                              <ul>
                                <li class="flyout-right"><a href="#">Error Page</a>
                                  <ul>
                                    <li><a href="error-400.html">Error 400</a></li>
                                    <li><a href="error-401.html">Error 401</a></li>
                                    <li><a href="error-403.html">Error 403</a></li>
                                    <li><a href="error-404.html">Error 404</a></li>
                                    <li><a href="error-500.html">Error 500</a></li>
                                    <li><a href="error-503.html">Error 503</a></li>
                                  </ul><i class="fa fa-angle-right"> </i>
                                </li>
                                <li class="flyout-right"> <a href="#">Authentication</a>
                                  <ul>
                                    <li><a href="login.html" target="_blank">Login Simple</a></li>
                                    <li><a href="login_one.html" target="_blank">Login with bg image</a></li>
                                    <li><a href="login_two.html" target="_blank">Login with image two                      </a></li>
                                    <li><a href="login-bs-validation.html" target="_blank">Login With validation</a></li>
                                    <li><a href="login-bs-tt-validation.html" target="_blank">Login with tooltip</a></li>
                                    <li><a href="login-sa-validation.html" target="_blank">Login with sweetalert</a></li>
                                    <li><a href="sign-up.html" target="_blank">Register Simple</a></li>
                                    <li><a href="sign-up-one.html" target="_blank">Register with Bg Image                              </a></li>
                                    <li><a href="sign-up-two.html" target="_blank">Register with image two</a></li>
                                    <li><a href="sign-up-wizard.html" target="_blank">Register wizard</a></li>
                                    <li><a href="unlock.html">Unlock User</a></li>
                                    <li><a href="forget-password.html">Forget Password</a></li>
                                    <li><a href="reset-password.html">Reset Password</a></li>
                                    <li><a href="maintenance.html">Maintenance</a></li>
                                  </ul>
                                </li>
                                <li class="flyout-right"> <a href="#">Coming Soon</a>
                                  <ul> 
                                    <li><a href="comingsoon.html">Coming Simple</a></li>
                                    <li><a href="comingsoon-bg-video.html">Coming with Bg video</a></li>
                                    <li><a href="comingsoon-bg-img.html">Coming with Bg Image</a></li>
                                  </ul><i class="fa fa-angle-right"> </i>
                                </li>
                                <li class="flyout-right"><a href="#">Email templates</a>
                                  <ul>
                                    <li><a href="basic-template.html">Basic Email</a></li>
                                    <li><a href="email-header.html">Basic With Header</a></li>
                                    <li><a href="template-email.html">Ecomerce Template</a></li>
                                    <li><a href="template-email-2.html">Email Template 2</a></li>
                                    <li><a href="ecommerce-templates.html">Ecommerce Email</a></li>
                                    <li><a href="email-order-success.html">Order Success</a></li>
                                  </ul><i class="fa fa-angle-right"></i>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="onhover-dropdown p-0"><span class="f-w-700">Miscellaneous</span>
                          <ul class="onhover-show-div left-dropdown">
                            <li class="flyout-right"><a href="#">Gallery</a>
                              <ul> 
                                <li><a href="gallery.html">Gallery Grid</a></li>
                                <li><a href="gallery-with-description.html">gallery-with-description</a></li>
                                <li><a href="gallery-masonry.html">gallery-masonry</a></li>
                                <li><a href="masonry-gallery-with-disc.html">masonry-gallery-with-disc</a></li>
                                <li><a href="gallery-hover.html">gallery-hover</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Blog</a>
                              <ul>
                                <li><a href="blog.html">blog</a></li>
                                <li><a href="blog-single.html">blog-single</a></li>
                                <li><a href="add-post.html">add-post</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li><a href="FAQ-2.html">FAQ</a></li>
                            <li class="flyout-right"><a href="#">Job Search</a>
                              <ul>
                                <li><a href="job-cards-view.html">job-cards-view</a></li>
                                <li><a href="job-list-view.html">job-list-view</a></li>
                                <li><a href="job-details.html">job-details</a></li>
                                <li><a href="job-apply.html">job-apply</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Job Search</a>
                              <ul> 
                                <li><a href="job-cards-view.html">learning-list</a></li>
                                <li><a href="learning-detailed.html">learning-detailed</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Maps</a>
                              <ul>
                                <li><a href="map-js.html">Map-js</a></li>
                                <li><a href="vector-map.html">Vector Maps</a></li>
                              </ul><i class="fa fa-angle-right"></i>
                            </li>
                            <li class="flyout-right"><a href="#">Editors </a>
                              <ul>
                                <li><a href="summernote.html">Summer Note</a></li>
                                <li><a href="CK%20editor.html">CK editor</a></li>
                                <li><a href="simple-MDE.html">MDE editor</a></li>
                                <li><a href="ace-code-editor.html">ACE code editor </a></li>
                              </ul><i class="fa fa-angle-right"> </i>
                            </li>
                            <li><a href="knowledgebase.html">Knowledgebase </a></li>
                            <li> <a href="support-ticket-2.html">Support Ticket</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div> --}}
                  <!-- Page Sub Header end
                  -->
                </div>
                <div class="col-xl-3 col-sm-5 box-col-4">
                  <ol class="breadcrumb"> 
                    <li class="breadcrumb-item">
                      <a href="{{route('dashboard')}}">
                        <svg class="stroke-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z" fill="none" stroke="black" stroke-width="2"/>
                        </svg>
                      </a></li>
                    <li class="breadcrumb-item">Tableau de bord</li>
                    {{-- <li class="breadcrumb-item active">Default</li> --}}
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard"> 
            <div class="row">
              <div class="col-xl-6 box-col-7 proorder-md-1"> 
                <div class="card">
                  <div class="card-body premium-card">
                    <div class="row premium-courses-card">
                      <div class="col-md-5 premium-course">
                        <h1 class="f-w-700">Get Thousands Premium Courses.</h1><span class="f-light f-w-400 f-14">Upgrade to watch, play, learn, make and discover. </span><a class="btn btn-square btn-primary f-w-700" href="pricing.html">Go Premium</a>
                      </div>
                      <div class="col-md-7 premium-course-img"> 
                        <div class="premium-message"><img class="img-fluid" src="{{ asset('adminAssets/images/dashboard/massage.gif') }}" alt="massage"></div>
                        <div class="premium-books"><img class="img-fluid" src="{{ asset('adminAssets/images/dashboard/books.gif') }}" alt="books"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              {{-- <div class="col-xl-3 box-col-5 col-md-6 proorder-md-2">
                <div class="card"> 
                  <div class="card-header pb-0"> 
                    <div class="header-top"> 
                      <h4>Recent Activity</h4>
                      <div class="dropdown icon-dropdown setting-menu"> 
                        <button class="btn dropdown-toggle" id="userdropdown1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#setting"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown1"><a class="dropdown-item" href="#">Weekly </a><a class="dropdown-item" href="#">Monthly </a><a class="dropdown-item" href="#">Yearly </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="activity-day">
                      <h6>Today</h6>
                    </div>
                    <div class="recent-activity-card">
                      <ul>
                        <li class="activity-removed"> 
                          <div class="recent-activity-data">
                            <div class="activity-name"><span>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Chat"> </use>
                                </svg></span><a href="letter-box.html">Nick Mark mentioned Sara</a></div>
                            <div class="view-btn"><a href="#!">View
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Arrow-Right-2"></use>
                                </svg></a></div>
                          </div>
                        </li>
                        <li>
                          <div class="recent-activity-data">
                            <div class="activity-name"> <span>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Download"> </use>
                                </svg></span><a href="letter-box.html">The Post name was removed...</a></div>
                            <div class="view-btn"><a href="#!">View
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Arrow-Right-2"></use>
                                </svg></a></div>
                          </div>
                        </li>
                        <li>
                          <div class="recent-activity-data">
                            <div class="activity-name"><span> 
                                <svg> 
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Swap"> </use>
                                </svg></span><a href="letter-box.html">Patrick Sullivan published... </a></div>
                            <div class="view-btn"><a href="#!">View 
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Arrow-Right-2"></use>
                                </svg></a></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                    <div class="activity-day mt-4">
                      <h6>Yesterday</h6>
                    </div>
                    <div class="recent-activity-card">
                      <ul>
                        <li>
                          <div class="recent-activity-data">
                            <div class="activity-name"><span>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Send"> </use>
                                </svg></span><a href="letter-box.html">Nick Mark mentioned Sara</a></div>
                            <div class="view-btn"><a href="#!">View
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Arrow-Right-2"></use>
                                </svg></a></div>
                          </div>
                        </li>
                        <li>
                          <div class="recent-activity-data">
                            <div class="activity-name"><span>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Work"> </use>
                                </svg></span><a href="letter-box.html">The Post name was removed...</a></div>
                            <div class="view-btn"> <a href="#!">View 
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Arrow-Right-2"></use>
                                </svg></a></div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-xl-3 col-md-6 proorder-md-3 box-col-6">
                <div class="card">
                  <div class="card-header custom-border-bottom">
                    <div class="header-top"> 
                      <h4>Sales Stats</h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#setting"> </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly </a><a class="dropdown-item" href="#">Yearly </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0"> 
                    <div id="salesStatsRadialChart"> </div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-xl-6 col-md-6 proorder-md-5"> 
                <div class="card latest-sales">
                  <div class="card-header d-flex justify-content-between align-items-center custom-border-bottom">
                    <h4>Latest Sales</h4>
                    <div class="d-flex align-items-center justify-content-center latest-sales-btn">
                      <button class="btn btn-square btn-outline-primary btn-sm" type="button" title="btn btn-square btn-outline-primary btn-sm">Yearly</button>
                      <button class="btn btn-square btn-outline-primary btn-sm" type="button" title="btn btn-square btn-outline-primary btn-sm">Monthly</button>
                      <button class="btn btn-square btn-outline-primary btn-sm active" type="button" title="btn btn-square btn-outline-primary btn-sm">Weekly</button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="lastOrdersChart"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-12 box-col-12 proorder-md-4">
                <div class="card">
                  <div class="card-header card-no-border">
                    <div class="header-top">
                      <h4>Last Orders </h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#setting"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly </a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="table-responsive custom-scrollbar"> 
                      <table class="last-orders-table table" id="last-orders">
                        <thead>
                          <tr>
                            <th>Name </th>
                            <th>Order No.  </th>
                            <th>Amount</th>
                            <th>Payment Type </th>
                            <th>Date</th>
                            <th>Action </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr> 
                            <td>
                              <div class="user-data">
                                <div><img src="../assets/images/dashboard/avtar/2.jpg" alt="avatar"></div>
                                <div> <a href="user-profile.html"> 
                                    <h4>Dmitriy Groshev</h4></a><span>Switzerland</span></div>
                              </div>
                            </td>
                            <td>#790841</td>
                            <td>$2.499</td>
                            <td>Credit Card</td>
                            <td>1 Oct, 14:43</td>
                            <td> 
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdownes4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="drop-menu"><i class="icon-more-alt"></i></div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdownes4"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="user-data">
                                <div><img src="../assets/images/dashboard/avtar/17.jpg" alt="avatar"></div>
                                <div><a href="user-profile.html">
                                    <h4>Patrick Beverley</h4></a><span> Germany</span></div>
                              </div>
                            </td>
                            <td>#454489</td>
                            <td>$2.499</td>
                            <td>Paypal</td>
                            <td>30 Sep, 23:01</td>
                            <td>
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdownes1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="drop-menu"><i class="icon-more-alt"></i></div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdownes1"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="user-data">
                                <div><img src="../assets/images/avtar/18.jpg" alt="avatar"></div>
                                <div><a href="user-profile.html">
                                    <h4>Kevin Greem</h4></a><span> Canada</span></div>
                              </div>
                            </td>
                            <td>#594579</td>
                            <td>$2.499</td>
                            <td>Credit Card</td>
                            <td>29 Sep,09:31</td>
                            <td>
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdownes2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="drop-menu"><i class="icon-more-alt"></i></div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdownes2"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="user-data">
                                <div><img src="../assets/images/dashboard/avtar/19.jpg" alt="avatar"></div>
                                <div><a href="user-profile.html">
                                    <h4>William Barton</h4></a><span>United States</span></div>
                              </div>
                            </td>
                            <td>#478495</td>
                            <td>$2.499</td>
                            <td>Credit Card</td>
                            <td>28 Sep, 04:34</td>
                            <td>
                              <div class="dropdown icon-dropdown">
                                <button class="btn dropdown-toggle" id="userdropdownes3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <div class="drop-menu"><i class="icon-more-alt"></i></div>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdownes3"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly      </a></div>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-xl-4 col-md-6 proorder-md-6 box-col-6">
                <div class="card"> 
                  <div class="card-header">
                    <div class="header-top"> 
                      <h4>Monthly Invoices</h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#setting"> </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown4"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="monthly-invoices">
                      <ul>
                        <li>
                          <div class="monthly-data"> 
                            <div class="invoice-data-icon"><span> 
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#bookmark"></use>
                                </svg></span>
                              <div><a href="invoice-1.html">
                                  <h4>Camelun ios Development</h4></a>
                                <h5>20 paid month out of 24</h5>
                              </div>
                            </div>
                            <div class="invoice-price"><span>$12,453.00</span><span>Per Month</span></div>
                          </div>
                        </li>
                        <li>
                          <div class="monthly-data"> 
                            <div class="invoice-data-icon"><span> 
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Ticket-Star"></use>
                                </svg></span>
                              <div><a href="#">
                                  <h4>ReactDT Motions</h4></a>
                                <h5>Late payment  12 week - pay invoice</h5>
                              </div>
                            </div>
                            <div class="invoice-price"><span>$54,459.00</span><span>Per month</span></div>
                          </div>
                        </li>
                        <li>
                          <div class="monthly-data">
                            <div class="invoice-data-icon"><span>
                                <svg>
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Discovery"></use>
                                </svg></span>
                              <div><a href="invoice-2.html">
                                  <h4>Arocca Store</h4></a>
                                <h5>Error sending payment - Detail information</h5>
                              </div>
                            </div>
                            <div class="invoice-price"><span>$87,884.00</span><span>Per month</span></div>
                          </div>
                        </li>
                        <li>
                          <div class="monthly-data">
                            <div class="invoice-data-icon"><span> 
                                <svg> 
                                  <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Shield-Done"></use>
                                </svg></span>
                              <div><a href="invoice-3.html">
                                  <h4>EnterPress Project</h4></a>
                                <h5>25 paid days out of 113</h5>
                              </div>
                            </div>
                            <div class="invoice-price"><span>$79,955.00 </span><span>Per month</span></div>
                          </div>
                        </li>
                        <li>
                          <button class="btn btn-outline-light txt-dark active w-100" type="button"><a class="d-flex gap-2 align-items-center" href="projects.html"> 
                              <svg>
                                <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Plus-Circle"></use>
                              </svg>Add Project</a></button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 proorder-md-7 box-col-6">
                <div class="card custom-statistics">
                  <div class="card-header">
                    <div class="header-top">
                      <h4>Recent Statistics  </h4>
                      <div class="dropdown">
                        <button class="btn dropdown-toggle custom-date-btn" id="dropdownMenuButton" type="button" data-bs-toggle="dropdown" aria-expanded="false"><span>19 Aug - 25 Aug</span>
                          <div class="custom-date">
                            <svg>
                              <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Left-Arrow"></use>
                            </svg>
                            <svg>
                              <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Right-Arrow"></use>
                            </svg>
                          </div>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">11 Aug - 21 Aug</a><a class="dropdown-item" href="#">07 Sep - 23 Sep</a><a class="dropdown-item" href="#">01 Otc - 15 Otc</a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pb-0 pt-0"> 
                    <div class="recent-statistics">
                      <ul>
                        <li> 
                          <div class="arrow-up">
                            <svg>
                              <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Arrow-Up"></use>
                            </svg>
                          </div><span>$5.850</span>
                        </li>
                        <li>
                          <div class="arrow-down">
                            <svg> 
                              <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#Arrow-Down"></use>
                            </svg>
                          </div><span>$1.750</span>
                        </li>
                      </ul>
                    </div>
                    <div id="orderoverview"></div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 proorder-md-8 box-col-6">
                <div class="card">
                  <div class="card-header">
                    <div class="header-top">
                      <h4>All Notification (10)</h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown5" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#setting"> </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown5"><a class="dropdown-item" href="#">Weekly </a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="notification-card">
                      <ul>
                        <li> 
                          <div class="user-notification">
                            <div><img src="../assets/images/dashboard/avtar/2.jpg" alt="avatar"></div>
                            <div class="user-description"><a href="letter-box.html">
                                <h4>You have new comments in real finical law agency landing page design.</h4></a><span>Today 11:45pm</span></div>
                          </div>
                          <div class="notification-btn">
                            <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                            <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                          </div>
                          <div class="show-btn"><a href="{{route('dashboard')}}"> <span>Show</span></a></div>
                        </li>
                        <li>
                          <div class="user-notification">
                            <div><img src="../assets/images/dashboard/avtar/17.jpg" alt="avatar"></div>
                            <div class="user-description"><a href="letter-box.html">
                                <h4>Congrats! you complete all task for today. just need to join meting.</h4></a><span>Today 01:05pm</span></div>
                          </div>
                          <div class="notification-btn">
                            <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                            <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                          </div>
                          <div class="show-btn"><a href="{{route('dashboard')}}"> <span>Show</span></a></div>
                        </li>
                        <li> 
                          <div class="user-notification">
                            <div> <img src="../assets/images/dashboard/avtar/18.jpg" alt="avatar"></div>
                            <div class="user-description"><a href="letter-box.html">
                                <h4>You have new comments in real finical law agency landing page design.</h4></a><span>Today 06:55pm</span></div>
                          </div>
                          <div class="notification-btn">
                            <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                            <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                          </div>
                          <div class="show-btn"><a href="{{route('dashboard')}}"> <span>Show</span></a></div>
                        </li>
                        <li>
                          <div class="user-notification">
                            <div><img src="../assets/images/dashboard/avtar/19.jpg" alt="avatar"></div>
                            <div class="user-description"><a href="letter-box.html">
                                <h4>Congrats! you complete all task for today. just need to join meting.</h4></a><span>Today 06:55pm</span></div>
                          </div>
                          <div class="notification-btn">
                            <button class="btn btn-pill btn-primary" type="button" title="btn btn-pill btn-primary">Accpet</button>
                            <button class="btn btn-pill btn-secondary" type="button" title="btn btn-pill btn-primary">Decline</button>
                          </div>
                          <div class="show-btn"><a href="{{route('dashboard')}}"><span>Show </span></a></div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-xl-6 col-sm-12 proorder-md-9 box-col-6">
                <div class="card">
                  <div class="card-header"> 
                    <div class="header-top"> 
                      <h4>Project Summary </h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown22" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#setting"> </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown22"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive custom-scrollbar"> 
                      <table class="project-summary table" id="project-summary">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Project Name</th>
                            <th>Team</th>
                            <th>Project Cost</th>
                            <th>Project Status</th>
                            <th>Payment</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="f-w-600">A908</td>
                            <td> <a href="projects.html">Amazon Website</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/8.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/10.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                                  <li class="d-inline-block">
                                    <p>26+</p>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            <td>$23,490</td>
                            <td>Completed</td>
                            <td class="txt-success">Done </td>
                          </tr>
                          <tr>
                            <td>R840</td>
                            <td> <a href="projects.html">Paytm bank app</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/20.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/12.jpg" alt=""></li>
                                  <li class="d-inline-block">
                                    <p>6+</p>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            <td>$45,459</td>
                            <td>In Progress</td>
                            <td class="txt-danger">Pending</td>
                          </tr>
                          <tr>
                            <td class="f-w-600">V908</td>
                            <td class="f-w-600"> <a href="projects.html">Cytrust Dashboard</a></td>
                            <td class="team-avtar"> 
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/14.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/13.jpg" alt=""></li>
                                </ul>
                              </div>
                            </td>
                            <td class="f-w-600">$78,748 </td>
                            <td class="f-w-600">Completed</td>
                            <td class="txt-success f-w-600">Done</td>
                          </tr>
                          <tr>
                            <td class="f-w-600">K450</td>
                            <td> <a href="projects.html">Project Mecha</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul> 
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/22.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/15.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/2.jpg" alt=""></li>
                                </ul>
                              </div>
                            </td>
                            <td class="f-w-600">	$98,878</td>
                            <td class="f-w-600">In Progress</td>
                            <td class="txt-danger f-w-600">Pending</td>
                          </tr>
                          <tr>
                            <td class="f-w-600">D480</td>
                            <td class="f-w-600"><a href="projects.html">Dynamic Program</a></td>
                            <td class="team-avtar">
                              <div class="customers d-inline-block avatar-group">
                                <ul>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/21.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/23.jpg" alt=""></li>
                                  <li class="d-inline-block"><img class="img-40 rounded-circle" src="../assets/images/dashboard/avtar/24.jpg" alt=""></li>
                                  <li class="d-inline-block"> 
                                    <p>5+                           </p>
                                  </li>
                                </ul>
                              </div>
                            </td>
                            <td class="f-w-600">$23,490</td>
                            <td class="f-w-600">In Progress</td>
                            <td class="txt-danger f-w-600">Pending</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div> --}}
              {{-- <div class="col-xl-6 proorder-md-10 box-col-12">
                <div class="card">
                  <div class="card-header custom-border-bottom">
                    <div class="header-top">
                      <h4>Sales Statistic</h4>
                      <div class="dropdown icon-dropdown setting-menu">
                        <button class="btn dropdown-toggle" id="userdropdown9" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <svg>
                            <use href="https://admin.pixelstrap.net/zono/assets/svg/icon-sprite.svg#setting"> </use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown9"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly </a></div>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="groupBarChart"></div>
                    <div class="sales-data">
                      <ul>
                        <li> 
                          <div class="total-sales">
                            <div>
                              <h5>$4,875 </h5><span>Total Sales </span>
                            </div>
                            <div class="total-reached"><span>1,00,00</span><span>85% goal reached</span></div>
                          </div>
                          <div class="progress-data">
                            <div class="progress sm-progress-bar progress-border-primary"> 
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"> </div>
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="total-sales"> 
                            <div> 
                              <h5>$7,560</h5><span>Total Income</span>
                            </div>
                            <div class="total-reached"> <span>1,00,00</span><span>45% goal reached   </span></div>
                          </div>
                          <div class="progress-data">
                            <div class="progress sm-progress-bar progress-border-secondary">
                              <div class="progress-bar bg-secondary" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('admin.layouts.footer') 
      </div>
    </div>
    <!-- latest jquery-->
<script src="{{ asset('adminAssets/js/jquery.min.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ asset('adminAssets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
<!-- feather icon js-->
<script src="{{ asset('adminAssets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ asset('adminAssets/js/icons/feather-icon/feather-icon.js') }}"></script>
<!-- scrollbar js-->
<script src="{{ asset('adminAssets/js/scrollbar/simplebar.js') }}"></script>
<script src="{{ asset('adminAssets/js/scrollbar/custom.js') }}"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('adminAssets/js/config.js') }}"></script>

<!-- Theme js-->
<script src="{{ asset('adminAssets/js/script.js') }}"></script>
{{-- <script src="{{ asset('adminAssets/js/theme-customizer/customizer.js') }}"></script> --}}

    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.net/zono/template/{{route('dashboard')}} by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Jan 2025 13:35:12 GMT -->
</html>