<header>

</style>
    <div class="page-header">
        <div class="toggle-sidebar" id="toggle-sidebar"><i class="bi bi-list"></i></div>
        <ol class="breadcrumb d-md-flex d-none">
            <li class="breadcrumb-item"><i class="bi bi-house"></i><a href="{{ route('admin.index') }}">Home</a></li>
            <li class="breadcrumb-item breadcrumb-active" aria-current="page">{{ ucfirst(Request::segment(2)) }}</li>
        </ol>
        <div class="header-actions-container">
            <div class="search-container">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search anything">
                    <button class="btn" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>
            <ul class="header-actions">
                <span class="user-name d-none d-md-block"></span>
                {{-- {{ auth()->user()->name }} --}}
                <li class="dropdown">
                    {{-- <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                        <span class="avatar">
                            <img src="/assets/images/author.jpg" alt="User Image">
                            <span class="status online"></span>
                        </span>
                    </a> --}}
                    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                        <span class="user-name">{{ auth()->user()->name }}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userSettings">
                        <div class="header-profile-actions">
                            <a href="#">Profile</a>
                            <a href="#">Settings</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            
                            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            {{-- {{ route('admin.signout') }} --}}
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</header>
