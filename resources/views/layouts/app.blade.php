<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{ config('app.name')}} : @yield('title')</title>
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css')}}" />
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/myCSS.css') }}" />
  </head>

  <body>
  {{-- Request::server('HTTP_ACCEPT_LANGUAGE') --}}
  @php $locale = session()->get('locale'); @endphp
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <nav class="navbar navbar-expand-lg navbar-light menuPrinc">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <!-- <a class="navbar-brand logo_h mr-5" href="{{ route('dashboard')}}">  -->
            <div class="avatar">
              @if(!Auth::user())
              <a href="{{ route('login')}}" class="nav-link search" id="search" rel="logout"> 
                <span>@lang('lang.login')</span>
                <img src="{{ asset('img/icons/login.png') }}" alt=""/>
              </a>
              <ul class="nav navbar-nav menu_nav ml-5">
                <div class="elmMenu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('lang', 'en') }}"><i class="flag flag-united-states"></i> En</a> </li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('lang', 'fr')}}"><i class="flag flag-france"></i> Fr</a> </li>
                </div>
              </ul>
                @else
                  <a href="{{ route('dashboard')}}" class="nav-link search" id="search" rel="logout">
                    @if(Auth::user()->id == 215)
                      <img src="{{ asset('img/icons/marcos.JPG') }}" alt=""/>
                    @else
                      <img src="{{ asset('img/icons/avatar.png') }}" alt=""/>
                    @endif
                    <span>@lang('lang.hello') {{Auth::user()->name}} !</span>
                  </a>
            </div>
                <!-- </a>  -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">

                <ul class="nav navbar-nav menu_nav ml-auto">
                  <div class="elmMenu">
                      <li class="nav-item"> <a class="nav-link" href="/">@lang('lang.firstPage')</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="{{ route('forum.index')}}">@lang('lang.forum')</a> </li>
                      <li class="nav-item"> <a class="nav-link" href="{{ route('depot.index')}}">@lang('lang.directory')</a> </li>
                    </div>
                    @if(session()->get('locale') == 'fr')
                      <li class="nav-item"> <a class="nav-link" href="{{route('lang', 'en') }}"><i class="flag flag-united-states"></i> En</a> </li>
                    @else
                      <li class="nav-item"> <a class="nav-link" href="{{route('lang', 'fr')}}"><i class="flag flag-france"></i> Fr</a> </li>
                    @endif
                    <li class="nav-item">
                       <a href="{{ route('logout')}}" class="nav-link search" id="search" rel="logout">@lang('lang.logout')
                          <img src="{{ asset('img/icons/logout.png') }}" alt="Logout"/>
                       </a>
                  </li>
              </ul>
              @endif
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->
        
    @yield('content')
  
    <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 single-footer-widget">
            .
</div>
</div>
</div>

</body>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<!--================ Start footer Area  =================-->
<footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Top Products</h4>
            <ul>
              <li><a href="#">Managed Website</a></li>
              <li><a href="#">Manage Reputation</a></li>
              <li><a href="#">Power Tools</a></li>
              <li><a href="#">Marketing Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Brand Assets</a></li>
              <li><a href="#">Investor Relations</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Features</h4>
            <ul>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Brand Assets</a></li>
              <li><a href="#">Investor Relations</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Resources</h4>
            <ul>
              <li><a href="#">Guides</a></li>
              <li><a href="#">Research</a></li>
              <li><a href="#">Experts</a></li>
              <li><a href="#">Agencies</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 single-footer-widget">
            <h4>Newsletter</h4>
            <p>You can trust us. we only send promo offers,</p>
            <div class="form-wrap" id="mc_embed_signup">
              <form
                target="_blank"
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get"
                class="form-inline d-flex"
              >
                <input
                  class="form-control"
                  name="EMAIL"
                  placeholder="Your Email Address"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Your Email Address'"
                  required=""
                  type="email"/>
                <button class="click-btn btn btn-default">
                  <span>subscribe</span>
                </button>
                <div style="position: absolute; left: -5000px;">
                  <input
                    name="b_36c4fd991d266f23781ded980_aefe40901a"
                    tabindex="-1"
                    value=""
                    type="text"
                  />
                </div>

                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <hr>
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <div class="text-center">
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> @lang('lang.copyRight')<a href="#" target="_blank"> Hamid Orman</a>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </footer>
    <!--================ End footer Area  =================-->
  </body>
  <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</html>