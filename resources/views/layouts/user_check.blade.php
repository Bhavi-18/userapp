<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
           
        </div>
       <!--  <ul class="nav navbar-top-links navbar-right">
            @if (Auth::guest())
              <li><a href="{{ url('/admin/login') }}">Login</a></li>
              <li><a href="{{ url('/admin/register') }}">Register</a></li>
            @else 
              <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                 <img src="https://img.icons8.com/color/48/000000/administrator-male.png" style="width:20px;"> {{strtoupper(Auth::user()->name) }} <span class="caret"></span>
                 </a>
                 <ul class="dropdown-menu" role="menu">
                    <li>
                       <a href="{{ url('/admin/logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                       <img src="https://img.icons8.com/color/48/000000/exit.png" style="width:20px;"> Logout
                       </a>
                       <form id="logout-form" action="{{ url('/admin/logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                       </form>
                    </li>
                 </ul>
              </li>
            @endif

        </ul> -->


    </nav>
</div>

