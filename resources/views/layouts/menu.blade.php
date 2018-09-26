<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MENU</li>
        <li class="active">
          <a href="{{ route('home') }}">
            <i class="fa fa-home"></i> <span>Inicio</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Item #1</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Item 1.1</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 1.2</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 1.3</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 1.4</a>
            </li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Item #2</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Item 2.1</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 2.2</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 2.3</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 2.4</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Item #3</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Item 3.1</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 3.2</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 3.3</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 3.4</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 3.5</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 3.6</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Item #4</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-circle-o"></i> Item 4.1</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 4.2</a></li>
            <li><a href=""><i class="fa fa-circle-o"></i> Item 4.3</a></li>
          </ul>
        </li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-cogs text-red"></i> <span>Configuración</span></a></li>
        <li>
          <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out text-aqua"></i> <span>Salir</span></a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>