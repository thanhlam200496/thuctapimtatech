@extends('clients.partials.default')
<!-- @section('title', 'Chi Tiết') -->
@section('content')

    <div class="blog-post-9 pt-20">
        <div class="container">
            <div class="row g-lg-4 gy-5">
                <div class="col-lg-8">
                    <div class="inner-page-breadcrumb-wrapper mb-20">
                        <div class="fb-share-button" data-href="{{url()->current()}}" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{url()->current()}}&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>                        <ul>
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
                            <a class="publish-date"
                                href="pet-category.html">{{ $article->created_at->format('d M, Y') }}</a>
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
                                    <path d="M1 9L9 1M9 1C7.22222 1.33333 3.33333 2 1 1M9 1C8.66667 2.66667 8 6.33333 9 9"
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
                                                        <svg width="6" height="6" viewBox="0 0 6 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                        <svg width="6" height="6" viewBox="0 0 6 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                        <svg width="6" height="6" viewBox="0 0 6 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                                        <svg width="6" height="6" viewBox="0 0 6 6"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
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
                                    <a href="standard-formate.html"><img src="../assets/image/pet-care/sidebar-img-1.png"
                                            alt></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="pet-category.html">05 January, 2024</a>
                                    <h6><a href="standard-formate.html">The Cat's Cuisine: Crafting a Balanced Diet.</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="recent-post-img">
                                    <a href="standard-formate.html"><img src="../assets/image/pet-care/sidebar-img-2.png"
                                            alt></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="pet-category.html">05 January, 2024</a>
                                    <h6><a href="standard-formate.html">Sit, Stay, Play Mastering Pet Training
                                            Basics.</a></h6>
                                </div>
                            </div>
                            <div class="recent-post ">
                                <div class="recent-post-img">
                                    <a href="standard-formate.html"><img src="../assets/image/pet-care/sidebar-img-3.png"
                                            alt></a>
                                </div>
                                <div class="recent-post-content">
                                    <a href="pet-category.html">05 January, 2024</a>
                                    <h6><a href="standard-formate.html">Pawsitively Healthy A Guide to Pet
                                            Wellness..</a></h6>
                                </div>
                            </div>
                            <div class="recent-post mb-25">
                                <div class="recent-post-img">
                                    <a href="standard-formate.html"><img src="../assets/image/pet-care/sidebar-img-4.png"
                                            alt></a>
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
