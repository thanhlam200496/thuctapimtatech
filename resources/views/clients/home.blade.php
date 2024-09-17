@extends('clients.partials.default')
@section('content')


    <div class="pet-news">
        <div class="container">
            <div class="row pt-80">
                <div class="col-lg-8">
                    <div class="pet-news-area">
                        <h1>Pet News.</h1>
                        <div class="driscription-and-search">
                            <div class="vector-img">
                                <img src="{{asset('assets/image/Vector-112.html')}}" alt>
                            </div>
                            <div class="right-content">
                                <p>Feel free to mix and match words or adjust the titles to fit your blog's specific
                                    niche and tone.</p>
                                <form>
                                    <div class="form-inner">
                                        <input type="text" placeholder="Search post , tag etc ...">
                                        <button type="submit">
                                            <svg width="14" height="14" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.71566 2.58941C4.43599 2.58941 2.58974 4.43507 2.58974 6.71007C2.58974 8.98507 4.43599 10.8302 6.71566 10.8302C7.85316 10.8302 8.88157 10.3717 9.62824 9.62849C10.0134 9.24642 10.319 8.79176 10.5272 8.29081C10.7355 7.78987 10.8423 7.25259 10.8416 6.71007C10.8416 4.43507 8.99533 2.58941 6.71566 2.58941ZM1.16699 6.71007C1.16699 3.64757 3.65199 1.16666 6.71566 1.16666C9.77933 1.16666 12.2643 3.64757 12.2643 6.71007C12.2659 7.93785 11.8581 9.1311 11.1052 10.101L12.6248 11.6188C12.6952 11.6838 12.7518 11.7624 12.7911 11.8497C12.8304 11.9371 12.8517 12.0315 12.8536 12.1273C12.8556 12.2231 12.8382 12.3183 12.8024 12.4072C12.7667 12.4961 12.7134 12.5769 12.6456 12.6447C12.5779 12.7125 12.4972 12.7659 12.4084 12.8018C12.3195 12.8376 12.2243 12.8551 12.1285 12.8533C12.0327 12.8515 11.9383 12.8303 11.8508 12.7911C11.7634 12.7519 11.6848 12.6954 11.6197 12.6251L10.0972 11.1049C9.128 11.851 7.93879 12.2547 6.71566 12.2529C3.65199 12.2529 1.16699 9.77199 1.16699 6.71007Z">
                                                </path>
                                            </svg>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pet-img">
                        <img src="{{asset('assets/image/pet-care/Pet-Mask.png')}}" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-post3 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 pt-80">
                <div class="col-lg-8 ">
                    <div class="row g-lg-4 gy-5">
                        <div class="col-lg-12 position-relative">
                            <div class="slider-btn-groups2">
                                <div class="slider-btn prev-1">
                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_0_6821" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="16" height="16">
                                            <rect width="16" height="16" transform="matrix(-1 0 0 1 16 0)" />
                                        </mask>
                                        <g mask="url(#mask0_0_6821)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0.416666 8.96667H15V7.71667H0.416666V8.96667Z" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1.04115 7.71667C3.98115 7.71667 6.38281 10.3017 6.38281 13.0583V13.6833H5.13281V13.0583C5.13281 10.9658 3.26448 8.96667 1.04115 8.96667H0.416979V7.71667H1.04115Z" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M1.04115 8.96667C3.98115 8.96667 6.38281 6.38167 6.38281 3.625V3H5.13281V3.625C5.13281 5.71833 3.26448 7.71667 1.04115 7.71667H0.416979V8.96667H1.04115Z" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="slider-btn next-1">
                                    <svg width="16" height="16" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <mask id="mask0_0_6813" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                            y="0" width="16" height="16">
                                            <rect width="16" height="16" />
                                        </mask>
                                        <g mask="url(#mask0_0_6813)">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M15.5833 8.96667H1V7.71667H15.5833V8.96667Z" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.9589 7.71667C12.0189 7.71667 9.61719 10.3017 9.61719 13.0583V13.6833H10.8672V13.0583C10.8672 10.9658 12.7355 8.96667 14.9589 8.96667H15.583V7.71667H14.9589Z" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M14.9589 8.96667C12.0189 8.96667 9.61719 6.38167 9.61719 3.625V3H10.8672V3.625C10.8672 5.71833 12.7355 7.71667 14.9589 7.71667H15.583V8.96667H14.9589Z" />
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="swiper blog-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="blog-card2 two">
                                            <div class="blog-card-img-wrap">
                                                <a href="standard-formate.html"><img
                                                        src="{{asset('assets/image/pet-care/swiper-img.png')}}" alt></a>
                                                <ul>
                                                    <li><a class="category" href="pet-category.html">Pet Care</a></li>
                                                </ul>
                                            </div>
                                            <div class="blog-content">
                                                <ul class="blog-meta">
                                                    <li>
                                                        <a href="editor-profile.html">Robert Kcarery</a>
                                                    </li>
                                                    <li>
                                                        <a class="publish-date" href="pet-category.html">08 Jan,
                                                            2024</a>
                                                    </li>
                                                </ul>
                                                <h3><a href="standard-formate.html">Grooming Gadgets: Tools That Make a
                                                        Pet Parent's
                                                        Life Easier.</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-card2 two">
                                            <div class="blog-card-img-wrap">
                                                <a href="standard-formate.html"><img
                                                        src="{{asset('assets/image/pet-care/swiper-img2.png')}}" alt></a>
                                                <ul>
                                                    <li><a class="category" href="pet-category.html">Pet Care</a></li>
                                                </ul>
                                            </div>
                                            <div class="blog-content">
                                                <ul class="blog-meta">
                                                    <li>
                                                        <a href="editor-profile.html">Robert Kcarery</a>
                                                    </li>
                                                    <li>
                                                        <a class="publish-date" href="pet-category.html">08 Jan,
                                                            2024</a>
                                                    </li>
                                                </ul>
                                                <h3><a href="standard-formate.html">Grooming Gadgets: Tools That Make a
                                                        Pet Parent's Life Easier.</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="blog-card2 two">
                                            <div class="blog-card-img-wrap">
                                                <a href="standard-formate.html"><img
                                                        src="{{asset('assets/image/pet-care/swiper-img3.png')}}" alt></a>
                                                <ul>
                                                    <li><a class="category" href="pet-category.html">Pet Care</a></li>
                                                </ul>
                                            </div>
                                            <div class="blog-content">
                                                <ul class="blog-meta">
                                                    <li>
                                                        <a href="editor-profile.html">Robert Kcarery</a>
                                                    </li>
                                                    <li>
                                                        <a class="publish-date" href="pet-category.html">08 Jan,
                                                            2024</a>
                                                    </li>
                                                </ul>
                                                <h3><a href="standard-formate.html">Grooming Gadgets: Tools That Make a
                                                        Pet Parent's Life Easier.</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-70">
                        <div class="col-lg-12 d-flex ">
                            <div class="add-area-image">
                                <a href="{{$bannerAds->link}}"><img src="{{asset('storage/images/'.$bannerAds->image_url)}}" alt></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog-border">
                            <div class="row mb-40">
                                <div class="col-lg-12">
                                    <div class="nav-area">
                                        <div class="title-section">
                                            <h5>Latest Articles</h5>
                                        </div>
                                        <ul class="nav nav-tabs" id="myTab5" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="travel-tab" data-bs-toggle="tab"
                                                    data-bs-target="#travel" type="button" role="tab"
                                                    aria-controls="travel" aria-selected="false" tabindex="-1">Pet
                                                    Food</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="food-tab" data-bs-toggle="tab"
                                                    data-bs-target="#food" type="button" role="tab"
                                                    aria-controls="food" aria-selected="false"
                                                    tabindex="-1">Health</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="fashion-tab" data-bs-toggle="tab"
                                                    data-bs-target="#fashion" type="button" role="tab"
                                                    aria-controls="fashion" aria-selected="false"
                                                    tabindex="-1">Breeds</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link" id="tech-tab" data-bs-toggle="tab"
                                                    data-bs-target="#tech" type="button" role="tab"
                                                    aria-controls="tech" aria-selected="true">Behavior</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="tab-content" id="myTabContent5">
                                        <div class="tab-pane fade show active" id="travel" role="tabpanel">
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/pet-food.png')}}" alt>
                                                            </a>
                                                            <a href="food.html">
                                                                <span>Pet Food</span>
                                                                <div class="icon">
                                                                    <svg width="12" height="14"
                                                                        viewBox="0 0 12 14" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M9.9375 5.14062H8.95211V2.89215C8.95211 1.29741 7.62734 0 5.99899 0C4.37064 0 3.04586 1.29741 3.04586 2.89215V5.14062H2.0625C1.15786 5.14062 0.421875 5.87661 0.421875 6.78125V12.3594C0.421875 13.264 1.15786 14 2.0625 14H9.9375C10.8421 14 11.5781 13.264 11.5781 12.3594V6.78125C11.5781 5.87661 10.8421 5.14062 9.9375 5.14062ZM4.13961 2.89215C4.13961 1.9005 4.97373 1.09375 5.99899 1.09375C7.02424 1.09375 7.85836 1.9005 7.85836 2.89215V5.14062H4.13961V2.89215ZM10.4844 12.3594C10.4844 12.6609 10.239 12.9062 9.9375 12.9062H2.0625C1.76095 12.9062 1.51562 12.6609 1.51562 12.3594V6.78125C1.51562 6.4797 1.76095 6.23438 2.0625 6.23438H9.9375C10.239 6.23438 10.4844 6.4797 10.4844 6.78125V12.3594Z"
                                                                            fill="#191919" />
                                                                        <path
                                                                            d="M6 7.82031C5.44123 7.82031 4.98828 8.27326 4.98828 8.83203C4.98828 9.18881 5.17312 9.50223 5.45211 9.68237V10.8828C5.45211 11.1848 5.69695 11.4297 5.99899 11.4297C6.301 11.4297 6.54586 11.1848 6.54586 10.8828V9.68365C6.82597 9.50373 7.01172 9.18969 7.01172 8.83203C7.01172 8.27326 6.55877 7.82031 6 7.82031Z"
                                                                            fill="#191919" />
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            20 Jan,2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Superfood Spotlight:
                                                                    Boosting Your Pet's
                                                                    Nutrition.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/pet-food2.png')}}" alt>
                                                            </a>
                                                            <a href="food.html"><span class="blue-green">Pet
                                                                    Food</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            20 Jan,2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Kibble or Cooked?
                                                                    Choosing the Right Pet
                                                                    Food.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/pet-food3.png')}}" alt>
                                                            </a>
                                                            <a href="food.html"><span class="magenta">Pet Food</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            14 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">DIY Delights: Homemade
                                                                    Treats for Happy
                                                                    Pets.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/pet-food4.png')}}" alt>
                                                            </a>
                                                            <a href="food.html"><span class="Green-Blue">Pet
                                                                    Food</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. James
                                                                            Nathan</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            04 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Kibble or Cooked?
                                                                    Choosing the Right Pet
                                                                    Food.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/pet-food5.png')}}" alt>
                                                            </a>
                                                            <a href="food.html"><span class="goldenrod">Pet
                                                                    Food</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Jasmine Quinn</a>
                                                                    </li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            14 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Training Troubles?
                                                                    Solutions for Common
                                                                    Issues.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/pet-food6.png')}}" alt>
                                                            </a>
                                                            <a href="food.html"><span class="light-royal-blue">Pet
                                                                    Food</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Gabriel
                                                                            Harrison</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            04 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">DIY Delights: Homemade
                                                                    Treats for Happy
                                                                    Pets.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="load-more-btn">
                                                    <a href="pet-category.html" class="hover-btn">
                                                        LOAD MORE
                                                        <svg class="arrow" width="10" height="10"
                                                            viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                                                stroke="#191919" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="food" role="tabpanel">
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/health.png')}}" alt>
                                                            </a>
                                                            <a href="food.html">
                                                                <span>Health</span>
                                                                <div class="icon">
                                                                    <svg width="12" height="14"
                                                                        viewBox="0 0 12 14" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M9.9375 5.14062H8.95211V2.89215C8.95211 1.29741 7.62734 0 5.99899 0C4.37064 0 3.04586 1.29741 3.04586 2.89215V5.14062H2.0625C1.15786 5.14062 0.421875 5.87661 0.421875 6.78125V12.3594C0.421875 13.264 1.15786 14 2.0625 14H9.9375C10.8421 14 11.5781 13.264 11.5781 12.3594V6.78125C11.5781 5.87661 10.8421 5.14062 9.9375 5.14062ZM4.13961 2.89215C4.13961 1.9005 4.97373 1.09375 5.99899 1.09375C7.02424 1.09375 7.85836 1.9005 7.85836 2.89215V5.14062H4.13961V2.89215ZM10.4844 12.3594C10.4844 12.6609 10.239 12.9062 9.9375 12.9062H2.0625C1.76095 12.9062 1.51562 12.6609 1.51562 12.3594V6.78125C1.51562 6.4797 1.76095 6.23438 2.0625 6.23438H9.9375C10.239 6.23438 10.4844 6.4797 10.4844 6.78125V12.3594Z"
                                                                            fill="#191919" />
                                                                        <path
                                                                            d="M6 7.82031C5.44123 7.82031 4.98828 8.27326 4.98828 8.83203C4.98828 9.18881 5.17312 9.50223 5.45211 9.68237V10.8828C5.45211 11.1848 5.69695 11.4297 5.99899 11.4297C6.301 11.4297 6.54586 11.1848 6.54586 10.8828V9.68365C6.82597 9.50373 7.01172 9.18969 7.01172 8.83203C7.01172 8.27326 6.55877 7.82031 6 7.82031Z"
                                                                            fill="#191919" />
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            20 Jan,2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Superfood Spotlight:
                                                                    Boosting Your Pet's
                                                                    Nutrition.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/health2.png')}}" alt>
                                                            </a>
                                                            <a href="pet-category.html"><span
                                                                    class="blue-green">Health</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            20 Jan,2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Kibble or Cooked?
                                                                    Choosing the Right Pet
                                                                    Food.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/health3.png')}}" alt>
                                                            </a>
                                                            <a href="food.html"><span class="magenta">Health</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            14 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">DIY Delights: Homemade
                                                                    Treats for Happy
                                                                    Pets.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/pet-food4.png')}}" alt>
                                                            </a>
                                                            <a href="pet-category.html"><span
                                                                    class="Green-Blue">Health</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. James
                                                                            Nathan</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            04 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Kibble or Cooked?
                                                                    Choosing the Right Pet
                                                                    Food.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/health5.png')}}" alt>
                                                            </a>
                                                            <a href="pet-category.html"><span
                                                                    class="goldenrod">Health</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Jasmine Quinn</a>
                                                                    </li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            14 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Training Troubles?
                                                                    Solutions for Common
                                                                    Issues.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/health6.png')}}" alt>
                                                            </a>
                                                            <a href="food.html"><span
                                                                    class="light-royal-blue">Health</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Gabriel
                                                                            Harrison</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            04 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">DIY Delights: Homemade
                                                                    Treats for Happy
                                                                    Pets.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="load-more-btn">
                                                    <a href="pet-category.html" class="hover-btn">
                                                        LOAD MORE
                                                        <svg class="arrow" width="10" height="10"
                                                            viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                                                stroke="#191919" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="fashion" role="tabpanel">
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/breeds.png')}}" alt>
                                                            </a>
                                                            <a href="food.html">
                                                                <span>Breeds</span>
                                                                <div class="icon">
                                                                    <svg width="12" height="14"
                                                                        viewBox="0 0 12 14" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M9.9375 5.14062H8.95211V2.89215C8.95211 1.29741 7.62734 0 5.99899 0C4.37064 0 3.04586 1.29741 3.04586 2.89215V5.14062H2.0625C1.15786 5.14062 0.421875 5.87661 0.421875 6.78125V12.3594C0.421875 13.264 1.15786 14 2.0625 14H9.9375C10.8421 14 11.5781 13.264 11.5781 12.3594V6.78125C11.5781 5.87661 10.8421 5.14062 9.9375 5.14062ZM4.13961 2.89215C4.13961 1.9005 4.97373 1.09375 5.99899 1.09375C7.02424 1.09375 7.85836 1.9005 7.85836 2.89215V5.14062H4.13961V2.89215ZM10.4844 12.3594C10.4844 12.6609 10.239 12.9062 9.9375 12.9062H2.0625C1.76095 12.9062 1.51562 12.6609 1.51562 12.3594V6.78125C1.51562 6.4797 1.76095 6.23438 2.0625 6.23438H9.9375C10.239 6.23438 10.4844 6.4797 10.4844 6.78125V12.3594Z"
                                                                            fill="#191919" />
                                                                        <path
                                                                            d="M6 7.82031C5.44123 7.82031 4.98828 8.27326 4.98828 8.83203C4.98828 9.18881 5.17312 9.50223 5.45211 9.68237V10.8828C5.45211 11.1848 5.69695 11.4297 5.99899 11.4297C6.301 11.4297 6.54586 11.1848 6.54586 10.8828V9.68365C6.82597 9.50373 7.01172 9.18969 7.01172 8.83203C7.01172 8.27326 6.55877 7.82031 6 7.82031Z"
                                                                            fill="#191919" />
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            20 Jan,2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Superfood Spotlight:
                                                                    Boosting Your Pet's
                                                                    Nutrition.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/breeds2.png')}}" alt>
                                                            </a>
                                                            <a href="pet-category.html"><span
                                                                    class="blue-green">Breeds</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            20 Jan,2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Kibble or Cooked?
                                                                    Choosing the Right Pet
                                                                    Food.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/breeds3.png')}}" alt>
                                                            </a>
                                                            <a href="food.html"><span class="magenta">Breeds</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            14 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">DIY Delights: Homemade
                                                                    Treats for Happy
                                                                    Pets.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/breeds4.png')}}" alt>
                                                            </a>
                                                            <a href="pet-category.html"><span
                                                                    class="Green-Blue">Breeds</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. James
                                                                            Nathan</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            04 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Kibble or Cooked?
                                                                    Choosing the Right Pet
                                                                    Food.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/breeds5.png')}}" alt>
                                                            </a>
                                                            <a href="pet-category.html"><span
                                                                    class="goldenrod">Breeds</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Jasmine Quinn</a>
                                                                    </li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            14 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Training Troubles?
                                                                    Solutions for Common
                                                                    Issues.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/breeds6.png')}}" alt>
                                                            </a>
                                                            <a href="food.html"><span
                                                                    class="light-royal-blue">Breeds</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Gabriel
                                                                            Harrison</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            04 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">DIY Delights: Homemade
                                                                    Treats for Happy
                                                                    Pets.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="load-more-btn">
                                                    <a href="pet-category.html" class="hover-btn">
                                                        LOAD MORE
                                                        <svg class="arrow" width="10" height="10"
                                                            viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                                                stroke="#191919" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade " id="tech" role="tabpanel">
                                            <div class="row g-4">
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/blog-img1.png')}}" alt>
                                                            </a>
                                                            <a href="food.html">
                                                                <span>Food Tips</span>
                                                                <div class="icon">
                                                                    <svg width="12" height="14"
                                                                        viewBox="0 0 12 14" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path
                                                                            d="M9.9375 5.14062H8.95211V2.89215C8.95211 1.29741 7.62734 0 5.99899 0C4.37064 0 3.04586 1.29741 3.04586 2.89215V5.14062H2.0625C1.15786 5.14062 0.421875 5.87661 0.421875 6.78125V12.3594C0.421875 13.264 1.15786 14 2.0625 14H9.9375C10.8421 14 11.5781 13.264 11.5781 12.3594V6.78125C11.5781 5.87661 10.8421 5.14062 9.9375 5.14062ZM4.13961 2.89215C4.13961 1.9005 4.97373 1.09375 5.99899 1.09375C7.02424 1.09375 7.85836 1.9005 7.85836 2.89215V5.14062H4.13961V2.89215ZM10.4844 12.3594C10.4844 12.6609 10.239 12.9062 9.9375 12.9062H2.0625C1.76095 12.9062 1.51562 12.6609 1.51562 12.3594V6.78125C1.51562 6.4797 1.76095 6.23438 2.0625 6.23438H9.9375C10.239 6.23438 10.4844 6.4797 10.4844 6.78125V12.3594Z"
                                                                            fill="#191919" />
                                                                        <path
                                                                            d="M6 7.82031C5.44123 7.82031 4.98828 8.27326 4.98828 8.83203C4.98828 9.18881 5.17312 9.50223 5.45211 9.68237V10.8828C5.45211 11.1848 5.69695 11.4297 5.99899 11.4297C6.301 11.4297 6.54586 11.1848 6.54586 10.8828V9.68365C6.82597 9.50373 7.01172 9.18969 7.01172 8.83203C7.01172 8.27326 6.55877 7.82031 6 7.82031Z"
                                                                            fill="#191919" />
                                                                    </svg>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            20 Jan,2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Superfood Spotlight:
                                                                    Boosting Your Pet's
                                                                    Nutrition.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/blog-img2.png')}}" alt>
                                                            </a>
                                                            <a href="pet-category.html"><span
                                                                    class="blue-green">Vitamine</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            20 Jan,2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Kibble or Cooked?
                                                                    Choosing the Right Pet
                                                                    Food.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/blog-img3.png')}}" alt>
                                                            </a>
                                                            <a href="food.html"><span class="magenta">Food</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. Michael
                                                                            Patrick</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            14 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">DIY Delights: Homemade
                                                                    Treats for Happy
                                                                    Pets.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/blog-img4.png')}}" alt>
                                                            </a>
                                                            <a href="pet-category.html"><span
                                                                    class="Green-Blue">Omega-3</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Dr. James
                                                                            Nathan</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            04 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Kibble or Cooked?
                                                                    Choosing the Right Pet
                                                                    Food.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/blog-img5.png')}}" alt>
                                                            </a>
                                                            <a href="pet-category.html"><span
                                                                    class="goldenrod">Nutrition</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Jasmine Quinn</a>
                                                                    </li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            14 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">Training Troubles?
                                                                    Solutions for Common
                                                                    Issues.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="blog-card">
                                                        <div class="blog-card-img-wrap">
                                                            <a href="standard-formate.html">
                                                                <img src="{{asset('assets/image/pet-care/blog-img6.png')}}" alt>
                                                            </a>
                                                            <a href="food.html"><span class="light-royal-blue">Food</span>
                                                            </a>
                                                        </div>
                                                        <div class="blog-content">
                                                            <div class="author-area">
                                                                <ul>
                                                                    <li><a href="editor-profile.html">Gabriel
                                                                            Harrison</a></li>
                                                                    <li><a class="publish-date" href="pet-category.html">
                                                                            <svg width="6" height="6"
                                                                                viewBox="0 0 6 6" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="3" cy="3"
                                                                                    r="3" fill="#C4C4C4" />
                                                                            </svg>
                                                                            04 Jan, 2024</a></li>
                                                                </ul>
                                                            </div>
                                                            <h5><a href="standard-formate.html">DIY Delights: Homemade
                                                                    Treats for Happy
                                                                    Pets.</a></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="load-more-btn">
                                                    <a href="pet-category.html" class="hover-btn">
                                                        LOAD MORE
                                                        <svg class="arrow" width="10" height="10"
                                                            viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                                                stroke="#191919" stroke-width="1.5"
                                                                stroke-linecap="round" />
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pet-sidebar-area">
                        <div class="single-widget mb-60">
                            <span class="top-btn"><a>Trending Post</a></span>
                            <div class="recent-post pt-35">
                                <div class="recent-post-img">
                                    <a href="standard-formate.html"><img
                                            src="{{asset('assets/image/pet-care/sidebar-img-1.png')}}" alt></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="pet-category.html">05 January, 2024</a>
                                    <h6><a href="standard-formate.html">The Cat's Cuisine: Crafting a Balanced
                                            Diet.</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <a href="standard-formate.html"><img
                                            src="{{asset('assets/image/pet-care/sidebar-img-2.png')}}" alt></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="pet-category.html">05 January, 2024</a>
                                    <h6><a href="standard-formate.html">Sit, Stay, Play Mastering Pet Training
                                            Basics.</a></h6>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <a href="standard-formate.html"><img
                                            src="{{asset('assets/image/pet-care/sidebar-img-3.png')}}" alt></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="pet-category.html">05 January, 2024</a>
                                    <h6><a href="standard-formate.html">Pawsitively Healthy A Guide to Pet
                                            Wellness..</a></h6>
                                </div>
                            </div>
                            <div class="recent-post mb-25">
                                <div class="recent-post-img">
                                    <a href="standard-formate.html"><img
                                            src="{{asset('assets/image/pet-care/sidebar-img-4.png')}}" alt></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="pet-category.html">05 January, 2024</a>
                                    <h6><a href="standard-formate.html">Training Troubles? Solutions for Common
                                            Issues.</a></h6>
                                </div>
                            </div>
                            <div class="view-all-btn2">
                                <a href="pet-category.html" class="view-btn">
                                    View All
                                    <svg class="arrow" width="10" height="10" viewBox="0 0 10 10"
                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                            stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="single-widget two  mb-60">
                            <div class="social-area">
                                <div class="row justify-content-center d-flex g-lg-4 gy-4">
                                    <div class="col-6">
                                        <div class="social-media-icon">
                                            <div class="icon">
                                                <a href="#">
                                                    <svg width="40" height="40" viewBox="0 0 40 40"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="40" height="40" rx="5"
                                                            fill="#2C78EA" />
                                                        <path
                                                            d="M21.1647 27.4975V20.6675H23.4688L23.8113 17.9934H21.1647V16.29C21.1647 15.5184 21.3797 14.99 22.4872 14.99H23.8905V12.6059C23.2077 12.5327 22.5214 12.4973 21.8347 12.5C19.798 12.5 18.3997 13.7434 18.3997 16.0259V17.9884H16.1105V20.6625H18.4047V27.4975H21.1647Z"
                                                            fill="white" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <div class="number">
                                                    <h5 class="counter">122</h5>
                                                    <span>K</span>
                                                </div>
                                                <p>Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="social-media-icon">
                                            <div class="icon">
                                                <a href="#">
                                                    <svg width="40" height="40" viewBox="0 0 40 40"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="40" height="40" rx="5"
                                                            fill="#2C78EA" />
                                                        <g clip-path="url(#clip0_633_55)">
                                                            <path
                                                                d="M25.75 10.9375H28.8175L22.1175 18.615L30 29.0625H23.8287L18.995 22.725L13.4637 29.0625H10.395L17.5612 20.85L10 10.9375H16.3288L20.6975 16.7287L25.75 10.9375ZM24.675 27.2225H26.375L15.4037 12.6812H13.5812L24.675 27.2225Z"
                                                                fill="white" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0_633_55">
                                                                <rect width="20" height="20" fill="white"
                                                                    transform="translate(10 10)" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <div class="number">
                                                    <h5 class="counter">90</h5>
                                                    <span>K</span>
                                                </div>
                                                <p>Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="social-media-icon">
                                            <div class="icon">
                                                <a href="#">
                                                    <svg width="40" height="40" viewBox="0 0 40 40"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="40" height="40" rx="5"
                                                            fill="#0077B5" />
                                                        <path
                                                            d="M14.1531 15.996C15.1601 15.996 15.9765 15.1796 15.9765 14.1726C15.9765 13.1656 15.1601 12.3493 14.1531 12.3493C13.1461 12.3493 12.3298 13.1656 12.3298 14.1726C12.3298 15.1796 13.1461 15.996 14.1531 15.996Z"
                                                            fill="white" />
                                                        <path
                                                            d="M17.6965 17.3789V27.4947H20.8373V22.4922C20.8373 21.1722 21.0856 19.8939 22.7223 19.8939C24.3365 19.8939 24.3565 21.4031 24.3565 22.5756V27.4956H27.499V21.9481C27.499 19.2231 26.9123 17.1289 23.7273 17.1289C22.1981 17.1289 21.1731 17.9681 20.754 18.7622H20.7115V17.3789H17.6965ZM12.5781 17.3789H15.724V27.4947H12.5781V17.3789Z"
                                                            fill="white" />
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <div class="number">
                                                    <h5 class="counter">130</h5>
                                                    <span>K</span>
                                                </div>
                                                <p>Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="social-media-icon">
                                            <div class="icon">
                                                <a href="#">
                                                    <svg width="40" height="40" viewBox="0 0 40 40"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="40" height="40" rx="5"
                                                            fill="url(#paint0_linear_633_66)" />
                                                        <path
                                                            d="M27.4559 16.9213C27.4475 16.2902 27.3293 15.6653 27.1067 15.0747C26.9137 14.5765 26.6188 14.124 26.241 13.7462C25.8632 13.3684 25.4107 13.0736 24.9125 12.8805C24.3295 12.6616 23.7135 12.5433 23.0909 12.5305C22.2892 12.4947 22.035 12.4847 20 12.4847C17.965 12.4847 17.7042 12.4847 16.9084 12.5305C16.286 12.5434 15.6703 12.6617 15.0875 12.8805C14.5892 13.0734 14.1367 13.3682 13.7589 13.746C13.3811 14.1239 13.0863 14.5764 12.8934 15.0747C12.6741 15.6573 12.556 16.2731 12.5442 16.8955C12.5084 17.698 12.4975 17.9522 12.4975 19.9872C12.4975 22.0222 12.4975 22.2822 12.5442 23.0788C12.5567 23.7022 12.6742 24.3172 12.8934 24.9013C13.0866 25.3995 13.3816 25.8518 13.7596 26.2295C14.1375 26.6072 14.5901 26.9018 15.0884 27.0947C15.6696 27.3223 16.2853 27.4492 16.9092 27.4697C17.7117 27.5055 17.9659 27.5163 20.0009 27.5163C22.0359 27.5163 22.2967 27.5163 23.0925 27.4697C23.7152 27.4574 24.3312 27.3393 24.9142 27.1205C25.4123 26.9272 25.8646 26.6323 26.2424 26.2545C26.6202 25.8768 26.9151 25.4244 27.1084 24.9263C27.3275 24.343 27.445 23.728 27.4575 23.1038C27.4934 22.3022 27.5042 22.048 27.5042 20.0122C27.5025 17.9772 27.5025 17.7188 27.4559 16.9213ZM19.995 23.8355C17.8667 23.8355 16.1425 22.1113 16.1425 19.983C16.1425 17.8547 17.8667 16.1305 19.995 16.1305C21.0168 16.1305 21.9967 16.5364 22.7192 17.2589C23.4416 17.9814 23.8475 18.9613 23.8475 19.983C23.8475 21.0048 23.4416 21.9847 22.7192 22.7071C21.9967 23.4296 21.0168 23.8355 19.995 23.8355ZM24.0009 16.8863C23.8829 16.8865 23.766 16.8633 23.657 16.8182C23.5479 16.7731 23.4488 16.7069 23.3654 16.6235C23.282 16.54 23.2158 16.441 23.1707 16.3319C23.1256 16.2229 23.1024 16.106 23.1025 15.988C23.1025 15.8701 23.1258 15.7533 23.1709 15.6444C23.216 15.5355 23.2821 15.4365 23.3655 15.3531C23.4489 15.2697 23.5479 15.2036 23.6568 15.1584C23.7658 15.1133 23.8825 15.0901 24.0004 15.0901C24.1184 15.0901 24.2351 15.1133 24.3441 15.1584C24.453 15.2036 24.552 15.2697 24.6354 15.3531C24.7187 15.4365 24.7849 15.5355 24.83 15.6444C24.8751 15.7533 24.8984 15.8701 24.8984 15.988C24.8984 16.4847 24.4967 16.8863 24.0009 16.8863Z"
                                                            fill="white" />
                                                        <path
                                                            d="M19.9941 22.4855C21.3762 22.4855 22.4966 21.3651 22.4966 19.983C22.4966 18.6009 21.3762 17.4805 19.9941 17.4805C18.612 17.4805 17.4916 18.6009 17.4916 19.983C17.4916 21.3651 18.612 22.4855 19.9941 22.4855Z"
                                                            fill="white" />
                                                        <defs>
                                                            <linearGradient id="paint0_linear_633_66" x1="0"
                                                                y1="0" x2="39.4118" y2="39.4118"
                                                                gradientUnits="userSpaceOnUse">
                                                                <stop offset="1" stop-color="#405DE6" />
                                                                <stop offset="0.0187741" stop-color="#3A52C4" />
                                                                <stop offset="0.091624" stop-color="#833AB4" />
                                                                <stop offset="0.304378" stop-color="#C13584" />
                                                                <stop offset="0.444285" stop-color="#E1306C" />
                                                                <stop offset="0.603923" stop-color="#FF4545"
                                                                    stop-opacity="0.96" />
                                                                <stop offset="0.744923" stop-color="#F56040" />
                                                                <stop offset="0.939973" stop-color="#FCAF45" />
                                                                <stop offset="1" stop-color="#FFDC80" />
                                                            </linearGradient>
                                                        </defs>
                                                    </svg>
                                                </a>
                                            </div>
                                            <div class="content">
                                                <div class="number">
                                                    <h5 class="counter">534</h5>
                                                    <span>K</span>
                                                </div>
                                                <p>Followers</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="single-widget mb-50">
                            <div class="category-btn">
                                <a href="#">
                                    Category
                                </a>
                            </div>
                            <ul class="category">
                                <li>
                                    <a href="pet-category.html">Pet Behavior (03)</a>
                                </li>
                                <li>
                                    <a href="pet-category.html">Breeds (02)</a>
                                </li>
                                <li>
                                    <a href="pet-category.html">Pet Health (06)</a>
                                </li>
                                <li>
                                    <a href="pet-category.html">Pet Food (04)</a>
                                </li>
                                <li>
                                    <a href="pet-category.html">Nurtitions (12)</a>
                                </li>
                                <li>
                                    <a href="pet-category.html">Pet Gear (05)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="single-widget mb-50 three">
                            <div class="single-widget-content ">
                                <h3>Subscribe Zorik To Get
                                    Free Update.</h3>
                                <h6>By subscribing, you'll unlock a treasure trove of the latest trends delivered
                                    directly to inbox.</h6>
                                <div class="input-area">
                                    <input type="email" placeholder="Enter Email" class>
                                    <button type="submit">
                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M15.9647 0.685806C16.0011 0.594942 16.01 0.495402 15.9904 0.399526C15.9707 0.303649 15.9233 0.215653 15.8541 0.146447C15.7849 0.0772403 15.6969 0.0298668 15.601 0.0101994C15.5052 -0.0094681 15.4056 -0.000564594 15.3147 0.0358061L0.76775 5.85481H0.76675L0.31475 6.03481C0.22914 6.06895 0.154635 6.1261 0.0994654 6.19994C0.0442956 6.27377 0.0106078 6.36142 0.00212322 6.4532C-0.00636132 6.54497 0.0106876 6.63731 0.0513867 6.72001C0.0920859 6.8027 0.154851 6.87254 0.23275 6.92181L0.64275 7.18181L0.64375 7.18381L5.63875 10.3618L8.81675 15.3568L8.81875 15.3588L9.07875 15.7688C9.12817 15.8464 9.19805 15.9089 9.28068 15.9493C9.36332 15.9897 9.45551 16.0066 9.54711 15.998C9.63871 15.9894 9.72617 15.9558 9.79985 15.9007C9.87354 15.8456 9.9306 15.7712 9.96475 15.6858L15.9647 0.685806ZM14.1317 2.57581L6.63775 10.0698L6.42275 9.73181C6.38336 9.66978 6.33078 9.6172 6.26875 9.57781L5.93075 9.36281L13.4247 1.86881L14.6027 1.39781L14.1327 2.57581H14.1317Z">
                                            </path>
                                        </svg>
                                    </button>
                                </div>
                                <p>
                                    <svg width="12" height="12" viewBox="0 0 12 12"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="M12 6C12 7.5913 11.3679 9.11742 10.2426 10.2426C9.11742 11.3679 7.5913 12 6 12C4.4087 12 2.88258 11.3679 1.75736 10.2426C0.632141 9.11742 0 7.5913 0 6C0 4.4087 0.632141 2.88258 1.75736 1.75736C2.88258 0.632141 4.4087 0 6 0C7.5913 0 9.11742 0.632141 10.2426 1.75736C11.3679 2.88258 12 4.4087 12 6ZM9.0225 3.7275C8.96893 3.67411 8.90514 3.63208 8.83495 3.60391C8.76476 3.57574 8.68961 3.56202 8.61399 3.56356C8.53838 3.5651 8.46385 3.58187 8.39486 3.61288C8.32588 3.64388 8.26385 3.68848 8.2125 3.744L5.60775 7.06275L4.038 5.49225C3.93137 5.39289 3.79033 5.3388 3.64461 5.34137C3.49888 5.34394 3.35984 5.40297 3.25678 5.50603C3.15372 5.60909 3.09469 5.74813 3.09212 5.89386C3.08955 6.03958 3.14364 6.18062 3.243 6.28725L5.2275 8.2725C5.28096 8.32586 5.34462 8.36791 5.41469 8.39614C5.48475 8.42437 5.55979 8.43819 5.63531 8.43679C5.71083 8.43539 5.7853 8.4188 5.85427 8.38799C5.92324 8.35719 5.9853 8.31281 6.03675 8.2575L9.03075 4.515C9.13282 4.40887 9.18921 4.26696 9.18781 4.11972C9.1864 3.97248 9.12732 3.83166 9.02325 3.7275H9.0225Z">
                                            </path>
                                        </g>
                                    </svg>
                                    No Credit Card Required
                                </p>
                            </div>
                        </div>
                        <div class="single-widget-add-area four">
                            <a href="{{$sidebarAds->link}}"><img src="{{asset('storage/images/'.$sidebarAds->image_url)}}" alt></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection
