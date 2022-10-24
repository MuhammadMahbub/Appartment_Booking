@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | News Details
@endsection

@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->news_page_banner }});">
        <div class="container">
            <div class="breadcrumb-text">
                <span>{{ title_banner_settings()->news_page_subtitle }}</span>
                <h2 class="page-title">{{ title_banner_settings()->news_page_title }}</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">Blog</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== BLOG SECTION START ======-->
    <section class="blog-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="news-details-box">
                        <div class="entry-content">
                            <a href="#" class="cat">{{ $single_blog->blogCategory->name ?? ''}}</a>
                            <h2 class="title">{{ $single_blog->title }}</h2>
                            <ul class="post-meta">
                                <li><a href="#"><i class="fal fa-user"></i>by {{ $single_blog->createdBy->name ?? 'Admin' }}</a></li>
                                <li><a href="#"><i class="fal fa-calendar-alt"></i>{{ $single_blog->created_at->format('d M Y') }}</a></li>
                                <li><a href="#"><i class="fal fa-comments"></i>35 Comments</a></li>
                            </ul>
                            <p class="mb-30">
                                {!! $single_blog->short_description ?? '' !!}
                            </p>
                            <figure class="mt-45 mb-45">
                                <img src="{{ asset('assets/img/blog-details/01.jpg') }}" alt="Image">
                            </figure>
                            <p>{!! $single_blog->long_description ?? '' !!}</p>
                            {{-- <h3 class="subtitle"> A cleansing hot shower or bath</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
                            </p>
                            <div class="gap"></div>
                            <h3 class="subtitle">Setting the mood with incense</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.
                            </p>
                            <div class="gap"></div>
                            <h3 class="subtitle">Setting the mood with incense</h3>
                            <ul class="list-icon">
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                                <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</li>
                            </ul>
                            <blockquote class="mt-40 mb-40">
                                <span class="quote-by">by Hetmayar</span>
                                Viral dreamcatcher keytar typewriter, aest hetic offal umami. Aesthetic polaroid pug
                                pitchfork post-ironic.
                            </blockquote>
                            <p class="mb-30">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem accusantium.
                            </p>
                            <div class="row align-items-center">
                                <div class="col-md-5 mb-30">
                                    <img src="{{ asset('assets/img/blog-details/02.jpg') }}" alt="Image">
                                </div>
                                <div class="col-md-7 mb-30">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint occaecat
                                    </p>
                                </div>
                            </div>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                                mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem.
                            </p> --}}
                        </div>
                        <div class="entry-footer">
                            <div class="tag-and-share mt-50 mb-50 d-md-flex align-items-center justify-content-between">
                                <div class="tag">
                                    {{-- <h5>Related Tags</h5>
                                    <ul>
                                        <li><a href="#">Popular</a></li>
                                        <li><a href="#">desgin</a></li>
                                        <li><a href="#">ux</a></li>
                                    </ul> --}}
                                </div>
                                <div class="share text-md-right">
                                    <h5>Social Share</h5>
                                    <ul>
                                        <li><a href="{{ socialurls()->fb_url }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ socialurls()->twitter_url }}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{ socialurls()->behance_url }}"><i class="fab fa-behance"></i></a></li>
                                        <li><a href="{{ socialurls()->youtube_url }}"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="{{ socialurls()->linkedin_url }}"><i class="fab fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="post-nav d-md-flex align-items-center justify-content-between">
                                <div class="prev-post">
                                    <span>Prev Post</span>
                                    <a href="#">Tips On Minimalist</a>
                                </div>
                                <span class="icon">
                                    <img src="{{ asset('assets/img/blog-details/icon.png') }}" alt="icon">
                                </span>
                                <div class="next-post text-right">
                                    <span>Next Post</span>
                                    <a href="#">Less Is More</a>
                                </div>
                            </div>
                            <div class="related-post mt-50">
                                <h3 class="mb-30">Releted Post</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="related-post-box mb-50">
                                            <div class="thumb"
                                                style="background-image: url({{ asset('assets/img/blog-details/03.jpg') }});">
                                            </div>
                                            <div class="desc">
                                                <a href="#" class="date"><i class="far fa-calendar-alt"></i>24th March
                                                    2019</a>
                                                <h4><a href="#">A series of iOS 7 inspire vector icons sense.</a></h4>
                                                <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed
                                                    doing.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="related-post-box mb-50">
                                            <div class="thumb"
                                                style="background-image: url({{ asset('assets/img/blog-details/04.jpg') }});">
                                            </div>
                                            <div class="desc">
                                                <a href="#" class="date"><i class="far fa-calendar-alt"></i>24th March
                                                    2019</a>
                                                <h4><a href="#">A series of iOS 7 inspire vector icons sense.</a></h4>
                                                <p>Lorem ipsum dolor sit amet, conse ctet ur adipisicing elit, sed
                                                    doing.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="author-info-box mb-45">
                                <div class="author-img">
                                    <img src="{{ asset('assets/img/blog-details/author.jpg') }}" alt="Image">
                                </div>
                                <div class="info-text">
                                    <span>Written by</span>
                                    <h3>Rosalina D. William</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation is enougn for today.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="comment-template">
                            <h3 class="box-title">03 Comments</h3>
                            <ul class="comments-list mb-100">
                                <li>
                                    <div class="comment-img">
                                        <img src="{{ asset('assets/img/blog-details/avatar-1.jpg') }}" alt="img">
                                    </div>
                                    <div class="comment-desc">
                                        <div class="desc-top">
                                            <h6>Rosalina Kelian</h6>
                                            <span class="date">19th May 2018</span>
                                            <a href="#" class="reply-link"><i class="far fa-reply"></i>Reply</a>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                    <ul class="children">
                                        <li>
                                            <div class="comment-img">
                                                <img src="{{ asset('assets/img/blog-details/avatar-2.jpg') }}" alt="img">
                                            </div>
                                            <div class="comment-desc">
                                                <div class="desc-top">
                                                    <h6>Rosalina Kelian</h6>
                                                    <span class="date">19th May 2018</span>
                                                    <a href="#" class="reply-link"><i class="far fa-reply"></i>Reply</a>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                                    eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                    veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                    commodo
                                                    consequat.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="comment-img">
                                        <img src="{{ asset('assets/img/blog-details/avatar-3.jpg') }}" alt="img">
                                    </div>
                                    <div class="comment-desc">
                                        <div class="desc-top">
                                            <h6>Rosalina Kelian</h6>
                                            <span class="date">19th May 2018</span>
                                            <a href="#" class="reply-link"><i class="far fa-reply"></i>Reply</a>
                                        </div>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                            <h3 class="box-title">Post Comment</h3>
                            <div class="comment-form">
                                <form action="#">
                                    <div class="input-group input-group-two textarea mb-20">
                                        <textarea placeholder="Type your comments...."></textarea>
                                        <div class="icon"><i class="fas fa-pen"></i></div>
                                    </div>
                                    <div class="input-group input-group-two mb-20">
                                        <input type="text" placeholder="Type your Name....">
                                        <div class="icon"><i class="fas fa-user"></i></div>
                                    </div>
                                    <div class="input-group input-group-two mb-20">
                                        <input type="email" placeholder="Type your email....">
                                        <div class="icon"><i class="fas fa-envelope"></i></div>
                                    </div>
                                    <div class="input-group input-group-two mb-20">
                                        <input type="url" placeholder="Type your Website....">
                                        <div class="icon"><i class="fas fa-globe"></i></div>
                                    </div>
                                    <div class="input-group  mt-30">
                                        <button type="submit" class="main-btn btn-filled"><i
                                                class="far fa-comments"></i> Post
                                            Comment</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Blog Sidebar -->
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="sidebar">
                        <!-- About Author Widget -->
                        <div class="widget about-author-widget mb-40">
                            <h5 class="widget-title">About Me</h5>
                            <div class="author-box">
                                <img src="{{ asset('assets/img/author.png') }}" alt="author">
                                <h6>Rosalina D. Willaimson</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore.</p>
                                <ul class="social-icon">
                                    <li><a href="{{ socialurls()->fb_url }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ socialurls()->twitter_url }}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ socialurls()->behance_url }}"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="{{ socialurls()->linkedin_url }}"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="{{ socialurls()->youtube_url }}"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Search Widget -->
                        <div class="widget search-widget mb-40">
                            <h5 class="widget-title">Search Objects</h5>
                            <form action="#">
                                <input type="text" placeholder="Search your keyword...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <!-- Popular Post Widget -->
                        <div class="widget popular-feeds mb-40">
                            <h5 class="widget-title">Popular Feeds</h5>
                            <div class="popular-feed-loop">
                                <div class="single-popular-feed">
                                    <div class="feed-img">
                                        <img src="{{ asset('assets/img/recent-post-wid/04.png') }}" alt="Image">
                                    </div>
                                    <div class="feed-desc">
                                        <h6><a href="#">Lorem ipsum dolor sit cing elit, sed do.</a></h6>
                                        <span class="time"><i class="far fa-calendar-alt"></i> 24th March 2020</span>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-img">
                                        <img src="{{ asset('assets/img/recent-post-wid/05.png') }}" alt="Image">
                                    </div>
                                    <div class="feed-desc">
                                        <h6><a href="#">Lorem ipsum dolor sit cing elit, sed do.</a></h6>
                                        <span class="time"><i class="far fa-calendar-alt"></i> 24th March 2020</span>
                                    </div>
                                </div>
                                <div class="single-popular-feed">
                                    <div class="feed-img">
                                        <img src="{{ asset('assets/img/recent-post-wid/06.png') }}" alt="Image">
                                    </div>
                                    <div class="feed-desc">
                                        <h6><a href="#">Lorem ipsum dolor sit cing elit, sed do.</a></h6>
                                        <span class="time"><i class="far fa-calendar-alt"></i> 24th March 2020</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Categories Widget -->
                        <div class="widget categories-widget mb-40">
                            <h5 class="widget-title">Categories</h5>
                            <ul>
                                @foreach ($categories as $cat)
                                <li>
                                    <a href="#!">{{ $cat->name ?? '' }}<span>{{ $cat->allBlogs->count() }}</span></a>
                                </li>
                                @endforeach
                                {{-- <li>
                                    <a href="#">Consultant<span>26</span></a>
                                </li>
                                <li>
                                    <a href="#">Creative<span>26</span></a>
                                </li>
                                <li>
                                    <a href="#">UI/UX<span>26</span></a>
                                </li>
                                <li>
                                    <a href="#">Technology<span>26</span></a>
                                </li> --}}
                            </ul>
                        </div>
                        <!-- Social Icon Widget -->
                        <div class="widget socail-widget mb-40">
                            <h5 class="widget-title">Never Miss News</h5>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <!-- Twitter Feeds Widget -->
                        {{-- <div class="widget twitter-feed-widget mb-40">
                            <h5 class="widget-title">Twitter Feeds</h5>
                            <div class="twitter-looop">
                                <div class="single-twitter">
                                    <a href="#">
                                        Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @
                                        ThemeForest https://t.co/2r1POjOjgVC… https://t.co/rDAnPyClu1
                                    </a>
                                    <span class="date">November 25, 2018</span>
                                </div>
                                <div class="single-twitter">
                                    <a href="#">
                                        Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @
                                        ThemeForest https://t.co/2r1POjOjgVC… https://t.co/rDAnPyClu1
                                    </a>
                                    <span class="date">November 25, 2018</span>
                                </div>
                                <div class="single-twitter">
                                    <a href="#">
                                        Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @
                                        ThemeForest https://t.co/2r1POjOjgVC… https://t.co/rDAnPyClu1
                                    </a>
                                    <span class="date">November 25, 2018</span>
                                </div>
                            </div>
                        </div> --}}
                        <!-- Instagram Feeds Widget -->
                        {{-- <div class="widget instagram-feed-widget mb-40">
                            <h5 class="widget-title">Instagram Feeds</h5>
                            <ul>
                                <li><img src="{{ asset('assets/img/instagram-wid/01.jpg') }}" alt="Image"></li>
                                <li><img src="{{ asset('assets/img/instagram-wid/02.jpg') }}" alt="Image"></li>
                                <li><img src="{{ asset('assets/img/instagram-wid/03.jpg') }}" alt="Image"></li>
                                <li><img src="{{ asset('assets/img/instagram-wid/04.jpg') }}" alt="Image"></li>
                                <li><img src="{{ asset('assets/img/instagram-wid/05.jpg') }}" alt="Image"></li>
                                <li><img src="{{ asset('assets/img/instagram-wid/06.jpg') }}" alt="Image"></li>
                                <li><img src="{{ asset('assets/img/instagram-wid/07.jpg') }}" alt="Image"></li>
                                <li><img src="{{ asset('assets/img/instagram-wid/08.jpg') }}" alt="Image"></li>
                                <li><img src="{{ asset('assets/img/instagram-wid/09.jpg') }}" alt="Image"></li>
                            </ul>
                        </div> --}}
                        <!-- Popular Tags Widget -->
                        {{-- <div class="widget popular-tag-widget mb-40">
                            <h5 class="widget-title">Popular Tags</h5>
                            <ul>
                                <li><a href="#">Popular</a></li>
                                <li><a href="#">design</a></li>
                                <li><a href="#">ux</a></li>
                                <li><a href="#">usability</a></li>
                                <li><a href="#">develop</a></li>
                                <li><a href="#">icon</a></li>
                                <li><a href="#">business</a></li>
                                <li><a href="#">consult</a></li>
                                <li><a href="#">kit</a></li>
                                <li><a href="#">keyboard</a></li>
                                <li><a href="#">mouse</a></li>
                                <li><a href="#">tech</a></li>
                            </ul>
                        </div> --}}
                        <!-- Banner Ad Widget -->
                        {{-- <div class="widget banner-ad-widget">
                            <img src="{{ asset('assets/img/banner-widget.jpg') }}" alt="Image">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== BLOG SECTION END ======-->
@endsection
