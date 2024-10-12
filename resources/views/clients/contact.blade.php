@extends('clients.partials.default')
@section('content')
<div class="blog-post-10 pt-20 mb-120">
    <div class="container">
        <div class="row g-lg-4 gy-5">
            <div class="inner-page-breadcrumb-wrapper">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ul>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible">
               
                <h4><i class="icon fa fa-check"></i> Success!</h4>
                {{ $message }}
            </div>
        @endif
            <div class="col-lg-8">
                <div class="inquiry-form contact-inquiry">
                    <div class=" title">
                        <h1>Contact Us!</h1>
                    </div>
                    <form action="{{route('contactpost.store')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-inner mb-20">
                                    <label>Your Name* :</label>
                                    <input type="text" name="name" value="{{old('name')}}" placeholder="Jackson Mile">
                                    <p style="color: red">{{$errors->first('name')}}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner mb-20">
                                    <label>Your Email* :</label>
                                    <input type="email" name="email" value="{{old('email')}}" placeholder="example@gamil.com">
                                    <p style="color: red">{{$errors->first('email')}}</p>
                                </div>
                            </div>
                            {{-- <div class="col-lg-12">
                                <div class="form-inner mb-20">
                                    <label>Subject*</label>
                                    <input type="text" name="name" placeholder="What’s kind of topic">
                                </div>
                            </div> --}}
                            <div class="col-md-12">
                                <div class="form-inner mb-15">
                                    <label>Message <span> (Optional)</span></label>
                                    <textarea class="contact-massage" value="{{old('message')}}" name="message" placeholder="Write Something..."></textarea>
                                    <p style="color: red">{{$errors->first('message')}}</p>
                                </div>
                            </div>
                            {{-- <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value id="contactCheck">
                                    <label class="form-check-label" for="contactCheck">
                                        Please save my name, email address for the next time I
                                        comment.
                                    </label>
                                </div>
                            </div> --}}
                        </div>
                        <div class="form-inner">
                            <button class="primary-btn1 contact-btn" data-text="Post Comment" type="submit">
                                <span> <svg class="arrow" width="10" height="10" viewBox="0 0 10 10"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                            stroke="#191919" stroke-width="1.5" stroke-linecap="round"></path>
                                    </svg>
                                    SUBMIT</span>
                            </button>
                        </div>
                    </form>
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
                                                                href="pet-category.html">{{ $item->category->name }}</a>
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
                                    <a href="pet-category.html">{{ $item->updated_at->format('d M, Y') }}</a>
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
@endsection