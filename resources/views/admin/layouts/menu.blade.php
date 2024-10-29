<nav class="sidebar-wrapper">
    <div class="sidebar-brand"><br>
        <a href="{{route('Home')}}"  style="padding-left: 40px;margin-top: 20px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: bolder; font-size: 20px; color: rgb(0, 0, 0)">WorldSchools</a>
    </div>
    <div class="sidebar-menu">
        <div class="sidebarMenuScroll">
            <ul>
                <li class="sidebar-dropdown active">
                    <a href="{{ route('admin.index') }}">
                        <i class="fa-solid fa-house-chimney"></i>
                        <span class="menu-text">Dashboards</span>
                    </a>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa-solid fa-layer-group"></i>
                        <span class="menu-text">Quản lý Loại Tin</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="{{ route('category.index') }}">Danh Sách Loại Tin</a></li>
                            <li><a href="{{ route('category.create') }}">Thêm Mới Loại Tin</a></li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa-solid fa-newspaper"></i>
                        <span class="menu-text">Quản Lý Bài Viết</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="{{ route('article.index') }}">Danh Sách Bài Viết</a></li>
                            <li><a href="{{ route('article.create') }}">Thêm Mới Bài Viết</a></li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa-solid fa-person-circle-question"></i>
                        <span class="menu-text">Quản lý Liên hệ</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href="{{ route('contact.index') }}">Danh sách Liên hệ</a></li>
                            {{-- <li><a href="{{ route('roleUs.create') }}">Thêm mới Vai Trò</a></li> --}}
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa-solid fa-user"></i>
                        <span class="menu-text">Quản Lý Người Dùng</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                            <li><a href=" {{ route('user.index')}}">Danh Sách Người Dùng</a></li>
                            <li><a href="{{ route('user.create')}}">Thêm mới Người Dùng</a></li>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa-solid fa-comment"></i>
                        <span class="menu-text">Quản Lý Bình Luận</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                        <ul>
                            <li><a href="{{ route('comments.index') }}">Danh Sách Bình Luận</a></li>
                           
                        </ul>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa-solid fa-rectangle-ad"></i>
                        <span class="menu-text">Quản Lý Quảng Cáo</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                        <ul>
                            <li><a href="{{ route('advertisement.index') }}">Danh Sách Quảng Cáo</a></li>
                            <li><a href="{{ route('advertisement.create') }}">Thêm Quảng Cáo</a></li>
                        </ul>
                        </ul>
                    </div>
                </li>
                <li class="sidebar-dropdown">
                    <a href="#">
                        <i class="fa-solid fa-file-circle-question"></i>
                        <span class="menu-text">Quản Lý FAQ's</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul>
                        <ul>
                            <li><a href="{{ route('faqs.index') }}">Danh Sách faq</a></li>
                            <li><a href="{{ route('faqs.create') }}">Thêm faq</a></li>
                        </ul>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
