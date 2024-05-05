<header class="main-header">
  <a href="" class="logo">
    <span class="logo-lg"><b>Product App</b></span>
  </a>
  <nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Hello , {{ Auth::user()->name }} </span>
          </a>
        </li>
        <form id="logout-form" action="{{url('/logout')}}" method="POST" style="display: none">
          {{ csrf_field() }}
        </form>
        <li class=""><a title="" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon icon-share-alt"></i> <i class="fa fa-sign-out fa-2x"></i></a></li>
      </ul>
    </div>
  </nav>
</header>