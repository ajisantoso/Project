<ul class="nav navbar-nav">
  <li><a href="{{URL::to('/user')}}">Booking Lapangan</a></li>
  @if (Auth::check())
    <li @if (Request::is('admin/post*')) class="active" @endif>
      <a href="{{URL::to('/viewKetersediaan')}}">Cek Ketersediaan</a>
    </li>
    <li @if (Request::is('admin/addTipeLap*')) class="active" @endif>
     <a href="{{URL::to('/addTipeLap')}}"></a>
    </li>
    <li @if (Request::is('admin/upload*')) class="active" @endif>
      <a href="/admin/upload"></a>
    </li>
  @endif
</ul>

<ul class="nav navbar-nav navbar-right">
  @if (Auth::guest())
    <li><a href="/auth/login">Login</a></li>
  @else
    <li class="dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
         aria-expanded="false">{{ Auth::user()->name }}
        <span class="caret"></span>
      </a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="{{URL::to('/logout')}}">Log Out</a></li>
      </ul>
    </li>
  @endif
</ul>
