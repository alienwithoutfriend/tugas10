@php
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use App\Models\User_role;
use App\Models\Groups;
$role = AUTH::User()->user_role_id;
$roleid = User_role::find($role);
@endphp

<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Ready Bootstrap Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{ asset('assets/css/ready.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <div class="logo-header">
                <a href="index.html" class="logo">
                    Ready Dashboard
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
            </div>
            <nav class="navbar navbar-header navbar-expand-lg">
                <div class="container-fluid">

                    <form class="navbar-left navbar-form nav-search mr-md-3" action="">
                        <div class="input-group">
                            <input type="text" placeholder="Search ..." class="form-control">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <i class="la la-search search-icon"></i>
                                </span>
                            </div>
                        </div>
                    </form>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-envelope"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="la la-bell"></i>
                                <span class="notification">3</span>
                            </a>
                            <ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-icon notif-primary"> <i class="la la-user-plus"></i>
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    New user registered
                                                </span>
                                                <span class="time">5 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Rahmad commented on Admin
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img">
                                                <img src="{{ asset('assets/img/profile2.jpg') }}" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Reza send messages to you
                                                </span>
                                                <span class="time">12 minutes ago</span>
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Farrah liked Admin
                                                </span>
                                                <span class="time">17 minutes ago</span>
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);"> <strong>See all
                                            notifications</strong> <i class="la la-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false"> <img src="{{ asset('/images/profile_user/' . $user->image) }}"
                                    alt="user-img" width="36"
                                    class="img-circle"><span>{{ $user->name }}</span></span> </a>
                            <span class="user-status">{{ $user->user_role->role }}</span>
                            <ul class="dropdown-menu dropdown-user">
                                <a class="dropdown-item" href="/user"><i class="ti-settings"></i> Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout"><i class="fa fa-power-off"></i> Logout</a>
                            </ul>
                            <!-- /.dropdown-user -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">

                <ul class="nav">
                    <li class="nav-item active">
                        <a href="/dashboard">
                            <i class="la la-dashboard"></i>
                            <p>Dashboard</p>
                            <span class="badge badge-count">5</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="/friends">
                            <i class="la la-dashboard"></i>
                            <p>Friends</p>
                            <span class="badge badge-count">5</span>
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a href="/groups">
                            <i class="la la-dashboard"></i>
                            <p>Groups</p>
                            <span class="badge badge-count">5</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <div class="content">
                <div class="container-fluid">
                    <h4 class="page-title">Dashboard</h4>
                    <a href="/groups/create" type="button" class="btn btn-gradient-primary btn-icon-text">
                        <i class="mdi mdi-account-plus btn-icon-prepend"></i> Tambah Teman </a>
                    <div class="row">

                        <div class="col-md-5">
                            @foreach ($groups as $group)
                                <div class="card card-stats card-warning">
                                    <h5 class="card-header"><a href="/groups/{{ $group['id'] }}"
                                            style="color:black">{{ $group['nama'] }}</a></h5>
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-7 d-flex align-items-center">
                                                <div class="numbers">
                                                    <p class="card-text">{{ $group['description'] }}</p>
                                                    <a href="/groups/addmember/{{ $group['id'] }}"
                                                        class="btn btn-primary">Tambah
                                                        Anggota</a>
                                                    <ul class="list-group">
                                                        @foreach ($group->friends as $friend)

                                                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                                                style="color:black">
                                                                {{ $friend->nama }}
                                                                <form
                                                                    action="/groups/deleteaddmember/{{ $friend->id }}"
                                                                    method="POSt">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button type="submit"
                                                                        class="btn btn-danger">x</button>
                                                                </form>
                                                            </li>
                                                        @endforeach
                                                    </ul>

                                                    <form action="/groups/{{ $group['id'] }}" method="POSt">
                                                        <a href="/groups/{{ $group['id'] }}/edit"
                                                            class="btn btn-warning">Edit
                                                            Groups</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger">Delete Groups</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div>
                                {{ $groups->links() }}
                            </div>
                        </div>

                        <!-- 							<div class="col-md-3">
        <div class="card card-stats">
         <div class="card-body ">
          <div class="row">
           <div class="col-5">
            <div class="icon-big text-center icon-warning">
             <i class="la la-pie-chart text-warning"></i>
            </div>
           </div>
           <div class="col-7 d-flex align-items-center">
            <div class="numbers">
             <p class="card-category">Number</p>
             <h4 class="card-title">150GB</h4>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="col-md-3">
        <div class="card card-stats">
         <div class="card-body ">
          <div class="row">
           <div class="col-5">
            <div class="icon-big text-center">
             <i class="la la-bar-chart text-success"></i>
            </div>
           </div>
           <div class="col-7 d-flex align-items-center">
            <div class="numbers">
             <p class="card-category">Revenue</p>
             <h4 class="card-title">$ 1,345</h4>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="col-md-3">
        <div class="card card-stats">
         <div class="card-body">
          <div class="row">
           <div class="col-5">
            <div class="icon-big text-center">
             <i class="la la-times-circle-o text-danger"></i>
            </div>
           </div>
           <div class="col-7 d-flex align-items-center">
            <div class="numbers">
             <p class="card-category">Errors</p>
             <h4 class="card-title">23</h4>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
       <div class="col-md-3">
        <div class="card card-stats">
         <div class="card-body">
          <div class="row">
           <div class="col-5">
            <div class="icon-big text-center">
             <i class="la la-heart-o text-primary"></i>
            </div>
           </div>
           <div class="col-7 d-flex align-items-center">
            <div class="numbers">
             <p class="card-category">Followers</p>
             <h4 class="card-title">+45K</h4>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div> -->
                    </div>


                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="http://www.themekita.com">
                                    ThemeKita
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://themewagon.com/license/#free-item">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2018, made with <i class="la la-heart heart text-danger"></i> by <a
                            href="http://www.themekita.com">ThemeKita</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
                    <p>
                        <b>We'll let you know when it's done</b>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/chartist/chartist.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
<script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/ready.min.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>

</html>
