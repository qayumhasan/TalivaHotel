<!-- header-bottom -->
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-12">
                    <div class="header-bottom clearfix">
                        @isset($logo)
                            <figure class="logo-box"><a href="{{url('/')}}"><img src="{{asset('back-end/images/logos')}}/{{$logo->main_logo}}" alt="{{$logo->main_logo}}"></a></figure>
                        @endisset

                        <div class="menu-area clearfix">
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                                        data-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="{{Request::path()==='/'?'current':''}}">
                                            <a href="{{url('/')}}">Home</a>
                                        </li>
                                        <li class="{{Request::path()==='rooms'?'current':''}}">
                                            <a href="{{route('room.list')}}">Rooms</a></li>

                                        <li class="{{Request::path()==='offers'?'current':''}}">
                                            <a href="{{route('offers.list')}}">Offers</a>
                                        </li>


                                        <li class="{{Request::path()==='about/us'?'current':''}}">
                                            <a href="{{route('about.us')}}">About Us</a>
                                        </li>

                                        <li class="{{Request::path()==='blog/lists'?'current':''}}">
                                            <a href="{{route('blog.lists')}}">News</a></li>


                                        <li class="{{Request::path()==='contact/page'?'current':''}}">
                                            <a href="{{route('contact.page')}}">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>

                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- header-bottom end -->


        <!--Sticky Header-->
        <div class="sticky-header clearfix">
            <div class="container clearfix">
                @isset($logo)
                    <figure class="logo-box"><a href="{{url('/')}}"><img src="{{asset('back-end/images/logos')}}/{{$logo->main_logo}}" alt="{{$logo->main_logo}}"></a></figure>
                @endisset

                <div class="menu-area">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation clearfix">
                                        <li class="{{Request::path()==='/'?'current':''}}">
                                            <a href="{{url('/')}}">Home</a>
                                        </li>
                                        <li class="{{Request::path()==='rooms'?'current':''}}">
                                            <a href="{{route('room.list')}}">Rooms</a></li>

                                        <li class="{{Request::path()==='offers'?'current':''}}">
                                            <a href="{{route('offers.list')}}">Offers</a>
                                        </li>


                                        <li class="{{Request::path()==='about/us'?'current':''}}">
                                            <a href="{{route('about.us')}}">About Us</a>
                                        </li>

                                        <li class="{{Request::path()==='blog/lists'?'current':''}}">
                                            <a href="{{route('blog.lists')}}">News</a></li>


                                        <li class="{{Request::path()==='contact/page'?'current':''}}">
                                            <a href="{{route('contact.page')}}">Contact</a>
                                        </li>
                                    </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div><!-- sticky-header end -->