<?php
$loaitin = DB::table('categories')->where('deleted_at', null)->where('status', 1)->where('parent_id', null)->select('id', 'name', 'parent_id')->take(4)->get();
?>
<div class="topbar">
    <div class="container-md">
        <div class="row">
            <div class="col-lg-12">
                <div class="topbar-wrapper">
                    <div class="header-logo">
                        <a href="{{route('Home')}}" class="dark" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: bolder; font-size: 20px; color: rgb(0, 0, 0)">WorldSchools</a>
                        <a href="{{route('Home')}}" class="light" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; font-weight: bolder; font-size: 20px; color: aliceblue">WorldSchools</a>
                    </div>
                    <div class="topber-right">
                        {{-- <ul class="social-area">
                            <li><a href="https://www.facebook.com/">FB</a></li>
                            <li><a href="https://x.com/">TW</a></li>
                            <li><a href="https://www.linkedin.com/">Lin</a></li>
                            <li><a href="https://www.instagram.com/">INs</a></li>
                        </ul> --}}
                        <ul class="icon-area">
                            <li class="tt-style-switch">
                                <i class="bi bi-brightness-low-fill"></i>
                            </li>
                            {{-- <li>
                                <svg width="16" height="16" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.21438 3.90244H3.1775C2.83209 3.90245 2.4995 4.03334 2.24672 4.26874C1.99394 4.50414 1.83974 4.82658 1.81516 5.17112L1.14628 14.537C1.13294 14.724 1.15827 14.9119 1.22069 15.0887C1.28311 15.2656 1.38128 15.4277 1.50909 15.5649C1.6369 15.7022 1.79161 15.8117 1.96357 15.8865C2.13554 15.9614 2.32108 16 2.50862 16H13.3199C13.5075 15.9999 13.6929 15.9612 13.8649 15.8863C14.0368 15.8114 14.1914 15.7019 14.3192 15.5647C14.447 15.4275 14.5452 15.2654 14.6076 15.0886C14.6701 14.9118 14.6955 14.724 14.6823 14.537L14.0134 5.17112C13.9888 4.82658 13.8346 4.50414 13.5818 4.26874C13.3291 4.03334 12.9965 3.90245 12.6511 3.90244H11.6216V3.70732C11.6216 2.72408 11.231 1.7811 10.5358 1.08585C9.8405 0.390591 8.89752 0 7.91428 0C5.9416 0 4.11838 1.57112 4.20697 3.70732L4.21438 3.90244ZM11.6216 5.07317V8C11.6216 8.15525 11.5599 8.30414 11.4502 8.41392C11.3404 8.52369 11.1915 8.58537 11.0362 8.58537C10.881 8.58537 10.7321 8.52369 10.6223 8.41392C10.5125 8.30414 10.4509 8.15525 10.4509 8V5.07317H5.3777V8C5.3777 8.15525 5.31603 8.30414 5.20625 8.41392C5.09647 8.52369 4.94758 8.58537 4.79233 8.58537C4.63708 8.58537 4.48819 8.52369 4.37842 8.41392C4.26864 8.30414 4.20697 8.15525 4.20697 8C4.20697 8 4.2577 6.63219 4.24092 5.07317H3.1775C3.12823 5.07324 3.08081 5.09195 3.04476 5.12553C3.00872 5.15912 2.98671 5.2051 2.98316 5.25424L2.31389 14.6201C2.31196 14.6468 2.31557 14.6737 2.32448 14.699C2.33339 14.7243 2.34742 14.7475 2.3657 14.7671C2.38397 14.7867 2.40609 14.8024 2.43068 14.8131C2.45527 14.8238 2.48181 14.8293 2.50862 14.8293H13.3199C13.3467 14.8292 13.3732 14.8236 13.3977 14.8128C13.4223 14.8021 13.4444 14.7865 13.4626 14.7669C13.4809 14.7472 13.4949 14.7241 13.5038 14.6989C13.5128 14.6736 13.5165 14.6468 13.5147 14.6201L12.8454 5.25424C12.8419 5.2051 12.8198 5.15912 12.7838 5.12553C12.7478 5.09195 12.7003 5.07324 12.6511 5.07317H11.6216ZM10.4509 3.90244V3.70732C10.4509 3.03457 10.1836 2.38938 9.70792 1.91368C9.23222 1.43798 8.58703 1.17073 7.91428 1.17073C7.24154 1.17073 6.59635 1.43798 6.12065 1.91368C5.64494 2.38938 5.3777 3.03457 5.3777 3.70732V3.90244H10.4509Z" />
                                </svg>
                            </li> --}}
                        </ul>
                        @if (auth()->check())
                            <li class="list-unstyled" style="position: relative;">
                                <a class="sign-in" href="#" id="user-name">{{ auth()->user()->name }}</a>
                                <ul class="sub-menu" id="dropdown-content"
                                    style="display: none; position: absolute; top: 100%; left: 0; background-color: white; list-style-type: none; padding: 10px; border: 1px solid #ccc; z-index: 1000;">
                                    @if (auth()->user()->role === 'admin')
                                        <li>
                                            <a class="dropdown-item" href="{{ route('admin.index') }}"
                                                style="color: red;">
                                                Admin Dashboard
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}" style="color: black;"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <a class="sign-in" href="{{ route('login') }}">SIGN IN</a>
                        @endif

                        <!-- JavaScript để hiển thị sub-menu khi click -->
                        <script>
                            document.getElementById('user-name').addEventListener('click', function(event) {
                                event.preventDefault();
                                var dropdown = document.getElementById('dropdown-content');
                                if (dropdown.style.display === "none") {
                                    dropdown.style.display = "block";
                                } else {
                                    dropdown.style.display = "none";
                                }
                            });

                            // Đóng dropdown nếu click ra ngoài
                            document.addEventListener('click', function(event) {
                                var isClickInside = document.getElementById('user-name').contains(event.target);
                                var dropdown = document.getElementById('dropdown-content');
                                if (!isClickInside && dropdown.style.display === "block") {
                                    dropdown.style.display = "none";
                                }
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="travel">
    <div class="container-md">
        <div class="col-lg-12">
            <div class="header-wrapper">
                <div class="logo-sidebar">
                    <div class="sidebar menu-icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.66663 9.16669H18.3333V10.8334H1.66663V9.16669ZM1.66663 4.16669H18.3333V5.83335H1.66663V4.16669ZM1.66663 14.1667H18.3333V15.8334H1.66663V14.1667Z" />
                        </svg>
                    </div>
                    <div class="main-menu d-xl-flex d-none">
                        <ul class="menu-list">
                            <li><a href="{{ route('Home') }}">Trang chủ</a></li>

                            @foreach ($loaitin as $lt)
                                @if ($lt->parent_id == null)
                                    @php
                                        // Kiểm tra nếu có bất kỳ $item nào có parent_id khớp với id của $lt
                                        $hasChildren = $loaitin->where('parent_id', $lt->id)->isNotEmpty();
                                    @endphp

                                    <li class="{{ $hasChildren ? 'menu-item-has-children' : '' }}">
                                        <a class="dropdown-item"
                                            href="{{ route('result', [$lt->id]) }}">{{ $lt->name }}</a>
                                        @if ($hasChildren == true)
                                            <ul class="sub-menu">
                                                @foreach ($loaitin as $item)
                                                    @if ($item->parent_id == $lt->id)
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('result', [$item->id]) }}">{{ $item->name }}</a>
                                                        </li>
                                                    @endif
                                                @endforeach
                                            </ul>
                                        @endif

                                    </li>
                                @endif
                            @endforeach
                            <li>

                            </li>
                            <li><a href="{{ route('form-contact') }}">Liên hệ</a></li>
                            <li><a href="{{ route('clients.faq') }}">FAQ’s</a></li>

                        </ul>
                       
                    </div>
                </div>
                {{-- <div class="logo-sidebar">
                    <div class="sidebar menu-icon2">
                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.66663 9.16669H18.3333V10.8334H1.66663V9.16669ZM1.66663 4.16669H18.3333V5.83335H1.66663V4.16669ZM1.66663 14.1667H18.3333V15.8334H1.66663V14.1667Z" />
                        </svg>
                    </div> 
                </div> --}}
                <div class="nav-right d-flex justify-content-end align-items-center">
                    {{-- <a href="{{ route('Contact') }}" class="header-btn hover-btn"> --}}
                    <!-- SVG hoặc icon subscribe -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
