<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo-egenslab.b-cdn.net/html/zorik/preview/pet-care/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Sep 2024 07:03:10 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="Your Website Title" />
<meta property="og:description"   content="Your description" />
<meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
    <link rel="stylesheet" href="{{asset('assets/css/swiper-bundle.min.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/boxicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Zorik - Modern & Lightweight Blog Template</title>
    <link rel="icon" href="https://demo-egenslab.b-cdn.net/html/zorik/assets/image/sm-logo.svg" type="image/gif"
        sizes="20x20">
        <style>
            #hovercategory{
                color: black;
                background-color: #78eb54;
            }
            .fb-share-btn {
  display: inline-flex;
  align-items: center;
  background-color: #1877F2; /* Facebook blue */
  color: white;
  font-size: 13px; /* Smaller font size */
  font-family: 'Times New Roman', sans-serif;
  padding: 8px 15px; /* Smaller padding */
  text-align: center;
  text-decoration: none;
  border-radius: 6px; /* Softer corners */
  border: none; /* No border */
  transition: background-color 0.3s ease, transform 0.3s ease;
  box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1); /* Light shadow */
}

.fb-share-btn:hover {
  background-color: #145DBF; /* Darker blue on hover */
  transform: scale(1.05); /* Slight increase in size on hover */
  box-shadow: 0 4px 7px rgba(0, 0, 0, 0.15); /* Stronger shadow */
}

.fb-logo {
  width: 16px; /* Small Facebook logo */
  height: 16px;
  margin-right: 8px; /* Space between logo and text */
}


        </style>
</head>

<body id="body">

    <div class="circle-container">
        <svg class="circle-progress svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919; stroke-dashoffset: 256.939;">
            </path>
        </svg>
    </div>
    <?php
    $loaitinfull = DB::table('categories')->where('deleted_at', null)->where('status',1)->select('id', 'name', 'parent_id')->get();
    ?>
    <div class="sidebar-menu">
        <div class="mobile-logo-area d-flex justify-content-between align-items-center">
            <div class="header-logo">
                <a href="index.html"><img alt="image" class="img-fluid dark"
                        src="https://demo-egenslab.b-cdn.net/html/zorik/preview/assets/image/index-img/icon/dark-logo.svg"></a>
                <a href="index.html"><img alt="image" class="img-fluid light"
                        src="https://demo-egenslab.b-cdn.net/html/zorik/preview/assets/image/index-img/icon/light-logo.svg"></a>
            </div>
            <div class="menu-button menu-close-btn">
                <i class="bi bi-x"></i>
            </div>
        </div>
        <ul class="menu-list">
            <li class="menu-item-has-children active">
                <li><a href="{{ route('Home') }}">Trang chủ</a></li>
                
            </li>
            @foreach ($loaitinfull as $lt)
                                @if ($lt->parent_id == null)
                                    @php
                                        // Kiểm tra nếu có bất kỳ $item nào có parent_id khớp với id của $lt
                                        $hasChildren = $loaitinfull->where('parent_id', $lt->id)->isNotEmpty();
                                    @endphp
            <li class="{{ $hasChildren ? 'menu-item-has-children' : '' }}">
                <a href="{{ route('result', [$lt->id]) }}" class="drop-down">{{ $lt->name }}</a><i class="bi bi-plus dropdown-icon"></i>
                @if ($hasChildren == true)
                <ul class="sub-menu">
                    @foreach ($loaitinfull as $item)
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
            </li>
            <li><a href="{{ route('form-contact') }}">Liên hệ</a></li>
            <li><a href="{{ route('clients.faq') }}">FAQ’s</a></li>
        </ul>
        
    </div>
{{-- menu --}}
@include('clients.partials.header')

@yield('content')
@include('clients/partials.footer')



    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-ui.js')}}"></script>

    <script src="{{asset('assets/js/waypoints.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.marquee.min.js')}}"></script>

    <script src="{{asset('assets/js/wow.min.js')}}"></script>

    <script src="{{asset('assets/js/popper.min.js')}}"></script>

    <script src="{{asset('assets/js/swiper-bundle.min.js')}}"></script>

    <script src="{{asset('assets/js/jquery.fancybox.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.min.js')}}"></script>

    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('assets/js/custom.js')}}"></script>
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v20.0&appId=1071378784562764"></script>
</body>

<!-- Mirrored from demo-egenslab.b-cdn.net/html/zorik/preview/pet-care/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Sep 2024 07:03:30 GMT -->

</html>
