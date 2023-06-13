<!DOCTYPE html>
<html class=no-js lang="">
  <!-- Mirrored from preview.uideck.com/items/saasintro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jun 2023 04:19:50 GMT -->
  <!-- Added by HTTrack -->
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <!-- /Added by HTTrack -->
  <head>
    <meta charset=utf-8 />
    <meta http-equiv=x-ua-compatible content="ie=edge" />
    <title>SaaSIntro | Bootstrap 5 SaaS Landing Page</title>
    <meta name=description content="" />
    <meta name=viewport content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/images/favicon.svg" />
    <link rel=stylesheet href="{{ asset('frontend') }}/css/A.bootstrap.min.css%2blineicons.css%2btiny-slider.css%2banimate.css%2cMcc.tyPjl44PO1.css.pagespeed.cf.bIwviC1_Yn.css" />
    <link rel=stylesheet href="{{ asset('frontend') }}/css/A.main.css.pagespeed.cf.KZ5jJogbi_.css" />
  </head>
  <body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">
        You are using an
			<strong>outdated</strong> browser. Please

			<a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.

		</p>
		<![endif]-->
    <div class=preloader>
      <div class=loader>
        <div class=spinner>
          <div class=spinner-container>
            <div class=spinner-rotator>
              <div class=spinner-left>
                <div class=spinner-circle></div>
              </div>
              <div class=spinner-right>
                <div class=spinner-circle></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <header class=header>
      <div class=navbar-area>
        <div class=container>
          <div class="row align-items-center">
            <div class=col-lg-12>
              <nav class="navbar navbar-expand-lg">
                <a class=navbar-brand href="#" style="font-weight: bold">
                  {{-- <img src="{{ asset('frontend') }}/images/logo/logo.svg" alt=Logo /> --}}
                  SMPI YAPKUM
                </a>
                <button class=navbar-toggler type=button data-bs-toggle=collapse data-bs-target="#navbarSupportedContent" aria-controls=navbarSupportedContent aria-expanded=false aria-label="Toggle navigation">
                  <span class=toggler-icon></span>
                  <span class=toggler-icon></span>
                  <span class=toggler-icon></span>
                </button>
                <div class="collapse navbar-collapse sub-menu-bar" id=navbarSupportedContent>
                  <div class=ms-auto>
                    <ul id=nav class="navbar-nav ms-auto">
                      <li class=nav-item>
                        <a class="page-scroll active" href="#home">Home</a>
                      </li>
                      <li class=nav-item>
                        <a class=page-scroll href="#about">Tentang Kami</a>
                      </li>
                      <li class=nav-item>
                        <a class=page-scroll href="#features">Visi Misi</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class=header-btn>
                  <a href="{{url('registrasi')}}" class="main-btn btn-hover">Daftar Sekarang</a>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section id=home class="hero-section mb-5">
      <div class=container>
        <div class="row align-items-center">
          <div class="col-xl-6 col-lg-6 col-md-10">
            <div class=hero-content>
              <p class="mb-0" style="font-weight: bold;">Sistem Informasi Akademik</p>
              <h1>SMP ISLAM YAPKUM</h1>
              <p>"Sekolah yang Bermutu, Mencetak Generasi Berilmu"</p>
              {{-- <p>Kami adalah Sekolah yang didedikasikan untuk menginspirasi kesuksesan dan memelihara kesejahteraan. karena kami percaya bahwa setiap orang berhak mendapatkan masa depan yang terbaik.</p> --}}
              <a href="{{url('registrasi')}}" class="main-btn btn-hover">Daftar Sekarang</a>
            </div>
          </div>
          <div class="col-xxl-6 col-xl-6 col-lg-6">
            <div class="hero-image text-center text-lg-end">
              <img src="{{ asset('frontend') }}/images/hero/hero-image.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id=about class="about-section">
      <div class=container>
        <div class=row>
          <div class="col-lg-6 order-last order-lg-first">
            <div class=about-image>
              <img src="{{ asset('frontend') }}/images/about/about-image.svg" alt="">
            </div>
          </div>
          <div class=col-lg-6>
            <div class=about-content-wrapper>
              <div class=section-title>
                <h2 class=mb-20>Tentang Kami</h2>
                <p class=mb-10>Kami adalah Sekolah yang didedikasikan untuk menginspirasi kesuksesan dan memelihara kesejahteraan. karena kami percaya bahwa setiap orang berhak mendapatkan masa depan yang terbaik.</p>
                <p class="mb-30">Bersama-sama, mari memulai perjalanan transformatif yang akan menginspirasi pembelajaran seumur hidup dan mempersiapkan Anda untuk sukses di dunia yang selalu berubah. Bergabunglah dengan kami dan jadilah bagian dari pengejaran bersama kami akan keunggulan, kolaborasi, dan pertumbuhan pribadi.</p>
                {{-- <a href="#0" class="main-btn btn-hover border-btn">Discover More</a> --}}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id=features class=feature-section>
      <div class=container>
        <div class=row>
          <div class="col-lg-5 col-md-10">
            <div class="section-title mb-60">
              <h2 class=mb-20>Visi & Misi Kami</h2>
              <p>Visi dan misi sekolah hendaknya mengandung nilai-nilai yang diperlukan seluruh warga sekolah dalam menjalankan aktifitasnya sehari-hari.</p>
            </div>
          </div>
          <div class=col-lg-7>
            <div class=row>
              <div class="col-lg-6 col-md-6">
                <div class=single-feature>
                  <div class=feature-icon>
                    <i class="lni lni-compass"></i>
                  </div>
                  <div class=feature-content>
                    <h4>Visi</h4>
                    <p>Menjadi Sekolah yang unggul, bermutu dalam mencetak lulusan berkarakter, kompeten dan kompetitif.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class=single-feature>
                  <div class=feature-icon>
                    <i class="lni lni-layers"></i>
                  </div>
                  <div class=feature-content>
                    <h4>Misi</h4>
                    <p>Menumbuh kembangkan ahlak dan budi pekerti yang luhur kepada siswa.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id=cta class="cta-section pt-130">
      <div class=container>
        <div class="row align-items-center">
          <div class="col-lg-6 col-md-10">
            <div class=cta-content-wrapper>
              <div class=section-title>
                <h2 class=mb-20>Daftar Sekarang!</h2>
                <p class=mb-30>Kami adalah Sekolah yang didedikasikan untuk menginspirasi kesuksesan dan memelihara kesejahteraan. karena kami percaya bahwa setiap orang berhak mendapatkan masa depan yang terbaik.</p>
                <a href="{{url('registrasi')}}" class="main-btn btn-hover border-btn">Daftar Sekarang</a>
              </div>
            </div>
          </div>
          <div class=col-lg-6>
            <div class="cta-image text-lg-end">
              <img src="{{ asset('frontend') }}/images/cta/cta-image.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="d-none testimonial-section mt-100">
      <div class=container>
        <div class="row justify-content-center">
          <div class="col-xl-7 col-lg-9">
            <div class=testimonial-active-wrapper>
              <div class="section-title text-center">
                <h2 class=mb-20>What our customers says</h2>
              </div>
              <div class=testimonial-active>
                <div class=single-testimonial>
                  <div class=quote>
                    <i class="lni lni-quotation"></i>
                  </div>
                  <div class=content>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                  </div>
                  <div class=info>
                    <h6>Jhanker Mahbub</h6>
                    <p>Founder, Programming Hero</p>
                  </div>
                </div>
                <div class=single-testimonial>
                  <div class=quote>
                    <i class="lni lni-quotation"></i>
                  </div>
                  <div class=content>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                  </div>
                  <div class=info>
                    <h6>Jisan Adeeb</h6>
                    <p>Founder, Tech News</p>
                  </div>
                </div>
                <div class=single-testimonial>
                  <div class=quote>
                    <i class="lni lni-quotation"></i>
                  </div>
                  <div class=content>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                  </div>
                  <div class=info>
                    <h6>Abir Azim</h6>
                    <p>Co-Founder, Stack Leaner</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=testimonial-images>
        <img src="{{ asset('frontend') }}/images/testimonial/testimonial-1.png" alt="" class="testimonial-image image-1">
        <img src="{{ asset('frontend') }}/images/testimonial/testimonial-2.png" alt="" class="testimonial-image image-2">
        <img src="{{ asset('frontend') }}/images/testimonial/testimonial-3.png" alt="" class="testimonial-image image-3">
        <img src="{{ asset('frontend') }}/images/testimonial/testimonial-4.png" alt="" class="testimonial-image image-4">
      </div>
    </section>
    <footer id="footer" class="footer pt-120">
      <div class=container>
        <div class=row>
          <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
            <div class=footer-widget>
              <div class=logo>
                <a href="#" style="font-weight: bold">
                  {{-- <img src="{{ asset('frontend') }}/images/logo/logo.svg" alt=logo> --}}
                  SMPI YAPKUM
                </a>
              </div>
              <p class=desc>Kami adalah Sekolah yang didedikasikan untuk menginspirasi kesuksesan dan memelihara kesejahteraan.</p>
              <ul class=social-links>
                <li>
                  <a href="#0">
                    <i class="lni lni-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#0">
                    <i class="lni lni-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/smpiyapkum/">
                    <i class="lni lni-instagram"></i>
                  </a>
                </li>
                <li>
                  <a href="#0">
                    <i class="lni lni-twitter"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 offset-xl-1">
            <div class=footer-widget>
              <h3>Menu</h3>
              <ul class=links>
                <li>
                  <a href="#home">Home</a>
                </li>
                <li>
                  <a href="#about">Tentang Kami</a>
                </li>
                <li>
                  <a href="#features">Visi Misi</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-2 col-md-6 col-sm-6">
            <div class=footer-widget>
              <h3>Hubungi Kami</h3>
              <p>No Telp : (021) 77973193</p>
              <p>Email : smpi.yapkum@gmail.com</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class=footer-widget>
              <h3>Alamat</h3>
              <p>Jl. H.Usman No.27, Meruyung, Kec. Limo, Kota Depok, Jawa Barat 16515</p>
              {{-- <form action="#">
                <input type=email placeholder=Email>
                <button class="main-btn btn-hover">Subscribe</button>
              </form> --}}
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="scroll-top btn-hover">
      <i class="lni lni-chevron-up"></i>
    </a>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js%2btiny-slider.js.pagespeed.jc.yqVZV7R2Xd.js"></script>
    <script>
      eval(mod_pagespeed_Ca9mE2tSWc);
    </script>
    <script>
      eval(mod_pagespeed_P6eUNEWV7F);
    </script>
    <script src="{{ asset('frontend') }}/js/wow.min.js%2bpolyfill.js%2bmain.js.pagespeed.jc.t3O_zoRcCn.js"></script>
    <script>
      eval(mod_pagespeed_LMpAUQ1$uY);
    </script>
    <script>
      eval(mod_pagespeed_sQM_NSJ8F9);
    </script>
    <script>
      eval(mod_pagespeed_flVHtVrk$z);
    </script>
    <script>
      (function() {
        var js = "window['__CF$cv$params']={r:'7d67896bbc8f3f75',m:'I4bPZnlr2ehEureSqS8hTBu_Sd3zRv.vyYxXF2yyL5w-1686629982-0-ARbofIr2zJTVJop2PAQud/dYwviPJ4KF5FELhl8lbfRi'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='../../cdn-cgi/challenge-platform/h/g/scripts/jsd/6cdb09c9/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
        var _0xh = document.createElement('iframe');
        _0xh.height = 1;
        _0xh.width = 1;
        _0xh.style.position = 'absolute';
        _0xh.style.top = 0;
        _0xh.style.left = 0;
        _0xh.style.border = 'none';
        _0xh.style.visibility = 'hidden';
        document.body.appendChild(_0xh);

        function handler() {
          var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
          if (_0xi) {
            var _0xj = _0xi.createElement('script');
            _0xj.nonce = '';
            _0xj.innerHTML = js;
            _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
          }
        }
        if (document.readyState !== 'loading') {
          handler();
        } else if (window.addEventListener) {
          document.addEventListener('DOMContentLoaded', handler);
        } else {
          var prev = document.onreadystatechange || function() {};
          document.onreadystatechange = function(e) {
            prev(e);
            if (document.readyState !== 'loading') {
              document.onreadystatechange = prev;
              handler();
            }
          };
        }
      })();
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7d67896bbc8f3f75","version":"2023.4.0","r":1,"b":1,"token":"9a6015d415bb4773a0bff22543062d3b","si":100}' crossorigin="anonymous"></script>
  </body>
  <!-- Mirrored from preview.uideck.com/items/saasintro/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Jun 2023 04:19:58 GMT -->
</html>
