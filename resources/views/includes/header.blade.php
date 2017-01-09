<div id="sidebar">
    <div class="header-top">
        <div class="selector">
            <div class="selector-active">
                <a href="#" class="toggle">Juice Factory</a>
            </div>
            <ul>
                <li>Juice Factory</li>
            </ul>
        </div>
    </div>
    <div class="header-bottom">
        <div class="logo">
            <a href="#"><img src="source/img/logo.png" alt="logo"></a>
        </div>
        <div class="main-menu">
            <nav>
                <ul>
                    <li><a href="{{ url('/dashboard') }}"><i class="fa fa-pie-chart" aria-hidden="true"></i> Dashboard</a></li>
                    <li>
                        <a href="{{ url('/newinvoice') }}" class="fa-ico"><i class="fa fa-file-text-o" aria-hidden="true"></i> New Invoices</a>
                    </li>
                    <li><a href="#"><i class="fa fa-file-o" aria-hidden="true"></i> Estimates</a></li>

                    <li><a href="{{ URL::to('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>