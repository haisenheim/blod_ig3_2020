@extends('Layouts.front')

@section('content')
<link href="template/04-Contact/css/styles.css" rel="stylesheet">

<link href="template/04-Contact/css/responsive.css" rel="stylesheet">
<div class="row">

    <div class="col-lg-8 col-md-12">
        <div class="blog-posts">

            <div class="single-post">
                <div class="image-wrapper"><img src="images/blog-8-1000x600.jpg" alt="Blog Image"></div>

                <h3 class="title"><b class="light-color">Contact me</b></h3>
                <p class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                     laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                     architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                     consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et
                    dolore magnam aliquam quaerat voluptatem.</p>

            </div><!-- single-post -->

            <div class="leave-comment-area">
                <h4 class="title"><b class="light-color">Leave a comment</b></h4>
                <div class="leave-comment">

                    <form method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="name-input" type="text" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input class="email-input" type="text" placeholder="Email">
                            </div>
                            <div class="col-sm-12">
                                <input class="subject-input" type="text" placeholder="Subject">
                            </div>
                            <div class="col-sm-12">
                                <textarea class="message-input" rows="6" placeholder="Message"></textarea>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-2"><b>COMMENT</b></button>
                            </div>

                        </div><!-- row -->
                    </form>

                </div><!-- leave-comment -->

            </div><!-- comments-area -->

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

            <div class="sidebar-section newsletter-area">
                <h5 class="title"><b>Subscribe to our newsletter</b></h5>
                <form action="post">
                    <input class="email-input" type="text" placeholder="Your email here">
                    <button class="btn btn-2" type="submit">SUBSCRIBE</button>
                </form>
            </div><!-- sidebar-section newsletter-area -->

            <div class="sidebar-section advertisement-area">
                <h4 class="title"><b class="light-color">Advertisement</b></h4>
                <a class="advertisement-img" href="#">
                    <img src="images/advertise-1-400x500.jpg" alt="Advertisement Image">
                    <h6 class="btn btn-2 discover-btn">DISCOVER</h6>
                </a>
            </div><!-- sidebar-section advertisement-area -->

        </div><!-- sidebar-area -->
    </div><!-- col-lg-4 -->

</div><!-- row -->
@endsection


