<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>CV Jordi Vidaller</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="/mycv/lib/templatelib/img/favicon.png" rel="icon">
  <link href="/mycv/lib/templatelib/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="/mycv/lib/templatelib/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/mycv/lib/templatelib/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/mycv/lib/templatelib/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/mycv/lib/templatelib/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="/mycv/lib/templatelib/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/mycv/lib/templatelib/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/mycv/lib/templatelib/css/style-green.css" rel="stylesheet">

</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">{{ $profil->name }} {{ $profil->surname }}</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#me">Qui suis-je ?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#competences">Compétences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#experiences">Expériences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#projets">Projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#clients">Clients</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#depots">Dépots</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(/mycv/resources/images/fond2.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">Développeur full stack</h1>
          <p class="intro-subtitle"><span class="text-slider-items">{{ $profil->tags }}</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->

  <section id="me" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-sm-6 col-md-5">
                    <div class="about-img">
                      <img src="/mycv/resources/images/moi.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-7">
                    <div class="about-info">
                      <p><span class="title-s">Name: </span> <span>{{ $profil->name }} {{ $profil->surname }}</span></p>
                      <p><span class="title-s">Profile: </span> <span>{{ $profil->title }}</span></p>
                      <p><span class="title-s">Email: </span> <span>{{ $profil->email }}</span></p>
                      <p><span class="title-s">Phone: </span> <span>{{ $profil->phone }}</span></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Qui suis je ?
                    </h5>
                  </div>
                  <p class="lead">
                    {{ $profil->description1 }}
                  </p>
                  <p class="lead">
                    {{ $profil->description2 }}
                  </p>
                  <p class="lead">
                    {{ $profil->description3 }}
                  </p>
                  <p class="lead">
                    {{ $profil->description4 }}
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ Section competences /-->
  <section id="competences" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Compétences
            </h3>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>

      <div class="row">
        @foreach($competences as $competence)
          <div class="col-md-4">
            <div class="service-box">
              <div class="service-ico">
                <span class="ico-circle"><img src="{{ $competence->logo }}" width="70"></span>
              </div>
              <div class="service-content">
                <h2 class="s-title">{{ $competence->name }}</h2>
                <p class="s-description text-center">
                  {{ $competence->description }}
                </p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!--/ Section competences /-->
  <section id="experiences" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Expériences professionelles
            </h3>
            <p class="subtitle-a">
              Entre 2017 et 2018, j'ai effectué un PVT en Australie loin de tous métiers informatique afin de voyager et de me rencentrer sur mes choix professionels.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>


      <div class="row">
        @foreach($experiences as $experience)
          <div class="col-md-4">
            <div class="experience-box">
              <div class="service-ico">
                <img src="{{ $experience->logo }}" width="300">
              </div>
              <div class="service-content">
                <h2 class="s-title">{{ $experience->title }}</h2>
                <h2 class="s-title">{{ $experience->begin }} / {{ $experience->end }}</h2>
                <p class="s-description text-center">
                  {{ $experience->description }}
                </p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>

  <!--/ Section Blog Star /-->
  <section id="projets" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Mes Projets
            </h3>
            <p class="subtitle-a">
              Projets que j'ai réalisé, de manière professionelle, personelle, seul ou en équipe.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">

      @foreach($realisations as $realisation)
        <div class="col-md-4">
          <div class="card card-blog">
            <div class="card-img">
              <a href="{{$realisation->logo}}" data-lightbox="gallery-mf"><img src="{{$realisation->logo}}" alt="" class="img-fluid"></a>
            </div>
            <div class="card-body">
              <div class="card-category-box">
                <div class="card-category">
                  <h6 class="category">{{ $realisation->role }}</h6>
                </div>
              </div>
              <h3 class="card-title">{{ $realisation->title }}</h3>
              <p class="card-description">
                {{ $realisation->description }}
              </p>
            </div>
            <div class="card-footer">
              <div class="post-author">
                <a href="#">
                  <img src="/mycv/lib/templatelib/img/testimonial-2.jpg" alt="" class="avatar rounded-circle">
                  <span class="author">{{ $realisation->url }}</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
  </section>
  <!--/ Section Blog End /-->

  <!--/ Section Clients /-->
  <section id="clients" >
    <div class="testimonials paralax-mf bg-image" style="background-image: url(/mycv/resources/images/fond2.jpg)">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Mes clients
              </h3>
              <p class="subtitle-a">
                Clients avec qui j'ai eu l'occasion de travailler, en freelance ou en CDI.
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-mf" class="owl-carousel owl-theme">
              @foreach ($clients as $client)
                <div class="testimonial-box">
                  <div class="author-test">
                    <img src="{{ $client->logo }}" width="150" height="150" alt="" class="rounded-circle b-shadow-a">
                    <span class="author">{{ $client->name }}</span>
                  </div>
                  <div class="content-test">
                    <p class="description lead">
                      {{ $client->description }}
                    </p>
                    <span class="comit"><i class="fa fa-quote-right"></i></span>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="depots" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Mes dépots github
            </h3>
            <p class="subtitle-a">
              Dépots de quelques projets personels en cours, ou terminés.
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>

      <div class="list-group">
      @foreach ($depots as $depot)
        <a href="{{ $depot->url }}" target="_blank" rel="noopener noreferrer" class="list-group-item list-group-item-action flex-column align-items-start">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{ $depot->name }}</h5>
          </div>
          <p class="mb-1">{{ $depot->description }}</p>
          <small>{{ $depot->url }}</small>
        </a>
      @endforeach
      </div>
    </div>
  </section>

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Send Message Us
                    </h5>
                  </div>
                  <div>
                      <form action="" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis dolorum dolorem soluta quidem
                      expedita aperiam aliquid at.
                      Totam magni ipsum suscipit amet? Autem nemo esse laboriosam ratione nobis
                      mollitia inventore?
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> 329 WASHINGTON ST BOSTON, MA 02108</li>
                      <li><span class="ion-ios-telephone"></span> (617) 557-0089</li>
                      <li><span class="ion-email"></span> contact@example.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="/mycv/lib/templatelib/lib/jquery/jquery.min.js"></script>
  <script src="/mycv/lib/templatelib/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/mycv/lib/templatelib/lib/popper/popper.min.js"></script>
  <script src="/mycv/lib/templatelib/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="/mycv/lib/templatelib/lib/easing/easing.min.js"></script>
  <script src="/mycv/lib/templatelib/lib/counterup/jquery.waypoints.min.js"></script>
  <script src="/mycv/lib/templatelib/lib/counterup/jquery.counterup.js"></script>
  <script src="/mycv/lib/templatelib/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/mycv/lib/templatelib/lib/lightbox/js/lightbox.min.js"></script>
  <script src="/mycv/lib/templatelib/lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/mycv/lib/templatelib/js/main.js"></script>

</body>
</html>
