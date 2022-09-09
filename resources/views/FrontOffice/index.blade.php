@extends('Layouts.front')

@section('content')
<link href="template/01-homepage/css/styles.css" rel="stylesheet">

<link href="template/01-homepage/css/responsive.css" rel="stylesheet">
<div class="row">

    <div class="col-lg-8 col-md-12">
        <div class="blog-posts">

            @foreach ($articles as $article)
            <div class="single-post">
                <div class="image-wrapper"><img src="{{ asset('img/articles/'.$article->photo) }}" alt="Blog Image"></div>

                <div class="icons">
                    <div class="left-area">
                        <a class="btn caegory-btn" href="/categorie/{{ $article->category_id }}"><b>{{ $article->categorie?$article->categorie->name:'-' }}</b></a>
                    </div>
                    <ul class="right-area social-icons">
                        <li><a href="#"><i class="ion-android-share-alt"></i>Partager</a></li>
                        <li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
                        <li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
                    </ul>
                </div>
                <h6 class=""><em>{{ date_format($article->created_at,'d/m/Y H:i') }}</em></h6>
                <h3 class="title"><a href="#"><b class="light-color">{{ $article->name }}</b></a></h3>
                <p>{{ Str::limit($article->body, 30, '...') }}</p>
                <a class="btn read-more-btn" href="/article/{{ $article->id }}"><b>Lire plus</b></a>
            </div><!-- single-post -->
            @endforeach

            <div class="row">

                <div class="col-lg-6 col-md-12">
                    <div class="single-post">
                        <div class="image-wrapper"><img src="images/blog-3-500x400.jpg" alt="Blog Image"></div>

                        <div class="icons">
                            <div class="left-area">
                                <a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
                            </div>
                            <ul class="right-area social-icons">
                                <li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
                                <li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
                                <li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
                            </ul>
                        </div>
                        <h6 class="date"><em>Monday, October 13, 2017</em></h6>
                        <h3 class="title"><a href="#"><b class="light-color">How to paint the wall and street</b></a></h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
                             laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
                            dolore magnam aliquam quaerat voluptatem.</p>
                        <a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
                    </div><!-- single-post -->
                </div><!-- col-sm-6 -->

                <div class="col-lg-6 col-md-12">
                    <div class="single-post">
                        <div class="image-wrapper"><img src="images/blog-4-500x400.jpg" alt="Blog Image"></div>

                        <div class="icons">
                            <div class="left-area">
                                <a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
                            </div>
                            <ul class="right-area social-icons">
                                <li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
                                <li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
                                <li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
                            </ul>
                        </div>
                        <h6 class="date"><em>Monday, October 13, 2017</em></h6>
                        <h3 class="title"><a href="#"><b class="light-color">One more night in the local clubs</b></a></h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
                             laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
                            dolore magnam aliquam quaerat voluptatem.</p>
                        <a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
                    </div><!-- single-post -->
                </div><!-- col-sm-6 -->

                <div class="col-lg-6 col-md-12">
                    <div class="single-post">
                        <div class="image-wrapper"><img src="images/blog-5-500x400.jpg" alt="Blog Image"></div>

                        <div class="icons">
                            <div class="left-area">
                                <a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
                            </div>
                            <ul class="right-area social-icons">
                                <li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
                                <li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
                                <li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
                            </ul>
                        </div>
                        <h6 class="date"><em>Monday, October 13, 2017</em></h6>
                        <h3 class="title"><a href="#"><b class="light-color">A new festival in your town</b></a></h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
                             laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
                            dolore magnam aliquam quaerat voluptatem.</p>
                        <a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
                    </div><!-- single-post -->
                </div><!-- col-sm-6 -->

                <div class="col-lg-6 col-md-12">
                    <div class="single-post">
                        <div class="image-wrapper"><img src="images/blog-6-500x400.jpg" alt="Blog Image"></div>

                        <div class="icons">
                            <div class="left-area">
                                <a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
                            </div>
                            <ul class="right-area social-icons">
                                <li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
                                <li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
                                <li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
                            </ul>
                        </div>
                        <h6 class="date"><em>Monday, October 13, 2017</em></h6>
                        <h3 class="title"><a href="#"><b class="light-color">How to make your home modern</b></a></h3>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
                             laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
                            dolore magnam aliquam quaerat voluptatem.</p>
                        <a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
                    </div><!-- single-post -->
                </div><!-- col-sm-6 -->

                <div class="col-lg-12 col-md-12">
                    <div class="single-post post-style-2">
                        <div class="image-wrapper width-50 left-area">
                            <img src="images/blog-7-500x400.jpg" alt="Blog Image"></div>

                        <div class="post-details width-50 right-area">

                            <div class="icons">
                                <div class="left-area">
                                    <a class="btn caegory-btn" href="#"><b>TRAVEL</b></a>
                                </div>
                                <ul class="right-area social-icons">
                                    <li><a href="#"><i class="ion-android-share-alt"></i>Share</a></li>
                                    <li><a href="#"><i class="ion-android-favorite-outline"></i>03</a></li>
                                    <li><a href="#"><i class="ion-android-textsms"></i>06</a></li>
                                </ul>
                            </div>
                            <h6 class="date"><em>Monday, October 13, 2017</em></h6>
                            <h3 class="title"><a href="#"><b class="light-color">How to througn the best engagement party</b></a></h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit doloremque
                                 laudantium, totam rem aperiam, eaque ipsa quae ab illo veritatis et quasi
                                dolore magnam aliquam quaerat voluptatem.</p>
                            <a class="btn read-more-btn" href="#"><b>READ MORE</b></a>
                        </div><!-- post-details -->

                    </div><!-- single-post -->
                </div><!-- col-sm-6 -->

            </div><!-- row -->

            <a class="btn load-more-btn" target="_blank" href="#">LOAD OLDER POSTS</a>

        </div><!-- blog-posts -->
    </div><!-- col-lg-4 -->


    <div class="col-lg-4 col-md-12">
        <div class="sidebar-area">

            <div class="sidebar-section about-author center-text">
                <div class="author-image"><img src="images/author-1-200x200.jpg" alt="Autohr Image"></div>

                <ul class="social-icons">
                    <li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
                    <li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
                    <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                    <li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
                    <li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
                </ul><!-- right-area -->

                <h4 class="author-name"><b class="light-color">Cristine Smith</b></h4>
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                    dolore magnam aliquam quaerat voluptatem.</p>

                <div class="signature-image"><img src="images/signature-image.png" alt="Signature Image"></div>
                <a class="read-more-link" href="#"><b>READ MORE</b></a>

            </div><!-- sidebar-section about-author -->

            <div class="sidebar-section src-area">

                <form action="post">
                    <input class="src-input" type="text" placeholder="Search">
                    <button class="src-btn" type="submit"><i class="ion-ios-search-strong"></i></button>
                </form>

            </div><!-- sidebar-section src-area -->



            <div class="sidebar-section category-area">
                <h4 class="title"><b class="light-color">Categories</b></h4>
                @foreach ($categories as $categorie)
                <a class="category" href="#">
                    <img src="{{ asset('img/categories/'.$categorie->image_uri) }}" alt="Category Image">
                    <h6 class="name">{{ $categorie->name }}</h6>
                </a>
                @endforeach

            </div><!-- sidebar-section category-area -->

            <div class="sidebar-section latest-post-area">
                <h4 class="title"><b class="light-color">Derniers articles</b></h4>

                @foreach ($articles as $art)
                <div class="latest-post" href="#">
                    <div class="l-post-image"><img src="{{ asset('img/articles/'.$art->photo) }}" alt="Category Image"></div>
                    <div class="post-info">
                        <a class="btn category-btn" href="#">{{ $art->name }}</a>

                        <h6 class="date"><em>{{ date_format($art->created_at,'d/m/Y') }}</em></h6>
                    </div>
                </div>
                @endforeach

            </div><!-- sidebar-section latest-post-area -->

            <div class="sidebar-section advertisement-area">
                <h4 class="title"><b class="light-color">Advertisement</b></h4>
                <a class="advertisement-img" href="#">
                    <img src="images/advertise-1-400x500.jpg" alt="Advertisement Image">
                    <h6 class="btn btn-2 discover-btn">DISCOVER</h6>
                </a>
            </div><!-- sidebar-section advertisement-area -->

            <div class="sidebar-section instagram-area">
                <h4 class="title"><b class="light-color">Instagram</b></h4>
                <ul class="instagram-img">
                    <li><a href="#"><img src="images/instragram-side-1-150x150.jpg" alt="Instagram Image"></a></li>
                    <li><a href="#"><img src="images/instragram-side-2-150x150.jpg" alt="Instagram Image"></a></li>
                    <li><a href="#"><img src="images/instragram-side-3-150x150.jpg" alt="Instagram Image"></a></li>
                    <div class="clearfix"></div>
                    <li><a href="#"><img src="images/instragram-side-4-150x150.jpg" alt="Instagram Image"></a></li>
                    <li><a href="#"><img src="images/instragram-side-5-150x150.jpg" alt="Instagram Image"></a></li>
                    <li><a href="#"><img src="images/instragram-side-6-150x150.jpg" alt="Instagram Image"></a></li>
                </ul>
            </div><!-- sidebar-section instagram-area -->

            <div class="sidebar-section tags-area">
                <h4 class="title"><b class="light-color">Mots de clef</b></h4>
                <ul class="tags">
                    @foreach ($tags as $tag)
                    <li><a class="btn" href="#">{{ $tag->name }}</a></li>
                    @endforeach
                </ul>
            </div><!-- sidebar-section tags-area -->


        </div><!-- about-author -->
    </div><!-- col-lg-4 -->

</div><!-- row -->
@endsection

@section('slider')
<div class="main-slider">
    <div id="slider">
        @foreach ($slides as $slide)
        <div class="ls-slide" data-ls="bgsize:cover; bgposition:50% 50%; duration:4000; transition2d:104; kenburnsscale:1.00;">
            <img src="{{ asset('img/slides/'.$slide->image_uri) }}" class="ls-bg" alt="" />

                <div class="slider-content ls-l" style="top:60%; left:30%;" data-ls="offsetyin:100%; offsetxout:-50%; durationin:800; delayin:100; durationout:400; parallaxlevel:0;">
                    <a class="btn" href="#">Action</a>
                    <h3 class="title"><b>{{ $slide->titre }}</b></h3>
                    <h6>{{ date_format($slide->created_at,'d/m/Y') }}</h6>
                </div>

        </div><!-- ls-slide -->
        @endforeach
    </div><!-- slider -->
</div><!-- main-slider -->
@endsection
