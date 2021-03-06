<ul class="nav navbar-nav navbar-right">
  @if ( \app\locker\helpers\Access::isRole('super') )
  <li><a href="{{ URL() }}"><i class="icon icon-dashboard"></i> Admin dashboard</a></li>
  @endif
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon icon-list"></i> LRS List <b class="caret"></b></a>
    <ul class="dropdown-menu">
      @if( isset( $list ) )
        @foreach( $list as $lrs )
          <li><a href="{{ URL() }}/lrs/{{ $lrs->_id }}"><i class='icon icon-bar-chart'></i> {{ $lrs->title }}</a></li>
        @endforeach
      @else
        <li><a href="#">No LRSs available</a></li>
      @endif
      <li class="divider"></li>
      <li class="dropdown-header">Other</li>
      <li><a href="{{ URL() }}/lrs">LRS home</a></li>
      @if( app\locker\helpers\Lrs::lrsCanCreate() )
        <li><a href="{{ URL() }}/lrs/create">Create a new LRS</a></li>
      @endif
    </ul>
  </li>
  <li><a href="{{ URL() }}/users/{{ Auth::user()->_id }}/edit"><i class="icon icon-cog"></i> Settings</a></li>
  <li><a href="{{ URL() }}/logout">Logout</a></li>
</ul>