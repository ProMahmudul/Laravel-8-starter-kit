<nav id="sidebar" aria-label="Main Navigation">
     <!-- Side Header -->
     <div class="content-header bg-white-5">
          <!-- Logo -->
          <a class="font-w600 text-dual" href="/">
               <span class="smini-visible">
                    <i class="fa fa-circle-notch text-primary"></i>
               </span>
               <span class="smini-hide font-size-h5 tracking-wider">
                    Starter Template
               </span>
          </a>
          <!-- END Logo -->

          <!-- Extra -->
          <div>
               <!-- Close Sidebar, Visible only on mobile screens -->
               <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
               <a class="d-lg-none btn btn-sm btn-dual ml-1" data-toggle="layout" data-action="sidebar_close"
                    href="javascript:void(0)">
                    <i class="fa fa-fw fa-times"></i>
               </a>
               <!-- END Close Sidebar -->
          </div>
          <!-- END Extra -->
     </div>
     <!-- END Side Header -->

     <!-- Sidebar Scrolling -->
     <div class="js-sidebar-scroll">
          <!-- Side Navigation -->
          <div class="content-side">
               <ul class="nav-main">
                    <li class="nav-main-item{{ request()->is('pages/*') ? ' open' : '' }}">
                         <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                              aria-expanded="true" href="#">
                              <i class="nav-main-link-icon si si-bulb"></i>
                              <span class="nav-main-link-name">Examples</span>
                         </a>
                         <ul class="nav-main-submenu">
                              <li class="nav-main-item">
                                   <a class="nav-main-link{{ request()->is('pages/datatables') ? ' active' : '' }}"
                                        href="/pages/datatables">
                                        <span class="nav-main-link-name">DataTables</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link{{ request()->is('pages/slick') ? ' active' : '' }}"
                                        href="/pages/slick">
                                        <span class="nav-main-link-name">Slick Slider</span>
                                   </a>
                              </li>
                              <li class="nav-main-item">
                                   <a class="nav-main-link{{ request()->is('pages/blank') ? ' active' : '' }}"
                                        href="/pages/blank">
                                        <span class="nav-main-link-name">Blank</span>
                                   </a>
                              </li>
                         </ul>
                    </li>
                    <li class="nav-main-heading">More</li>
                    <li class="nav-main-item open">
                         <a class="nav-main-link" href="/">
                              <i class="nav-main-link-icon si si-globe"></i>
                              <span class="nav-main-link-name">Landing</span>
                         </a>
                    </li>
               </ul>
          </div>
          <!-- END Side Navigation -->
     </div>
     <!-- END Sidebar Scrolling -->
</nav>
