<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rescan</title>

        <!-- Fonts -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	

        <link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


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
        <nav class="navbar navbar-expand-sm bg-white navbar-light sticky-top">
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

        </nav>


        <p class="text-center" style="font-size: 16px;background-color: #2e3a4d;color: #ffffff;padding: 20px;margin-bottom: 0px;"><strong>We are on Open Beta!</strong> Try <strong><a href="{{ url('/') }}">Rescan ACT</a></strong> for free.</p>

        <section style="background-color: #039be5;">
            <div class="container" >
                <div class="row justify-content-center">
                        <div class="col-xs-12 col-md-4" align="left">
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
        </section>

        <section class="justify-content-center" style="background-image: url('/img/parNew.png');background-size: cover;background-position: center; width: 100%;height: 5000px;">
            <div class="container" style="padding-top: 2%;width: 100%;height: 1200px;">
                <div class="card text-center" style="border-radius: 10px;">
                    <div class="card-body justify-content-center" style="padding-left: 7%;padding-right: 7%; padding-bottom: 8%">
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
                    </div>
                    <div class="card-footer" style="padding-left: 7%;background-color: #eceff1;">
                        <p class="text-muted text-left pl-5 pt-3">Rescan supports:<strong class="pl-5">Windows 10</strong></p>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="card text-center" style="border-radius: 10px;">
                    <div class="card-body justify-content-center" style="padding-left: 7%;padding-right: 7%; padding-bottom: 8%">
                        <h1 class="card-title font-weight-bold pt-5 display-5">An efficient digital<br>learning environment platform</h1>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <img class="pb-3" src="/img/keyboard.png" alt="" style="height: 200px;">
                                    <h5 class="font-weight-bold card-title text-left">Lorem ipsum dolor sit amet, omnis dicant impedit in vel.</h5>
                                    <p class="pt-3 card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <img class="pb-3" src="/img/office.png" alt="" style="height: 200px;">
                                    <h5 class="font-weight-bold card-title text-left">Ex mea amet conclusionemque, ad has oratio invidunt.</h5>
                                    <p class="pb-3 card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="pt-5 pl-5 pr-5">
                                    <img class="pb-3" src="/img/browser.png" alt="" style="height: 200px;">
                                    <h5 class="font-weight-bold card-title text-left">Lorem ipsum dolor sit amet, omnis dicant impedit in vel.</h5>
                                    <p class="pb-3 card-text text-muted text-left">Nam nibh facilisis ad, eleifend neglegentur mea ne, sea mollis reprimique no. Ubique tritani et vim, eirmod imperdiet consequat in nec. Possit tritani consequat ad per.</p>
                                </div>
                            </div>


                        </div>

                        <div class="row pt-5">
                            <div class="col-xs-12 col-md-12">
                                <div class="justify-content-center">
                                    <hr>
                                    <h1 class="card-title font-weight-bold pt-5 display-5"><strong>Software Integrations</strong></h1>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <a class="btn btn-primary font-weight-bold" href="#"><strong>Learn more</strong></a></p>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer" style="padding-left: 7%;background-color: #eceff1;">
                        <p class="text-left pl-5 pt-3"><strong class="">Rescan Assisstive Computer Technology</strong></p>
                        <p class="text-muted text-left pl-5">A digital learning environment for everyone.</p>
                        <p class="text-left pl-5"><a href="#"><strong>Read more</strong></a></p>
                    </div>
                </div>

            </div>

            <div class="container" style="padding-top: 2%;width: 100%;height: 1200px;">

            </div>


        </section>


	


	
	

    </body>
</html>
