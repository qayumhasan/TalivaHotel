
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Room Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('room.index')}}">Rooms</a>
                                </li>
                                <li>
                                    <a href="{{route('roomtype.index')}}">Room Types</a>
                                </li>
                                <li>
                                    <a href="{{route('amenitie.index')}}">Amenities</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="{{route('guest.info')}}"><i class="fa fa-table fa-fw"></i> Guests</a>
                        </li>
                        <li>
                            <a href="{{route('book.info')}}"><i class="fa fa-table fa-fw"></i> Bookings</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Employee Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('employee.index')}}">Employee List</a>
                                </li>
                                <li>
                                    <a href="{{route('department.index')}}">Departments</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Pages Management<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Home Page <span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li>
                                            <a href="{{route('slider.index')}}">Slider</a>
                                        </li>
                                        <li>
                                            <a href="{{route('service.index')}}">Services</a>
                                        </li>
                                        <li>
                                            <a href="{{route('video.index')}}">Video Section</a>
                                        </li>
                                        <li>
                                            <a href="{{route('testimonial.create')}}">Testimonial</a>
                                        </li>
                                    </ul>
                                    <!-- /.nav-third-level -->
                                </li>
                                <li>
                                    <a href="{{route('contact.index')}}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{route('blog.index')}}">Blogs Us</a>
                                </li>
                                <li>
                                    <a href="{{route('about.index')}}">About Us</a>
                                </li>
                                <li>
                                    <a href="{{route('extraservices.index')}}">Extra Services</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('messages.index')}}"><i class="fa fa-table fa-fw"></i> Messages</a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{route('logos.index')}}">Web Logos</a>
                                </li>
                                 <li>
                                    <a href="{{route('pageoptions.index')}}">Header & Footer Option</a>
                                </li>

                                <li>
                                    <a href="{{route('socialmedias.index')}}">Social Media Setting</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->