<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">
        <div class="pcoded-navigatio-lavel">Sidebar Menu</div>
        <ul class="pcoded-item pcoded-left-item">

            <li class="{{ request()->is('dashboard/list') ? 'active' : '' }}">
                <a href="" class="text-decoration-none">
                    <span> <i class="fa-solid fa-chart-line pe-2"></i>
                        Dashboard (Profile)
                    </span>
                </a>
            </li>

            <li class="{{ request()->is('student/list') ? 'active' : '' }}">
                <a href="{{ url('student/list') }}" class="text-decoration-none">
                    <span> <i class="fa-solid fa-chart-line pe-2"></i>
                        Student (CRUD)
                    </span>
                </a>
            </li>

            <li class="{{ request()->is('weather') ? 'active' : '' }}">
                <a href="{{ url('weather') }}" class="text-decoration-none">
                    <span> <i class="fa-solid fa-chart-line pe-2"></i>
                        Weather API
                    </span>
                </a>
            </li>


            {{-- Games --}}
            <li class="pcoded-hasmenu {{ (request()->is('games/*')) ? 'active pcoded-trigger' : '' }}">
                <a href="javascript:void(0);">
                    <span class="pcoded-micon"><i class="fa-solid fa-history"></i></span>
                    <span class="pcoded-mtext">Games</span>
                </a>

                <ul class="pcoded-submenu">
                    <li class="{{ request()->is('games/truth-or-drink') ? 'active' : '' }}">
                        <a href="{{ url('games/truth-or-drink') }}" class="text-decoration-none">
                            <span> <i class="fa-solid fa-chart-line pe-2"></i>
                                Truth or Drink
                            </span>
                        </a>
                    </li>

                    <li class="{{ request()->is('games/math') ? 'active' : '' }}">
                        <a href="{{ url('games/math') }}" class="text-decoration-none">
                            <span> <i class="fa-solid fa-chart-line pe-2"></i>
                                Math
                            </span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
