@extends('clients.partials.default')
<!-- @section('title', 'Chi Tiết') -->
@section('content')

<div class="blog-post-9 pt-20">
    <div class="container">
        <div class="row g-lg-4 gy-5">
            <div class="col-lg-8">
                <div class="inner-page-breadcrumb-wrapper mb-20">
                    {{-- <div class="fb-share-button" data-href="{{url()->current()}}" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div> --}}
                    <ul>
                        <li><a href="{{route('Home')}}">Home</a></li>
                        <li><a href="{{ route('result', [$article->category->id]) }}">{{ $article->category->name }}</a></li>
                        <li>{{ strlen($article->name) > 75 ? substr($article->name, 0, 75) . '...' : $article->name }}</li>
                    </ul>
                </div>
                <!-- thông báo cmt -->
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h8><i class="icon fa fa-check"></i> Success!</h8>
                    {{ $message }}
                </div>
                @endif
                <!-- thông báo cmt -->
                <div class="post-thump">
                    <img src="{{ asset('storage/images/' . $article->image) }}" style="width: 855px; height: 441px; object-fit: cover; border-radius: 10px" alt>
                </div>
                <ul class="post-meta">
                    <li>
                        <a href="#">Admin</a>
                    </li>
                    <li>
                        <a class="publish-date"
                            href="#">{{ $article->created_at->format('d M, Y') }}</a>
                    </li>
                </ul>
                <h1>{{ $article->name }}</h1>
                <div class="row justify-content-center">
                    <div class="col-lg-10 mb-60">
                        <div class="blog-content">
                            {!! $article->description !!}
                        </div>
                    </div>
                </div>

                <div class="container mt-5">
                    <div class="row mb-4">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="add-area-image">
                                @if (isset($bannerAds))
                                <a href="{{ $bannerAds->link ?? '' }}">
                                    <img src="{{ asset('storage/images/' . $bannerAds->image_url) }}"
                                        style="width: 4855px; height: 155px; object-fit: cover; border-radius: 10px"
                                        class="img-fluid" alt>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="blog-tag">
                    <div class="author-name">
                        <h6>Posted by <a href="#">Admin</a></h6>
                    </div>
                    <div class="tag-items">
                        <h6>Categorized:</h6>
                        <ul>
                            <li><a href="{{ route('result', [$article->category->id]) }}">{{$article->category->name}}</a></li>
                            
                        </ul>
                        <div class="fb-share-button" data-href="{{url()->current()}}" data-layout="" data-size="">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore fb-share-btn">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook" class="fb-logo"> Chia sẻ
                            </a>
                          </div>
                          
                    </div>
                </div>
                <div class="post-btn">
                    <div class="privious-post-btn">
                        <a href="#">
                            <svg class="arrow" width="11" height="11" viewBox="0 0 11 11"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 10L1 1M1 1C3 1.375 7.375 2.125 10 1M1 1C1.375 2.875 2.125 7 1 10"
                                    stroke="white" stroke-width="1.5" stroke-linecap="round" />
                            </svg>
                            PREVIOUS POST</a>
                    </div>
                    <div class="next-post-btn">
                        <a href="#">
                            <svg class="arrow" width="10" height="10" viewBox="0 0 10 10"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                    stroke="#191919" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                            Tiếp theo</a>
                    </div>
                </div>
                <div class="blog-post-area pt-90">
                    <h6>You May Also Like</h6>
                    <span class="line-break3"></span>
                    <span class="line-break"></span>
                    <div class="row gy-5">
                        @foreach ($randomArticle as $item)
                        <div class="col-md-6">
                            <div class="blog-card">
                                <div class="blog-card-img-wrap">
                                    <a href="{{ route('article.show', $item->slug) }}">
                                        <img src="{{ asset('storage/images/' . $item->image) }}"
                                            style="width: 415px; height: 251px; object-fit: cover" alt>
                                    </a>
                                    <a href="#">
                                        <span>{{ $item->category->name }}</span>

                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="author-area">
                                        <ul>
                                            <li><a href="#">Admin
                                                    Patrick</a></li>
                                            <li><a class="publish-date" href="#">
                                                    <svg width="6" height="6" viewBox="0 0 6 6"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="3" cy="3" r="3"
                                                            fill="#C4C4C4" />
                                                    </svg>
                                                    {{ $article->created_at->format('d M, Y') }}</a></li>
                                        </ul>
                                    </div>
                                    <h5><a href="{{ route('article.show', $item->slug) }}">{{ $item->name }}</a></h5>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>



                <br>
                <div class="comment-area mb-60">
                    <div class="comment-title">
                        <h4>Comments</h4>
                    </div>

                    @if ($comments instanceof \Illuminate\Database\Eloquent\Collection && !$comments->isEmpty())
                    @foreach ($comments as $item)
                    <ul class="comment">
                        <li>
                            <div class="single-comment-area">
                                <div class="comment-content">
                                    <div class="author-name-deg">
                                        <h6>{{ $item->user->name ?? 'Guest' }}</h6>
                                        <span>{{ $item->created_at->format('d/m/Y') }}</span>
                                    </div>
                                    <p>{{ $item->comments_content }}</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    @endforeach
                    @else
                    <p>Chưa có bình luận nào.</p>
                    @endif

                </div>








                <div class="row">
                    <div class="col-lg-12">
                        <div class="inquiry-form ">
                            <div class="title">
                                <h4>Leave Your Comment:</h4>
                            </div>
                            <form action="{{ route('comment', $article->id) }}" method="POST">

                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-inner mb-20">
                                            <label>Your Name* :</label>
                                            <input id="name" placeholder="name..." name="name" disabled
                                                value="{{ Auth::user()->name ?? '' }}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-20">
                                            <label>Your Email* :</label>
                                            <input placeholder="Email" name="email" disabled
                                                value="{{ Auth::user()->email ?? '' }}" type="text">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-inner mb-15">
                                            <label>Your Comments*</label>
                                            <textarea placeholder="Write Something..." id="comments_content" name="comments_content"></textarea>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="form-inner">
                                    <button class="primary-btn1" data-text="Post Comment" type="submit">
                                        <span> <svg class="arrow" width="10" height="10" viewBox="0 0 10 10"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                                    stroke="#191919" stroke-width="1.5" stroke-linecap="round">
                                                </path>
                                            </svg>
                                            SUBMIT COMMENT</span>
                                    </button>
                                </div>
                            </form>







                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-4">
                <div class="pet-sidebar-area">
                    <div class="row g-lg-4 gy-5">
                        <div class="col-lg-12 position-relative">
                            <div class="slider-btn-groups2">

                            </div>
                            <div class="swiper blog-slider">
                                <div class="swiper-wrapper">
                                    @foreach ($randomArticle as $item)
                                    <div class="swiper-slide">
                                        <div class="blog-card2">
                                            <div class="blog-card-img-wrap">
                                                <a href="{{ route('article.show', $item->slug) }}">
                                                    <img src="{{ asset('storage/images/' . $item->image) }}"
                                                        class="img-fluid"
                                                        style="object-fit: cover; height: 200px; border-radius: 10px"
                                                        alt="{{ $item->name }}">
                                                </a>
                                                <ul class="list-unstyled">
                                                    <li><a class="category"
                                                            href="{{ route('result', [$item->category->id]) }}">{{ $item->category->name }}</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="blog-content">
                                                <ul class="blog-meta list-unstyled d-flex justify-content-between">
                                                    <li><a href="#">By
                                                            {{ $item->author->name ?? 'Admin' }}</a>
                                                    </li>
                                                    <li><a
                                                            class="publish-date">{{ $item->created_at->format('d M, Y') }}</a>
                                                    </li>
                                                </ul>
                                                <h3 style="padding-top: 0px; line-height: 0px"><a href="{{ route('article.show', $item->slug) }}"
                                                        style="font-size: 20px; ">{{ strlen($item->name) > 75 ? substr($item->name, 0, 75) . '...' : $item->name }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-widget mb-60 mt-40">
                        <span class="top-btn pt-10"><a>Trending Post</a></span>

                        <br>
                        @foreach ($articlesTrending as $item)
                        <div class="recent-post ">
                            <div class="recent-post-img">
                                <a href="{{ route('article.show', $item->slug) }}"><img
                                        src="{{ asset('storage/images/' . $item->image) }}"
                                        style="height:90px; width:  92px;object-fit: cover" alt></a>
                            </div>
                            <div class="recent-post-content">
                                <a href="#">{{ $item->updated_at->format('d M, Y') }}</a>
                                <h6><a href="{{ route('article.show', $item->slug) }}">
                                        {{ strlen($item->name) > 75 ? substr($item->name, 0, 75) . '...' : $item->name }}</a>
                                </h6>
                            </div>
                        </div>
                        @endforeach



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
                                <a href="{{ route('result', [$item->id]) }}">{{ $item->name }} ({{ $item->article_count }})</a>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                    {{-- <div class="single-widget mb-50 three">
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
                        </div> --}}
                    <div class="single-widget-add-area four">
                        @if (isset($sidebarAds))
                        <a href="{{ $sidebarAds->link ?? '' }}"><img
                                src="{{ asset('storage/images/' . $sidebarAds->image_url) }}"
                                style="width: 415px; height: 483px; object-fit: cover; border-radius: 10px"
                                alt></a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
    function showReplyForm(index) {
        const replyForm = document.getElementById(`reply-form-${index}`);
        replyForm.style.display = replyForm.style.display === "none" ? "block" : "none";
    }

    function confirmDelete() {
        return confirm('Bạn có chắc chắn muốn xóa bình luận này không?');
    }
</script>
<br>
@endsection