<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle text-decoration-none" href="">
                        <span class="block m-t-xs font-bold fs-5">Phan Quang Thái</span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Thông tin cá nhân</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Đổi mật khẩu</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{route('auth.logout')}}">Đăng Xuất</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    AG
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('dashboard.index')}}">
                    <i class="fa-solid fa-house"></i>
                    <span class="nav-label">Trang chủ</span>
                </a>
            </li>
            <hr class="sidebar-divider my-0" style="width:80%; border-top: 1px solid #fff; margin-left: 16px;">
            <li class="">
                <a href="#" class="text-decoration-none"><span class="nav-label">Người dùng</span><span class="fa arrow"></span></a>
                <ul class="nav nav-first-level">
                    <li class="">
                        <a href="{{route('user.index')}}" class="text-decoration-none"><i class="fa-regular fa-user"></i><span class="nav-label">Quản Lý Người Dùng</span></a>
                    </li>
                    <li class="">
                        <a href="{{route('doanhnghiep.index')}}" class="text-decoration-none"><i class="fa-solid fa-users"></i><span class="nav-label">Quản Lý Doanh Nghiệp</span></a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="#" class="text-decoration-none"><span class="nav-label">Cổng Thông Tin</span><span class="fa arrow"></span></a>
                <ul class="nav nav-first-level">
                    <li class="">
                        <a class="nav-link collapsed text-decoration-none" href="#" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa-regular fa-newspaper"></i>
                            <span class="nav-label">Tin Tức</span>
                        </a>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Quản lý tin tức:</h6>
                                <a class="collapse-item" href="">Thư viện mới đăng</a>
                                <a class="collapse-item" href="">Thư viện đã duyệt</a>
        
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <a href="" class="text-decoration-none"><i class="fa-solid fa-paperclip"></i><span class="nav-label">Phân Loại Tin Tức</span></a>
                    </li>
                    <li class="">
                        <a href="" class="text-decoration-none"><i class="fa-solid fa-book-bookmark"></i><span class="nav-label">Lĩnh Vực</span></a>
                    </li>
                    <li class="">
                        <a href="" class="text-decoration-none"><i class='fab fa-google-drive'></i><span class="nav-label">Thư Viện</span></a>
                    </li>
                    <li class="">
                        <a href="" class="text-decoration-none"><i class="fa-regular fa-bookmark"></i><span class="nav-label">Banner</span></a>
                    </li>
                </ul>
            </li>
        </ul>    
    </div>
</nav>