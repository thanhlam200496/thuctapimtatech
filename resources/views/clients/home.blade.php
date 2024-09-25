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
                                <img src="{{ asset('assets/image/Vector-112.html') }}" alt>
                            </div>
                            <div class="right-content">
                                <p>Feel free to mix and match words or adjust the titles to fit your blog's specific
                                    niche and tone.</p>
                                <form method="GET" action="{{ route('search') }}">
                                    <div class="form-inner">
                                        <input type="text" placeholder="Search post , tag etc ..." name="name">
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
                        <img src="{{ asset('assets/image/pet-care/Pet-Mask.png') }}" alt>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-post3 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 pt-80">
                <div class="col-lg-8">
                    <div class="row g-lg-4 gy-5">
                        <div class="col-lg-12 position-relative">
                            <div class="slider-btn-groups2">
                                <div class="slider-btn prev-1">
                                    <!-- SVG for previous button -->
                                </div>
                                <div class="slider-btn next-1">
                                    <!-- SVG for next button -->
                                </div>
                            </div>
                            <div class="swiper blog-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($randomArticle as $item)
                                        <div class="swiper-slide">
                                            <div class="blog-card2">
                                                <div class="blog-card-img-wrap">
                                                    <a href="{{ route('article.show', $item->slug) }}">
                                                        <img src="{{ asset('storage/images/' . $item->image) }}"
                                                            class="img-fluid" style="object-fit: cover; height: 400px;"
                                                            alt="{{ $item->name }}">
                                                    </a>
                                                    <ul class="list-unstyled">
                                                        <li><a class="category"
                                                                href="pet-category.html">{{ $item->category->name }}</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="blog-content">
                                                    <ul class="blog-meta list-unstyled d-flex justify-content-between">
                                                        <li><a href="#">By {{ $item->author->name ?? 'Admin' }}</a>
                                                        </li>
                                                        <li><a
                                                                class="publish-date">{{ $item->created_at->format('d M, Y') }}</a>
                                                        </li>
                                                    </ul>
                                                    <h3><a
                                                            href="{{ route('article.show', $item->slug) }}">{{ $item->name }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="add-area-image">
                                @if (isset($bannerAds))
                                    <a href="{{ $bannerAds->link ?? '' }}">
                                        <img src="{{ asset('storage/images/' . $bannerAds->image_url) }}" class="img-fluid"
                                            alt>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="container mt-5">
                        <h2 class="text-center mb-4">Lọc Tin Tức</h2>
                        <form action="{{ route('filter.articles') }}" method="GET" class="row g-3">
                            <div class="col-md-4">
                                <label for="date" class="form-label">Ngày Đăng</label>
                                <select name="date" id="date" class="form-select">
                                    <option value="">Chọn ngày đăng</option>
                                    <option value="newest">Mới Nhất</option>
                                    <option value="oldest">Cũ Nhất</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="category" class="form-label">Danh Mục</label>
                                <select name="category" id="category" class="form-select">
                                    <option value="">Chọn danh mục</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="views" class="form-label">Lượt Xem</label>
                                <select name="views" id="views" class="form-select">
                                    <option value="">Chọn lượt xem</option>
                                    <option value="most_viewed">Nhiều Nhất</option>
                                    <option value="least_viewed">Ít Nhất</option>
                                </select>
                            </div>
                            <div class="col-12 text-center mt-3">
                                <button type="submit" class="btn btn-primary btn-lg">Lọc</button>
                            </div>
                        </form>
                    </div>

                    <!-- Hiển thị danh sách bài viết -->
                    <!-- Danh sách bài viết -->
                    <div class="container mt-5">
                        <h2 class="text-center mb-4">Danh Sách Bài Viết</h2>
                        <div class="row">
                            @if (isset($filteredArticles) && $filteredArticles->isEmpty())
                                <p class="text-center">Không có bài viết nào được tìm thấy.</p>
                            @elseif(isset($filteredArticles))
                                @foreach ($filteredArticles as $item)
                                    <div class="col-md-6 col-lg-4 mb-4">
                                        <div class="card shadow-sm border-light">
                                            <a href="{{ route('article.show', $item->slug) }}">
                                                <img src="{{ asset('storage/images/' . $item->image) }}"
                                                    class="card-img-top" alt="{{ $item->name }}"
                                                    style="height: 200px; object-fit: cover;">
                                            </a>
                                            <div class="card-body">
                                                <a href="{{ url('category', $item->category->slug) }}"
                                                    class="badge bg-primary">{{ $item->category->name }}</a>
                                                <h5 class="card-title mt-2"><a
                                                        href="{{ route('article.show', $item->slug) }}">{{ $item->name }}</a>
                                                </h5>
                                                <p class="card-text text-muted">{{ Str::limit($item->description, 100) }}
                                                </p>
                                                <div class="d-flex justify-content-between">
                                                    <small class="text-muted">By
                                                        {{ $item->author->name ?? 'Admin' }}</small>
                                                    <small
                                                        class="text-muted">{{ $item->created_at->format('d M, Y') }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <!-- Bài viết mới nhất -->
                    <div class="container mt-5">
                        <h2 class="text-center mb-4">Bài Viết Mới Nhất</h2>
                        <div class="row g-4">
                            @if (isset($newArticle) && $newArticle->isNotEmpty())
                                @foreach ($newArticle as $item)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card shadow-sm border-light">
                                            <div class="card-header bg-light">
                                                <h5 class="mb-0"><a
                                                        href="{{ route('article.show', $item->slug) }}">{{ $item->title }}</a>
                                                </h5>
                                            </div>
                                            <a href="{{ route('article.show', $item->slug) }}">
                                                <img src="{{ asset('storage/images/' . $item->image) }}"
                                                    class="card-img-top" alt="{{ $item->name }}"
                                                    style="height: 200px; object-fit: cover;">
                                            </a>
                                            <div class="card-body">
                                                <a href="{{ url('category', $item->category->slug) }}"
                                                    class="badge bg-secondary">{{ $item->category->name }}</a>
                                                <p class="card-text text-muted">{{ Str::limit($item->content, 100) }}</p>
                                                <div class="d-flex justify-content-between">
                                                    <small class="text-muted">By
                                                        {{ $item->author->name ?? 'Admin' }}</small>
                                                    <small
                                                        class="text-muted">{{ $item->created_at->format('d M, Y') }}</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                <p class="text-center">Không có bài viết mới nào.</p>
                            @endif
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
                                            src="{{ asset('assets/image/pet-care/sidebar-img-1.png') }}" alt></a>
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
                                            src="{{ asset('assets/image/pet-care/sidebar-img-2.png') }}" alt></a>
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
                                            src="{{ asset('assets/image/pet-care/sidebar-img-3.png') }}" alt></a>
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
                                            src="{{ asset('assets/image/pet-care/sidebar-img-4.png') }}" alt></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="pet-category.html">05 January, 2024</a>
                                    <h6><a href="standard-formate.html">Training Troubles? Solutions for Common
                                            Issues.</a></h6>
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
                                @foreach ($categories as $item)
                                    <li>
                                        <a href="pet-category.html">{{ $item->name }} ({{ $item->article_count }})</a>
                                    </li>
                                @endforeach


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
                            @if (isset($sidebarAds))
                                <a href="{{ $sidebarAds->link ?? '' }}"><img
                                        src="{{ asset('storage/images/' . $sidebarAds->image_url) }}" alt></a>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
