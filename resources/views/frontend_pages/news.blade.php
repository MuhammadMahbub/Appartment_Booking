@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | News
@endsection

@section('css')
<style>
    .post-media img{
        width : 100%;
        height: 448px;
    }
</style>
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
                <div class="col-lg-8 col-md-10">
                    <div class="blog-loop">
                        @foreach ($blogs as $blog)
                            <div class="post-box mb-40">
                                <div class="post-media">
                                    <img src="{{ asset('uploads/blogs/'. $blog->image) }}" alt="Blog Image">
                                </div>
                                <div class="post-desc">
                                    <a href="#" class="cat">{{ $blog->blogCategory->name ?? 'N/A'}}</a>
                                    <h2>
                                        <a href="{{ route('news.details', $blog->slug) }}">{{ $blog->title ?? ''}}</a>
                                    </h2>
                                    <ul class="post-meta">
                                        <li><a href="#"><i class="far fa-eye"></i>232 Views</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                        <li><a href="#"><i class="far fa-calendar-alt"></i>{{ $blog->created_at->format('Y-m-d') }}</a></li>
                                    </ul>
                                    <p>{{ $blog->short_description ?? ''}}</p>

                                    <div class="post-footer">
                                        <div class="author">
                                            <a href="#!">
                                                    <img src="{{ $blog->createdBy->profile_photo_url ?? asset('uploads/blogs/author.png') }}" alt="Image">
                                                {{ $blog->createdBy->name ?? 'Admin' }}
                                            </a>
                                        </div>
                                        <div class="read-more">
                                            <a href="{{ route('news.details', $blog->slug) }}"><i class="far fa-arrow-right"></i>Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="post-box with-video mb-40">
                            <div class="post-media">
                                <img src="{{ asset('assets/img/blog/02.jpg') }}" alt="Image">
                                <a href="#" class="play-icon"><i class="fas fa-play"></i></a>
                            </div>
                            <div class="post-desc">
                                <a href="#" class="cat">Businese</a>
                                <h2>
                                    <a href="#">Adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore.</a>
                                </h2>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>232 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2019</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>

                                <div class="post-footer">
                                    <div class="author">
                                        <a href="#">
                                            <img src="{{ asset('assets/img/author-small.png') }}" alt="Image">
                                            by Hetmayar
                                        </a>
                                    </div>
                                    <div class="read-more">
                                        <a href="news-details.html"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-box mb-40">
                            <div class="post-media">
                                <img src="{{ asset('assets/img/blog/03.jpg') }}" alt="Image">
                            </div>
                            <div class="post-desc">
                                <a href="#" class="cat">Businese</a>
                                <h2>
                                    <a href="#">Magna aliqua. Ut enim ad minim venia
                                        m, quis nostrud exercitation ullamco</a>
                                </h2>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>232 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2019</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>

                                <div class="post-footer">
                                    <div class="author">
                                        <a href="#">
                                            <img src="{{ asset('assets/img/author-small.png') }}" alt="Image">
                                            by Hetmayar
                                        </a>
                                    </div>
                                    <div class="read-more">
                                        <a href="news-details.html"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-box sound-cloud-post mb-40">
                            <div class="post-media">
                                <img src="{{ asset('assets/img/blog/06.jpg') }}" alt="Image">
                            </div>
                            <div class="post-desc">
                                <a href="#" class="cat">Businese</a>
                                <h2>
                                    <a href="#">Laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor.</a>
                                </h2>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>232 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2019</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>

                                <div class="post-footer">
                                    <div class="author">
                                        <a href="#">
                                            <img src="{{ asset('assets/img/author-small.png') }}" alt="Image">
                                            by Hetmayar
                                        </a>
                                    </div>
                                    <div class="read-more">
                                        <a href="news-details.html"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-box no-thumb mb-40">
                            <div class="post-desc">
                                <a href="#" class="cat">Businese</a>
                                <h2>
                                    <a href="#">In reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat.</a>
                                </h2>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>232 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2019</a></li>
                                </ul>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>

                                <div class="post-footer">
                                    <div class="author">
                                        <a href="#">
                                            <img src="{{ asset('assets/img/author-small.png') }}" alt="Image">
                                            by Hetmayar
                                        </a>
                                    </div>
                                    <div class="read-more">
                                        <a href="news-details.html"><i class="far fa-arrow-right"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="post-box quote-post mb-40">
                            <div class="post-desc">
                                <h2>
                                    <a href="#">Excepteur sint occaecat cupida
                                        tat non proident, sunt in.</a>
                                </h2>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>232 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2019</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-box title-with-thumb mb-40">
                            <div class="post-desc">
                                <a href="#" class="cat">Businese</a>
                                <h2>
                                    <a href="#">Culpa qui officia deserunt mollit anim
                                        id est laborum. Sed ut perspiciatis</a>
                                </h2>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>232 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2019</a></li>
                                </ul>
                            </div>
                        </div> --}}
                    </div>
                    <div class="pagination-wrap">
                        <ul>
                            <li><a href="#"><i class="far fa-angle-double-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><i class="far fa-angle-double-right"></i></a></li>
                        </ul>
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
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
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
                                        <a href="#!">{{ $cat->name }}<span>{{ $cat->allBlogs->count() }}</span></a>
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
                                <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
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
