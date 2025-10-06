<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="javascript:void(0);"><i class="feather icon-menu"></i></a>
            <a href="{{ url('/') }}"><img class="img-fluid" src="" alt=""/></a>
            <a class="mobile-options"><i class="feather icon-more-horizontal"></i></a>
        </div>

        <div class="navbar-container">
            <ul class="nav-left">
                <li>
                    <a href="javascript:void(0);" onclick="javascript:toggleFullScreen()"
                        class="waves-effect waves-light">
                        <i class="full-screen feather icon-maximize"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="" class="img-radius" alt="User-Profile-Image">
                            <i class="feather icon-chevron-down"></i>
                        </div>
                            <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
                                data-dropdown-out="fadeOut">
                                <li><a href=""><i class="feather icon-user"></i> My Profile</a></li>
                                <li><a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#loginasModal">
                                    <i class="icofont icofont-job-search"></i> Login AS</a></li>
                                <li><a href=""><i class="feather icon-log-out"></i> Logout</a></li>
                            </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="loginasModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="form-loginas" method="post" action="">
                {{ csrf_field() }}
                <div class="modal-header">
                    <h4 class="modal-title">Login As</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <label class="form-label">Employee<span class="text-danger">*</span></label>
                    <select class="loginas" id="searchEmployee" name="employee" data-placeholder="Select Employee">
                        <option></option>
                       
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light" id="btnSubmit-LoginAs">Login
                        As</button>
                </div>
            </form>
        </div>
    </div>
</div>
