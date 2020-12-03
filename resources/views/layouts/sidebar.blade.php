<div class="scrollbar-sidebar">
    <div class="app-sidebar__inner">
        <ul class="vertical-nav-menu">
            <li class="app-sidebar__heading">Welcome User</li>
            <li>
                <a href="{{ url('dashboard') }}" class="app-sidebar__heading">
                    Home
                </a>
            </li>
            <li class="app-sidebar__heading">
                <a href="#">
                    Client <i class="fa fa-caret-down" aria-hidden="true"></i>
                </a>

                <ul>
                    <li> <a href="{{ url('dealer') }}"> Dealer </a> </li>
                    <li> <a href="{{ url('corporate') }}"> Corporate </a></li>
                    <li> <a href="#"> Retailer </a></li>
                    <li> <a href="#"> Other </a></li>
                </ul>

            </li>



            <li class="app-sidebar__heading"> <a href="#"> Transaction </a></li>
            <li class="app-sidebar__heading">  <a href="#"> Account </a> </li>
            <li class="app-sidebar__heading"> <a href="#"> Reports </a> </li>
            <li class="app-sidebar__heading"> <a href="#"> Setting </a> </li>

    </div>
</div>
