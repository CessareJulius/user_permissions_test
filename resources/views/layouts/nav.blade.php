<style>
    .salir{
        margin-top: 8px;
        margin-right: 1%;
    }
</style>

<header class="main-header">
    <a href="{{ route('home') }}" class="logo">
      <span class="logo-mini"><b>U</b>PT</span>
      <span class="logo-lg"><b>User </b>Permissions</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="pull-right salir">
            <a class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <i class="fa fa-sign-out text-aqua"></i> <span>Salir</span></a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </nav>
</header>