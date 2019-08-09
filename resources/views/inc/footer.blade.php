<footer class="sit-footer">
    @if(count($posts) > 0)
    <div class="outer-container">
        <div class="container-fluid">
            <div class="row footer-recent-posts">
                @foreach ($posts as $post)
                @if($loop->index < 4)
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="footer-post-wrap flex justify-content-between">
                        <figure>
                            <a href="#"><img src="{{asset('storage/barner_images/'.$post->barner_image) }}" alt=""></a>
                        </figure>

                        <div class="footer-post-cont flex flex-column justify-content-between">
                            <header class="entry-header">
                                <div class="posted-date">
                                    {{$post->created_at->format('F j, Y')}}
                                </div><!-- .entry-header -->

                                <h3><a href="#">{{$post->title}}</a></h3>

                                <div class="tags-links">
                                    <a href="#">#winter</a>
                                    <a href="#">#love</a>
                                    <a href="#">#snow</a>
                                    <a href="#">#january</a>
                                </div><!-- .tags-links -->
                            </header><!-- .entry-header -->

                            <footer class="entry-footer">
                                <a class="read-more" href="/posts/{{$post->id}}">read more</a>
                            </footer><!-- .entry-footer -->
                        </div><!-- .footer-post-cont -->
                    </div><!-- .footer-post-wrap -->
                </div><!-- .col -->
                @endif
                @endforeach

            </div><!-- .row -->
        </div><!-- .container-fluid -->
    </div><!-- .outer-container -->
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="footer-instagram flex flex-wrap flex-lg-nowrap">
                <figure>
                    <a href="#"><img src="{{asset('images/a.jpg')}}" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="{{asset('images/b.jpg')}}" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="{{asset('images/c.jpg')}}" alt=""></a>
                </figure>

                <figure>
                        <a href="#"><img src="{{asset('images/d.jpg')}}" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="{{asset('images/e.jpg')}}" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="{{asset('images/f.jpg')}}" alt=""></a>
                </figure>

                <figure>
                    <a href="#"><img src="{{asset('images/g.jpg')}}" alt=""></a>
                </figure>
            </div>
        </div><!-- .row -->
    </div><!-- .container -->

    <div class="footer-bar">
        <div class="outer-container">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6">
                        <div class="footer-copyright">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div><!-- .footer-copyright -->
                    </div><!-- .col-xl-4 -->

                    <div class="col-12 col-md-6">
                        <div class="footer-social">
                            <ul class="flex justify-content-center justify-content-md-end align-items-center">
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div><!-- .footer-social -->
                    </div><!-- .col-xl-4 -->
                </div><!-- .row -->
            </div><!-- .container-fluid -->
        </div><!-- .outer-container -->
    </div><!-- .footer-bar -->
</footer><!-- .sit-footer -->