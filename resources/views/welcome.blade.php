<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rescan-ACT</title>

        <!-- Fonts -->
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


        <!-- Styles -->

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans&display=swap" rel="stylesheet">
	

        <!-- Scripts -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    </head>

    <body>
        <!-- Image and text -->
        <nav class="navbar navbar-expand-sm bg-white navbar-light sticky-top"> <!-- NAVBAR START -->
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div><img src="/img/rescan-logo.png" style="height: 35px;" class="pr-3"></div>
                    <div class="pt-1" style="font-weight: bolder;">Rescan ACT</div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mainNav">
                    <div class="navbar-nav ml-auto text-uppercase" style="font-weight: bolder;">
                        <a class="nav-item nav-link active" href="{{ url('/') }}">Home</a>
                        <a class="nav-item nav-link" href="{{ url('/') }}">About</a>
                        <a class="nav-item nav-link" href="{{ url('/') }}">Contact</a>
                        <a class="nav-item nav-link" href="{{ route('login') }}">Login</a>
                        <a class="nav-item nav-link" href="{{ route('register') }}">Register</a>
                    </div>
                </div>
            </div>
        </nav> <!-- NAVBAR END-->

        <p class="text-center" style="font-size: 16px;background-color: #2e3a4d;color: #ffffff;padding: 20px;margin-bottom: 0px;"><strong>We are on Open Beta!</strong> Try <strong><a href="{{ url('/') }}">Rescan ACT</a></strong> for free.</p>

        <section style="background-color: #039be5;"> <!-- Content header -->
            <div class="container" >
                <div class="row justify-content-center">
                        <div class="col-xs-12 col-md-4 pt-3" align="left">
                            <h1 class="display-5 font-weight-bolder" style="color: white;padding-top:10%;padding-left:10%;padding-right:10%;">Rescan ACT<br> provides an ease<br>on digital literacy</h1>
                            <div style="padding-left: 10%;padding-bottom: 10%;padding-top: 5%;">
                                <a class="btn btn-outline-light font-weight-bold" style="border-radius: 8px;" href="#" download="">Download <i class="fa fa-cloud-download"></i></a>
                                <a class="btn font-weight-bold" style="color: white;background-color:transparent;padding-left:5%;" href="#"><i class="fa fa-play-circle"></i> Getting started</a>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-8">
                            <img src="/img/mainArt.png" style="padding-left:5%;padding-right:5%;width:100%;height:100%">

                        </div>
                </div>
            </div>
        </section>  <!-- CONTENT HEADER -->

        <main class="justify-content-center" style="background-image: url('/img/parNew.png');background-size: cover;background-position: center; width: 100%;height: 100%;">   <!-- SECTION with BACKGROUND -->
            <div class="container" style="padding-top: 2%;width: 100%;"> <!-- MAIN CONTAINER -->

                <div class="card text-center" style="border-radius: 10px;"> <!-- START OF 1ST CARD -->
                    <div class="card-body justify-content-center" style="padding-left: 7%;padding-right: 7%; padding-bottom: 8%"> <!-- CARD BODY -->

                        <div class="row">

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Build and enhance your keyboarding skills</h5>
                                    <p class="card-text text-muted text-left">Rescan ACT provides a keyboard learning experience that offers fundamental ideas such as finger positioning and more.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Keep track of your progress and statistics</h5>
                                    <p class="card-text text-muted text-left">Rescan ACT comes with a progress and an accuracy feature that tracks individual progress and accuracy on tasks.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Multiple features for computer literacy</h5>
                                    <p class="card-text text-muted text-left">Rescan ACT offers a different approach on providing computer literacy to its users from the basics of navigation and more.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="card-footer" style="padding-left: 7%;background-color: #eceff1;"> <!-- CARD FOOTER-->
                        <p class="text-muted text-left pl-5 pr-5 pt-3">Rescan supports: <strong class="">Windows 10</strong></p>
                    </div>

                </div> <!-- CARD 1 END-->

                <br>
                <br>
                <br>

                <div class="card text-center" style="border-radius: 10px;"> <!-- START OF 2ND CARD -->
                    <div class="card-body justify-content-center pb-5" style="padding-left: 7%;padding-right: 7%;">

                        <h1 class="card-title font-weight-bold pt-5 display-5">An efficient digital<br>learning environment platform</h1>

                        <div class="row justify-content-center">

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5">
                                    <img class="pb-3" src="/img/keyboard.png" alt="" style="height: 150px;">
                                    <h5 class="font-weight-bold card-title text-left">Start with Keyboard Tutorial</h5>
                                    <p class="pt-3 card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5">
                                    <img class="pb-3" src="/img/office.png" alt="" style="height: 150px;">
                                    <h5 class="font-weight-bold card-title text-left">Get around with Office Applications </h5>
                                    <p class="pb-3 card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5">
                                    <img class="pb-3" src="/img/browser.png" alt="" style="height: 150px;">
                                    <h5 class="font-weight-bold card-title text-left">Browser Navigation</h5>
                                    <p class="pb-3 card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                        </div> <!-- CARD 2 PARAGRAPHS  -->

                        <div class="row pt-5">

                            <div class="col-xs-12 col-md-12">
                                <div class="justify-content-center">
                                    <hr class="">
                                    <h1 class="card-title font-weight-bold pt-5 display-5"><strong>Software Integrations</strong></h1>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xs-12 pt-5 col-md-3">
                                <img src="/img/softwareIntegration/intWord.png" alt="" style="height: 100px;">
                            </div>

                            <div class="col-xs-12 pt-5 col-md-3">
                                <img src="/img/softwareIntegration/intExcel.png" alt="" style="height: 100px;">
                            </div>

                            <div class="col-xs-12 pt-5 col-md-3">
                                <img src="/img/softwareIntegration/intPowerpoint.png" alt="" style="height: 100px;">
                            </div>

                            <div class="col-xs-12 pt-5 col-md-3">
                                <img src="/img/softwareIntegration/intChrome.png" alt="" style="height: 100px;">
                            </div>

                        </div>

                        <div class="row pt-5">
                            <div class="col-xs-12 col-md-12">
                                <a class="btn btn-primary font-weight-bold" href="#"><strong>Learn more</strong></a></p>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer" style="padding-left: 7%;background-color: #eceff1;">
                        <p class="text-left pl-5 pt-3"><strong class="">Rescan Assistive Computer Technology</strong></p>
                        <p class="text-muted text-left pl-5">A digital learning environment for everyone.</p>
                        <p class="text-left pl-5"><a href="#"><strong>Read more</strong></a></p>
                    </div>

                </div>  <!-- END OF 2ND CARD -->

                <br>
                <br>
                <br>

                <div class="card text-center" style="border-radius: 10px;"> <!-- 3RD CARD -->
                    <div class="card-body justify-content-center" style="padding-left: 7%;padding-right: 7%; padding-bottom: 8%">

                        <div class="row pt-5">

                            <div class="col-xs-12 col-md-12">
                                <div class="justify-content-center">
                                    <h1 class="card-title font-weight-bold display-5"><strong>Complete tasks<br>to enhance digital literacy</strong></h1>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-0 pl-5 pr-5">

                            <div class="col-xs-12 col-md-3"></div>

                            <div class="col-xs-12 col-md-6">
                                <p class="text-muted">
                                    Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.
                                </p>
                            </div>

                            <div class="col-xs-12 col-md-3"></div>

                        </div>

                        <div class="row">
                            <div class="col-xs-3 col-md-3">

                            </div>
                            <div class="col-xs-6 col-md-6">
                                <img class="p-5" src="/img/completeTask/completeTask.png" alt="" style="width: 100%;height: 100%;">
                            </div>
                            <div class="col-xs-3 col-md-3">

                            </div>


                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Lorem ipsum dolor sit amet, omnis dicant impedit in vel.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Ex mea amet conclusionemque, ad has oratio invidunt.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Lorem ipsum dolor sit amet, omnis dicant impedit in vel.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                        </div>

                        <div class="row pt-5">

                            <div class="col-xs-12 col-md-12">
                                <div class="justify-content-center">
                                    <a class="btn btn-primary font-weight-bold" href="#"><strong>Get started</strong></a></p>
                                </div>
                            </div>

                        </div>

                    </div>


                </div> <!-- END OF 3RD CARD-->

                <br>
                <br>
                <br>

                <div class="card text-center" style="border-radius: 10px;"> <!-- START 4TH CARD -->
                    <div class="card-body justify-content-center pb-5" style="padding-left: 7%;padding-right: 7%">

                        <div class="row pt-5">

                            <div class="col-xs-12 col-md-12">
                                <div class="justify-content-center">
                                    <h1 class="card-title font-weight-bold display-5"><strong>Easy to navigate<br>menu system</strong></h1>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-0 pl-5 pr-5">

                            <div class="col-xs-12 col-md-3"></div>

                            <div class="col-xs-12 col-md-6">
                                <p class="text-muted">
                                    Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.
                                </p>
                            </div>

                            <div class="col-xs-12 col-md-3"></div>

                        </div>

                        <div class="row">
                            <!--
                            <div class="col-xs-1 col-md-1">

                            </div>-->
                            <div class="col-xs-12 col-md-12">
                                <img class="p-5" src="/img/appMenu/appMenu.png" alt="" style="width:100%;height: 100%;">
                            </div>
                            <!--
                            <div class="col-xs-1 col-md-1">

                            </div> -->
                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Lorem ipsum dolor sit amet, omnis dicant impedit in vel.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Ex mea amet conclusionemque, ad has oratio invidunt.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Lorem ipsum dolor sit amet, omnis dicant impedit in vel.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                        </div>

                        <div class="row pt-5">
                            <div class="col-xs-12 col-md-12">
                                <div class="justify-content-center">
                                    <a class="btn btn-primary font-weight-bold" href="#"><strong>Get started</strong></a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div> <!-- END OF 4TH CARD-->

                <br>
                <br>
                <br>

                <div class="card text-center" style="border-radius: 10px;"> <!-- START 5TH CARD -->
                    <div class="card-body justify-content-center pb-5" style="padding-left: 7%;padding-right: 7%">

                        <div class="row pt-5">

                            <div class="col-xs-12 col-md-12">
                                <div class="justify-content-center">
                                    <h1 class="card-title font-weight-bold display-5"><strong>News and events</strong></h1>
                                </div>
                            </div>

                        </div>

                        <div class="row mt-0 pl-5 pr-5">

                            <div class="col-xs-12 col-md-3"></div>

                            <div class="col-xs-12 col-md-6">
                                <p class="text-muted">
                                    Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.
                                </p>
                            </div>

                            <div class="col-xs-12 col-md-3"></div>

                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Lorem ipsum dolor sit amet, omnis dicant impedit in vel.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Ex mea amet conclusionemque, ad has oratio invidunt.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <h5 class="font-weight-bold card-title text-left">Lorem ipsum dolor sit amet, omnis dicant impedit in vel.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                        </div>

                        <div class="row pt-5">

                            <div class="col-xs-12 col-md-12">
                                <div class="justify-content-center">
                                    <a class="btn btn-primary font-weight-bold" href="#"><strong>Get started</strong></a></p>
                                </div>
                            </div>

                        </div>

                    </div>


                </div> <!-- END OF 5TH CARD-->

                <br>
                <br>
                <br>

                <div class="card text-center" style="border-radius: 10px;"> <!-- START 6TH CARD -->
                    <div class="card-body justify-content-center pb-5" style="padding-left: 7%;padding-right: 7%">

                        <div class="row pt-5">
                            <div class="col-xs-12 col-md-12">
                                <div class="justify-content-center">
                                    <h1 class="card-title font-weight-bold display-5"><strong>OUR TEAM</strong></h1>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-0 pl-5 pr-5">
                            <div class="col-xs-12 col-md-3"></div>
                            <div class="col-xs-12 col-md-6">
                                <p class="text-muted">
                                    Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.
                                </p>
                            </div>
                            <div class="col-xs-12 col-md-3"></div>
                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-md-6">
                                <div class="pt-5 pl-5 pr-5">
                                    <img src="/img/team_profile/baculio.png" style="height: 150px;" alt="">
                                    <h5 class="mt-5 font-weight-bold card-title text-left">Lorem ipsum dolor sit amet, omnis dicant impedit in vel.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="pt-5 pl-5 pr-5">
                                    <img src="/img/team_profile/sawitan.png" style="height: 150px;" alt="">
                                    <h5 class="mt-5 font-weight-bold card-title text-left">Ex mea amet conclusionemque, ad has oratio invidunt.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xs-12 col-md-6">
                                <div class="pt-5 pl-5 pr-5">
                                    <img src="/img/team_profile/casino.png" style="height: 150px;" alt="">
                                    <h5 class="mt-5 font-weight-bold card-title text-left">Lorem ipsum dolor sit amet, omnis dicant impedit in vel.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6">
                                <div class="pt-5 pl-5 pr-5">
                                    <img src="/img/team_profile/basallo.png" style="height: 150px;" alt="">
                                    <h5 class="mt-5 font-weight-bold card-title text-left">Lorem ipsum dolor sit amet, omnis dicant impedit in vel.</h5>
                                    <p class="card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>

                        </div>

                        <div class="row pt-5">
                            <div class="col-xs-12 col-md-12">
                                <div class="justify-content-center">
                                    <a class="btn btn-primary font-weight-bold" href="#"><strong>Get in touch</strong></a></p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div> <!-- END OF 6TH CARD-->

                <br>
                <br>
                <br>

            </div> <!-- END of section container -->
        </main>

        <!-- Footer -->
        <footer class="bg-dark text-white pt-5">

            <!-- Footer Elements -->
            <div class="container">

                <!-- Social buttons -->
                <ul class="list-inline text-center">
                    <li class="list-inline-item pl-2 pr-2">
                        <a href="#">
                            <i class="fa fa-facebook fa-2x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item pl-2 pr-2">
                        <a href="">
                            <i class="fa fa-twitter fa-2x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item pl-2 pr-2">
                        <a href="">
                            <i class="fa fa-instagram fa-2x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item pl-2 pr-2">
                        <a href="">
                            <i class="fa fa-google-plus fa-2x"></i>
                        </a>
                    </li>
                </ul>
                <!-- Social buttons -->

            </div>
            <!-- Footer Elements -->
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2019 Copyright:
                <a href="https://www.rescan-act.com"> RescanACT</a>
            </div>
            <!-- Copyright -->

        </footer> <!-- FOOTER END -->
        <!-- Footer -->
    </body>
</html>
