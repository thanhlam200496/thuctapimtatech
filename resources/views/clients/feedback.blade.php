@extends('clients.partials.default')
@section('content')
<div class="blog-post-10 pt-20 mb-120">
    <div class="container">
        <div class="row g-lg-4 gy-5">
            <div class="inner-page-breadcrumb-wrapper">
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Feedback</li>
                </ul>
            </div>
            <div class="col-lg-8">
                <div class="inquiry-form contact-inquiry">
                    <div class=" title">
                        <h1>Feedback Us!</h1>
                    </div>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-inner mb-20">
                                    <label>Your Name* :</label>
                                    <input type="text" placeholder="Jackson Mile">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-inner mb-20">
                                    <label>Your Email* :</label>
                                    <input type="email" placeholder="example@gamil.com">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-inner mb-20">
                                    <label>Subject*</label>
                                    <input type="text" placeholder="What’s kind of topic">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-inner mb-15">
                                    <label>Message <span> (Optional)</span></label>
                                    <textarea class="contact-massage" placeholder="Write Something..."></textarea>
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
                    <div class="single-widget mb-60">
                        <span class="top-btn"><a>Featured Post</a></span>
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
                        <div class="recent-post">
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
                </div>
                <div class="featured-post-sideber">
                    <div class="sidebar-widget about-section">
                        <ul class="category">
                            <li>
                                <a href="about-us.html">About Us</a>
                            </li>
                            <li>
                                <a href="terms%26condition.html">Terms &amp; Conditions</a>
                            </li>
                            <li>
                                <a href="#">Support</a>
                            </li>
                            <li>
                                <a href="privacy-policy.html">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection