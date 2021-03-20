
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
    <title>Bc</title>
        <style>
            /*NAVBAR*/
            .navbar {
               
                padding-right: 20px;}
            .navbar-nav {
                padding-right: 100px;
            }
            .nav-item {
                padding-right:20px;
                
            }
            
            .bg-light {
                background-color: rgba( 0,0,0,0) !important;
                /* background-image: url('img/r2.png');
                background-position: left;
                background-repeat: no-repeat; */
                

                
            }
            .bg-nontrans {
                background-color: rgba( 47 79 79) !important;
                /* background-image: url('img/r5.png');
                background-position: left;
                background-repeat: no-repeat; */
            }
         
            @media screen and (max-width: 575px){
                .bg-light {
                background-color: rgba(  255,255,255,1) !important;
                }
                #home {
                    margin-top: 55px;
                }
            }
            /*CAROUSEL*/
            #myCarousel {
                height: 100vh;
            }
            .carousel-item img {
                height: 100vh;
            }
            /*SECTION*/
            section{
                padding-top: 50px;
                padding-bottom: 50px;
            }
            #home{
                padding-top: 0px;
                padding-bottom: 0px;
            }
            #gallery{
                height: 700px
            }
            h1{
                color : white;
                padding-bottom : 20px;
            }
            #contact{
                height:880px;
                background-image: url('img/bg-footer.png');
            }
            #about, #tambahan{
                height: 400px;
                background-color: pink;
            }
            #footer{
                height:200px;
                background-color: #23221D;
            }
            /*SCROLL EFFECT*/
            html{
                scroll-behavior: smooth;
            }
            /*BUTTON*/
            .btn-primary-custom{
                background-color: pink;
            }
            /*PARALLAX*/
            .parallax{
                background-image: url('img/taur.jpg');
                
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .parallax2{
                background-image: url('img/sawah.jpg');
                
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .parallax3{
                background-image: url('img/bg-footer.png');
                
                background-attachment: fixed;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .card{
                margin: 20px;
                height: 180px;
                width: 200px;
            }
        /* #nyobi_parallax{
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #nyobi_parallax:before{
            content: '';
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            background: linear-gradient(to top, #0a2a43, transparent);
            z-index: 10000;
        }
        #nyobi_parallax{
            background: #0a2a43;
		height: 1500px;
        }
        #nyobi_parallax:after{
            content: '';
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
            background: #0a2a43;
            z-index: 10000;
            mix-blend-mode: color;
        }
        #nyobi_parallax img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            pointer-events: none;
        } */
        #text{
            position: relative;
            color: #fff;
            font-size: 10em;
            z-index: 1;
        }
        #road{
            z-index: 2;
        }

        </style>
  </head>
  <body data-spy="scroll" data-target="#navbar">

    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-dark bg-light">
        <a class="bar-brand"> <img src="{{ ('img/rarre.png') }}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact Us   </a>
                </li>
                </ul>            
            </div>
    </nav>

    <section id="home">
        <div id="myCarousel" id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ ('img/bromo.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block"> 
            <h5>Gunung Bromo</h5>
            </div>
            </div>
            <div class="carousel-item">
                <img src="{{ ('img/rajaampat.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Raja Ampat</h5>
            </div>
            </div>
            <div class="carousel-item">
                <img src="{{ ('img/lombok.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Lombok</h5>
            </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </section>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>About Page</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, quidem, debitis repellendus repellat, beatae nam perferendis placeat a nostrum amet reiciendis laborum consequatur ex porro ipsa temporibus obcaecati voluptate sed.</p>

                    <br/><br/>
                    <button type="button" class="btn btn-primary btn-primary-custom btn-lg">Button</button>
                </div>
            </div>
        </div>
    </section>

    <!-- card -->
    <section class="parallax2">
      
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="thumbnail"><img src="img/gambar-2-A.jpg">
          <div class="caption">
            <h3>Picture 1</h3>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
            <button class="btn btn-default"tyoe="button">READ MORE</button>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="thumbnail"><img src="img/gambar-2-B.jpg">
          <div class="caption">
            <h3>Picture 2</h3>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
            <button class="btn btn-default"tyoe="button">READ MORE</button>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="thumbnail"><img src="img/gambar-2-C.jpg">
          <div class="caption">
            <h3>Picture 3</h3>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
            <button class="btn btn-default"tyoe="button">READ MORE</button>
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="img/gambar-2-D.jpg">
          <div class="caption">
            <h3>Picture 4</h3>
            <p class="text-justify">Nullam id dolor id nibh ultricies vehicula ut id elit. </p>
            <button class="btn btn-default"tyoe="button">READ MORE</button>
          </div>
          </div>
        </div>
  
        </section>

    <section id="tambahan" >
    <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>CONTACT Page</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, quidem, debitis repellendus repellat, beatae nam perferendis placeat a nostrum amet reiciendis laborum consequatur ex porro ipsa temporibus obcaecati voluptate sed.</p>

                 
                </div>
            </div>
        </div>
    </section>

    <section id="contact">
    <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>CONTACT Page</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, quidem, debitis repellendus repellat, beatae nam perferendis placeat a nostrum amet reiciendis laborum consequatur ex porro ipsa temporibus obcaecati voluptate sed.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h1>fooot Page</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi, quidem, debitis repellendus repellat, beatae nam perferendis placeat a nostrum amet reiciendis laborum consequatur ex porro ipsa temporibus obcaecati voluptate sed.</p>

                   </div>
            </div>
        </div>
    </section>

    
    <!-- <section id="nyobi_parallax">
    
        <img src="img/parallax/bg.jpg" id="bg" alt="">
        <img src="img/parallax/moon.png" id="moon" alt="">
        <img src="img/parallax/mountain.png" id="mountain" alt="">
        <img src="img/parallax/road.png" id="road" alt="">
        <h2 id="text">NYOBIAN</h2>
        
    </section> -->
 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

        
        <script>
            $(document).scroll(function(){
                if ($(window).scrollTop() >70 ){
                    $('#navbar').removeClass('bg-light').addClass('bg-nontrans');

                }
                else if($(window).scrollTop() <=70){
                    $('#navbar').removeClass('bg-nontrans').addClass('bg-light');

                }

            });
       
    //         let bg = document.getElementById("bg");
	// let moon = document.getElementById("moon");
	// let mountain = document.getElementById("mountain");
	// let road = document.getElementById("road");
	// let text = document.getElementById("text");
	// console.log("tes");

	// window.addEventListener('scroll', function(){
	// 	var value = window.scrollY;

	// 	bg.style.top = value * 0.5 + 'px';
	// 	moon.style.left = -value * 0.5 + 'px';
	// 	mountain.style.top = -value * 0.15 + 'px';
	// 	road.style.top = value * 0.15 + 'px';
	// 	text.style.top = value * 1 + 'px';
	// })
        </script>

  </body>
</html>
