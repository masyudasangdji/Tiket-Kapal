
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?= base_url(); ?>/template/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>/template/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url(); ?>/template/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo me-5" href="../../index.html"><img src="<?= base_url(); ?>/template/images/logo.svg" class="me-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="<?= base_url(); ?>/template/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="../../../../images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav> 
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close ti-close"></i>
        <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-bs-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-bs-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove ti-close"></i>
                </li>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
              <p class="text-gray mb-0">The total number of sessions</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary me-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 ps-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="../../../../images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../../images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../../images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../../images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../../images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="../../../../images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="../../index.html">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/widgets/widgets.html">
              <i class="icon-cog menu-icon"></i>
              <span class="menu-title">Widgets</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/accordions.html">Accordions</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/badges.html">Badges</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/breadcrumbs.html">Breadcrumbs</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/modals.html">Modals</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/progress.html">Progress bar</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/pagination.html">Pagination</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/tabs.html">Tabs</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/tooltips.html">Tooltips</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
              <i class="icon-image menu-icon"></i>
              <span class="menu-title">Advanced UI</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dragula.html">Dragula</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/clipboard.html">Clipboard</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/context-menu.html">Context menu</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/slider.html">Sliders</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/carousel.html">Carousel</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/colcade.html">Colcade</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/loaders.html">Loaders</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Form elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="form-elements">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/basic_elements.html">Basic Elements</a></li>                
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/advanced_elements.html">Advanced Elements</a></li>
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/validation.html">Validation</a></li>
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/wizard.html">Wizard</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
              <i class="icon-loader menu-icon"></i>
              <span class="menu-title">Editors</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="editors">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/text_editor.html">Text editors</a></li>
                <li class="nav-item"><a class="nav-link" href="../../pages/forms/code_editor.html">Code editors</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartjs.html">ChartJs</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/morris.html">Morris</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/flot-chart.html">Flot</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/google-charts.html">Google charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/sparkline.html">Sparkline js</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/c3.html">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/chartist.html">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/charts/justGage.html">JustGage</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Tables</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="tables">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/basic-table.html">Basic table</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/data-table.html">Data table</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/js-grid.html">Js-grid</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/tables/sortable-table.html">Sortable table</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/ui-features/popups.html">
              <i class="icon-open menu-icon"></i>
              <span class="menu-title">Popups</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/ui-features/notifications.html">
              <i class="icon-esc menu-icon"></i>
              <span class="menu-title">Notifications</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Icons</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/icons/flag-icons.html">Flag icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/icons/mdi.html">Mdi icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/icons/font-awesome.html">Font Awesome</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/icons/simple-line-icon.html">Simple line icons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/icons/themify.html">Themify icons</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
              <i class="icon-map menu-icon"></i>
              <span class="menu-title">Maps</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/maps/mapael.html">Mapael</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/maps/vector-map.html">Vector Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/maps/google-maps.html">Google Map</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">General Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/profile.html"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/faq.html"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/faq-2.html"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/news-grid.html"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/timeline.html"> Timeline </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/search-results.html"> Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/portfolio.html"> Portfolio </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
              <i class="icon-tag menu-icon"></i>
              <span class="menu-title">E-commerce</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/invoice.html"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/pricing-table.html"> Pricing Table </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/orders.html"> Orders </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/apps/email.html">
              <i class="icon-mail menu-icon"></i>
              <span class="menu-title">E-mail</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/apps/calendar.html">
              <i class="icon-watch menu-icon"></i>
              <span class="menu-title">Calendar</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/apps/todo.html">
              <i class="icon-align-right menu-icon"></i>
              <span class="menu-title">Todo List</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/apps/gallery.html">
              <i class="icon-image menu-icon"></i>
              <span class="menu-title">Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/documentation/documentation.html">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Default accordion</h4>
                  <p class="card-description">Use class <code>.accordion</code> for basic accordion</p>
                  <div class="mt-4">
                    <div class="accordion" id="accordion" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-1">
                          <h6 class="mb-0">
                            <a data-bs-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                              How can I pay for an order I placed?
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-1" class="collapse show" role="tabpanel" aria-labelledby="heading-1" data-parent="#accordion">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-3">
                                <img src="../../../../images/samples/300x300/10.jpg" class="mw-100" alt="image"/>                              
                              </div>
                              <div class="col-9">
                                <p class="mb-0">You can pay for the product you have purchased using credit cards, debit cards, or via online banking. 
                                We also on-delivery services.</p>                          
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-2">
                          <h6 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                              I can’t sign in to my account
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-2" class="collapse" role="tabpanel" aria-labelledby="heading-2" data-parent="#accordion">
                          <div class="card-body">
                              <p>If while signing in to your account you see an error message, you can do the following</p>
                            <ol class="ps-3 mt-4">
                              <li>Check your network connection and try again</li>
                              <li>Make sure your account credentials are correct while signing in</li>
                              <li>Check whether your account is accessible in your region</li>
                            </ol>
                            <br>
                            <p class="text-success">
                              <i class="ti-alert-octagon me-2"></i>If the problem persists, you can contact our support.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-3">
                          <h6 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                              Can I add money to the wallet?
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-3" class="collapse" role="tabpanel" aria-labelledby="heading-3" data-parent="#accordion">
                          <div class="card-body">
                            <p class="mb-0">You can add money to the wallet for any future transaction from your bank account using net-banking, or credit/debit card transaction. The money in the wallet can be used for an easier and faster transaction.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered accordions</h4>
                  <p class="card-description">Use class <code>.accordion-bordered</code> for bordered accordions</p>
                  <div class="mt-4">
                    <div class="accordion accordion-bordered" id="accordion-2" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-4">
                          <h6 class="mb-0">
                            <a data-bs-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                              How can I pay for an order I placed?
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-4" class="collapse" role="tabpanel" aria-labelledby="heading-4" data-parent="#accordion-2">
                          <div class="card-body">
                            <p class="mb-0">You can pay for the product you have purchased using credit cards, debit cards, or via online banking. We also provide cash-on-delivery services for most of our products. You can also use your account wallet for payment. </p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-5">
                          <h6 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                              I can’t sign in to my account
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-5" class="collapse" role="tabpanel" aria-labelledby="heading-5" data-parent="#accordion-2">
                          <div class="card-body">
                              <p>If while signing in to your account you see an error message, you can do the following</p>
                            <ol class="ps-3">
                              <li>Check your network connection and try again</li>
                              <li>Make sure your account credentials are correct while signing in</li>
                              <li>Check whether your account is accessible in your region</li>
                            </ol>
                            <br>
                            <i class="ti-alert-octagon me-2"></i>If the problem persists, you can contact our support.
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-6">
                          <h6 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-6" aria-expanded="true" aria-controls="collapse-6">
                              How can I deactivate my account?
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-6" class="collapse show" role="tabpanel" aria-labelledby="heading-6" data-parent="#accordion-2">
                          <div class="card-body">
                            <p class="mb-0">If you wish to deactivate your account, you can go to the Settings page of your account. Click on Account Settings and then click on Deactivate.
                            You can join again as and when you wish.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Filled accordions</h4>
                  <p class="card-description">Use class <code>.accordion-filled</code> for Basic Accordion</p>
                  <div class="accordion accordion-filled" id="accordion-40" role="tablist">
                    <div class="card">
                      <div class="card-header" role="tab" id="heading-40">
                        <h6 class="mb-0">
                          <a data-bs-toggle="collapse" href="#collapse-40" aria-expanded="false" aria-controls="collapse-40">
                            How can I pay for an order I placed?
                          </a>
                        </h6>
                      </div>
                      <div id="collapse-40" class="collapse" role="tabpanel" aria-labelledby="heading-40" data-parent="#accordion-40">
                        <div class="card-body">
                          <p class="mb-0">You can pay for the product you have purchased using credit cards, debit cards, or via online banking. We also provide cash-on-delivery services for most of our products. You can also use your account wallet for payment. </p>
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" role="tab" id="heading-41">
                        <h6 class="mb-0">
                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-41" aria-expanded="false" aria-controls="collapse-41">
                            I can’t sign in to my account
                          </a>
                        </h6>
                      </div>
                      <div id="collapse-41" class="collapse" role="tabpanel" aria-labelledby="heading-40" data-parent="#accordion-40">
                        <div class="card-body">
                            <p>If while signing in to your account you see an error message, you can do the following</p>
                          <ol class="ps-3">
                            <li>Check your network connection and try again</li>
                            <li>Make sure your account credentials are correct while signing in</li>
                            <li>Check whether your account is accessible in your region</li>
                          </ol>
                          <br>
                          <i class="ti-alert-octagon me-2"></i>If the problem persists, you can contact our support.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" role="tab" id="heading-42">
                        <h6 class="mb-0">
                          <a class="collapsed" data-bs-toggle="collapse" href="#collapse-42" aria-expanded="true" aria-controls="collapse-42">
                            How can I deactivate my account?
                          </a>
                        </h6>
                      </div>
                      <div id="collapse-42" class="collapse show" role="tabpanel" aria-labelledby="heading-42" data-parent="#accordion-40">
                        <div class="card-body">
                          <p class="mb-0">If you wish to deactivate your account, you can go to the Settings page of your account. Click on Account Settings and then click on Deactivate.
                          You can join again as and when you wish.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Solid header accordion</h4>
                  <p class="card-description">Use class <code>.accordion-solid-header</code> for basic accordion</p>
                  <div class="mt-4">
                    <div class="accordion accordion-solid-header" id="accordion-4" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-10">
                          <h6 class="mb-0">
                            <a data-bs-toggle="collapse" href="#collapse-10" aria-expanded="true" aria-controls="collapse-10">
                              How can I pay for an order I placed?
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-10" class="collapse show" role="tabpanel" aria-labelledby="heading-10" data-parent="#accordion-4">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-3">
                                <img src="../../../../images/samples/300x300/10.jpg" class="mw-100" alt="image"/>                              
                              </div>
                              <div class="col-9">
                                <p class="mb-0">You can pay for the product you have purchased using credit cards, debit cards, or via online banking. 
                                We also on-delivery services.</p>                             
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-11">
                          <h6 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-11" aria-expanded="false" aria-controls="collapse-11">
                              I can’t sign in to my account
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-11" class="collapse" role="tabpanel" aria-labelledby="heading-11" data-parent="#accordion-4">
                          <div class="card-body">
                              <p>If while signing in to your account you see an error message, you can do the following</p>
                            <ol class="ps-3 mt-4">
                              <li>Check your network connection and try again</li>
                              <li>Make sure your account credentials are correct while signing in</li>
                              <li>Check whether your account is accessible in your region</li>
                            </ol>
                            <br>
                            <p class="text-success">
                              <i class="ti-alert-octagon me-2"></i>If the problem persists, you can contact our support.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-12">
                          <h6 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-12" aria-expanded="false" aria-controls="collapse-12">
                              Can I add money to the wallet?
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-12" class="collapse" role="tabpanel" aria-labelledby="heading-12" data-parent="#accordion-4">
                          <div class="card-body">
                            <p class="mb-0">You can add money to the wallet for any future transaction from your bank account using net-banking, or credit/debit card transaction. The money in the wallet can be used for an easier and faster transaction.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Solid content accordion</h4>
                  <p class="card-description">Use class <code>.accordion-solid-content</code> for basic accordion</p>
                  <div class="mt-4">
                    <div class="accordion accordion-solid-content" id="accordion-5" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-13">
                          <h6 class="mb-0">
                            <a data-bs-toggle="collapse" href="#collapse-13" aria-expanded="true" aria-controls="collapse-13">
                              How can I pay for an order I placed?
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-13" class="collapse show" role="tabpanel" aria-labelledby="heading-13" data-parent="#accordion-5">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-3">
                                <img src="../../../../images/samples/300x300/10.jpg" class="mw-100" alt="image"/>                              
                              </div>
                              <div class="col-9">
                                <p class="mb-0">You can pay for the product you have purchased using credit cards, debit cards, or via online banking. 
                                We also on-delivery services.</p>                             
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-14">
                          <h6 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-14" aria-expanded="false" aria-controls="collapse-14">
                              I can’t sign in to my account
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-14" class="collapse" role="tabpanel" aria-labelledby="heading-14" data-parent="#accordion-5">
                          <div class="card-body">
                              <p>If while signing in to your account you see an error message, you can do the following</p>
                            <ol class="ps-3 mt-4">
                              <li>Check your network connection and try again</li>
                              <li>Make sure your account credentials are correct while signing in</li>
                              <li>Check whether your account is accessible in your region</li>
                            </ol>
                            <br>
                            <p class="text-danger">
                              <i class="ti-alert-octagon me-2"></i>If the problem persists, you can contact our support.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-15">
                          <h6 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-15" aria-expanded="false" aria-controls="collapse-15">
                              Can I add money to the wallet?
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-15" class="collapse" role="tabpanel" aria-labelledby="heading-15" data-parent="#accordion-5">
                          <div class="card-body">
                            <p class="mb-0">You can add money to the wallet for any future transaction from your bank account using net-banking, or credit/debit card transaction. The money in the wallet can be used for an easier and faster transaction.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Multi colored accordion</h4>
                  <p class="card-description">Use class <code>.accordion-multi-colored</code> for basic accordion</p>
                  <div class="mt-4">
                    <div class="accordion accordion-multi-colored" id="accordion-6" role="tablist">
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-16">
                          <h6 class="mb-0">
                            <a data-bs-toggle="collapse" href="#collapse-16" aria-expanded="false" aria-controls="collapse-16">
                              How can I pay for an order I placed?
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-16" class="collapse" role="tabpanel" aria-labelledby="heading-16" data-parent="#accordion-6">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-3">
                                <img src="../../../../images/samples/300x300/10.jpg" class="mw-100" alt="image"/>                              
                              </div>
                              <div class="col-9">
                                <p class="mb-0">You can pay for the product you have purchased using credit cards, debit cards, or via online banking. 
                                We also on-delivery services.</p>                             
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-17">
                          <h6 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-17" aria-expanded="false" aria-controls="collapse-17">
                              I can’t sign in to my account
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-17" class="collapse" role="tabpanel" aria-labelledby="heading-17" data-parent="#accordion-6">
                          <div class="card-body">
                              <p>If while signing in to your account you see an error message, you can do the following</p>
                            <ol class="ps-3 mt-4">
                              <li>Check your network connection and try again</li>
                              <li>Make sure your account credentials are correct while signing in</li>
                              <li>Check whether your account is accessible in your region</li>
                            </ol>
                            <br>
                            <p class="text-danger">
                              <i class="ti-alert-octagon me-2"></i>If the problem persists, you can contact our support.
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" role="tab" id="heading-18">
                          <h6 class="mb-0">
                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-18" aria-expanded="true" aria-controls="collapse-18">
                              Can I add money to the wallet?
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-18" class="collapse show" role="tabpanel" aria-labelledby="heading-18" data-parent="#accordion-6">
                          <div class="card-body">
                            <p class="mb-0">You can add money to the wallet for any future transaction from your bank account using net-banking, or credit/debit card transaction. The money in the wallet can be used for an easier and faster transaction.</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url(); ?>/template/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>/template/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>/template/js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>/template/js/template.js"></script>
  <script src="<?= base_url(); ?>/template/js/settings.js"></script>
  <script src="<?= base_url(); ?>/template/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
