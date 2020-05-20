<!------------------------------------------------------->
<!----------------------- Topbar ------------------------>
<!------------------------------------------------------->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
  <!-------------------------------------->
  <!---------- Sidebar Toggle ------------>
  <!--Esta es el boton para dispositivos moviles
      Este boton colapsa la menu lateral
      Ojo con los estilos que estan muy bien-->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <!--Icono de barras-->
    <i class="fa fa-bars"></i>
  </button>
  <!---------- /Sidebar Toggle------------->
  <!-------------------------------------->


  <!------------------------------------->
  <!----------- Topbar Navbar ----------->
  <ul class="navbar-nav ml-auto">

    <!-------------------------->
    <!-------- ALERTS ---------->
    <li class="nav-item dropdown no-arrow mx-1">

      <!--------ICONO-BUTTON-------->
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-bell fa-fw"></i>

        <!-- Counter - Alerts -->
        <!-- Trabajar la connectividad a los mensajes
             Ahora esta de manera estatica-->
        <span class="badge badge-danger badge-counter">3+</span>
      </a>
      <!--------ICONO-BUTTON-------->

      <!--------Alerts-menu -------------->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">

        <h6 class="dropdown-header">
          Centro de mensajes
        </h6>

        <!----------MSJ-1----------------->
        <a class="dropdown-item d-flex align-items-center" href="#">
          <div class="mr-3">
            <div class="icon-circle bg-primary">
              <i class="fas fa-file-alt text-white"></i>
            </div>
          </div>

          <div>
            <div class="small text-gray-500">December 12, 2019</div>
            <span class="font-weight-bold">A new monthly report is ready to download!</span>
          </div>
        </a>
        <!----------/MSJ-1----------------->

        <!----------MSJ-2----------------->
        <a class="dropdown-item d-flex align-items-center" href="#">
          <div class="mr-3">
            <div class="icon-circle bg-success">
              <i class="fas fa-donate text-white"></i>
            </div>
          </div>

          <div>
            <div class="small text-gray-500">December 7, 2019</div>
            $290.29 has been deposited into your account!
          </div>
        </a>
        <!----------/MSJ-2----------------->

        <!----------MSJ-3----------------->
        <a class="dropdown-item d-flex align-items-center" href="#">
          <div class="mr-3">
            <div class="icon-circle bg-warning">
              <i class="fas fa-exclamation-triangle text-white"></i>
            </div>
          </div>

          <div>
            <div class="small text-gray-500">December 2, 2019</div>
            Spending Alert: We've noticed unusually high spending for your account.
          </div>
        </a>
        <!----------/MSJ-3----------------->

        <!----------MSJ-4----------------->
        <!-- Este link me  lleva a una pagina con todas las alertas-->
        <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
        <!----------/MSJ-4----------------->

      </div>
      <!--------Alerts-menu -------------->
    </li>
    <!-------- Alerts ---------->
    <!-------------------------->

    <!--Esto solo es una linea para dividir partes-->
    <div class="topbar-divider d-none d-sm-block"></div>


    <!--------User Information ------------->
    <li class="nav-item dropdown no-arrow">


      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->first_name}}</span>
      </a>


      <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
        <a class="dropdown-item" href="#">
          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
          Perfil
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
          Configuración
        </a>
        <a class="dropdown-item" href="#">
          <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
          Activity Log
        </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}">
          <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
          Cerrar Sesión
        </a>
      </div>
    </li>
    <!--------User Information ------------->

  </ul>   
  <!----------- Topbar Navbar ----------->
  <!------------------------------------->

</nav>
<!------------------------------------------------------->
<!----------------------- /Topbar ------------------------>
<!------------------------------------------------------->
