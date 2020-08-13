@extends('front.layouts.master')

@section('content')
<div class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/images/homeslider3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/images/homeslider2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="assets/images/homeslider1.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
</div>


<section class="about-us container pt-5 pb-5">
    <div class="row pt-2 pb-2">

        <div class="about-text col-md-6">
            <h3 class='section-heading'>About Us</h3>

            <h4 class="section-title pt-2 pb-3">We're dynamic team of creative and tech enthusiastic people.</h4>
            <div class="H-line"> <span class="H-line1"></span> <span class="H-line2"></span></div>
            <p class="desc pt-4 pb-2">
                Prime IT Club is a student club at Prime College that is managed by a group of creative as well as tech enthusiastic students. The club studeies the newest technological trends in the job market and helps students to understand them efficiently. Established in 2004, the club organizes different workshops, seminars, training programs, etc.In due course,these events help students get ready for their careers.
            </p>
            <div class="section-caption pt-0 pb-2">
                <!-- <span class="invert-comma">&#8220;</span> <br> -->
                <div class="pt-2 pb-2">
                    <h4><a href="" class="button">Know more</a></h4>
                </div>
            </div>
        </div>

        <div class="about-img col-md-6">
            <div class="img-container-rect">
                <img src="assets/images/home_bg.png">
            </div>
            <h5 class="about-img-text">
                OUR TEAM
            </h5>
        </div>

    </div>
</section>



<section class="events container-fluid p-3 justify-content-center align-items-center">
    <h2 class="heading event-h2 mt-3 pb-2">
        Events
    </h2>
    <div class="container">

        <div class="cards row pt-2 pb-5">

            @foreach($events as $event)
            <div class="event-card-div col-sm-8 col-md-4 col-lg-4  justify-content-center">
                <div class="event-card">
                    <img class="event-card-img" src="./assets/images/events/event1.png">

                    <div class="event-text">
                        <span class="event-date">
                            <h6 class="smaller">Event Date: <span class="lighter">{{$event->date}}</span></h6>
                        </span>

                        <h6>{{$event->name}}</h6>
                        <p class="smaller desc">{{$event->description}}</p>
                        <p class="dark small">Know More <a href="#"> -> </a> </p>
                        <div class="d-flex justify-content-center p-2">
                            <button class="btn btn-secondary">Register</button></div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- <div class="event-card-div col-sm-8 col-md-4 col-lg-4  justify-content-center">
                <div class="event-card">
                    <img class="event-card-img" src="./assets/images/events/event1.png">

                    <div class="event-text">
                        <span class="event-date">
                            <h6 class="smaller">Event Date: <span class="lighter">June-13,2020</span></h6>
                        </span>

                        <h6>Spark AR</h6>
                        <p class="smaller desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <p class="dark small">Know More <a href="#"> -> </a> </p>
                        <div class="d-flex justify-content-center p-2">
                            <button class="btn btn-secondary">Register</button></div>
                    </div>
                </div>
            </div>
            <div class="event-card-div col-sm-8 col-md-4 col-lg-4  justify-content-center">
                <div class="event-card">
                    <img class="event-card-img" src="./assets/images/events/event1.png">

                    <div class="event-text">
                        <span class="event-date">
                            <h6 class="smaller">Event Date: <span class="lighter">June-13,2020</span></h6>
                        </span>

                        <h6>Spark AR</h6>
                        <p class="smaller desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
                        <p class="dark small">Know More <a href="#"> -> </a> </p>
                        <div class="d-flex justify-content-center p-2">
                            <button class="btn btn-secondary">Register</button></div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <div class="d-flex justify-content-center pb-5">
        <button class="btn btn-secondary">Explore More</button>
    </div>
    </div>
</section>





<section class="creativeHub pt-5 pb-5">
    <h2 class="heading pt-2 pb-2">
        Creative Hub
    </h2>


    <div class="container">
        <div class="row">

            <p class="desc text-align-center grey pt-2 pb-2">
                Our Team is your team. When your mission is to be better,faster and smarter, you need the best people driving your vision creativity into groundbreaking campaigns, and who can analyze data to optimize every tactic along the way. Get to know your Team below.
            </p>
            <div class="cards row CreativeHub-slider pt-2 pb-5">
                <div class="creativeHub-card col-sm-8 col-md-3 col-lg-3 d-flex flex-column justify-content-center">
                    <a href="#"><img class="creativeHub-card-img" src="./assets/images/creativehub/chub1.png"></a>
                </div>
                <div class="creativeHub-card col-sm-8 col-md-3 col-lg-3 d-flex flex-column justify-content-center">
                    <a href="#"><img class="creativeHub-card-img" src="./assets/images/creativehub/chub2.png"></a>
                </div>
                <div class="creativeHub-card col-sm-8 col-md-3 col-lg-3 d-flex flex-column justify-content-center">
                    <a href="#"><img class="creativeHub-card-img" src="./assets/images/creativehub/chub3.png"></a>
                </div>
                <!-- <div class="creativeHub-card col-sm-8 col-md-3 col-lg-3 d-flex flex-column justify-content-center">
				<a href="#"><img class="creativeHub-card-img" src="./assets/images/creativehub/chub1.png"></a>
			</div>	 -->
            </div>

        </div>
    </div>
</section>




<section class="team d-flex flex-column justify-content-center pt-5 pb-5">
    <h2 class="heading pt-2 pb-2">
        Meet our Lovely Team
    </h2>

    <div class="container">
        <div class="row">

            <p class="team-detail grey t-5 pb-5">
                Our Team is your team. When your mission is to be better,faster and smarter, you need the best people driving your vision creativity into groundbreaking campaigns, and who can analyze data to optimize every tactic along the way. Get to know your Team below.
            </p>
            <div class="cards row pt-2 pb-5">
                <div class="team-card col-sm-8 col-md-5 col-lg-3 d-flex flex-column justify-content-center p-0">
                    <div class="team-img-area">
                        <img class="creativeHub-card-img" src="./assets/images/executives/IMG_8738.png">
                        <div class="overlay">
                            <div class="overlay-text">
                                <p class="pt-4 pb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-card-text-area  d-flex justify-content-center align-items-center flex-column">
                        <div class="text-box d-flex justify-content-center align-items-center flex-column">
                            <div class="social-icons">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </div>
                            <div class="team-name">Shrijay Tuladhar</div>
                            <div class="team-position ">Secretary</div>
                        </div>
                    </div>
                </div>


                <div class="team-card col-sm-8 col-md-5 col-lg-3 d-flex flex-column justify-content-center p-0">
                    <div class="team-img-area">
                        <img class="creativeHub-card-img" src="./assets/images/executives/IMG_8738.png">
                        <div class="overlay">
                            <div class="overlay-text">
                                <p class="pt-4 pb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-card-text-area  d-flex justify-content-center align-items-center flex-column">
                        <div class="text-box d-flex justify-content-center align-items-center flex-column">
                            <div class="social-icons">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </div>
                            <div class="team-name">Shrijay Tuladhar</div>
                            <div class="team-position ">Secretary</div>
                        </div>
                    </div>
                </div>



                <div class="team-card col-sm-8 col-md-5 col-lg-3 d-flex flex-column justify-content-center p-0">
                    <div class="team-img-area">
                        <img class="creativeHub-card-img" src="./assets/images/executives/IMG_8738.png">
                        <div class="overlay">
                            <div class="overlay-text">
                                <p class="pt-4 pb-4">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                            </div>
                        </div>
                    </div>
                    <div class="team-card-text-area  d-flex justify-content-center align-items-center flex-column">
                        <div class="text-box d-flex justify-content-center align-items-center flex-column">
                            <div class="social-icons">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </div>
                            <div class="team-name">Shrijay Tuladhar</div>
                            <div class="team-position ">Secretary</div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</section>
@endsection