<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title><?php echo $__env->yieldContent('page_title'); ?></title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href='/resources/frontend2/images/fav.png' type='image/x-icon' />
  <link rel="icon" type="image/png" sizes="16x16" href='/resources/frontend2/images/fav.png' type='image/x-icon' />
  <link rel='shortcut icon' href='/resources/frontend2/images/fav.png' type='image/x-icon' />
  <link rel="manifest" href="/assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <script src="/assets/js/config.navbar-vertical.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
  <link href="/assets/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
  <link href="/assets/lib/datatables-bs4/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="/assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css" rel="stylesheet">
  <link href="/assets/lib/leaflet/leaflet.css" rel="stylesheet">
  <link href="/assets/lib/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
  <link href="/assets/lib/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
  <link href="/assets/css/theme.min.css" rel="stylesheet">
  <link href="/assets/lib/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet">
  <link href="/assets/lib/select2/select2.min.css" rel="stylesheet">
  <link href="/assets/lib/flatpickr/flatpickr.min.css" rel="stylesheet">
  <link href="/assets/lib/dropzone/dropzone.min.css" rel="stylesheet">
  <link href="/assets/css/theme.min.css" rel="stylesheet">
  <link href="/dist/css/dropify.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

</head>

<body>

  <?php if(Auth::user()->userid == "1"): ?>
  <main class="main" id="top">
    <div class="container" data-layout="container">
      <nav class="navbar navbar-vertical navbar-expand-xl navbar-light">
        <div class="d-flex align-items-center">
          <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          </div><a class="navbar-brand" href="/">
            <div class="d-flex align-items-center py-3"><span class="text-sans-serif" style="font-size: 0.9em">BuyPowerNow</span></div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-glass perfect-scrollbar scrollbar" id="navbarVerticalCollapse">
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link " href="/dashboard" role="button" aria-expanded="true" aria-controls="home">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Home</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="/dashboard/all-users">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-users"></span></span><span class="nav-link-text">Users</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link " href="/dashboard/all-agents">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-users"></span></span><span class="nav-link-text">Agents</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link " href="/dashboard/discos/all">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-list"></span></span><span class="nav-link-text">Discos</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link " href="/dashboard/commissions">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-briefcase"></span></span><span class="nav-link-text">Commission</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link " href="/dashboard/discounts">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-briefcase"></span></span><span class="nav-link-text">Discounts</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link " href="/dashboard/notifications/all">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-bell"></span></span><span class="nav-link-text">Notifications</span></div>
              </a>
            </li>
          </ul>
          <div class="px-3 px-xl-0 navbar-vertical-divider">
            <hr class="border-300 my-2" />
          </div>
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link" href="/dashboard/purchases/purchase-list">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-intercom"></span></span><span class="nav-link-text">Purchases</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link " href="/dashboard/sale/sales-list">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-joget"></span></span><span class="nav-link-text">Sales</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link" href="/dashboard/deposits/deposit-list">
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon">
                    <span class="far fa-money-bill-alt"></span>
                  </span>
                  <span class="nav-link-text">Deposit</span>
                </div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#email" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="email">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text">Email</span><span class="badge badge-pill ml-2 badge-soft-success"></span></div>
              </a>
              <ul class="nav collapse" id="email" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="email/inbox">Inbox</a></li>
                <li class="nav-item"><a class="nav-link" href="email/compose">Compose</a></li>
              </ul>
            </li>
          </ul>
          <div class="px-3 px-xl-0 navbar-vertical-divider">
            <hr class="border-300 my-2" />
          </div>
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#sett" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="pages">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-cog fa-spin"></span></span><span class="nav-link-text">Settings</span></div>
              </a>
              <ul class="nav collapse" id="sett" data-parent="#navbarVerticalCollapse">
                <li class="nav-item"><a class="nav-link" href="/dashboard/account">Account</a></li>
                <!-- <li class="nav-item"><a class="nav-link" href="/dashboard/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/dashboard/terms">Terms and conditions</a></li>
                <li class="nav-item"><a class="nav-link" href="/dashboard/privacy">Privacy Policy</a></li> -->
              </ul>
            </li>
          </ul>
          <div class="settings px-3 px-xl-0">
            <div class="navbar-vertical-divider">
              <hr class="border-300 my-3" />
            </div><a class="btn btn-primary btn-sm btn-block my-3 btn-purchase" href="/logout"> Sign out</a>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg">
        <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand mr-1 mr-sm-3" href="/">
          <div class="d-flex align-items-center py-3"><span class="text-sans-serif" style="font-size: 0.9em">BuyPowerNow</span></div>
        </a>
        <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
          <li class="nav-item">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
          </li>
          <li class="nav-item dropdown dropdown-on-hover">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
              <div class="card card-notification shadow-none" style="max-width: 20rem">
                <div class="card-header">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <h6 class="card-header-title mb-0">Notifications</h6>
                    </div>
                    <div class="col-auto"><a class="card-link font-weight-normal" href="javascript:;">Mark all as read</a></div>
                  </div>
                </div>
                <div class="list-group list-group-flush font-weight-normal fs--1">
                  <div class="list-group-title">NEW</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush bg-200" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl mr-3">
                          <img class="rounded-circle" src="/assets/img/team/1-thumb.png" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                        <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="notification notification-flush bg-200" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl mr-3">
                          <div class="avatar-name rounded-circle"><span>AB</span></div>
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                        <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-title">EARLIER</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl mr-3">
                          <img class="rounded-circle" src="/assets/img/icons/weather-sm.jpg" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                        <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="card-footer text-center border-top-0"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-xl">
                <img class="rounded-circle" src="/assets/img/team/3-thumb.png" alt="" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
              <div class="bg-white rounded-soft py-2">
                <a class="dropdown-item font-weight-bold text-warning" href="javascript:;">
                  <span class="fas fa-crown mr-1"></span><span><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/settings/profile">Profile &amp; account</a>
                <a class="dropdown-item" href="/dashboard/settings/logs">Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages/settings">System Settings</a>
                <a class="dropdown-item" href="/logout">Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="content">
        <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
            <div class="d-flex align-items-center py-3"><span class="text-sans-serif" style="font-size: 0.9em">BuyPowerNow</span></div>
          </a>
          <ul class="navbar-nav align-items-center d-none d-lg-block">
            <li class="nav-item">
              <form class="form-inline search-box"><input class="form-control rounded-pill search-input" type="search" placeholder="Search..." aria-label="Search" /><span class="position-absolute fas fa-search text-400 search-box-icon"></span></form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="/assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white rounded-soft py-2">
                  <a class="dropdown-item font-weight-bold text-warning" href="javascript:;">
                    <span class="fas fa-crown mr-1"></span><span><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/dashboard/profile">Profile &amp; account</a>
                  <a class="dropdown-item" href="/dashboard/settings/logs">Log</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/logout">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <script>
          var isNavbarTop = JSON.parse(localStorage.getItem('isNavbarTop'));
          if (isNavbarTop) {
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTop = document.querySelector('.content .navbar-top');
            navbarVertical.parentNode.removeChild(navbarVertical);
            navbarTop.parentNode.removeChild(navbarTop);

          } else {
            var navbarTop = document.querySelector('.container .navbar-top');
            navbarTop.parentNode.removeChild(navbarTop);
          }
        </script>


        <?php echo $__env->make('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>

      </div>
    </div>
  </main>
  <?php elseif(Auth::user()->userid == "2"): ?>
  <main class="main" id="top">

    <div class="container" data-layout="container">
      <nav class="navbar navbar-vertical navbar-expand-xl navbar-light">
        <div class="d-flex align-items-center">
          <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          </div><a class="navbar-brand" href="/">
            <div class="d-flex align-items-center py-3"><span class="text-sans-serif" style="font-size: 0.9em">BuyPowerNow</span></div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-glass perfect-scrollbar scrollbar" id="navbarVerticalCollapse">
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link " href="/dashboard" role="button" aria-expanded="true" aria-controls="home">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Home</span></div>
              </a>
            </li>
          </ul>
          <div class="px-3 px-xl-0 navbar-vertical-divider">
            <hr class="border-300 my-2" />
          </div>
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link " href="/dashboard/purchase">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-intercom"></span></span><span class="nav-link-text">Purchase Log</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link " href="/dashboard/commissions">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gripfire"></span></span><span class="nav-link-text">Commissions</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link " href="/dashboard/buy-power">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gripfire"></span></span><span class="nav-link-text">Buy Power</span></div>
              </a>
            </li>
          </ul>
          <div class="px-3 px-xl-0 navbar-vertical-divider">
            <hr class="border-300 my-2" />
          </div>
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link " href="/dashboard/profile">
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon">
                    <span class="fas fa-user"></span>
                  </span>
                  <span class="nav-link-text">Profile</span></div>
              </a>
            </li>
          </ul>
          <!-- <div class="settings px-3 px-xl-0">
            <div class="navbar-vertical-divider">
              <hr class="border-300 my-3" />
            </div><a class="btn btn-falcon-primary btn-sm btn-block btn-lg my-3" href="/dashboard/kyc"> KYC </a>
          </div> -->
          <div class="settings px-3 px-xl-0">
            <div class="navbar-vertical-divider">
              <hr class="border-300 my-3" />
            </div><a class="btn btn-primary btn-sm btn-block my-3 btn-purchase" href="/logout"> Sign out</a>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg">
        <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand mr-1 mr-sm-3" href="/">
          <div class="d-flex align-items-center py-3"><span class="text-sans-serif" style="font-size: 0.9em">BuyPowerNow</span></div>
        </a>
        <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
          <li class="nav-item">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
          </li>
          <li class="nav-item dropdown dropdown-on-hover">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
              <div class="card card-notification shadow-none" style="max-width: 20rem">
                <div class="card-header">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <h6 class="card-header-title mb-0">Notifications</h6>
                    </div>
                    <div class="col-auto"><a class="card-link font-weight-normal" href="javascript:;">Mark all as read</a></div>
                  </div>
                </div>
                <div class="list-group list-group-flush font-weight-normal fs--1">
                  <div class="list-group-title">NEW</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush bg-200" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl mr-3">
                          <img class="rounded-circle" src="/assets/img/team/1-thumb.png" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                        <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="notification notification-flush bg-200" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl mr-3">
                          <div class="avatar-name rounded-circle"><span>AB</span></div>
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                        <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-title">EARLIER</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl mr-3">
                          <img class="rounded-circle" src="/assets/img/icons/weather-sm.jpg" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                        <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="card-footer text-center border-top-0"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-xl">
                <img class="rounded-circle" src="/assets/img/team/3-thumb.png" alt="" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
              <div class="bg-white rounded-soft py-2">
                <a class="dropdown-item font-weight-bold text-warning" href="javascript:;">
                  <span class="fas fa-crown mr-1"></span><span><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/settings/profile">Profile &amp; account</a>
                <a class="dropdown-item" href="/user/settings/logs">Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages/settings">System Settings</a>
                <a class="dropdown-item" href="/logout">Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="content">
        <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
            <div class="d-flex align-items-center py-3"><span class="text-sans-serif" style="font-size: 0.9em">BuyPowerNow</span></div>
          </a>
          <ul class="navbar-nav align-items-center d-none d-lg-block">
            <li class="nav-item">
              <form class="form-inline search-box"><input class="form-control rounded-pill search-input" type="search" placeholder="Search..." aria-label="Search" /><span class="position-absolute fas fa-search text-400 search-box-icon"></span></form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="/assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white rounded-soft py-2">
                  <a class="dropdown-item font-weight-bold text-warning" href="javascript:;">
                    <span class="fas fa-crown mr-1"></span><span><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/user/profile">Profile &amp; account</a>
                  <a class="dropdown-item" href="/user/settings/logs">Log</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/logout">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <script>
          var isNavbarTop = JSON.parse(localStorage.getItem('isNavbarTop'));
          if (isNavbarTop) {
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTop = document.querySelector('.content .navbar-top');
            navbarVertical.parentNode.removeChild(navbarVertical);
            navbarTop.parentNode.removeChild(navbarTop);

          } else {
            var navbarTop = document.querySelector('.container .navbar-top');
            navbarTop.parentNode.removeChild(navbarTop);
          }
        </script>


        <?php echo $__env->make('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>

      </div>
    </div>
  </main>
  <?php else: ?>
  <main class="main" id="top">

    <div class="container" data-layout="container">
      <nav class="navbar navbar-vertical navbar-expand-xl navbar-light">
        <div class="d-flex align-items-center">
          <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-toggle="tooltip" data-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          </div><a class="navbar-brand" href="/">
            <div class="d-flex align-items-center py-3"><span class="text-sans-serif" style="font-size: 0.9em">BuyPowerNow</span></div>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-glass perfect-scrollbar scrollbar" id="navbarVerticalCollapse">
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link " href="/dashboard" role="button" aria-expanded="true" aria-controls="home">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text">Home</span></div>
              </a>
            </li>
          </ul>
          <div class="px-3 px-xl-0 navbar-vertical-divider">
            <hr class="border-300 my-2" />
          </div>
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link " href="/dashboard/purchase">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-intercom"></span></span><span class="nav-link-text">Purchase Log</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link " href="/dashboard/commissions">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gripfire"></span></span><span class="nav-link-text">Commissions</span></div>
              </a>
            </li>
            <li class="nav-item"><a class="nav-link " href="/dashboard/buy-power">
                <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gripfire"></span></span><span class="nav-link-text">Buy Power</span></div>
              </a>
            </li>
          </ul>          
          <div class="px-3 px-xl-0 navbar-vertical-divider">
            <hr class="border-300 my-2" />
          </div>
          <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link " href="/dashboard/profile">
                <div class="d-flex align-items-center">
                  <span class="nav-link-icon">
                    <span class="fas fa-user"></span>
                  </span>
                  <span class="nav-link-text">Profile</span></div>
              </a>
            </li>
          </ul>
          <div class="settings px-3 px-xl-0">
            <div class="navbar-vertical-divider">
              <hr class="border-300 my-3" />
            </div><a class="btn btn-primary btn-sm btn-block my-3 btn-purchase" href="/logout"> Sign out</a>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg">
        <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
        <a class="navbar-brand mr-1 mr-sm-3" href="/">
          <div class="d-flex align-items-center py-3"><span class="text-sans-serif" style="font-size: 0.9em">BuyPowerNow</span></div>
        </a>
        <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
          <li class="nav-item">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart fs-4" data-fa-transform="shrink-7"></span><span class="notification-indicator-number">1</span></a>
          </li>
          <li class="nav-item dropdown dropdown-on-hover">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span></a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
              <div class="card card-notification shadow-none" style="max-width: 20rem">
                <div class="card-header">
                  <div class="row justify-content-between align-items-center">
                    <div class="col-auto">
                      <h6 class="card-header-title mb-0">Notifications</h6>
                    </div>
                    <div class="col-auto"><a class="card-link font-weight-normal" href="javascript:;">Mark all as read</a></div>
                  </div>
                </div>
                <div class="list-group list-group-flush font-weight-normal fs--1">
                  <div class="list-group-title">NEW</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush bg-200" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl mr-3">
                          <img class="rounded-circle" src="/assets/img/team/1-thumb.png" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                        <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">💬</span>Just now</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-item">
                    <a class="notification notification-flush bg-200" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl mr-3">
                          <div class="avatar-name rounded-circle"><span>AB</span></div>
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                        <span class="notification-time"><span class="mr-1 fab fa-gratipay text-danger"></span>9hr</span>
                      </div>
                    </a>
                  </div>
                  <div class="list-group-title">EARLIER</div>
                  <div class="list-group-item">
                    <a class="notification notification-flush" href="#!">
                      <div class="notification-avatar">
                        <div class="avatar avatar-2xl mr-3">
                          <img class="rounded-circle" src="/assets/img/icons/weather-sm.jpg" alt="" />
                        </div>
                      </div>
                      <div class="notification-body">
                        <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                        <span class="notification-time"><span class="mr-1" role="img" aria-label="Emoji">🌤️</span>1d</span>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="card-footer text-center border-top-0"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-xl">
                <img class="rounded-circle" src="/assets/img/team/3-thumb.png" alt="" />
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
              <div class="bg-white rounded-soft py-2">
                <a class="dropdown-item font-weight-bold text-warning" href="javascript:;">
                  <span class="fas fa-crown mr-1"></span><span><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/settings/profile">Profile &amp; account</a>
                <a class="dropdown-item" href="/user/settings/logs">Log</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages/settings">System Settings</a>
                <a class="dropdown-item" href="/logout">Logout</a>
              </div>
            </div>
          </li>
        </ul>
      </nav>
      <div class="content">
        <nav class="navbar navbar-light navbar-glass navbar-top sticky-kit navbar-expand-lg">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler mr-1 mr-sm-3" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand mr-1 mr-sm-3" href="index.html">
            <div class="d-flex align-items-center py-3"><span class="text-sans-serif" style="font-size: 0.9em">BuyPowerNow</span></div>
          </a>
          <ul class="navbar-nav align-items-center d-none d-lg-block">
            <li class="nav-item">
              <form class="form-inline search-box"><input class="form-control rounded-pill search-input" type="search" placeholder="Search..." aria-label="Search" /><span class="position-absolute fas fa-search text-400 search-box-icon"></span></form>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-icons ml-auto flex-row align-items-center">
            <li class="nav-item dropdown dropdown-on-hover"><a class="nav-link pr-0" id="navbarDropdownUser" href="javascript:;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="/assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white rounded-soft py-2">
                  <a class="dropdown-item font-weight-bold text-warning" href="javascript:;">
                    <span class="fas fa-crown mr-1"></span><span><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->lname); ?></span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/user/profile">Profile &amp; account</a>
                  <a class="dropdown-item" href="/user/settings/logs">Log</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="/logout">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <script>
          var isNavbarTop = JSON.parse(localStorage.getItem('isNavbarTop'));
          if (isNavbarTop) {
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTop = document.querySelector('.content .navbar-top');
            navbarVertical.parentNode.removeChild(navbarVertical);
            navbarTop.parentNode.removeChild(navbarTop);

          } else {
            var navbarTop = document.querySelector('.container .navbar-top');
            navbarTop.parentNode.removeChild(navbarTop);
          }
        </script>


        <?php echo $__env->make('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>

      </div>
    </div>
  </main>
  <?php endif; ?>
  <script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
      var container = document.querySelector('[data-layout]');
      container.classList.remove('container');
      container.classList.add('container-fluid');
    }
  </script>

  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="/assets/lib/@fortawesome/all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/stickyfill/2.1.0/stickyfill.min.js"></script>
  <script src="/assets/lib/sticky-kit/sticky-kit.min.js"></script>
  <script src="/assets/lib/is_js/is.min.js"></script>
  <script src="/assets/lib/lodash/lodash.min.js"></script>
  <script src="/assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.12/js/select2.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.6.3/flatpickr.min.js"></script>
  <script src="/assets/lib/dropzone/dropzone.min.js"></script>
  <script src="/assets/js/theme.min.js"></script>
  <script src="/dist/js/dropify.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#example').DataTable();
    });
    $('#table_id').DataTable();
    $('.dropify').dropify();

    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
      $('.js-example-basic-single').select2();
    });
  </script>


</body>

</html><?php /**PATH C:\xampp\htdocs\Laravel\buypowernow\resources\views/layouts/dashboard-layout.blade.php ENDPATH**/ ?>