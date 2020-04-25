
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                           <b>Bhavi Jain</b>
                             </span>
                          
                </div>
                <div class="logo-element">
                    <img src="{{URL::asset('/images/avatar.jpg')}}" style="width:32px;">
                </div>
            </li>
           

            

                    <li class="{{ Request::path() == 'admin/home' ? 'active' : '' }}">                        
                        <a href="{{ url('/#') }}" class="over"><i class="fa fa-tachometer" aria-hidden="true"></i><span class="nav-label">&nbsp;</span> <span class="nav-label">Dashboard</span> </a>
     
                    </li>

                   
                   
        </ul>


    </div>

</nav>
