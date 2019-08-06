
    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
        <div class="br-header-left">
          <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
          <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
          <div class="input-group hidden-xs-down wd-170 transition">
            <input id="searchbox" type="text" class="form-control" placeholder="Buscar">
            <span class="input-group-btn">
              <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
            </span>
          </div><!-- input-group -->
        </div><!-- br-header-left -->
        <div class="br-header-right">
          <nav class="nav">
            <div class="dropdown">
              <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                <i class="icon ion-ios-email-outline tx-24"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                <!-- end: if statement -->
              </a>
              <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                  <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Mensajes</label>
                  <a href="" class="tx-11">+ Nuevo</a>
                </div><!-- d-flex -->
  
                <div class="media-list">
                  <!-- loop starts here -->
                  <a href="" class="media-list-link">
                    <div class="media pd-x-20 pd-y-15">
                      <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                      <div class="media-body">
                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                          <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Donna Seay</p>
                          <span class="tx-11 tx-gray-500">2 minutes ago</span>
                        </div><!-- d-flex -->
                        <p class="tx-12 mg-b-0">A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring.</p>
                      </div>
                    </div><!-- media -->
                  </a>
                  <!-- loop ends here -->
                  <a href="" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                      <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                      <div class="media-body">
                        <div class="d-flex align-items-center justify-content-between mg-b-5">
                          <p class="mg-b-0 tx-medium tx-gray-800 tx-14">Samantha Francis</p>
                          <span class="tx-11 tx-gray-500">3 hours ago</span>
                        </div><!-- d-flex -->
                        <p class="tx-12 mg-b-0">My entire soul, like these sweet mornings of spring.</p>
                      </div>
                    </div><!-- media -->
                  </a>
                  <div class="pd-y-10 tx-center bd-t">
                    <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Ver mas mensajes</a>
                  </div>
                </div><!-- media-list -->
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <!----MENSAJES-------------------------------------------------------------------------------------------------------------->
            <div class="dropdown">
              <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                <i class="icon ion-ios-bell-outline tx-24"></i>
                <!-- start: if statement -->
                <span class="square-8 bg-danger pos-absolute t-15 r-5 rounded-circle"></span>
                <!-- end: if statement -->
              </a>
              <div class="dropdown-menu dropdown-menu-header wd-300 pd-0-force">
                <div class="d-flex align-items-center justify-content-between pd-y-10 pd-x-20 bd-b bd-gray-200">
                  <label class="tx-12 tx-info tx-uppercase tx-semibold tx-spacing-2 mg-b-0">Notificaciones</label>
                  <a href="" class="tx-11">Marcar todas como leídas</a>
                </div><!-- d-flex -->
  
                <div class="media-list">
                  <!-- loop starts here -->
                  <a href="" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                      <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                      <div class="media-body">
                        <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                        <span class="tx-12">October 03, 2017 8:45am</span>
                      </div>
                    </div><!-- media -->
                  </a>
                  <!-- loop ends here -->
                  <a href="" class="media-list-link read">
                    <div class="media pd-x-20 pd-y-15">
                      <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                      <div class="media-body">
                        <p class="tx-13 mg-b-0 tx-gray-700"><strong class="tx-medium tx-gray-800">Mellisa Brown</strong> appreciated your work <strong class="tx-medium tx-gray-800">The Social Network</strong></p>
                        <span class="tx-12">October 02, 2017 12:44am</span>
                      </div>
                    </div><!-- media -->
                  </a>
                  <div class="pd-y-10 tx-center bd-t">
                    <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Ver todas las notificaciónes</a>
                  </div>
                </div><!-- media-list -->
              </div><!-- dropdown-menu -->
              
            </div><!-- dropdown -->
            <!----NOTIFICACIONES-------------------------------------------------------------------------------------------------------------->
            <div class="dropdown">
              <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                <span class="logged-name hidden-md-down">Usuario</span>
                <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">
                <span class="square-10 bg-success"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-header wd-200">
                <ul class="list-unstyled user-profile-nav">
                  <li><a href=""><i class="icon ion-ios-person"></i> Editar perfil</a></li>
                  <li><a href=""><i class="icon ion-ios-gear"></i> Opciones</a></li>
                  <li><a href=""><i class="icon ion-power"></i> Salir</a></li>
                </ul>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <!----USUARIO LOGEADO-------------------------------------------------------------------------------------------------------------->
          </nav>
          <div class="navicon-right">
            <a id="btnRightMenu" href="" class="pos-relative">
              <i class="icon ion-ios-chatboxes-outline"></i>
              <!-- start: if statement -->
              <span class="square-8 bg-danger pos-absolute t-10 r--5 rounded-circle"></span>
              <!-- end: if statement -->
            </a>
          </div><!-- navicon-right -->
        </div><!-- br-header-right -->
      </div><!-- br-header -->
      <!-- ########## END: HEAD PANEL ########## -->