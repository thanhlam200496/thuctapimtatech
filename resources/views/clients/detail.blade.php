
@extends('clients.partials.default')
@section('title', 'Chi Tiết')

@section('content')
{{-- <section class="section mt-5">
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
                <div class="mb-5 border-top mt-4 pt-5">
                    <h3 class="mb-4">Bình Luận</h3>
                    <div style="max-height: 400px; overflow-y: auto;">
                        @php
                            $filePath = storage_path("comments/{$slug}.json");
                            $comments = File::exists($filePath) ? json_decode(File::get($filePath), true) : [];
                        @endphp
                        @foreach ($comments as $index => $comment)
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
                        @endforeach
                    </div>
                </div>

                <div>
                    <h3 class="mb-4">Để lại bình luận</h3>
                    <form method="POST" action="{{ route('detail.comment', ['slug' => $slug]) }}">
                        @csrf
                        <div class="mb-3">
                            <textarea class="form-control" name="comment" id="comment" rows="5" required placeholder="Viết bình luận của bạn..."></textarea>
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Bình luận ngay</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> --}}
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
                {{-- <div class="share-post-area">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="share-post-content">
                                <h3>Share This Post</h3>
                                <ul>
                                    <li>
                                        <a class="icon" href="https://www.facebook.com/">
                                            <svg width="6" height="12" viewBox="0 0 6 12"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.81526 11.2483V6.46735H5.42818L5.66793 4.59543H3.81526V3.4031C3.81526 2.86293 3.96576 2.4931 4.74101 2.4931H5.72334V0.824182C5.24538 0.77296 4.76495 0.748228 4.28426 0.750099C2.85859 0.750099 1.87976 1.62043 1.87976 3.21818V4.59193H0.277344V6.46385H1.88326V11.2483H3.81526Z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon" href="https://x.com/">
                                            <svg width="14" height="14" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g>
                                                    <path
                                                        d="M11.025 0.65625H13.1722L8.48225 6.0305L14 13.3438H9.68012L6.2965 8.9075L2.42462 13.3438H0.2765L5.29287 7.595L0 0.65625H4.43013L7.48825 4.71012L11.025 0.65625ZM10.2725 12.0557H11.4625L3.78262 1.87687H2.50688L10.2725 12.0557Z" />
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon" href="https://www.linkedin.com/">
                                            <svg width="14" height="14" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M2.90719 4.1972C3.61209 4.1972 4.18353 3.62576 4.18353 2.92086C4.18353 2.21597 3.61209 1.64453 2.90719 1.64453C2.20229 1.64453 1.63086 2.21597 1.63086 2.92086C1.63086 3.62576 2.20229 4.1972 2.90719 4.1972Z" />
                                                <path
                                                    d="M5.38752 5.16523V12.2463H7.5861V8.74457C7.5861 7.82057 7.75994 6.92573 8.9056 6.92573C10.0355 6.92573 10.0495 7.98215 10.0495 8.8029V12.2469H12.2493V8.36365C12.2493 6.45615 11.8386 4.99023 9.60911 4.99023C8.53869 4.99023 7.82119 5.57765 7.52777 6.13357H7.49802V5.16523H5.38752ZM1.80469 5.16523H4.00677V12.2463H1.80469V5.16523Z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="icon" href="https://www.instagram.com/">
                                            <svg width="14" height="14" viewBox="0 0 14 14"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.2191 4.84492C12.2132 4.40312 12.1305 3.96571 11.9747 3.55226C11.8396 3.20351 11.6332 2.88679 11.3687 2.62233C11.1043 2.35786 10.7875 2.15147 10.4388 2.01634C10.0307 1.86313 9.59948 1.78029 9.16362 1.77134C8.60246 1.74626 8.42454 1.73926 7.00004 1.73926C5.57554 1.73926 5.39296 1.73926 4.83587 1.77134C4.40022 1.78036 3.96924 1.8632 3.56129 2.01634C3.21249 2.15138 2.89572 2.35773 2.63124 2.62221C2.36677 2.88669 2.16041 3.20346 2.02537 3.55226C1.87186 3.96008 1.7892 4.39116 1.78096 4.82684C1.75587 5.38859 1.74829 5.56651 1.74829 6.99101C1.74829 8.41551 1.74829 8.59751 1.78096 9.15517C1.78971 9.59151 1.87196 10.022 2.02537 10.4309C2.16064 10.7796 2.36715 11.0963 2.63171 11.3606C2.89628 11.625 3.21308 11.8313 3.56187 11.9663C3.96871 12.1256 4.39976 12.2144 4.83646 12.2288C5.39821 12.2538 5.57612 12.2614 7.00062 12.2614C8.42512 12.2614 8.60771 12.2614 9.16479 12.2288C9.60063 12.2202 10.0318 12.1375 10.44 11.9843C10.7886 11.8491 11.1053 11.6426 11.3697 11.3782C11.6341 11.1137 11.8406 10.7971 11.9759 10.4484C12.1293 10.0401 12.2115 9.60959 12.2203 9.17267C12.2454 8.61151 12.253 8.43359 12.253 7.00851C12.2518 5.58401 12.2518 5.40317 12.2191 4.84492ZM6.99654 9.68484C5.50671 9.68484 4.29979 8.47792 4.29979 6.98809C4.29979 5.49826 5.50671 4.29134 6.99654 4.29134C7.71176 4.29134 8.39769 4.57546 8.90343 5.0812C9.40917 5.58694 9.69329 6.27287 9.69329 6.98809C9.69329 7.70331 9.40917 8.38924 8.90343 8.89498C8.39769 9.40072 7.71176 9.68484 6.99654 9.68484ZM9.80062 4.82042C9.71802 4.8205 9.63622 4.80429 9.55989 4.77271C9.48356 4.74114 9.41421 4.69482 9.3558 4.63641C9.29739 4.57801 9.25108 4.50865 9.2195 4.43233C9.18793 4.356 9.17171 4.27419 9.17179 4.19159C9.17179 4.10905 9.18805 4.02732 9.21964 3.95106C9.25122 3.8748 9.29752 3.80551 9.35589 3.74714C9.41425 3.68878 9.48354 3.64248 9.5598 3.61089C9.63606 3.57931 9.71779 3.56305 9.80033 3.56305C9.88287 3.56305 9.96461 3.57931 10.0409 3.61089C10.1171 3.64248 10.1864 3.68878 10.2448 3.74714C10.3031 3.80551 10.3494 3.8748 10.381 3.95106C10.4126 4.02732 10.4289 4.10905 10.4289 4.19159C10.4289 4.53926 10.1477 4.82042 9.80062 4.82042Z" />
                                                <path
                                                    d="M6.99589 8.73983C7.96336 8.73983 8.74764 7.95554 8.74764 6.98808C8.74764 6.02061 7.96336 5.23633 6.99589 5.23633C6.02843 5.23633 5.24414 6.02061 5.24414 6.98808C5.24414 7.95554 6.02843 8.73983 6.99589 8.73983Z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                                <div class="input-area" id="inviteCode">
                                    <input id="link-input" value="https://www.egenstheme.com/" readonly>
                                    <div id="copy-link-icon">
                                        <svg width="16" height="16" viewBox="0 0 16 16"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.97324 10.9956C6.99524 11.0066 7.02724 11.0066 7.02724 11.0066V11.0286C7.06024 11.0286 7.12424 10.9846 7.12424 10.9846L8.29028 9.82042L8.32328 9.78845C8.35314 9.76404 8.37852 9.73462 8.39828 9.70151C8.42028 9.65854 8.43028 9.61457 8.40828 9.5716C8.38828 9.52863 8.35528 9.48566 8.31228 9.48566C7.87035 9.39014 7.46545 9.1691 7.14624 8.84912C6.76572 8.47567 6.53189 7.97821 6.48723 7.44712C6.45456 7.1118 6.49673 6.77341 6.61069 6.45634C6.72464 6.13926 6.90755 5.85138 7.14624 5.61343L10.2003 2.55962C11.0634 1.69624 12.5744 1.69624 13.4384 2.55962C13.8704 3.0023 14.1084 3.57389 14.1084 4.18845C14.1084 4.80301 13.8704 5.3856 13.4384 5.81729L12.0464 7.1983C12.0306 7.21556 12.0193 7.23645 12.0136 7.25912C12.0078 7.28178 12.0077 7.30551 12.0134 7.32821C12.1434 7.79088 12.2184 8.27653 12.2184 8.76218C12.2184 8.99901 12.2084 9.20387 12.1754 9.37674C12.1754 9.4307 12.1974 9.49566 12.2514 9.51664C12.2768 9.532 12.3066 9.53828 12.3361 9.53447C12.3655 9.53066 12.3928 9.51697 12.4134 9.49566L14.7775 7.14434C16.4075 5.50451 16.4075 2.85041 14.7775 1.22158C13.9921 0.43928 12.9283 0 11.8194 0C10.7104 0 9.6467 0.43928 8.86129 1.22158L5.80721 4.27539C5.5372 4.5452 5.32219 4.83699 5.16019 5.12778L5.14719 5.13778C5.13719 5.14577 5.12718 5.15276 5.12718 5.15976C4.79591 5.74751 4.61115 6.40632 4.58852 7.0805C4.56589 7.75467 4.70606 8.42438 4.99718 9.03299C5.20319 9.45269 5.46219 9.83042 5.80721 10.1762C6.14221 10.5209 6.54123 10.8017 6.97324 10.9956ZM1.23107 14.7709C2.0501 15.5803 3.12013 15.99 4.18816 15.99L4.15616 16C5.22419 16 6.30422 15.5903 7.11424 14.7819L10.1683 11.7291C10.727 11.1773 11.1165 10.4777 11.2914 9.7125L11.3564 9.23784C11.3774 9.12992 11.3774 9.02199 11.3774 8.91407V8.48338C11.3774 8.37446 11.3674 8.26654 11.3454 8.1806C11.3354 8.06168 11.3134 7.96475 11.2914 7.86782C11.2664 7.74735 11.234 7.62854 11.1944 7.51208C11.0008 6.87575 10.652 6.29748 10.1793 5.82928C9.84282 5.49624 9.45228 5.22256 9.0243 5.01986C8.9813 4.98788 8.87329 5.04184 8.87329 5.04184L7.70726 6.20601C7.67526 6.23899 7.63226 6.28196 7.59926 6.34591C7.57826 6.37889 7.57826 6.42186 7.59926 6.46582C7.62126 6.50879 7.65326 6.54077 7.69626 6.54077C8.13927 6.62671 8.53828 6.84256 8.86229 7.16632C9.29431 7.60901 9.53231 8.19159 9.52131 8.82713C9.51031 9.21685 9.41331 9.59359 9.2293 9.91635C9.17794 10.0094 9.11658 10.0965 9.0463 10.1762C9.0033 10.2411 8.9493 10.3161 8.86229 10.402L5.80721 13.4548C5.37361 13.8759 4.79279 14.1115 4.18816 14.1115C3.58352 14.1115 3.00271 13.8759 2.56911 13.4548C2.13942 13.0215 1.89858 12.436 1.89909 11.826C1.89909 11.2114 2.1371 10.6288 2.56911 10.1972L3.96215 8.80615C3.99415 8.76318 4.00515 8.70922 3.99415 8.66625C3.77779 8.01315 3.71483 7.31903 3.81015 6.6377C3.81488 6.60938 3.81008 6.58029 3.79651 6.55498C3.78294 6.52966 3.76136 6.50956 3.73515 6.4978C3.69214 6.46483 3.58414 6.51879 3.58414 6.51879L1.23007 8.85911C0.838368 9.24512 0.527785 9.70543 0.316558 10.213C0.105332 10.7206 -0.00228147 11.2653 3.66695e-05 11.815C3.66695e-05 12.9252 0.44305 13.9834 1.23007 14.7699L1.23107 14.7709Z" />
                                        </svg>
                                    </div>
                                    <span id="copy-text" class="copy-text"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
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
                                <h4>Comments (02)</h4>
                            </div>
                            <ul class="comment">
                                <li>
                                    <div class="single-comment-area">
                                        <div class="author-img">
                                            <img src="../assets/image/standard/comment-img1.png" alt>
                                        </div>
                                        <div class="comment-content">
                                            <div class="author-name-deg">
                                                <h6>Mr. Bowmik Haldar,</h6>
                                                <span>02 March, 2024</span>
                                            </div>
                                            <p>Great! Have to learn more.</p>
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
                                    <ul class="comment-replay">
                                        <li>
                                            <div class="single-comment-area">
                                                <div class="author-img">
                                                    <img src="../assets/image/standard/comment-img2.png" alt>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="author-name-deg">
                                                        <h6>Jacoline Juie,</h6>
                                                        <span>05 March, 2024</span>
                                                    </div>
                                                    <p>Take Love Brothers!</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="single-comment-area">
                                        <div class="author-img">
                                            <img src="../assets/image/standard/comment-img3.png" alt>
                                        </div>
                                        <div class="comment-content">
                                            <div class="author-name-deg">
                                                <h6>Mr. Bowmik Haldar,</h6>
                                                <span>02 March, 2024</span>
                                            </div>
                                            <p>Masterclass article!</p>
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
                                    <ul class="comment-replay two">
                                        <li>
                                            <div class="single-comment-area">
                                                <div class="author-img">
                                                    <img src="../assets/image/standard/comment-img2.png" alt>
                                                </div>
                                                <div class="comment-content">
                                                    <div class="author-name-deg">
                                                        <h6>Jacoline Juie,</h6>
                                                        <span>05 March, 2024</span>
                                                    </div>
                                                    <p>Take Love Brothers!</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
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
                                    <div class="col-md-12">
                                        <div class="form-inner mb-15">
                                            <label>Your Comments*</label>
                                            <textarea placeholder="Write Something..."></textarea>
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
                    {{-- <div class="single-widget two mb-60">
                        <div class="social-area">
                            <div class="row justify-content-center d-flex g-lg-4 gy-4">
                                <div class="col-6">
                                    <div class="social-media-icon">
                                        <div class="icon">
                                            <a href="https://www.facebook.com/">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="40" height="40" rx="5" fill="#2C78EA" />
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
                                            <a href="https://x.com/">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="40" height="40" rx="5" fill="#2C78EA" />
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
                                            <a href="https://www.linkedin.com/">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="40" height="40" rx="5" fill="#0077B5" />
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
                                            <a href="https://www.instagram.com/">
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="40" height="40" rx="5"
                                                        fill="url(#paint0_linear_633_66)" />
                                                    <path
                                                        d="M27.4559 16.9213C27.4475 16.2902 27.3293 15.6653 27.1067 15.0747C26.9137 14.5765 26.6188 14.124 26.241 13.7462C25.8632 13.3684 25.4107 13.0736 24.9125 12.8805C24.3295 12.6616 23.7135 12.5433 23.0909 12.5305C22.2892 12.4947 22.035 12.4847 20 12.4847C17.965 12.4847 17.7042 12.4847 16.9084 12.5305C16.286 12.5434 15.6703 12.6617 15.0875 12.8805C14.5892 13.0734 14.1367 13.3682 13.7589 13.746C13.3811 14.1239 13.0863 14.5764 12.8934 15.0747C12.6741 15.6573 12.556 16.2731 12.5442 16.8955C12.5084 17.698 12.4975 17.9522 12.4975 19.9872C12.4975 22.0222 12.4975 22.2822 12.5442 23.0788C12.5567 23.7022 12.6742 24.3172 12.8934 24.9013C13.0866 25.3995 13.3816 25.8518 13.7596 26.2295C14.1375 26.6072 14.5901 26.9018 15.0884 27.0947C15.6696 27.3223 16.2853 27.4492 16.9092 27.4697C17.7117 27.5055 17.9659 27.5163 20.0009 27.5163C22.0359 27.5163 22.2967 27.5163 23.0925 27.4697C23.7152 27.4574 24.3312 27.3393 24.9142 27.1205C25.4123 26.9272 25.8646 26.6323 26.2424 26.2545C26.6202 25.8768 26.9151 25.4244 27.1084 24.9263C27.3275 24.343 27.445 23.728 27.4575 23.1038C27.4934 22.3022 27.5042 22.048 27.5042 20.0122C27.5025 17.9772 27.5025 17.7188 27.4559 16.9213ZM19.995 23.8355C17.8667 23.8355 16.1425 22.1113 16.1425 19.983C16.1425 17.8547 17.8667 16.1305 19.995 16.1305C21.0168 16.1305 21.9967 16.5364 22.7192 17.2589C23.4416 17.9814 23.8475 18.9613 23.8475 19.983C23.8475 21.0048 23.4416 21.9847 22.7192 22.7071C21.9967 23.4296 21.0168 23.8355 19.995 23.8355ZM24.0009 16.8863C23.8829 16.8865 23.766 16.8633 23.657 16.8182C23.5479 16.7731 23.4488 16.7069 23.3654 16.6235C23.282 16.54 23.2158 16.441 23.1707 16.3319C23.1256 16.2229 23.1024 16.106 23.1025 15.988C23.1025 15.8701 23.1258 15.7533 23.1709 15.6444C23.216 15.5355 23.2821 15.4365 23.3655 15.3531C23.4489 15.2697 23.5479 15.2036 23.6568 15.1584C23.7658 15.1133 23.8825 15.0901 24.0004 15.0901C24.1184 15.0901 24.2351 15.1133 24.3441 15.1584C24.453 15.2036 24.552 15.2697 24.6354 15.3531C24.7187 15.4365 24.7849 15.5355 24.83 15.6444C24.8751 15.7533 24.8984 15.8701 24.8984 15.988C24.8984 16.4847 24.4967 16.8863 24.0009 16.8863Z"
                                                        fill="white" />
                                                    <path
                                                        d="M19.9941 22.4855C21.3762 22.4855 22.4966 21.3651 22.4966 19.983C22.4966 18.6009 21.3762 17.4805 19.9941 17.4805C18.612 17.4805 17.4916 18.6009 17.4916 19.983C17.4916 21.3651 18.612 22.4855 19.9941 22.4855Z"
                                                        fill="white" />
                                                    <defs>
                                                        <linearGradient id="paint0_linear_633_66" x1="0" y1="0"
                                                            x2="39.4118" y2="39.4118"
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
                    </div> --}}
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
                                <svg width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg">
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
