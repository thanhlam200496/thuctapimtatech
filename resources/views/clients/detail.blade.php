@extends('clients.partials.default')
<!-- @section('title', 'Chi Tiết') -->
@section('content')
<section class="section mt-5">
    <div class="container">
        <h2 class="h5 section-title">Chi tiết</h2>
        <div class="row justify-content-center">
            <div class="col-lg-9 mb-5 mb-lg-0">
                <article class="post-slider mb-4">
                    <img src="{{ asset('storage/images/' . $article->image) }}" class="img-fluid rounded" alt="Article Image">
                </article>
                <h1 class="h2">{{ $article->name }}</h1>
                <ul class="list-inline my-3 text-muted">
                    <li class="list-inline-item">
                        <i class="bi bi-calendar"></i> {{ \Carbon\Carbon::parse($article->created_at)->format('d M, Y') }}
                    </li>
                </ul>
                <div class="content mb-5">
                    <p>{!! $article->content !!}</p>
                </div>

                <!-- Comments Section -->
                <!-- <div class="mb-5 border-top mt-4 pt-5">
                    <h3 class="mb-4">Bình Luận</h3>
                    <div style="max-height: 400px; overflow-y: auto;">
                        <!-- @php
                            $filePath = storage_path("comments/{$slug}.json");
                            $comments = File::exists($filePath) ? json_decode(File::get($filePath), true) : [];
                        @endphp -->
                <!-- @foreach ($comments as $index => $comment)
                            <div class="d-flex mb-4 pb-4 border-bottom">
                                <div class="me-3">
                                    <img src="{{ asset('client/images/author.jpg') }}" class="rounded-circle" alt="User Avatar" width="50" height="50">
                                </div>
                                <div>
                                    <a href="#!" class="h5 d-inline-block mb-1">{{ $comment['name'] }}
                                        @if(isset($comment['is_admin']) && $comment['is_admin'])
                                            <i class="bi bi-check-circle-fill text-primary"></i>
                                        @endif
                                    </a>
                                    <p>{{ $comment['comment'] }}</p>
                                    <span class="text-muted me-3">{{ $comment['time'] }}</span>
                                    <div class="d-flex align-items-center">
                                        <form method="POST" action="{{ route('detail.comment.like', ['slug' => $slug, 'index' => $index]) }}" style="display:inline-block;">
                                            @csrf
                                            <button type="submit" class="btn btn-link p-0 me-2">|_-_👍_-_|</button>
                                        </form><br>
                                        <span>{{ isset($comment['likes']) ? $comment['likes'] : 0 }}</span>
                                        <a href="javascript:void(0);" class="btn btn-link p-0 ms-3" onclick="showReplyForm({{ $index }})">|_-_💬_-_|</a>
                                        <form method="POST" action="{{ route('detail.comment.delete', ['slug' => $slug, 'index' => $index]) }}" style="display:inline-block; margin-left: 10px;" onsubmit="return confirmDelete();">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger p-0">|_-_❌_-_|</button>
                                        </form>
                                    </div>
                                    <div id="reply-form-{{ $index }}" class="reply-form mt-2" style="display:none;">
                                        <form method="POST" action="{{ route('detail.comment.reply', ['slug' => $slug, 'index' => $index]) }}">
                                            @csrf
                                            <div class="mb-2">
                                                <textarea class="form-control" name="reply" rows="2" required placeholder="Viết phản hồi của bạn..."></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary btn-sm">Gửi phản hồi</button>
                                        </form>
                                    </div>
                                    @if (isset($comment['replies']))
                                        <div class="replies mt-3">
                                            @foreach ($comment['replies'] as $reply)
                                                <div class="d-flex mt-2">
                                                    <div class="me-2">
                                                        <img src="{{ asset('client/images/author.jpg') }}" class="rounded-circle" alt="User Avatar" width="40" height="40">
                                                    </div>
                                                    <div>
                                                        <a href="#!" class="h6 d-inline-block mb-1">{{ $reply['name'] }}
                                                            @if(isset($reply['is_admin']) && $reply['is_admin'])
                                                                <i class="bi bi-check-circle-fill text-primary"></i>
                                                            @endif
                                                        </a>
                                                        <p>{{ $reply['reply'] }}</p>
                                                        <span class="text-muted">{{ $reply['time'] }}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach -->


                <!-- </div> -->
                <!-- </div> -->







            </div>
        </div>


    </div>
    </div>
    </div>
</section>
<div class="blog-post-9 pt-20">
    <div class="container">
        <div class="row g-lg-4 gy-5">







            <div class="col-lg-8">
                <div class="inner-page-breadcrumb-wrapper mb-20">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="gaming.html">Gaming</a></li>
                        <li>Gameplay Gazette: News from the Gaming Front.</li>
                    </ul>
                </div>
                <div class="post-thump">
                    <img src="{{ asset('storage/images/' . $article->image) }}" alt>
                </div>
                <ul class="post-meta">
                    <li>
                        <a href="editor-profile.html">Caleb Benjamin</a>
                    </li>
                    <li>
                        <a class="publish-date" href="pet-category.html">{{$article->created_at->format('d M, Y')}}</a>
                    </li>
                </ul>
                <h1>{{$article->name}}</h1>
                <div class="row justify-content-center">
                    <div class="col-lg-10 mb-60">
                        <div class="blog-content">
                            {!!$article->description!!}
                        </div>
                    </div>
                </div>

                <div class="add-image">
                    <img src="../assets/image/standard/Ads-Banner.png" alt>
                </div>
                <div class="blog-tag">
                    <div class="author-name">
                        <h6>Posted by <a href="editor-profile.html">Robert Kcarery</a></h6>
                    </div>
                    <div class="tag-items">
                        <h6>Categorized:</h6>
                        <ul>
                            <li><a href="pet-category.html">Gaming Tips,</a></li>
                            <li><a href="pet-category.html">Competition,</a></li>
                            <li><a href="pet-category.html">Chanllenge</a></li>
                        </ul>
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
                                <path
                                    d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                    stroke="#191919" stroke-width="1.5" stroke-linecap="round"></path>
                            </svg>
                            NEXT POST</a>
                    </div>
                </div>
                <div class="blog-post-area pt-90">
                    <h6>You May Also Like</h6>
                    <span class="line-break3"></span>
                    <span class="line-break"></span>
                    <div class="row gy-5">
                        <div class="col-md-6">
                            <div class="blog-card">
                                <div class="blog-card-img-wrap">
                                    <a href="standard-formate.html">
                                        <img src="../assets/image/pet-care/pet-food.png" alt>
                                    </a>
                                    <a href="pet-category.html">
                                        <span>Pet Food</span>
                                    </a>
                                    <div class="icon">
                                        <svg width="12" height="14" viewBox="0 0 12 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.9375 5.14062H8.95211V2.89215C8.95211 1.29741 7.62734 0 5.99899 0C4.37064 0 3.04586 1.29741 3.04586 2.89215V5.14062H2.0625C1.15786 5.14062 0.421875 5.87661 0.421875 6.78125V12.3594C0.421875 13.264 1.15786 14 2.0625 14H9.9375C10.8421 14 11.5781 13.264 11.5781 12.3594V6.78125C11.5781 5.87661 10.8421 5.14062 9.9375 5.14062ZM4.13961 2.89215C4.13961 1.9005 4.97373 1.09375 5.99899 1.09375C7.02424 1.09375 7.85836 1.9005 7.85836 2.89215V5.14062H4.13961V2.89215ZM10.4844 12.3594C10.4844 12.6609 10.239 12.9062 9.9375 12.9062H2.0625C1.76095 12.9062 1.51562 12.6609 1.51562 12.3594V6.78125C1.51562 6.4797 1.76095 6.23438 2.0625 6.23438H9.9375C10.239 6.23438 10.4844 6.4797 10.4844 6.78125V12.3594Z"
                                                fill="#191919" />
                                            <path
                                                d="M6 7.82031C5.44123 7.82031 4.98828 8.27326 4.98828 8.83203C4.98828 9.18881 5.17312 9.50223 5.45211 9.68237V10.8828C5.45211 11.1848 5.69695 11.4297 5.99899 11.4297C6.301 11.4297 6.54586 11.1848 6.54586 10.8828V9.68365C6.82597 9.50373 7.01172 9.18969 7.01172 8.83203C7.01172 8.27326 6.55877 7.82031 6 7.82031Z"
                                                fill="#191919" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="author-area">
                                        <ul>
                                            <li><a href="editor-profile.html">Dr. Michael
                                                    Patrick</a></li>
                                            <li><a class="publish-date" href="pet-category.html">
                                                    <svg width="6" height="6" viewBox="0 0 6 6" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="3" cy="3" r="3" fill="#C4C4C4" />
                                                    </svg>
                                                    20 Jan,2024</a></li>
                                        </ul>
                                    </div>
                                    <h5><a href="standard-formate.html">Superfood Spotlight: Boosting Your
                                            Pet'sNutrition.</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="blog-card">
                                <div class="blog-card-img-wrap">
                                    <a href="#">
                                        <img src="../assets/image/pet-care/pet-food2.png" alt>
                                    </a>
                                    <a href="pet-category.html"><span class="blue-green">Food Tips</span>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="author-area">
                                        <ul>
                                            <li><a href="editor-profile.html">Dr. Michael
                                                    Patrick</a></li>
                                            <li><a class="publish-date" href="pet-category.html">
                                                    <svg width="6" height="6" viewBox="0 0 6 6" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="3" cy="3" r="3" fill="#C4C4C4" />
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
                                    <a href="#">
                                        <img src="../assets/image/pet-care/pet-food3.png" alt>
                                    </a>
                                    <a href="pet-category.html"><span class="magenta">Omega-3</span>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="author-area">
                                        <ul>
                                            <li><a href="editor-profile.html">Dr. Michael
                                                    Patrick</a></li>
                                            <li><a class="publish-date" href="pet-category.html">
                                                    <svg width="6" height="6" viewBox="0 0 6 6" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="3" cy="3" r="3" fill="#C4C4C4" />
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
                                    <a href="#">
                                        <img src="../assets/image/pet-care/pet-food4.png" alt>
                                    </a>
                                    <a href="pet-category.html"><span class="Green-Blue">Nutrition</span>
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="author-area">
                                        <ul>
                                            <li><a href="editor-profile.html">Dr. James
                                                    Nathan</a></li>
                                            <li><a class="publish-date" href="pet-category.html">
                                                    <svg width="6" height="6" viewBox="0 0 6 6" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="3" cy="3" r="3" fill="#C4C4C4" />
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
                    </div>
                </div>




                <div class="row pt-100">
    <div class="col-lg-12">
        <div class="comment-area mb-60">
            <div class="comment-title">
                <h4>Comments</h4>
            </div>
            
                
                    <ul class="comment">
                        
                        <li>
                            @foreach ($comment_article as $item)
                            <div class="single-comment-area">
                                <div class="author-img">
                                    <img src="../assets/image/standard/comment-img1.png" alt>
                                </div>
                                <div class="comment-content">
                                    <div class="author-name-deg">
                                        <h6>{{$item->user->name}}</h6>
                                        <span>{{$item->created_at->format('d M, y')}}</span>
                                    </div>
                                    <p>{{$item->comments_content}}</p>
                                    <div class="replay-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="11"
                                            viewBox="0 0 14 11">
                                            <path
                                                d="M8.55126 1.11188C8.52766 1.10118 8.50182 1.09676 8.47612 1.09903C8.45042 1.1013 8.42569 1.11018 8.40419 1.12486C8.3827 1.13954 8.36513 1.15954 8.35311 1.18304C8.34109 1.20653 8.335 1.23276 8.33539 1.25932V2.52797C8.33539 2.67388 8.2791 2.81381 8.17889 2.91698C8.07868 3.02016 7.94277 3.07812 7.80106 3.07812C7.08826 3.07812 5.64984 3.08362 4.27447 3.98257C3.2229 4.66916 2.14783 5.9191 1.50129 8.24735C2.59132 7.16575 3.83632 6.57929 4.92635 6.2679C5.59636 6.07737 6.28492 5.96444 6.97926 5.93121C7.26347 5.91835 7.54815 5.92129 7.83205 5.94001H7.84594L7.85129 5.94111L7.80106 6.48906L7.85449 5.94111C7.98638 5.95476 8.10864 6.01839 8.19751 6.11966C8.28638 6.22092 8.33553 6.35258 8.33539 6.48906V7.75771C8.33539 7.87654 8.45294 7.95136 8.55126 7.90515L12.8088 4.67796C12.8233 4.66692 12.8383 4.65664 12.8537 4.64715C12.8769 4.63278 12.8962 4.61245 12.9095 4.58816C12.9229 4.56386 12.9299 4.53643 12.9299 4.50851C12.9299 4.4806 12.9229 4.45316 12.9095 4.42887C12.8962 4.40458 12.8769 4.38425 12.8537 4.36988C12.8382 4.36039 12.8233 4.35011 12.8088 4.33907L8.55126 1.11188ZM7.26673 7.02381C7.19406 7.02381 7.11391 7.02711 7.02842 7.03041C6.56462 7.05242 5.92342 7.12504 5.21169 7.32859C3.79464 7.7335 2.11684 8.65116 1.00115 10.7175C0.940817 10.8291 0.844683 10.9155 0.729224 10.9621C0.613765 11.0087 0.486168 11.0124 0.368304 10.9728C0.250441 10.9331 0.149648 10.8525 0.0831985 10.7447C0.0167484 10.6369 -0.011219 10.5086 0.0040884 10.3819C0.499949 6.29981 2.01959 4.15202 3.70167 3.05391C5.03215 2.18467 6.40218 2.01743 7.26673 1.98552V1.25932C7.26663 1.03273 7.32593 0.810317 7.43839 0.615545C7.55084 0.420773 7.71227 0.260866 7.90565 0.152696C8.09902 0.0445258 8.31717 -0.00789584 8.53707 0.000962485C8.75698 0.00982081 8.97048 0.0796305 9.15506 0.203025L13.4233 3.43792C13.5998 3.55133 13.7453 3.7091 13.8462 3.8964C13.9471 4.08369 14 4.29434 14 4.50851C14 4.72269 13.9471 4.93333 13.8462 5.12063C13.7453 5.30792 13.5998 5.4657 13.4233 5.57911L9.15506 8.814C8.97048 8.9374 8.75698 9.00721 8.53707 9.01607C8.31717 9.02492 8.09902 8.9725 7.90565 8.86433C7.71227 8.75616 7.55084 8.59626 7.43839 8.40148C7.32593 8.20671 7.26663 7.9843 7.26673 7.75771V7.02381Z">
                                            </path>
                                        </svg>
                                        Reply (01)
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </li>
                        
                    </ul>
                
            
        </div>
    </div>
</div>







                <div class="row">
                    <div class="col-lg-12">
                        <div class="inquiry-form ">
                            <div class="title">
                                <h4>Leave Your Comment:</h4>
                            </div>
                            <form action="
                            {{ route('comment', ['id' => $article->id]) }}
                             " method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-inner mb-20">
                                            <label>Your Name* :</label>
                                            <input id="name" placeholder="name..." name="name" disabled value="{{Auth::user()->name??''}}" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-inner mb-20">
                                            <label>Your Email* :</label>
                                            <input placeholder="Email" name="email" disabled value="{{Auth::user()->email??''}}" type="text">

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-inner mb-15">
                                            <label>Your Comments*</label>
                                            <textarea placeholder="Write Something..." id="comments_content" name="comments_content"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value id="contactCheck">
                                            <label class="form-check-label" for="contactCheck">
                                                Please save my name, email address for the next time I
                                                comment.
                                            </label>
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



            <div class="col-lg-4 ">
                <div class="pet-sidebar-area">
                    <div class="single-widget mb-60">
                        <span class="top-btn"><a>Trending Post</a></span>
                        <div class="recent-post pt-35">
                            <div class="recent-post-img">
                                <a href="standard-formate.html"><img
                                        src="../assets/image/pet-care/sidebar-img-1.png" alt></a>
                            </div>
                            <div class="recent-post-content">
                                <a href="pet-category.html">05 January, 2024</a>
                                <h6><a href="standard-formate.html">The Cat's Cuisine: Crafting a Balanced Diet.</a>
                                </h6>
                            </div>
                        </div>
                        <div class="recent-post">
                            <div class="recent-post-img">
                                <a href="standard-formate.html"><img
                                        src="../assets/image/pet-care/sidebar-img-2.png" alt></a>
                            </div>
                            <div class="recent-post-content">
                                <a href="pet-category.html">05 January, 2024</a>
                                <h6><a href="standard-formate.html">Sit, Stay, Play Mastering Pet Training
                                        Basics.</a></h6>
                            </div>
                        </div>
                        <div class="recent-post ">
                            <div class="recent-post-img">
                                <a href="standard-formate.html"><img
                                        src="../assets/image/pet-care/sidebar-img-3.png" alt></a>
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
                                        src="../assets/image/pet-care/sidebar-img-4.png" alt></a>
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
                                <svg class="arrow" width="10" height="10" viewBox="0 0 10 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <div class="single-widget mb-50">
                        <div class="category-btn">
                            <a>Category</a>
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

                    <div class="single-widget-add-area four">
                        <a href="#"><img src="../assets/image/pet-care/Ads-Banner2.png" alt></a>
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

@endsection