@extends('clients.partials.default')
@section('content')
<div class="breadcrumb-and-page-title mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-page-breadcrumb-wrapper">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>FAQ’s</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="page-title-area">
                    <svg class="vector" width="290" height="155" viewBox="0 0 290 155" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="192" cy="192" r="162" transform="rotate(180 192 192)" stroke-width="60" />
                    </svg>
                    <div class="page-content">
                        <h1>FAQ’s</h1>
                        <p>Feel free to choose or modify any of these titles to match the specific focus and tone of
                            your food blog. Whether you're sharing recipes.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="faq-page-wrap mb-120">
    <div class="container">
        <div class="row justify-content-center g-lg-4 gy-5">
            <div class="col-lg-8">
                <div class="faq-area">
                    <div class="faq-wrap">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            @foreach($categories as $category)
                                @foreach($category->faqs as $faq)
                                    <div class="accordion-item">
                                        <h5 class="accordion-header" id="flush-heading{{ $faq->id }}">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $faq->id }}"
                                                aria-expanded="false" aria-controls="flush-collapse{{ $faq->id }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h5>
                                        <div id="flush-collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                            aria-labelledby="flush-heading{{ $faq->id }}" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                {{ $faq->answer }}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection