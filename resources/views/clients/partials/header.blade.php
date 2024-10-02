<?php
$loaitin = DB::table('categories')->where('deleted_at', null)->select('id', 'name', 'parent_id')->get();
?>
<div class="topbar">
    <div class="container-md">
        <div class="row">
            <div class="col-lg-12">
                <div class="topbar-wrapper">
                    <div class="header-logo">
                        <a class="dark" href="index.html"><img alt="image" class="img-fluid"
                                src="https://demo-egenslab.b-cdn.net/html/zorik/preview/assets/image/index-img/icon/dark-logo.svg"></a>
                        <a class="light" href="index.html"><img alt="image" class="img-fluid"
                                src="https://demo-egenslab.b-cdn.net/html/zorik/preview/assets/image/index-img/icon/poitic-white.svg"></a>
                    </div>
                    <div class="topber-right">
                        <ul class="social-area">
                            <li><a href="https://www.facebook.com/">FB</a></li>
                            <li><a href="https://x.com/">TW</a></li>
                            <li><a href="https://www.linkedin.com/">Lin</a></li>
                            <li><a href="https://www.instagram.com/">INs</a></li>
                        </ul>
                        <ul class="icon-area">
                            <li class="tt-style-switch">
                                <i class="bi bi-brightness-low-fill"></i>
                            </li>
                            <li>
                                <svg width="16" height="16" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.21438 3.90244H3.1775C2.83209 3.90245 2.4995 4.03334 2.24672 4.26874C1.99394 4.50414 1.83974 4.82658 1.81516 5.17112L1.14628 14.537C1.13294 14.724 1.15827 14.9119 1.22069 15.0887C1.28311 15.2656 1.38128 15.4277 1.50909 15.5649C1.6369 15.7022 1.79161 15.8117 1.96357 15.8865C2.13554 15.9614 2.32108 16 2.50862 16H13.3199C13.5075 15.9999 13.6929 15.9612 13.8649 15.8863C14.0368 15.8114 14.1914 15.7019 14.3192 15.5647C14.447 15.4275 14.5452 15.2654 14.6076 15.0886C14.6701 14.9118 14.6955 14.724 14.6823 14.537L14.0134 5.17112C13.9888 4.82658 13.8346 4.50414 13.5818 4.26874C13.3291 4.03334 12.9965 3.90245 12.6511 3.90244H11.6216V3.70732C11.6216 2.72408 11.231 1.7811 10.5358 1.08585C9.8405 0.390591 8.89752 0 7.91428 0C5.9416 0 4.11838 1.57112 4.20697 3.70732L4.21438 3.90244ZM11.6216 5.07317V8C11.6216 8.15525 11.5599 8.30414 11.4502 8.41392C11.3404 8.52369 11.1915 8.58537 11.0362 8.58537C10.881 8.58537 10.7321 8.52369 10.6223 8.41392C10.5125 8.30414 10.4509 8.15525 10.4509 8V5.07317H5.3777V8C5.3777 8.15525 5.31603 8.30414 5.20625 8.41392C5.09647 8.52369 4.94758 8.58537 4.79233 8.58537C4.63708 8.58537 4.48819 8.52369 4.37842 8.41392C4.26864 8.30414 4.20697 8.15525 4.20697 8C4.20697 8 4.2577 6.63219 4.24092 5.07317H3.1775C3.12823 5.07324 3.08081 5.09195 3.04476 5.12553C3.00872 5.15912 2.98671 5.2051 2.98316 5.25424L2.31389 14.6201C2.31196 14.6468 2.31557 14.6737 2.32448 14.699C2.33339 14.7243 2.34742 14.7475 2.3657 14.7671C2.38397 14.7867 2.40609 14.8024 2.43068 14.8131C2.45527 14.8238 2.48181 14.8293 2.50862 14.8293H13.3199C13.3467 14.8292 13.3732 14.8236 13.3977 14.8128C13.4223 14.8021 13.4444 14.7865 13.4626 14.7669C13.4809 14.7472 13.4949 14.7241 13.5038 14.6989C13.5128 14.6736 13.5165 14.6468 13.5147 14.6201L12.8454 5.25424C12.8419 5.2051 12.8198 5.15912 12.7838 5.12553C12.7478 5.09195 12.7003 5.07324 12.6511 5.07317H11.6216ZM10.4509 3.90244V3.70732C10.4509 3.03457 10.1836 2.38938 9.70792 1.91368C9.23222 1.43798 8.58703 1.17073 7.91428 1.17073C7.24154 1.17073 6.59635 1.43798 6.12065 1.91368C5.64494 2.38938 5.3777 3.03457 5.3777 3.70732V3.90244H10.4509Z" />
                                </svg>
                            </li>
                        </ul>
                        @if (auth()->check())
                        <a class="sign-in" href="#">{{ auth()->user()->name }}</a>
                        <a class="sign-out" href="{{ route('logout') }}" 
                        style="color: black;" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a class="sign-in" href="{{ route('login') }}">SIGN IN</a>
                    @endif
                    
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
                        <!-- SVG hoặc icon menu -->
                    </div>
                    <div class="main-menu d-xl-flex d-none">
                        <ul class="menu-list">
                            <li><a href="{{ route('Home') }}">Trang chủ</a></li>
                            {{-- <li class="menu-item-has-children">
                                <a href="#" class="drop-down"> FEATURES</a><i
                                    class="bi bi-plus dropdown-icon"></i>
                                <ul class="sub-menu">
                                    <li><a href="about-us.html">About Us</a></li>
                                    <li>
                                        <a href="standard-formate.html">Post Format</a>
                                        <i class="d-lg-flex d-none bi bi-chevron-right dropdown-icon"></i>
                                        <i class="d-lg-none d-flex bi bi-plus dropdown-icon"></i>
                                        <ul class="sub-menu">
                                            <li><a href="standard-formate.html">Standard Format</a></li>
                                            <li><a href="gallery-formate.html">Gallery Format</a></li>
                                            <li><a href="video-formate.html">Video Format</a></li>
                                            <li><a href="audio-formate.html">Audio Format</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="full-widht-with-sideber.html">Post Sidebar</a>
                                        <i class="d-lg-flex d-none bi bi-chevron-right dropdown-icon"></i>
                                        <i class="d-lg-none d-flex bi bi-plus dropdown-icon"></i>
                                        <ul class="sub-menu">
                                            <li><a href="full-widht-with-sideber.html">Full Width with sidebar</a>
                                            </li>
                                            <li><a href="full-widht-with-no-sidebar.html">Full Width No sidebar</a>
                                            </li>
                                            <li><a href="classic-with-sidebar.html">Classic with Sidebar</a></li>
                                            <li><a href="vertical-with-sidebar.html">Vertical with Sidebar</a></li>
                                            <li><a href="vertical-with-no-sidebar.html">Vertical with No Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="editor-profile.html">Editor Profile</a></li>
                                    <li><a href="post-pagination.html">Post Pagination</a></li>
                                    <li><a href="only-for-subscriber.html">Only for subscriber</a></li>
                                    <li><a href="faq.html">FAQ's </a></li>
                                    <li><a href="terms%26condition.html">Terms & Conditions </a></li>
                                    <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    <li><a href="error.html">404</a></li>
                                </ul>
                            </li> --}}
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

                            <li><a href="{{route('form-contact')}}">Liên hệ</a></li>
                            <li><a href="{{ route('Faq') }}">FAQ’s</a></li>

                        </ul>
                    </div>
                </div>
                <div class="nav-right d-flex justify-content-end align-items-center">
                    {{-- <a href="{{ route('Contact') }}" class="header-btn hover-btn"> --}}
                        <!-- SVG hoặc icon subscribe -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
