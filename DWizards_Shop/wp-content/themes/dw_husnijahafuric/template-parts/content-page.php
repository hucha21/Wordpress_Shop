<?php
  /**
   * Template part for displaying page content in page.php
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package dw_HusnijaHafuric
   */
  //header fields
  $header_logo         = get_field('logo');
  $nav1                = get_field('nav1');
  $nav2                = get_field('nav2');
  $nav3                = get_field('nav3');
  $nav4                = get_field('nav4');
  //slider section fields
  $slider_title        = get_field('slider_title');
  $slider_text         = get_field('slider_text');
  $slider_button       = get_field('slider_button');
  $slider_img          = get_field('slider_img');
  $slider_title2        = get_field('slider_title2');
  $slider_text2         = get_field('slider_text2');
  $slider_button2       = get_field('slider_button2');
  $slider_img2          = get_field('slider_img2');
  $slider_title3        = get_field('slider_title3');
  $slider_text3         = get_field('slider_text3');
  $slider_button3       = get_field('slider_button3');
  $slider_img3          = get_field('slider_img3');
  //block box section fields
  $block_title         = get_field('block_title');
  $block_subtitle      = get_field('block_subtitle');
  $block_img           = get_field('block_img');
  $block_title2        = get_field('block_title2');
  $block_subtitle2     = get_field('block_subtitle2');
  $block_img2          = get_field('block_img2');
  $block_title3        = get_field('block_title3');
  $block_subtitle3     = get_field('block_subtitle3');
  $block_img3          = get_field('block_img3');
  $block_title4        = get_field('block_title4');
  $block_subtitle4     = get_field('block_subtitle4');
  $block_img4          = get_field('block_img4');
  //najnoviji section fields
  $najnoviji_title     = get_field('najnoviji_title');
  $najnoviji_subtitle  = get_field('najnoviji_subtitle');
  //izdvojeni section fields
  $izdvojeni_title     = get_field('izdvojeni_title');
  $izdvojeni_subtitle  = get_field('izdvojeni_subtitle');
  //newsletter section fields
  $newsletter_title    = get_field('newsletter_title');
  $newsletter_subtitle = get_field('newsletter_subtitle');
  //footer fields
  $copyright           = get_field('copyright');
  $social_text         = get_field('social_text');
 
  // getting data from db
  $args_featured = array(
   'category' => array( 'Featured' ),
   'orderby'  => 'id',
   'order' => 'ASC',
);
$args_latest = array(
 'category' => array( 'Latest' ),
 'date_query' => array(
   array(
       'after' => '1 week ago'
   )),
 'orderby'  => 'id',
 'order' => 'ASC',
);
//getting products from db
  $products_latest     = wc_get_products( $args_latest );
  $products_featured = wc_get_products( $args_featured );
  ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container d-flex justify-content-between align-items-center">
        <a class="navbar-brand text-black logo h3 align-self-center" href="index.php">
        <img class="img-fluid" src=' <?php echo $header_logo['url']; ?>' alt="">
        </a>
        <div class="align-self-center collapse navbar-collapse  d-lg-flex justify-content-lg-between menu_overlay" id="main_nav">
          <div class="flex-fill ">
            <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php"><?php echo $nav1 ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><?php echo $nav2 ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><?php echo $nav3 ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link"><?php echo $nav4 ?></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="navbar align-self-center d-flex">
          <div class="search-box">
            <button class="btn-search"><i class="fas fa-search"></i></button>
            <input type="text" class="input-search" placeholder="Pretraži">
          </div>
        </div>
        <ul class="list-unstyled d-flex justify-content-between mt-3">
          <li class="nav-icon position-relative text-decoration-none list-inline-item-sq" >
            <i class="fa fa-fw fa-user text-dark mr-3"></i>
          </li>
          <li class="nav-icon position-relative text-decoration-none list-inline-item list-inline-item-sq">
            <i class="fa fa-fw fa-shopping-cart text-dark mr-1"></i><span class="nav-shop__square">0</span>
          </li>
          <li class="nav-icon position-relative text-decoration-none list-inline-item list-inline-item-sq">
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade bg-white" id="search" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="w-100 pt-1 mb-5 text-right">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="akcija" method="get" class="modal-content modal-body border-0 p-0">
          <div class="input-group mb-2">
            <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
            <button type="submit" class="input-group-text  text-light">
            <i class="fa fa-fw fa-search text-white"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- Close Header -->
  </header>
  <!-- .entry-header -->
  <!-- Open Content -->
  <div class="entry-content">
    <!-- Start Banner Hero -->
    <div id="hero-carousel" class="for-slick-slider single-item">
      <div class="items">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src='<?php echo $slider_img['url']; ?>' alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left align-self-center">
                <h1 class="slider-text"><?php echo $slider_title ?> </h1>
                <div class="text-muted"><?php echo $slider_text ?></div>
                <p class="text-align-left btn-succ-center"><a class="btn btn-success"><?php echo $slider_button ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="items">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src='<?php echo $slider_img2['url']; ?>' alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left align-self-center">
                <h1 class="slider-text"><?php echo $slider_title2 ?></h1>
                <div class="text-muted"><?php echo $slider_text2 ?></div>
                <p class="text-align-left btn-succ-center"><a class="btn btn-success"><?php echo $slider_button ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="items">
        <div class="container">
          <div class="row p-5">
            <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
              <img class="img-fluid" src='<?php echo $slider_img3['url']; ?>' alt="">
            </div>
            <div class="col-lg-6 mb-0 d-flex align-items-center">
              <div class="text-align-left align-self-center">
                <h1 class="slider-text"> <?php echo $slider_title3 ?> </h1>
                <div class="text-muted"><?php echo $slider_text3 ?></div>
                <p class="text-align-left btn-succ-center"><a class="btn btn-success"><?php echo $slider_button ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Banner Hero -->
    <!-- Features -->
    <section class="feature_section  layout_padding">
      <div class="container">
        <div style="margin: 20px;">
          <h2><b>Pružamo najbolje korisničko iskustvo</b></h2>
        </div>
        <div class="feature_container">
          <div class="box">
            <div class="img-box">
              <img class="img-fluid ikonice" src='<?php echo $block_img['url']; ?>' alt="">
            </div>
            <div class="detail-box">
              <h5><?php echo $block_title ?></h5>
              <p><?php echo $block_subtitle ?></p>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img class="img-fluid ikonice" src='<?php echo $block_img2['url']; ?>' alt="">
            </div>
            <div class="detail-box">
              <h5><?php echo $block_title2 ?></h5>
              <p><?php echo $block_subtitle2 ?></p>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img class="img-fluid ikonice" src='<?php echo $block_img3['url']; ?>' alt="">
            </div>
            <div class="detail-box">
              <h5><?php echo $block_title3 ?></h5>
              <p><?php echo $block_subtitle3 ?></p>
            </div>
          </div>
          <div class="box">
            <div class="img-box">
              <img class="img-fluid ikonice" src='<?php echo $block_img4['url']; ?>' alt="">
            </div>
            <div class="detail-box">
              <h5><?php echo $block_title4 ?></h5>
              <p><?php echo $block_subtitle4 ?></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End  -->
    <!-- Najnoviji proizvodi -->
    <section id="slick" class="backgound-grey">
      <div class="row">
        <div class="m-auto">
          <h1 class="h1 mt-3"><?php echo $najnoviji_title ?></h1>
          <p class="txt text-left text-left-left"><?php echo $najnoviji_subtitle ?></p>
        </div>
      </div>
      <ul class="list-inline  text-right ">
        <li class="list-inline-item list-inline-item-arrow position-arrow  ">
          <div class="arrow-prev">
            <span>
              <svg width="51" height="16" viewBox="0 0 51 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.292893 7.29289C-0.097631 7.68341 -0.0976311 8.31658 0.292893 8.7071L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6569L2.41421 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31945 8.07107 0.928928C7.68054 0.538404 7.04738 0.538404 6.65685 0.928928L0.292893 7.29289ZM51 7L1 7L1 9L51 9L51 7Z" fill="black" fill-opacity="0.5"/>
              </svg>
            </span>
          </div>
        </li>
        <li class="list-inline-item list-inline-item-arrow position-arrow ">
          <div class="arrow-next">
            <span>
              <svg width="51" height="16" viewBox="0 0 51 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M50.7071 8.70711C51.0976 8.31658 51.0976 7.68342 50.7071 7.29289L44.3431 0.928932C43.9526 0.538408 43.3195 0.538408 42.9289 0.928932C42.5384 1.31946 42.5384 1.95262 42.9289 2.34315L48.5858 8L42.9289 13.6569C42.5384 14.0474 42.5384 14.6805 42.9289 15.0711C43.3195 15.4616 43.9526 15.4616 44.3431 15.0711L50.7071 8.70711ZM0 9L50 9V7L0 7L0 9Z" fill="black" fill-opacity="0.5"/>
              </svg>
            </span>
          </div>
        </li>
      </ul>
      <div class="for-slick-slider responsive ">
        <?php foreach($products_latest as $product)
          { ?>
        <div class="items">
          <div class="container">
            <div class="card-latest">
              <img src=' <?php echo wp_get_attachment_image_url( $product->image_id, 'full' ); ?>' class="card-img-top' alt="...">
              <div class="card-body">
                <ul class="list-unstyled d-flex justify-content-between text-right">
                <li><p class="card-text">
                      <?php echo $product->name; ?>
                    </p></li>
                  <li class="list-inline-item" style="background-color: #000;"><i class="fa fa-fw fa-shopping-cart mr-1" style="color:white"></i></li>
                </ul>
                <p class="text"><b>$<?php echo $product->price; ?>.00</b></p>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>
    <!-- Najnoviji proizvodi end -->
    <!-- Izdvojeni proizvodi -->
    <section class="bg-light">
      <div class="container py-5">
        <div class="row text-center py-3">
          <div class="col-lg-6 m-auto">
            <h1 class="h1"><?php echo $izdvojeni_title ?></h1>
            <p class="text-muted"><?php echo $izdvojeni_subtitle ?></p>
          </div>
        </div>
        <div class="row row-sq">
          <?php foreach($products_featured as $product){ ?>
            
          <div class="col-12 col-md-4 mb-4">
            <div class="card">
              <img src=' <?php echo wp_get_attachment_image_url( $product->image_id, 'full' ); ?>' class="card-img-top" alt="...">
              <div class="card-body">
                <ul class="list-unstyled d-flex justify-content-between">
                  <li>
                    <p class="card-text">
                      <?php echo $product->name; ?>
                    </p>
                  </li>
                  <li class="list-inline-item list-inline-item-sq" ><i class="fa fa-fw fa-shopping-cart mr-1" style="color:#000"></i></li>
                </ul>
                <p class="text"><b>$<?php echo $product->price; ?>.00</b></p>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </section>
    <!-- Izdvojeni proizvodi -->
    <!-- ================ Newsletter ================= --> 
    <section class="subscribe-position">
      <div class="container sub_container">
        <div class="subscribe text-center">
          <h3 class="subscribe__title"><?php echo $newsletter_title ?></h3>
          <p><?php echo $newsletter_subtitle ?></p>
          <br>
          <div id="mc_embed_signup">
            <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe-form form-inline">
              <div class="form-group ml-sm-auto">
                <ul class="list-unstyled d-flex">
                  <li style="background-color: #000;"><input class="form-control" type="email" name="EMAIL" placeholder="Email adresa" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email adresa'" ></li>
                  <button type="submit" ><span style="color: white;"><i class="fas fa-paper-plane"></i></span></button>
                  </li>
                </ul>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ Newsletter end ================= -->
  </div>
  <!-- .entry-content -->
  <?php if ( get_edit_post_link() ) : ?>
  <footer class="entry-footer">
  <footer id="colophon" class="site-footer">
    <!-- Footer -->
    <div class="container">
      <div class="row row-sq">
        <div class="col-md-4 pt-5">
          <h2 class="pb-3 border-light logo">Explore</h2>
          <ul class="list-unstyled text-muted footer-link-list">
            <li>
              <i class="footer-text"></i>
              Lorem ipsum dolor sit amet consectetur. Tristique congue magna at eget felis. Faucibus congue blandit id ut viverra.
            </li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 pt-5">
          <h2 class="h3 ">Sitemap</h2>
          <ul class="list-unstyled text-muted footer-link-list">
            <li><i class="footer-text"></i><?php echo $nav1 ?></li>
            <li><i class="footer-text"></i><?php echo $nav2 ?></li>
            <li><i class="footer-text"></i><?php echo $nav3 ?></li>
            <li><i class="footer-text"></i><?php echo $nav4 ?></li>
          </ul>
          <div class="w-100 my-3 border-top border-light hidden-lines" ></div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 pt-5">
          <h2 class="h3 ">O nama</h2>
          <ul class="list-unstyled text-muted footer-link-list">
            <li><i class="footer-text"></i>O nama</li>
            <li><i class="footer-text"></i>Česta pitanja</li>
            <li><i class="footer-text"></i>Novosti i zanimljivosti</li>
            <li><i class="footer-text"></i>Partneri i investitori</li>
          </ul>
          <div class="w-100 my-3 border-top border-light hidden-lines" ></div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 pt-5">
          <h2 class="h3 ">Pomoć</h2>
          <ul class="list-unstyled text-muted footer-link-list">
            <li><i class="footer-text"></i>Opći uvjeti poslovanja</li>
            <li><i class="footer-text"></i>Privatnost i sigurnost</li>
            <li><i class="footer-text"></i>Centar za privatnost</li>
            <li><i class="footer-text"></i>Donacije</li>
          </ul>
          <div class="w-100 my-3 border-top border-light hidden-lines" ></div>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-6 pt-5">
          <h2 class="h3 ">Dostava</h2>
          <ul class="list-unstyled text-muted footer-link-list">
            <li><i class="footer-text"></i>Usluge i dostava</li>
            <li><i class="footer-text"></i>Reklamacija i povrati</li>
          </ul>
          <div class="w-100 my-3 border-top border-light hidden-lines" ></div>
        </div>
      </div>
      <div class="row text-light mb-4">
        <div class="col-12 mb-3 background-sq">
          <div class="w-100 my-3 border-top border-light hidden-lines-desk"></div>
        </div>
        <div class="col-auto">
          <ul class="list-inline text-right background-sq ">
            <li class="list-inline-item text-muted"><?php echo $copyright ?></li>
            <li class="list-inline-item rounded-square text-center">
              <p class="socials"style="color:#878787;">Social Media</p>
              <a class="text-light text-decoration-none" style="background-color:#000;" target="_blank"  href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
              <a class="text-light text-decoration-none list-inline-item-sq" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
              <a class="text-light text-decoration-none list-inline-item-sq" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- .entry-footer -->
  <!-- End Footer -->
  <!-- Scripts -->
  <script src=' <?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.0.min.js'></script>
  <script src=' <?php echo get_template_directory_uri(); ?>/assets/js/jquery-migrate-1.2.1.min.js'></script>
  <script src=' <?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js'></script>
  <script src=' <?php echo get_template_directory_uri(); ?>/assets/js/custom.js'></script>
  <script src=' <?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js'></script>
  <script type = "text/javascript" > 
  $('.single-item').slick({
    dots: true,
    arrows: false,
    autoplay: true,
    speed: 300,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]
}); </script> 
<script type = "text/javascript" >
    $('.responsive').slick({
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        prevArrow: '.arrow-prev',
        nextArrow: '.arrow-next',
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    }); </script>
  <?php endif; ?>
</article>
<!-- #post-<?php the_ID(); ?> -->