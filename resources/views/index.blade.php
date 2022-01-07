@extends('layouts.master_home')

@section('content')

    <!--Card - About-->
    <div class="card-inner animated active" id="about-card">
        <div class="card-wrap">

            <!--
                About
            -->
            <div class="content about">

                <!-- title -->
                <div class="title">About Me</div>

                <!-- content -->
                <div class="row">
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="text-box">
                            <p>
                                I am Ryan Adlard, web designer from USA, California. I have rich experience in
                                web site design and building and customization, also I am good at wordpress.
                                I love to talk with you about our unique.
                            </p>
                        </div>
                    </div>
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="info-list">
                            <ul>
                                <li><strong>Age . . . . .</strong> 24</li>
                                <li><strong>Residence . . . . .</strong> USA</li>
                                <li><strong>Freelance . . . . .</strong> Available</li>
                                <li><strong>Address . . . . .</strong> California, USA</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>

            <!--
                Services
            -->
            <div class="content services">

                <!-- title -->
                <div class="title">My Services</div>

                <!-- content -->
                <div class="row service-items border-line-v">

                    <!-- service item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                        <div class="service-item">
                            <div class="icon"><span class="ion ion-code"></span></div>
                            <div class="name">Web Development</div>
                            <p>
                                Modern and mobile-ready website that will help you
                                reach all of your marketing.
                            </p>
                        </div>
                    </div>

                    <!-- service item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-h">
                        <div class="service-item">
                            <div class="icon"><span class="ion ion-music-note"></span></div>
                            <div class="name">Music Writing</div>
                            <p>
                                Music copying, transcription, arranging and composition services.
                            </p>
                        </div>
                    </div>

                    <!-- service item -->
                    <div class="col col-d-6 col-t-6 col-m-12">
                        <div class="service-item">
                            <div class="icon"><span class="ion ion-speakerphone"></span></div>
                            <div class="name">Advetising</div>
                            <p>
                                Advertising services include television, radio, print, mail and web.
                            </p>
                        </div>
                    </div>

                    <!-- service item -->
                    <div class="col col-d-6 col-t-6 col-m-12">
                        <div class="service-item">
                            <div class="icon"><span class="ion ion-ios-game-controller-b"></span></div>
                            <div class="name">Game Development</div>
                            <p>
                                Developing memorable and unique mobile android, ios games.
                            </p>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>

            </div>

            <!--
                Price Tables
            -->
            <div class="content pricing">

                <!-- title -->
                <div class="title">Pricing</div>

                <!-- content -->
                <div class="row pricing-items">

                    <!-- pricing item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="pricing-item">
                            <div class="icon"><i class="ion ion-speedometer speed-basic"></i></div>
                            <div class="name">Basic</div>
                            <div class="amount">
                                <span class="dollar">$</span>
                                <span class="number">22</span>
                                <span class="period">hour</span>
                            </div>
                            <div class="feature-list">
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li class="disable">Music Writing</li>
                                    <li class="disable">Photography <strong>new</strong></li>
                                </ul>
                            </div>
                            <div class="lnks">
                                <a href="#" class="lnk">
                                    <span class="text">Buy Basic</span>
                                    <i class="ion ion-speedometer speed-basic"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- pricing item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="pricing-item">
                            <div class="icon"><i class="ion ion-speedometer"></i></div>
                            <div class="name">Pro</div>
                            <div class="amount">
                                <span class="dollar">$</span>
                                <span class="number">48</span>
                                <span class="period">hour</span>
                            </div>
                            <div class="feature-list">
                                <ul>
                                    <li>Web Development</li>
                                    <li>Advetising</li>
                                    <li>Game Development</li>
                                    <li>Music Writing</li>
                                    <li>Photography <strong>new</strong></li>
                                </ul>
                            </div>
                            <div class="lnks">
                                <a href="#" class="lnk">
                                    <span class="text">Buy Pro</span>
                                    <i class="ion ion-speedometer"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>

            </div>

            <!--
                Fun Fact
            -->
            <div class="content fuct">

                <!-- title -->
                <div class="title">Fun Fact</div>

                <!-- content -->
                <div class="row fuct-items">

                    <!-- fuct item -->
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="fuct-item">
                            <div class="icon"><span class="ion ion-disc"></span></div>
                            <div class="name">80 Albumes Listened</div>
                        </div>
                    </div>

                    <!-- fuct item -->
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="fuct-item">
                            <div class="icon"><span class="ion ion-trophy"></span></div>
                            <div class="name">15 Awards Won</div>
                        </div>
                    </div>

                    <!-- fuct item -->
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="fuct-item">
                            <div class="icon"><span class="ion ion-coffee"></span></div>
                            <div class="name">1 000 Cups of coffee</div>
                        </div>
                    </div>

                    <!-- fuct item -->
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="fuct-item">
                            <div class="icon"><span class="ion ion-flag"></span></div>
                            <div class="name">10 Countries Visited</div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>

            </div>

            <!--
                Clients
            -->
            <div class="content clients">

                <!-- title -->
                <div class="title">Clients</div>

                <!-- content -->
                <div class="row client-items">

                    <!-- client item -->
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="client-item">
                            <div class="image">
                                <a target="_blank" href="https://www.google.com">
                                    <img src="{{ asset('images/clients/client_1.png') }}" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- client item -->
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="client-item">
                            <div class="image">
                                <a target="_blank" href="https://www.google.com">
                                    <img src="{{ asset('images/clients/client_2.png') }}" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- client item -->
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="client-item">
                            <div class="image">
                                <a target="_blank" href="https://www.google.com">
                                    <img src="{{ asset('images/clients/client_3.png') }}" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- client item -->
                    <div class="col col-d-3 col-t-3 col-m-6 border-line-v">
                        <div class="client-item">
                            <div class="image">
                                <a target="_blank" href="https://www.google.com">
                                    <img src="{{ asset('images/clients/client_4.png') }}" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>

            </div>

            <!--
                Testimonials
            -->
            <div class="content testimonials">

                <!-- title -->
                <div class="title">Testimonials</div>

                <!-- content -->
                <div class="row testimonials-items">

                    <!-- client item -->
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="revs-carousel default-revs">
                            <div class="owl-carousel">
                                <div class="item">
                                    <div class="revs-item">
                                        <div class="text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                        <div class="user">
                                            <div class="img"><img src="{{ asset('images/man1.jpg') }}" alt=""/>
                                            </div>
                                            <div class="info">
                                                <div class="name">Helen Floyd</div>
                                                <div class="company">Art Director</div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="revs-item">
                                        <div class="text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                        <div class="user">
                                            <div class="img"><img src="{{ asset('images/man1.jpg') }}" alt=""/>
                                            </div>
                                            <div class="info">
                                                <div class="name">Robert Chase</div>
                                                <div class="company">CEO</div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="revs-item">
                                        <div class="text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum
                                            dolor sit amet, consectetur adipiscing elit.
                                        </div>
                                        <div class="user">
                                            <div class="img"><img src="{{ asset('images/man1.jpg') }}" alt=""/>
                                            </div>
                                            <div class="info">
                                                <div class="name">Helen Floyd</div>
                                                <div class="company">Art Director</div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>

            </div>

        </div>
    </div>

    <!--Card - Resume-->
    <div class="card-inner" id="resume-card">
        <div class="card-wrap">

            <!--
                Resume
            -->
            <div class="content resume">

                <!-- title -->
                <div class="title">Resume</div>

                <!-- content -->
                <div class="row">

                    <!-- experience -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="resume-title border-line-h">
                            <div class="icon"><i class="ion ion-briefcase"></i></div>
                            <div class="name">Experience</div>
                        </div>
                        <div class="resume-items">
                            <div class="resume-item border-line-h active">
                                <div class="date">2013 - Present</div>
                                <div class="name">Art Director</div>
                                <div class="company">Facebook Inc.</div>
                                <p>
                                    Collaborate with creative and development teams on the execution of ideas.
                                </p>
                            </div>
                            <div class="resume-item border-line-h">
                                <div class="date">2011 - 2012</div>
                                <div class="name">Front-end Developer</div>
                                <div class="company">Google Inc.</div>
                                <p>
                                    Monitored technical aspects of the front-end delivery for several projects.
                                </p>
                            </div>
                            <div class="resume-item">
                                <div class="date">2009 - 2010</div>
                                <div class="name">Senior Developer</div>
                                <div class="company">Abc Inc.</div>
                                <p>
                                    Optimize website performance using latest technology.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- education -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="resume-title border-line-h">
                            <div class="icon"><i class="ion ion-university"></i></div>
                            <div class="name">Education</div>
                        </div>
                        <div class="resume-items">
                            <div class="resume-item border-line-h">
                                <div class="date">2006 - 2008</div>
                                <div class="name">Art University</div>
                                <div class="company">New York</div>
                                <p>
                                    Bachelor's Degree in Computer Science ABC Technical Institute, Jefferson,
                                    Missouri
                                </p>
                            </div>
                            <div class="resume-item border-line-h">
                                <div class="date">2005 - 2006</div>
                                <div class="name">Programming Course</div>
                                <div class="company">Paris</div>
                                <p>
                                    Coursework - Git, WordPress, Javascript, iOS, Android.
                                </p>
                            </div>
                            <div class="resume-item">
                                <div class="date">2004 - 2005</div>
                                <div class="name">Web Design Course</div>
                                <div class="company">London</div>
                                <p>
                                    Converted Photoshop layouts to web pages using HTML, CSS, and JavaScript
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>

            </div>

            <!--
                Skills
            -->
            <div class="content skills">

                <!-- title -->
                <div class="title">My Skills</div>

                <!-- content -->
                <div class="row">

                    <!-- skill item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="skills-list">
                            <div class="skill-title border-line-h">
                                <div class="icon"><i class="ion ion-easel"></i></div>
                                <div class="name">Design</div>
                            </div>
                            <ul>
                                <li class="border-line-h">
                                    <div class="name">Web Design</div>
                                    <div class="progress">
                                        <div class="percentage" style="width:90%;"></div>
                                    </div>
                                </li>
                                <li class="border-line-h">
                                    <div class="name">Write Music</div>
                                    <div class="progress">
                                        <div class="percentage" style="width:65%;"></div>
                                    </div>
                                </li>
                                <li class="border-line-h">
                                    <div class="name">Photoshop</div>
                                    <div class="progress">
                                        <div class="percentage" style="width:75%;"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="name">Graphic Design</div>
                                    <div class="progress">
                                        <div class="percentage" style="width:85%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- skill item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="skills-list dotted">
                            <div class="skill-title border-line-h">
                                <div class="icon"><i class="ion ion-flag"></i></div>
                                <div class="name">Languages</div>
                            </div>
                            <ul>
                                <li class="border-line-h">
                                    <div class="name">English</div>
                                    <div class="progress">
                                        <div class="percentage" style="width:90%;"></div>
                                    </div>
                                </li>
                                <li class="border-line-h">
                                    <div class="name">German</div>
                                    <div class="progress">
                                        <div class="percentage" style="width:60%;"></div>
                                    </div>
                                </li>
                                <li class="border-line-h">
                                    <div class="name">Italian</div>
                                    <div class="progress">
                                        <div class="percentage" style="width:30%;"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="name">French</div>
                                    <div class="progress ">
                                        <div class="percentage" style="width:70%;"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- skill item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="skills-list circles">
                            <div class="skill-title border-line-h">
                                <div class="icon"><i class="ion ion-code"></i></div>
                                <div class="name">Coding</div>
                            </div>
                            <ul>
                                <li>
                                    <div class="name">WordPress</div>
                                    <div class="progress p90">
                                        <span>90%</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="name">PHP / MYSQL</div>
                                    <div class="progress p75">
                                        <span>75%</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="name">Angular / JavaScript</div>
                                    <div class="progress p85">
                                        <span>85%</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="name">HTML / CSS</div>
                                    <div class="progress p95">
                                        <span>95%</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- skill item -->
                    <div class="col col-d-6 col-t-6 col-m-12 border-line-v">
                        <div class="skills-list list">
                            <div class="skill-title border-line-h">
                                <div class="icon"><i class="ion ion-android-list"></i></div>
                                <div class="name">Knowledge</div>
                            </div>
                            <ul>
                                <li>
                                    <div class="name">Website hosting</div>
                                </li>
                                <li>
                                    <div class="name">iOS and android apps</div>
                                </li>
                                <li>
                                    <div class="name">Create logo design</div>
                                </li>
                                <li>
                                    <div class="name">Design for print</div>
                                </li>
                                <li>
                                    <div class="name">Modern and mobile-ready</div>
                                </li>
                                <li>
                                    <div class="name">Advertising services include</div>
                                </li>
                                <li>
                                    <div class="name">Graphics and animations</div>
                                </li>
                                <li>
                                    <div class="name">Search engine marketing</div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>

            </div>

        </div>
    </div>

    <!--Card - Works-->
    <div class="card-inner" id="works-card">
        <div class="card-wrap">

            <!--
                Works
            -->
            <div class="content works">

                <!-- title -->
                <div class="title">Recent Works</div>

                <!-- filters -->
                <div class="filter-menu filter-button-group">
                    <div class="f_btn active">
                        <label><input type="radio" name="fl_radio" value="grid-item"/>All</label>
                    </div>
                    <div class="f_btn">
                        <label><input type="radio" name="fl_radio" value="photo"/>Photo</label>
                    </div>
                    <div class="f_btn">
                        <label><input type="radio" name="fl_radio" value="video"/>Video</label>
                    </div>
                    <div class="f_btn">
                        <label><input type="radio" name="fl_radio" value="music"/>Music</label>
                    </div>
                    <div class="f_btn">
                        <label><input type="radio" name="fl_radio" value="design"/>Design</label>
                    </div>
                </div>

                <!-- content -->
                <div class="row grid-items border-line-v">

                    <!-- work item photo -->
                    <div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="{{ asset('images/works/work1.jpg') }} " class="has-popup-image">
                                    <img src="{{ asset('images/works/work1.jpg') }}" alt=""/>
                                    <span class="info">
												<span class="ion ion-image"></span>
											</span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="{{ asset('images/works/work1.jpg') }}" class="name has-popup-image">Motorcycle
                                    Helmet</a>
                                <div class="category">Photo</div>
                            </div>
                        </div>
                    </div>

                    <!-- work item video -->
                    <div class="col col-d-6 col-t-6 col-m-12 grid-item video border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="https://vimeo.com/97102654" class="has-popup-video">
                                    <img src="{{ asset('images/works/work2.jpg') }}" alt=""/>
                                    <span class="info">
												<span class="ion ion-videocamera"></span>
											</span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="https://vimeo.com/97102654" class="name has-popup-video">Minimalism
                                    Shapes</a>
                                <div class="category">Video</div>
                            </div>
                        </div>
                    </div>

                    <!-- work item music -->
                    <div class="col col-d-6 col-t-6 col-m-12 grid-item music border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&show_artwork=true"
                                   class="has-popup-music">
                                    <img src="{{ asset('images/works/work3.jpg') }}" alt=""/>
                                    <span class="info">
												<span class="ion ion-music-note"></span>
											</span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="#" class="name has-popup">Staircase</a>
                                <div class="category">Music</div>
                            </div>
                        </div>
                    </div>

                    <!-- work item design -->
                    <div class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="#popup-1" class="has-popup-media">
                                    <img src="{{ asset('images/works/work4.jpg') }}" alt=""/>
                                    <span class="info">
												<span class="ion ion-images"></span>
											</span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="#popup-1" class="name has-popup-media">Mobile Application</a>
                                <div class="category">Design</div>
                            </div>
                            <div id="popup-1" class="popup-box mfp-fade mfp-hide">
                                <div class="content">
                                    <div class="image">
                                        <img src="{{ asset('images/works/work4.jpg') }}" alt="">
                                    </div>
                                    <div class="desc">
                                        <div class="post-box">
                                            <h1>Mobile Application</h1>
                                            <div class="blog-detail">Design</div>
                                            <div class="blog-content">
                                                <p>
                                                    So striking at of to welcomed resolved. Northward by described
                                                    up household therefore
                                                    attention. Excellence decisively nay man yet impression for
                                                    contrasted remarkably.
                                                </p>
                                                <p>
                                                    Forfeited you engrossed but gay sometimes explained. Another as
                                                    studied it to evident.
                                                    Merry sense given he be arise. Conduct at an replied removal an
                                                    amongst. Remaining
                                                    determine few her two cordially admitting old.
                                                </p>
                                                <blockquote>
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                                    posuere cubilia
                                                    Curae; Pellentesque suscipit.
                                                </blockquote>
                                                <p>
                                                    Tiled say decay spoil now walls meant house. My mr interest
                                                    thoughts screened of outweigh
                                                    removing. Evening society musical besides inhabit ye my. Lose
                                                    hill well up will he over on.
                                                    Increasing sufficient everything men him admiration unpleasing
                                                    sex.
                                                </p>
                                                <ul class="list-style">
                                                    <li>Greatest properly off ham exercise all.</li>
                                                    <li>Unsatiable invitation its possession nor off.</li>
                                                    <li>All difficulty estimating unreserved increasing the
                                                        solicitude.
                                                    </li>
                                                </ul>
                                                <p>
                                                    Unpleasant astonished an diminution up partiality. Noisy an
                                                    their of meant. Death means
                                                    up civil do an offer wound of.
                                                </p>
                                            </div>
                                            <a href="#" class="button">
                                                <span class="text">View Project</span>
                                                <span class="arrow"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- work item photo -->
                    <div class="col col-d-6 col-t-6 col-m-12 grid-item photo border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="{{ asset('images/works/work5.jpg') }}" class="has-popup-image">
                                    <img src="{{ asset('images/works/work5.jpg') }}" alt=""/>
                                    <span class="info">
												<span class="ion ion-image"></span>
											</span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="{{ asset('images/works/work5.jpg') }}" class="name has-popup-image">Gereal
                                    Travels</a>
                                <div class="category">Photo</div>
                            </div>
                        </div>
                    </div>

                    <!-- work item music -->
                    <div class="col col-d-6 col-t-6 col-m-12 grid-item music border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="https://w.soundcloud.com/player/?visual=true&url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F221650664&show_artwork=true"
                                   class="has-popup-music">
                                    <img src="{{ asset('images/works/work8.jpg') }}" alt=""/>
                                    <span class="info">
												<span class="ion ion-music-note"></span>
											</span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="#" class="name has-popup">Daylight Entrance</a>
                                <div class="category">Music</div>
                            </div>
                        </div>
                    </div>

                    <!-- work item video -->
                    <div class="col col-d-6 col-t-6 col-m-12 grid-item video border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="https://vimeo.com/97102654" class="has-popup-video">
                                    <img src="{{ asset('images/works/work6.jpg') }}" alt=""/>
                                    <span class="info">
												<span class="ion ion-videocamera"></span>
											</span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="https://vimeo.com/97102654" class="name has-popup-video">Architecture</a>
                                <div class="category">Video</div>
                            </div>
                        </div>
                    </div>

                    <!-- work item design -->
                    <div class="col col-d-6 col-t-6 col-m-12 grid-item design border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="#popup-2" class="has-popup-media">
                                    <img src="{{ asset('images/works/work7.jpg') }}" alt=""/>
                                    <span class="info">
												<span class="ion ion-images"></span>
											</span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="#popup-2" class="name has-popup-media">Social Website</a>
                                <div class="category">Design</div>
                            </div>
                            <div id="popup-2" class="popup-box mfp-fade mfp-hide">
                                <div class="content">
                                    <div class="image">
                                        <img src="{{ asset('images/works/work7.jpg') }}" alt="">
                                    </div>
                                    <div class="desc">
                                        <div class="post-box">
                                            <h1>Mobile Application</h1>
                                            <div class="blog-detail">Design</div>
                                            <div class="blog-content">
                                                <p>
                                                    So striking at of to welcomed resolved. Northward by described
                                                    up household therefore
                                                    attention. Excellence decisively nay man yet impression for
                                                    contrasted remarkably.
                                                </p>
                                                <p>
                                                    Forfeited you engrossed but gay sometimes explained. Another as
                                                    studied it to evident.
                                                    Merry sense given he be arise. Conduct at an replied removal an
                                                    amongst. Remaining
                                                    determine few her two cordially admitting old.
                                                </p>
                                                <blockquote>
                                                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                                                    posuere cubilia
                                                    Curae; Pellentesque suscipit.
                                                </blockquote>
                                                <p>
                                                    Tiled say decay spoil now walls meant house. My mr interest
                                                    thoughts screened of outweigh
                                                    removing. Evening society musical besides inhabit ye my. Lose
                                                    hill well up will he over on.
                                                    Increasing sufficient everything men him admiration unpleasing
                                                    sex.
                                                </p>
                                                <ul class="list-style">
                                                    <li>Greatest properly off ham exercise all.</li>
                                                    <li>Unsatiable invitation its possession nor off.</li>
                                                    <li>All difficulty estimating unreserved increasing the
                                                        solicitude.
                                                    </li>
                                                </ul>
                                                <p>
                                                    Unpleasant astonished an diminution up partiality. Noisy an
                                                    their of meant. Death means
                                                    up civil do an offer wound of.
                                                </p>
                                            </div>
                                            <a href="#" class="button">
                                                <span class="text">View Project</span>
                                                <span class="arrow"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>

            </div>

        </div>
    </div>

    <!--Card - Blog-->
    <div class="card-inner blog" id="blog-card">
        <div class="card-wrap">

            <!--
                Blog
            -->
            <div class="content blog">

                <!-- title -->
                <div class="title">Latest Posts</div>

                <!-- content -->
                <div class="row border-line-v">

                    <!-- blog item -->
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="blog-post-new.html">
                                    <img src="{{ asset('images/blog/blog1.jpg') }}" alt=""/>
                                    <span class="info">
												<span class="ion ion-document-text"></span>
											</span>
                                    <span class="date"><strong>20</strong>Jun</span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="blog-post-new.html" class="name">By spite about do of do allow blush</a>
                                <div class="category">Design</div>
                            </div>
                        </div>
                    </div>

                    <!-- blog item -->
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="blog-post-new.html">
                                    <img src="{{ asset('images/blog/blog2.jpg') }}" alt=""/>
                                    <span class="info">
												<span class="ion ion-document-text"></span>
											</span>
                                    <span class="date"><strong>19</strong>Jun</span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="blog-post-new.html" class="name">Two Before Arrow Not Relied</a>
                                <div class="category">Coding</div>
                            </div>
                        </div>
                    </div>

                    <!-- blog item -->
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-h">
                        <div class="box-item">
                            <div class="image">
                                <a href="blog-post-new.html">
                                    <img src="{{ asset('images/blog/blog3.jpg') }}" alt=""/>
                                    <span class="info">
												<span class="ion ion-document-text"></span>
											</span>
                                    <span class="date"><strong>20</strong>Jun</span>
                                </a>
                            </div>
                            <div class="desc">
                                <a href="blog-post-new.html" class="name">By spite about do of do allow blush</a>
                                <div class="category">Travel</div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>
                </div>

            </div>

        </div>
    </div>

    <!--Card - Contacts-->
    <div class="card-inner contacts" id="contacts-card">
        <div class="card-wrap">

            <!--
                Conacts Info
            -->
            <div class="content contacts">

                <!-- title -->
                <div class="title">Get in Touch</div>

                <!-- content -->
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="map" id="map"></div>
                        <div class="info-list">
                            <ul>
                                <li><strong>Address . . . . .</strong> California, USA</li>
                                <li><strong>Email . . . . .</strong> adlard@example.com</li>
                                <li><strong>Phone . . . . .</strong> +123 654 78900</li>
                                <li><strong>Freelance . . . . .</strong> Available</li>
                            </ul>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>

            <!--
                Contact Form
            -->
            <div class="content contacts">

                <!-- title -->
                <div class="title">Contact Form</div>

                <!-- content -->
                <div class="row">
                    <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                        <div class="contact_form">
                            <form id="cform" method="post">
                                <div class="row">
                                    <div class="col col-d-6 col-t-6 col-m-12">
                                        <div class="group-val">
                                            <input type="text" name="name" placeholder="Full Name"/>
                                        </div>
                                    </div>
                                    <div class="col col-d-6 col-t-6 col-m-12">
                                        <div class="group-val">
                                            <input type="text" name="email" placeholder="Email Address"/>
                                        </div>
                                    </div>
                                    <div class="col col-d-12 col-t-12 col-m-12">
                                        <div class="group-val">
                                            <textarea name="message" placeholder="Your Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="align-left">
                                    <a href="#" class="button" onclick="$('#cform').submit(); return false;">
                                        <span class="text">Send Message</span>
                                        <span class="arrow"></span>
                                    </a>
                                </div>
                            </form>
                            <div class="alert-success">
                                <p>Thanks, your message is sent successfully.</p>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>

        </div>
    </div>

@endsection
