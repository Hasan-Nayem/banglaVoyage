    @extends('frontend.layouts.main')
    @section('content')
        <!-- Hero section start -->
        <style>
            .cid-u6lgzwHGpY {
                display: flex;
                background-image: url("assets/images/photo-1601628865521-a54b2dcedbe6.jpeg");
            }

            .cid-u6lgzwHGpY .mbr-overlay {
                background-color: #000000;
                opacity: 0.5;
            }

            @media (min-width: 768px) {
                .cid-u6lgzwHGpY {
                    align-items: flex-end;
                }

                .cid-u6lgzwHGpY .row {
                    justify-content: center;
                }

                .cid-u6lgzwHGpY .content-wrap {
                    padding: 1rem 3rem;
                }
            }

            @media (max-width: 991px) and (min-width: 768px) {
                .cid-u6lgzwHGpY .content-wrap {
                    min-width: 50%;
                }
            }

            @media (max-width: 767px) {
                .cid-u6lgzwHGpY {
                    -webkit-align-items: center;
                    align-items: flex-end;
                }

                .cid-u6lgzwHGpY .mbr-row {
                    -webkit-justify-content: center;
                    justify-content: center;
                }

                .cid-u6lgzwHGpY .content-wrap {
                    width: 100%;
                }
            }

            .cid-u6lgzwHGpY .mbr-section-title,
            .cid-u6lgzwHGpY .mbr-section-subtitle {
                text-align: center;
            }

            .cid-u6lgzwHGpY .mbr-text,
            .cid-u6lgzwHGpY .mbr-section-btn {
                text-align: center;
            }
        </style>

        <section class="header16 cid-u6lgzwHGpY mbr-fullscreen mbr-parallax-background" id="hero-17-u6lgzwHGpY">
            <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);"></div>
            <div class="container-fluid">
                <div class="row">
                    <div class="content-wrap col-12 col-md-10">
                        <h1 class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1">
                            <strong>Adventure Awaits</strong>
                        </h1>
                        <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">Embark on a Thrilling Journey Through
                            the Heart
                            of Bangladesh</p>
                        <div class="mbr-section-btn"><a class="btn btn-white-outline display-7" href="#">Discover
                                More</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hero section end -->







        <!-- Up coming adventures -->
        <style>
            .cid-u6lgzwH7NQ {
                padding-top: 6rem;
                padding-bottom: 6rem;
                background-color: #ffffff;
            }

            .cid-u6lgzwH7NQ .item-subtitle {
                line-height: 1.2;
                color: #000000;
            }

            .cid-u6lgzwH7NQ img,
            .cid-u6lgzwH7NQ .item-img {
                width: 100%;
                height: 100%;
                height: 400px;
                object-fit: cover;
            }

            .cid-u6lgzwH7NQ .item:focus,
            .cid-u6lgzwH7NQ span:focus {
                outline: none;
            }

            .cid-u6lgzwH7NQ .item {
                margin-bottom: 2rem;
            }

            @media (max-width: 767px) {
                .cid-u6lgzwH7NQ .item {
                    margin-bottom: 1rem;
                }
            }

            .cid-u6lgzwH7NQ .item-wrapper {
                position: relative;
                border-radius: 4px;
                height: 100%;
                display: flex;
                flex-flow: column nowrap;
            }

            .cid-u6lgzwH7NQ .mbr-section-title {
                color: #232323;
            }

            .cid-u6lgzwH7NQ .mbr-text,
            .cid-u6lgzwH7NQ .mbr-section-btn {
                color: #232323;
            }

            .cid-u6lgzwH7NQ .item-title {
                color: #232323;
            }

            .cid-u6lgzwH7NQ .content-head {
                max-width: 800px;
            }
        </style>

        <section class="features03 cid-u6lgzwH7NQ" id="events-1-u6lgzwH7NQ">
            <div class="container-fluid">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 content-head">
                        <div class="mbr-section-head">
                            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                                <strong>Upcoming Adventures</strong>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="item features-image col-12 col-md-6 col-lg-3">
                        <div class="item-wrapper">
                            <div class="item-img mb-3">
                                <img src="assets/images/photo-1585296910838-ff8e46ea7979.jpeg">
                            </div>
                            <div class="item-content align-left">
                                <h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
                                    <strong><a class="text-black fw-bold" href="#">Mystical Sundarban
                                            </a></strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mb-3 display-7">April 15, 2024</p>
                                <p class="mbr-text mbr-fonts-style mb-3 display-7">Unleash Your Inner Explorer in the
                                    Enchanting Mangrove
                                    Forests</p>
                                <div class="mbr-section-btn item-footer"><a href="#"
                                        class="btn item-btn btn-primary display-7">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item features-image col-12 col-md-6 col-lg-3">
                        <div class="item-wrapper">
                            <div class="item-img mb-3">
                                <img src="assets/images/photo-1593547440394-72b9cb07b7b8.jpeg" data-slide-to="1"
                                    data-bs-slide-to="1">
                            </div>
                            <div class="item-content align-left">
                                <h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
                                    <strong><a class="text-black fw-bold" href="#">Charming Cox&#x27;s Bazar
                                            </a></strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mb-3 display-7">May 20, 2024</p>
                                <p class="mbr-text mbr-fonts-style mb-3 display-7">Relax and Rejuvenate on the World&#x27;s
                                    Longest
                                    Natural Sea Beach</p>
                                <div class="mbr-section-btn item-footer"><a href="#"
                                        class="btn item-btn btn-primary display-7">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item features-image col-12 col-md-6 col-lg-3">
                        <div class="item-wrapper">
                            <div class="item-img mb-3">
                                <img src="assets/images/photo-1599074914978-2946b69e5a4a.jpeg" data-slide-to="2"
                                    data-bs-slide-to="2">
                            </div>
                            <div class="item-content align-left">
                                <h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
                                    <strong><a class="text-black fw-bold" href="#">Majestic Sylhet
                                            Escapade</a></strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mb-3 display-7">June 30, 2024</p>
                                <p class="mbr-text mbr-fonts-style mb-3 display-7">Immerse Yourself in the Serene Beauty of
                                    Tea Gardens
                                    and Waterfalls</p>
                                <div class="mbr-section-btn item-footer"><a href="#"
                                        class="btn item-btn btn-primary display-7">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item features-image col-12 col-md-6 col-lg-3">
                        <div class="item-wrapper">
                            <div class="item-img mb-3">
                                <img src="assets/images/photo-1587222318667-31212ce2828d.jpeg" data-slide-to="3"
                                    data-bs-slide-to="3">
                            </div>
                            <div class="item-content align-left">
                                <h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
                                    <strong><a class="text-black fw-bold" href="#">Vibrant Dhaka City
                                            Tour</a></strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style mb-3 display-7">July 15, 2024</p>
                                <p class="mbr-text mbr-fonts-style mb-3 display-7">Experience the Bustling Capital with a
                                    Blend of
                                    Tradition and Modernity</p>
                                <div class="mbr-section-btn item-footer"><a href="#"
                                        class="btn item-btn btn-primary display-7">See Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn">
                    {{-- <button type="submit" class="btn btn-primary display-7">View More</button> --}}
                    <a class="btn display-7 animate__animated animate__delay-1s animate__fadeIn" style="background-color: transparent !important; border-color: var(--primary-color, #9fe870) !important;" href="{{ route('event.show') }}">See More</a>
                </div>
            </div>
        </section>
        <!-- Up coming adventures -->

        <!-- <style>
        .cid-u6lgzwHull {
          padding-top: 5rem;
          padding-bottom: 4rem;
          background-color: transparent;
        }

        .cid-u6lgzwHull .item-mb {
          margin-bottom: 2rem;
        }

        @media (max-width: 767px) {
          .cid-u6lgzwHull .item-mb {
            margin-bottom: 1rem;
          }
        }

        .cid-u6lgzwHull .item-head {
          background: var(--primary-color, #9fe870);
          padding: 2.25rem;
        }

        @media (min-width: 992px) and (max-width: 1200px) {
          .cid-u6lgzwHull .item-head {
            padding: 2rem 1.5rem;
            margin-bottom: 2rem;
          }
        }

        @media (max-width: 767px) {
          .cid-u6lgzwHull .item-head {
            padding: 2rem 1.5rem;
            margin-bottom: 2rem;
          }
        }

        .cid-u6lgzwHull .item-content {
          padding: 2.25rem 2.25rem 0;
          background: #ffffff;
        }

        @media (min-width: 992px) and (max-width: 1200px) {
          .cid-u6lgzwHull .item-content {
            padding: 0rem 1.5rem;
          }
        }

        @media (max-width: 767px) {
          .cid-u6lgzwHull .item-content {
            padding: 0rem 1.5rem;
          }
        }

        .cid-u6lgzwHull .item-wrapper {
          border-radius: 2rem;
          overflow: hidden;
          margin-bottom: 2rem;
          background: #ffffff;
          padding: 0rem;
          height: 100%;
          display: flex;
          flex-flow: column nowrap;
        }

        @media (max-width: 767px) {
          .cid-u6lgzwHull .item-wrapper {
            margin-bottom: 1rem;
          }
        }

        @media (min-width: 992px) and (max-width: 1200px) {
          .cid-u6lgzwHull .item-wrapper .item-footer {
            padding: 0 1.5rem 2rem;
          }
        }

        @media (min-width: 1201px) {
          .cid-u6lgzwHull .item-wrapper .item-footer {
            padding: 0 2rem 2rem;
          }
        }

        .cid-u6lgzwHull .btn {
          width: -webkit-fill-available;
        }

        .cid-u6lgzwHull .item:focus,
        .cid-u6lgzwHull span:focus {
          outline: none;
        }

        .cid-u6lgzwHull .mbr-section-btn {
          margin-top: auto !important;
          padding: 2rem 2rem 0;
        }

        @media (max-width: 991px) {
          .cid-u6lgzwHull .mbr-section-btn {
            padding: 0rem 2.25rem 2rem;
          }
        }

        @media (max-width: 767px) {
          .cid-u6lgzwHull .mbr-section-btn {
            padding: 0rem 1.5rem;
            margin-bottom: 2rem;
          }
        }

        .cid-u6lgzwHull .mbr-section-title {
          color: #000000;
        }

        .cid-u6lgzwHull .mbr-section-subtitle {
          color: #ffffff;
        }

        .cid-u6lgzwHull .mbr-text,
        .cid-u6lgzwHull .mbr-section-btn {
          text-align: left;
        }

        .cid-u6lgzwHull .item-title {
          text-align: left;
          color: var(--primary-text, #ffffff);
        }

        .cid-u6lgzwHull .item-subtitle {
          text-align: left;
          color: var(--primary-text, #ffffff);
        }

        .cid-u6lgzwHull .content-head {
          max-width: 800px;
        }
        </style>


        <section class="pricing1 cid-u6lgzwHull" id="pricing-cards-1-u6lgzwHull">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 content-head">
              <div class="mbr-section-head mb-5">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                  <strong>Affordable Plans</strong>
                </h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="item features-without-image col-12 col-md-6 col-lg-3 item-mb">
              <div class="item-wrapper">
                <div class="item-head">
                  <h5 class="item-title mbr-fonts-style mb-0 display-5">
                    <strong>Basic</strong>
                  </h5>
                  <h6 class="item-subtitle mbr-fonts-style mt-0 mb-0 display-7">
                    <strong>4.99</strong>/month
                  </h6>
                </div>
                <div class="item-content">
                  <p class="mbr-text mbr-fonts-style display-7">Access to Exclusive Travel Deals and Events</p>
                </div>
                <div class="mbr-section-btn item-footer"><a href="" class="btn item-btn btn-primary display-7">Get
                    Started</a></div>
              </div>
            </div>
            <div class="item features-without-image col-12 col-md-6 col-lg-3 item-mb">
              <div class="item-wrapper">
                <div class="item-head">
                  <h5 class="item-title mbr-fonts-style mb-0 display-5">
                    <strong>Standard</strong>
                  </h5>
                  <h6 class="item-subtitle mbr-fonts-style mt-0 mb-0 display-7">
                    <strong>9.99</strong>/month
                  </h6>
                </div>
                <div class="item-content">
                  <p class="mbr-text mbr-fonts-style display-7">Enhanced Features Including Priority Event Registration</p>
                </div>
                <div class="mbr-section-btn item-footer"><a href="" class="btn item-btn btn-primary display-7">Get
                    Started</a></div>
              </div>
            </div>
            <div class="item features-without-image col-12 col-md-6 col-lg-3 item-mb">
              <div class="item-wrapper">
                <div class="item-head">
                  <h5 class="item-title mbr-fonts-style mb-0 display-5">
                    <strong>Premium</strong>
                  </h5>
                  <h6 class="item-subtitle mbr-fonts-style mt-0 mb-0 display-7">
                    <strong>14.99</strong>/month
                  </h6>
                </div>
                <div class="item-content">
                  <p class="mbr-text mbr-fonts-style display-7">VIP Treatment with Personalized Travel Recommendations</p>
                </div>
                <div class="mbr-section-btn item-footer"><a href="" class="btn item-btn btn-primary display-7">Get
                    Started</a></div>
              </div>
            </div>
            <div class="item features-without-image col-12 col-md-6 col-lg-3 item-mb">
              <div class="item-wrapper">
                <div class="item-head">
                  <h5 class="item-title mbr-fonts-style mb-0 display-5">
                    <strong>Ultimate</strong>
                  </h5>
                  <h6 class="item-subtitle mbr-fonts-style mt-0 mb-0 display-7">
                    <strong>19.99</strong>/month
                  </h6>
                </div>
                <div class="item-content">
                  <p class="mbr-text mbr-fonts-style display-7">All-Inclusive Package with Luxury Accommodations and Guided
                    Tours</p>
                </div>
                <div class="mbr-section-btn item-footer"><a href="" class="btn item-btn btn-primary display-7">Get
                    Started</a></div>
              </div>
            </div>
          </div>
        </div>
        </section> -->

        <!-- <style>
        .cid-u6lgzwH3e1 {
          padding-top: 5rem;
          padding-bottom: 5rem;
          background-color: #ffffff;
        }

        .cid-u6lgzwH3e1 .item-subtitle {
          line-height: 1.2;
          color: #000000;
        }

        .cid-u6lgzwH3e1 img,
        .cid-u6lgzwH3e1 .item-img {
          width: 100%;
        }

        .cid-u6lgzwH3e1 .item:focus,
        .cid-u6lgzwH3e1 span:focus {
          outline: none;
        }

        .cid-u6lgzwH3e1 .item {
          margin-bottom: 2rem;
        }

        @media (max-width: 575px) {
          .cid-u6lgzwH3e1 .item {
            margin-bottom: 1rem;
          }
        }

        .cid-u6lgzwH3e1 .item-wrapper {
          position: relative;
          border-radius: 4px;
          height: 100%;
          display: flex;
          flex-flow: column nowrap;
        }

        .cid-u6lgzwH3e1 .mbr-section-title {
          color: #000000;
        }

        .cid-u6lgzwH3e1 .mbr-text,
        .cid-u6lgzwH3e1 .mbr-section-btn {
          color: #000000;
        }

        .cid-u6lgzwH3e1 .item-title {
          color: #000000;
          text-align: center;
        }

        .cid-u6lgzwH3e1 .content-head {
          max-width: 800px;
        }

        .cid-u6lgzwH3e1 img {
          filter: grayscale(1);
        }
        </style>

        <section class="features03 cid-u6lgzwH3e1" id="partners-1-u6lgzwH3e1">
        <div class="container-fluid">
          <div class="row justify-content-center mb-5">
            <div class="col-12 content-head">
              <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                  <strong>Trusted Partners</strong>
                </h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2 active">
              <div class="item-wrapper">
                <div class="item-img">
                  <img src="assets/images/photo-1579041925709-798d7d0fed1d.jpeg" data-slide-to="1" data-bs-slide-to="1">
                </div>
              </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
              <div class="item-wrapper">
                <div class="item-img">
                  <img src="assets/images/photo-1606136968306-ab2868cc1f21.jpeg" data-slide-to="2" data-bs-slide-to="2">
                </div>
              </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
              <div class="item-wrapper">
                <div class="item-img">
                  <img src="assets/images/photo-1502828331539-51c709e80300.jpeg" data-slide-to="3" data-bs-slide-to="3">
                </div>
              </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
              <div class="item-wrapper">
                <div class="item-img">
                  <img src="assets/images/photo-1646825461394-ebd1800141d1.jpeg" data-slide-to="4" data-bs-slide-to="4">
                </div>
              </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
              <div class="item-wrapper">
                <div class="item-img">
                  <img src="assets/images/photo-1529612700005-e35377bf1415.jpeg" data-slide-to="5" data-bs-slide-to="5">
                </div>
              </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-sm-6 col-lg-2">
              <div class="item-wrapper">
                <div class="item-img">
                  <img src="assets/images/photo-1596622723231-b20320c7346b.jpeg" data-slide-to="6" data-bs-slide-to="6">
                </div>
              </div>
            </div>
          </div>
        </div>
        </section> -->

        <style>
            .cid-u6lgzwHbLd {
                padding-top: 6em;
                padding-bottom: 6em;
                background-color: var(--dominant-color, #393193);
            }

            @media (min-width: 768px) {
                .cid-u6lgzwHbLd {
                    align-items: center;
                }

                .cid-u6lgzwHbLd .row {
                    justify-content: center;
                }
            }

            @media (max-width: 991px) and (min-width: 768px) {
                .cid-u6lgzwHbLd .content-wrap {
                    min-width: 50%;
                }
            }

            @media (max-width: 767px) {
                .cid-u6lgzwHbLd {
                    -webkit-align-items: center;
                    align-items: center;
                }

                .cid-u6lgzwHbLd .mbr-row {
                    -webkit-justify-content: center;
                    justify-content: center;
                }

                .cid-u6lgzwHbLd .content-wrap {
                    width: 100%;
                }
            }

            .cid-u6lgzwHbLd .mbr-section-title {
                text-align: center;
                color: var(--dominant-text, #ffffff);
            }

            .cid-u6lgzwHbLd .mbr-text,
            .cid-u6lgzwHbLd .mbr-section-btn {
                text-align: center;
                color: var(--dominant-text, #ffffff);
            }
        </style>

        <section class="header19 cid-u6lgzwHbLd" id="call-to-action-7-u6lgzwHbLd">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-8">
                        <h1 class="mbr-section-title mbr-fonts-style mb-4 display-1">
                            <strong>Explore Bangladesh with Us!</strong>
                        </h1>
                        <p class="mbr-fonts-style mbr-text mb-4 display-7">
                            Join us for exciting travel adventures at unbeatable prices.
                        </p>
                        <div class="mbr-section-btn">
                            <a class="btn btn-primary display-7" href="#">
                                Join With Us
                            </a>
                            <!-- <a class="btn btn-secondary display-7" href="#">
                  Register Now
                </a> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

                <!-- Our missions  -->
                <style>
                    .cid-u6lgzwHr9Z {
                        padding-top: 5rem;
                        padding-bottom: 5rem;
                        background-color: transparent;
                    }

                    .cid-u6lgzwHr9Z .mbr-fallback-image.disabled {
                        display: none;
                    }

                    .cid-u6lgzwHr9Z .mbr-fallback-image {
                        display: block;
                        background-size: cover;
                        background-position: center center;
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        top: 0;
                    }

                    @media (max-width: 767px) {
                        .cid-u6lgzwHr9Z .card-content-text {
                            padding: 0 1.5rem 1.5rem 1.5rem;
                        }
                    }

                    @media (min-width: 768px) {
                        .cid-u6lgzwHr9Z .card-content-text {
                            padding: 0 2.25rem 2.25rem 2.25rem;
                        }
                    }

                    @media (min-width: 992px) {
                        .cid-u6lgzwHr9Z .card-content-text {
                            padding: 1rem 4rem 4rem 4rem;
                        }
                    }

                    .cid-u6lgzwHr9Z .card-wrapper {
                        background: #ffffff;
                    }

                    .cid-u6lgzwHr9Z .mbr-text,
                    .cid-u6lgzwHr9Z .mbr-section-btn {
                        color: #000000;
                        text-align: left;
                    }

                    .cid-u6lgzwHr9Z .card-title,
                    .cid-u6lgzwHr9Z .card-box {
                        text-align: left;
                        color: #000000;
                    }
                </style>

                <section class="article8 cid-u6lgzwHr9Z" id="about-us-8-u6lgzwHr9Z">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="card col-md-12 col-lg-10">
                                <div class="card-wrapper">
                                    <div class="image-wrapper d-flex justify-content-center mb-4">
                                        <img src="assets/images/photo-1622760219088-90c1576336a1.jpeg">
                                    </div>
                                    <div class="card-content-text">
                                        <h3 class="card-title mbr-fonts-style mbr-white mt-3 mb-4 display-2">
                                            <strong>Our Mission: Explore, Enjoy, Repeat!</strong>
                                        </h3>
                                        <div class="row card-box align-left">
                                            <div class="item features-without-image col-12">
                                                <div class="item-wrapper">
                                                    <p class="mbr-text mbr-fonts-style display-7">Welcome to Travel Bangladesh,
                                                        where we bring you
                                                        thrilling travel experiences at pocket-friendly prices. Join us to discover
                                                        the hidden gems of
                                                        Bangladesh!</p>
                                                </div>
                                            </div>
                                            <div class="item features-without-image col-12">
                                                <div class="item-wrapper">
                                                    <p class="mbr-text mbr-fonts-style display-7">Embark on unforgettable journeys,
                                                        create lasting
                                                        memories, and meet fellow travel enthusiasts. Let&#x27;s make every trip an
                                                        adventure to remember!
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="item features-without-image col-12">
                                                <div class="item-wrapper">
                                                    <p class="mbr-text mbr-fonts-style display-7">At Travel Bangladesh, we believe
                                                        in making travel
                                                        accessible to all, ensuring that every journey is filled with excitement and
                                                        wonder.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Our missions  -->

        <!-- Video -->
        <style>
            .cid-u6lgzwITtT .mbr-fallback-image.disabled {
                display: none;
            }

            .cid-u6lgzwITtT .mbr-fallback-image {
                display: block;
                background-size: cover;
                background-position: center center;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                background: #000000;
            }
        </style>
        <section class="header18 cid-u6lgzwITtT mbr-fullscreen"
            data-bg-video="https://www.youtube.com/embed/rkpzYNB6xks?autoplay&#x3D;1&amp;loop&#x3D;1&amp;playlist&#x3D;rkpzYNB6xks&amp;t&#x3D;20&amp;mute&#x3D;1&amp;playsinline&#x3D;1&amp;controls&#x3D;0&amp;showinfo&#x3D;0&amp;autohide&#x3D;1&amp;allowfullscreen&#x3D;true&amp;mode&#x3D;transparent"
            id="video-5-u6lgzwITtT">
            <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(0, 0, 0);"></div>
            <div class="container-fluid">
                <div class="row">
                </div>
            </div>
        </section>
        <!-- Video -->

        <!-- Team members -->
        <style>
            .cid-u6lgzwIMeB {
                padding-top: 5rem;
                padding-bottom: 3rem;
                background-color: #ffffff;
            }

            .cid-u6lgzwIMeB .item-subtitle {
                line-height: 1.2;
                color: #000000;
                text-align: center;
            }

            .cid-u6lgzwIMeB img,
            .cid-u6lgzwIMeB .item-img {
                width: 100%;
                height: 100%;
                height: 400px;
                object-fit: cover;
            }

            .cid-u6lgzwIMeB .item:focus,
            .cid-u6lgzwIMeB span:focus {
                outline: none;
            }

            .cid-u6lgzwIMeB .item {
                margin-bottom: 2rem;
            }

            @media (max-width: 767px) {
                .cid-u6lgzwIMeB .item {
                    margin-bottom: 1rem;
                }
            }

            .cid-u6lgzwIMeB .item-wrapper {
                position: relative;
                border-radius: 4px;
                display: flex;
                flex-flow: column nowrap;
            }

            .cid-u6lgzwIMeB .mbr-section-btn {
                margin-top: auto !important;
            }

            .cid-u6lgzwIMeB .mbr-section-title {
                color: #000000;
            }

            .cid-u6lgzwIMeB .mbr-text,
            .cid-u6lgzwIMeB .mbr-section-btn {
                color: #000000;
                text-align: center;
            }

            .cid-u6lgzwIMeB .item-title {
                color: #000000;
            }

            .cid-u6lgzwIMeB .content-head {
                max-width: 800px;
            }
        </style>
        <section class="people03 cid-u6lgzwIMeB" id="team-1-u6lgzwIMeB">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 content-head">
                        <div class="mbr-section-head mb-5">
                            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                                <strong>Meet Us</strong>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="item features-image col-12 col-md-6 col-lg-3">
                        <div class="item-wrapper">
                            <div class="item-img mb-3">
                                <img src="assets/images/photo-1541881856704-3c4b2896c0f8.jpeg">
                            </div>
                            <div class="item-content align-left">
                                <h6 class="item-subtitle mbr-fonts-style display-5">
                                    <strong>Rahim</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style display-7">Co-Founder</p>
                            </div>
                        </div>
                    </div>
                    <div class="item features-image col-12 col-md-6 col-lg-3">
                        <div class="item-wrapper">
                            <div class="item-img mb-3">
                                <img src="assets/images/photo-1545803928-04e3f4cdd4ed.jpeg">
                            </div>
                            <div class="item-content align-left">
                                <h6 class="item-subtitle mbr-fonts-style display-5">
                                    <strong>Ayesha</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style display-7">Event Coordinator</p>
                            </div>
                        </div>
                    </div>
                    <div class="item features-image col-12 col-md-6 col-lg-3">
                        <div class="item-wrapper">
                            <div class="item-img mb-3">
                                <img src="assets/images/photo-1509988892867-8bf3ee9e3afa.jpeg">
                            </div>
                            <div class="item-content align-left">
                                <h6 class="item-subtitle mbr-fonts-style display-5">
                                    <strong>Kamal</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style display-7">Travel Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="item features-image col-12 col-md-6 col-lg-3">
                        <div class="item-wrapper">
                            <div class="item-img mb-3">
                                <img src="assets/images/photo-1626882048554-d950f9784496.jpeg">
                            </div>
                            <div class="item-content align-left">
                                <h6 class="item-subtitle mbr-fonts-style display-5">
                                    <strong>Nadia</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style display-7">Customer Happiness Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team members -->

        <style>
            .cid-u6lgzwIWnx {
                padding-top: 6rem;
                padding-bottom: 6rem;
                background-color: #ffffff;
            }

            .cid-u6lgzwIWnx .item:focus,
            .cid-u6lgzwIWnx span:focus {
                outline: none;
            }

            .cid-u6lgzwIWnx .item {
                cursor: pointer;
            }

            .cid-u6lgzwIWnx .grid-container {
                grid-row-gap: 2rem;
            }

            @media (max-width: 767px) {
                .cid-u6lgzwIWnx .grid-container {
                    grid-row-gap: 1rem;
                }
            }

            .cid-u6lgzwIWnx .grid-container-1,
            .cid-u6lgzwIWnx .grid-container-2,
            .cid-u6lgzwIWnx .grid-container-3 {
                gap: 0 2rem;
            }

            @media (max-width: 767px) {

                .cid-u6lgzwIWnx .grid-container-1,
                .cid-u6lgzwIWnx .grid-container-2,
                .cid-u6lgzwIWnx .grid-container-3 {
                    gap: 0 1rem;
                }
            }

            .cid-u6lgzwIWnx .mbr-section-title {
                color: #000000;
            }

            .cid-u6lgzwIWnx .mbr-text,
            .cid-u6lgzwIWnx .mbr-section-btn {
                color: #000000;
            }

            .cid-u6lgzwIWnx .content-head {
                max-width: 800px;
            }

            .cid-u6lgzwIWnx .container,
            .cid-u6lgzwIWnx .container-fluid {
                overflow: hidden;
            }

            .cid-u6lgzwIWnx .grid-container {
                display: grid;
                transform: translate3d(-3rem, 0, 0);
                width: 115vw;
                grid-column-gap: 1rem;
            }

            .cid-u6lgzwIWnx .grid-item {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .cid-u6lgzwIWnx .grid-item img {
                min-width: 30vw;
                max-width: 100%;
                max-height: 100%;
                object-fit: cover;
            }

            @media (max-width: 767px) {
                .cid-u6lgzwIWnx .grid-item img {
                    min-width: 35vw;
                }
            }

            .cid-u6lgzwIWnx .grid-container-1,
            .cid-u6lgzwIWnx .grid-container-2,
            .cid-u6lgzwIWnx .grid-container-3 {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                grid-auto-columns: 1fr;
                grid-auto-flow: column;
            }

            .cid-u6lgzwIWnx .grid-container-1 {
                align-items: flex-end;
            }

            .cid-u6lgzwIWnx .grid-container-2 {
                align-items: flex-start;
            }
        </style>
        <section class="gallery07 cid-u6lgzwIWnx" id="gallery-16-u6lgzwIWnx">
            <div class="container-fluid gallery-wrapper">
                <div class="row justify-content-center">
                    <div class="col-12 content-head">
                        <div class="mbr-section-head mb-5">
                            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                                <strong>Discover Bangladesh Beauty</strong>
                            </h4>
                        </div>
                    </div>
                </div>
                <div class="grid-container">
                    <div class="grid-container-3" style="transform: translate3d(-200px, 0px, 0px);">
                        <div class="grid-item">
                            <img src="assets/images/photo-1618280595105-66f4d25a18b1.jpeg">
                        </div>
                        <div class="grid-item">
                            <img src="assets/images/photo-1605972643561-8bac9eec3ddc.jpeg">
                        </div>
                        <div class="grid-item">
                            <img src="assets/images/photo-1580053343342-c4ab3a791a7d.jpeg">
                        </div>
                        <div class="grid-item">
                            <img src="assets/images/photo-1583794018021-c841442da0e3.jpeg">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <style>
        .cid-u6lgzwItka {
          padding-top: 6rem;
          padding-bottom: 6rem;
          background-color: #ffffff;
        }

        .cid-u6lgzwItka .item-subtitle {
          line-height: 1.2;
          color: #000000;
        }

        .cid-u6lgzwItka img,
        .cid-u6lgzwItka .item-img {
          width: 100%;
          height: 100%;
          height: 400px;
          object-fit: cover;
        }

        .cid-u6lgzwItka .item:focus,
        .cid-u6lgzwItka span:focus {
          outline: none;
        }

        .cid-u6lgzwItka .item {
          margin-bottom: 2rem;
        }

        @media (max-width: 767px) {
          .cid-u6lgzwItka .item {
            margin-bottom: 1rem;
          }
        }

        .cid-u6lgzwItka .item-wrapper {
          position: relative;
          border-radius: 4px;
          height: 100%;
          display: flex;
          flex-flow: column nowrap;
        }

        .cid-u6lgzwItka .mbr-section-title {
          color: #232323;
        }

        .cid-u6lgzwItka .mbr-text,
        .cid-u6lgzwItka .mbr-section-btn {
          color: #232323;
        }

        .cid-u6lgzwItka .item-title {
          color: #232323;
        }

        .cid-u6lgzwItka .content-head {
          max-width: 800px;
        }
        </style>
        <section class="features03 cid-u6lgzwItka" id="events-1-u6lgzwItka">
        <div class="container-fluid">
          <div class="row justify-content-center mb-5">
            <div class="col-12 content-head">
              <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                  <strong></strong>
                </h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="item features-image col-12 col-md-6 col-lg-3 active">
              <div class="item-wrapper">
                <div class="item-img mb-3">
                  <img src="assets/images/photo-1608958435020-e8a7109ba809.jpeg">
                </div>
                <div class="item-content align-left">
                  <h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
                    <strong><a class="text-black fw-bold" href="#"></a></strong>
                  </h6>
                  <p class="mbr-text mbr-fonts-style mb-3 display-7"></p>
                  <p class="mbr-text mbr-fonts-style mb-3 display-7"></p>
                  <div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7">aa</a></div>
                </div>
              </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-3">
              <div class="item-wrapper">
                <div class="item-img mb-3">
                  <img src="assets/images/photo-1619713277018-c5499173232c.jpeg" data-slide-to="1" data-bs-slide-to="1">
                </div>
                <div class="item-content align-left">
                  <h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
                    <strong><a class="text-black fw-bold" href="#"></a></strong>
                  </h6>
                  <p class="mbr-text mbr-fonts-style mb-3 display-7"></p>
                  <p class="mbr-text mbr-fonts-style mb-3 display-7"></p>
                  <div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7"></a></div>
                </div>
              </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-3">
              <div class="item-wrapper">
                <div class="item-img mb-3">
                  <img src="assets/images/photo-1615560480284-64ad1051fc4e.jpeg" data-slide-to="2" data-bs-slide-to="2">
                </div>
                <div class="item-content align-left">
                  <h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
                    <strong><a class="text-black fw-bold" href="#"></a></strong>
                  </h6>
                  <p class="mbr-text mbr-fonts-style mb-3 display-7"></p>
                  <p class="mbr-text mbr-fonts-style mb-3 display-7"></p>
                  <div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7"></a></div>
                </div>
              </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-3">
              <div class="item-wrapper">
                <div class="item-img mb-3">
                  <img src="assets/images/photo-1588957507795-b0b539dce44c.jpeg" data-slide-to="3" data-bs-slide-to="3">
                </div>
                <div class="item-content align-left">
                  <h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
                    <strong><a class="text-black fw-bold" href="#"></a></strong>
                  </h6>
                  <p class="mbr-text mbr-fonts-style mb-3 display-7"></p>
                  <p class="mbr-text mbr-fonts-style mb-3 display-7"></p>
                  <div class="mbr-section-btn item-footer"><a href="#" class="btn item-btn btn-primary display-7"></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        </section> -->

        <style>
            .cid-u6lgzwJ06A {
                padding-top: 5rem;
                padding-bottom: 5rem;
                background-color: #000000;
            }

            .cid-u6lgzwJ06A .social-row {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
            }

            .cid-u6lgzwJ06A .social-row .soc-item {
                margin: 8px;
            }

            .cid-u6lgzwJ06A .social-row .soc-item a:hover .mbr-iconfont,
            .cid-u6lgzwJ06A .social-row .soc-item a:focus .mbr-iconfont {
                background-color: #ffffff;
            }

            .cid-u6lgzwJ06A .social-row .soc-item a .mbr-iconfont {
                width: 72px;
                height: 72px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 100%;
                font-size: 32px;
                background-color: #edefeb;
                color: #000000;
                transition: all 0.3s ease-in-out;
            }

            .cid-u6lgzwJ06A .row-links {
                width: 100%;
                justify-content: center;
            }

            .cid-u6lgzwJ06A .header-menu {
                list-style: none;
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                padding: 0;
                margin-bottom: 0;
            }

            .cid-u6lgzwJ06A .header-menu li {
                padding: 0 1rem 1rem 1rem;
            }

            .cid-u6lgzwJ06A .header-menu li p {
                margin: 0;
            }

            .cid-u6lgzwJ06A .copyright {
                margin-bottom: 0;
                color: #ffffff;
                text-align: center;
            }

            .cid-u6lgzwJ06A .mbr-section-title {
                color: #ffffff;
            }
        </style>
        <section class="footer3 cid-u6lgzwJ06A" once="footers" id="footer-6-u6lgzwJ06A">
            <div class="container">
                <div class="row">
                    <div class="row-links">
                        <ul class="header-menu">
                            <li class="header-menu-item mbr-fonts-style display-5">
                                <a href="#" class="text-white"></a>
                            </li>
                            <li class="header-menu-item mbr-fonts-style display-5">
                                <a href="#" class="text-white"></a>
                            </li>
                            <li class="header-menu-item mbr-fonts-style display-5">
                                <a href="#" class="text-white"></a>
                            </li>
                            <li class="header-menu-item mbr-fonts-style display-5">
                                <a href="#" class="text-white"></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-4">
                        <p class="mbr-fonts-style copyright display-7">

                        </p>
                    </div>
                </div>
            </div>
        </section>

        <style>
            .cid-u6lgzwJakS {
                padding-top: 6rem;
                padding-bottom: 6rem;
                background-color: #ffffff;
            }

            .cid-u6lgzwJakS .item:focus,
            .cid-u6lgzwJakS span:focus {
                outline: none;
            }

            .cid-u6lgzwJakS .container-fluid {
                padding-left: 0;
                padding-right: 0;
                overflow: hidden;
            }

            .cid-u6lgzwJakS .content-head {
                max-width: 800px;
            }

            .cid-u6lgzwJakS .item {
                color: #232323;
                min-height: 90px;
                font-weight: bold;
            }

            @media (max-width: 768px) {
                .cid-u6lgzwJakS .item {
                    min-height: 45px;
                }
            }
        </style>
        <section class="gallery10 cid-u6lgzwJakS" id="features-61-u6lgzwJakS">
            <div class="container-fluid">
                <div class="loop-container">
                    <div class="item display-1"
                        data-linewords="
      Thrilling Travel Events *
      Exclusive Adventures *
      Unforgettable Experiences *
      Budget-Friendly Trips *
      Adrenaline-Pumping Journeys *
      Memorable Escapes *"
                        data-direction="-1" data-speed="0.05">
                    </div>
                    <div class="item display-1"
                        data-linewords="
      Thrilling Travel Events *
      Exclusive Adventures *
      Unforgettable Experiences *
      Budget-Friendly Trips *
      Adrenaline-Pumping Journeys *
      Memorable Escapes *"
                        data-direction="-1" data-speed="0.05">
                    </div>
                </div>
            </div>
        </section>

        <!-- review -->
        <style>
            .cid-u6lgzwJfqq {
                padding-top: 6rem;
                padding-bottom: 6rem;
                background-color: #ffffff;
            }

            .cid-u6lgzwJfqq .item-wrapper img {
                width: 80px;
                height: 80px;
                object-fit: cover;
                border-radius: 50% !important;
            }

            .cid-u6lgzwJfqq .item-wrapper {
                margin-bottom: 2rem;
            }

            .cid-u6lgzwJfqq .card-title,
            .cid-u6lgzwJfqq .iconfont-wrapper {
                color: #000000;
            }

            .cid-u6lgzwJfqq .card-text {
                color: #000000;
                text-align: center;
            }

            .cid-u6lgzwJfqq .content-head {
                max-width: 800px;
            }

            .cid-u6lgzwJfqq .mbr-section-title {
                color: #000000;
            }

            .cid-u6lgzwJfqq .card-title,
            .cid-u6lgzwJfqq .img-wrapper {
                text-align: center;
            }

            .cid-u6lgzwJfqq .img-wrapper {
                display: flex;
                justify-content: center;
            }
        </style>
        <section class="people05 cid-u6lgzwJfqq" id="testimonials-6-u6lgzwJfqq">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-12 mb-0 content-head">
                        <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                            <strong>Rave</strong>
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="item features-without-image col-12 col-md-6 col-lg-4 active">
                        <div class="item-wrapper">
                            <div class="card-box align-left">
                                <p class="card-text mbr-fonts-style display-7">
                                    Travel Bangladesh made me fall in love with my own country all over again! Can&#x27;t
                                    wait for the next
                                    adventure.
                                </p>
                                <div class="img-wrapper mt-4 mb-3">
                                    <img src="assets/images/photo-1679746584014-fb31d4eb0a5e.jpeg" data-slide-to="0"
                                        data-bs-slide-to="0">
                                </div>
                                <h5 class="card-title mbr-fonts-style display-7">
                                    <strong>Rohan</strong>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="item features-without-image col-12 col-md-6 col-lg-4">
                        <div class="item-wrapper">
                            <div class="card-box align-left">
                                <p class="card-text mbr-fonts-style display-7">
                                    The events are so well-organized, it&#x27;s like a dream come true for travel
                                    enthusiasts like me.
                                </p>
                                <div class="img-wrapper mt-4 mb-3">
                                    <img src="assets/images/photo-1636624498233-0c3c5ab4186e.jpeg" data-slide-to="1"
                                        data-bs-slide-to="1">
                                </div>
                                <h5 class="card-title mbr-fonts-style display-7">
                                    <strong>Sara</strong>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="item features-without-image col-12 col-md-6 col-lg-4">
                        <div class="item-wrapper">
                            <div class="card-box align-left">
                                <p class="card-text mbr-fonts-style display-7">
                                    Traveling with Travel Bangladesh is not just a trip, it&#x27;s a life-changing
                                    experience that I cherish
                                    forever.
                                </p>
                                <div class="img-wrapper mt-4 mb-3">
                                    <img src="assets/images/photo-1599566150163-29194dcaad36.jpeg" data-slide-to="2"
                                        data-bs-slide-to="2">
                                </div>
                                <h5 class="card-title mbr-fonts-style display-7">
                                    <strong>Aryan</strong>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- review -->

        <!-- slider -->
        <style>
            .cid-u6lgzwJxMs {
                padding-top: 6rem;
                padding-bottom: 6rem;
                background: transparent;
            }

            .cid-u6lgzwJxMs .mbr-fallback-image.disabled {
                display: none;
            }

            .cid-u6lgzwJxMs .mbr-fallback-image {
                display: block;
                background-size: cover;
                background-position: center center;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
            }

            @media (min-width: 768px) {
                .cid-u6lgzwJxMs .container-fluid {
                    padding: 0;
                }
            }

            .cid-u6lgzwJxMs .embla__slide {
                position: relative;
                min-width: 490px;
                max-width: 490px;
            }

            @media (max-width: 768px) {
                .cid-u6lgzwJxMs .embla__slide {
                    min-width: 100%;
                    max-width: 100%;
                    margin-left: 1rem !important;
                    margin-right: 1rem !important;
                }
            }

            .cid-u6lgzwJxMs .embla__slide a {
                display: block;
                width: 100%;
            }

            .cid-u6lgzwJxMs .embla__button--next,
            .cid-u6lgzwJxMs .embla__button--prev {
                display: flex;
            }

            .cid-u6lgzwJxMs .mobi-mbri-arrow-next {
                margin-left: 5px;
            }

            .cid-u6lgzwJxMs .mobi-mbri-arrow-prev {
                margin-right: 5px;
            }

            .cid-u6lgzwJxMs .embla__button {
                top: 50%;
                width: 60px;
                height: 60px;
                margin-top: -1.5rem;
                font-size: 22px;
                border: 2px solid #fff;
                border-radius: 50%;
                transition: all 0.3s;
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .cid-u6lgzwJxMs .embla__button:disabled {
                cursor: default;
                display: none;
            }

            .cid-u6lgzwJxMs .embla__button.embla__button--prev {
                left: 0;
                margin-left: 2.5rem;
            }

            .cid-u6lgzwJxMs .embla__button.embla__button--next {
                right: 0;
                margin-right: 2.5rem;
            }

            @media (max-width: 767px) {
                .cid-u6lgzwJxMs .embla__button {
                    top: auto;
                    bottom: 1rem;
                }
            }

            .cid-u6lgzwJxMs .embla {
                position: relative;
                width: 100%;
            }

            .cid-u6lgzwJxMs .embla__viewport {
                overflow: hidden;
                width: 100%;
            }

            .cid-u6lgzwJxMs .embla__viewport.is-draggable {
                cursor: grab;
            }

            .cid-u6lgzwJxMs .embla__viewport.is-dragging {
                cursor: grabbing;
            }

            .cid-u6lgzwJxMs .embla__slide a {
                cursor: grab;
            }

            .cid-u6lgzwJxMs .embla__slide a:active {
                cursor: grabbing;
            }

            .cid-u6lgzwJxMs .embla__container {
                display: flex;
                user-select: none;
                -webkit-touch-callout: none;
                -khtml-user-select: none;
                -webkit-tap-highlight-color: transparent;
            }

            .cid-u6lgzwJxMs .item-menu-overlay {
                border-radius: 2rem;
            }

            .cid-u6lgzwJxMs .mbr-section-title {
                color: #232323;
            }

            .cid-u6lgzwJxMs .mbr-section-subtitle {
                color: #232323;
            }

            .cid-u6lgzwJxMs .mbr-box {
                color: #ffffff;
            }

            .cid-u6lgzwJxMs .slide-content {
                position: relative;
                border-radius: 4px;
                height: 100%;
                display: flex;
                overflow: hidden;
                flex-flow: column nowrap;
            }

            .cid-u6lgzwJxMs img,
            .cid-u6lgzwJxMs .item-img {
                width: 100%;
                height: 400px;
                object-fit: cover;
            }

            .cid-u6lgzwJxMs .item-wrapper {
                position: relative;
            }

            .cid-u6lgzwJxMs .content-head {
                max-width: 800px;
            }
        </style>
        <section class="slider4 mbr-embla cid-u6lgzwJxMs" id="gallery-13-u6lgzwJxMs">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="embla position-relative" data-skip-snaps="true" data-align="center"
                            data-contain-scroll="trimSnaps" data-loop="true" data-auto-play="true"
                            data-auto-play-interval="2" data-draggable="true">
                            <div class="embla__viewport">
                                <div class="embla__container">
                                    <div class="embla__slide slider-image item"
                                        style="margin-left: 1rem; margin-right: 1rem;">
                                        <div class="slide-content">
                                            <div class="item-img">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/photo-1585123388867-3bfe6dd4bdbf.jpeg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="embla__slide slider-image item"
                                        style="margin-left: 1rem; margin-right: 1rem;">
                                        <div class="slide-content">
                                            <div class="item-img">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/photo-1619282159377-dc7e1ff945eb.jpeg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="embla__slide slider-image item"
                                        style="margin-left: 1rem; margin-right: 1rem;">
                                        <div class="slide-content">
                                            <div class="item-img">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/photo-1601561400659-9d4bde0cd58f.jpeg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="embla__slide slider-image item"
                                        style="margin-left: 1rem; margin-right: 1rem;">
                                        <div class="slide-content">
                                            <div class="item-img">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/photo-1604993497451-eed6eb271a9c.jpeg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="embla__slide slider-image item"
                                        style="margin-left: 1rem; margin-right: 1rem;">
                                        <div class="slide-content">
                                            <div class="item-img">
                                                <div class="item-wrapper">
                                                    <img src="assets/images/photo-1599137248983-e6061c27ec80.jpeg" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="embla__button embla__button--prev">
                                <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden visually-hidden">Previous</span>
                            </button>
                            <button class="embla__button embla__button--next">
                                <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                <span class="sr-only visually-hidden visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider -->


        <!-- parallax -->
        <style>
            .cid-u6lgzwK91Z {
                overflow: hidden;
                background-image: url("assets/images/photo-1615275937978-87a29ea4fd03.jpeg");
            }
        </style>
        <section class="image02 cid-u6lgzwK91Z mbr-fullscreen mbr-parallax-background" id="image-13-u6lgzwK91Z">
            <div class="container">
                <div class="row"></div>
            </div>
        </section>
        <!-- parallax -->

        <!-- FAQ -->
        <style>
            .cid-u6lgzwKysa {
                padding-top: 5rem;
                padding-bottom: 5rem;
                background-color: transparent;
            }

            .cid-u6lgzwKysa .mbr-iconfont {
                font-size: 1.2rem !important;
                font-family: 'Moririse2' !important;
                color: white;
                transition: all 0.3s;
                transform: rotate(180deg);
            }

            .cid-u6lgzwKysa .panel-group {
                border: none;
            }

            .cid-u6lgzwKysa .card-header {
                padding: 1.2rem 0.5rem;
            }

            @media (max-width: 767px) {
                .cid-u6lgzwKysa .card-header {
                    padding: 1rem 0rem;
                }
            }

            .cid-u6lgzwKysa .panel-body {
                padding: 0 0.5rem;
                padding-bottom: 1rem;
            }

            @media (max-width: 767px) {
                .cid-u6lgzwKysa .panel-body {
                    padding: 0rem;
                    padding-bottom: 1rem;
                }
            }

            .cid-u6lgzwKysa .img-col {
                padding: 0;
            }

            .cid-u6lgzwKysa .img-item {
                height: 100%;
            }

            .cid-u6lgzwKysa img {
                height: 100%;
                object-fit: cover;
            }

            .cid-u6lgzwKysa .collapsed span {
                transform: rotate(0deg);
            }

            .cid-u6lgzwKysa .panel-title {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }

            .cid-u6lgzwKysa p {
                margin-bottom: 0.3rem;
            }

            .cid-u6lgzwKysa .card .card-header {
                background-color: transparent;
                margin-bottom: 0;
                border: 0;
                border-radius: 2rem;
            }

            .cid-u6lgzwKysa .card {
                background: #ffffff;
                padding: 1rem 2rem;
                border-radius: 2rem;
            }

            @media (max-width: 767px) {
                .cid-u6lgzwKysa .card {
                    padding: 1.5rem;
                }
            }

            .cid-u6lgzwKysa .panel-text {
                color: #000000;
            }

            .cid-u6lgzwKysa .mbr-section-title {
                text-align: center;
                color: #000000;
            }

            .cid-u6lgzwKysa .mbr-section-subtitle {
                color: #000000;
                text-align: center;
            }

            .cid-u6lgzwKysa .panel-title-edit,
            .cid-u6lgzwKysa .mbr-iconfont {
                color: #000000;
            }
        </style>
        <section class="list1 cid-u6lgzwKysa" id="faq-1-u6lgzwKysa">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-12 col-lg-10 m-auto">
                        <div class="content">
                            <div class="mbr-section-head align-left mb-5">
                                <h3 class="mbr-section-title mb-2 mbr-fonts-style display-2">
                                    <strong>Curious Minds Ask</strong>
                                </h3>
                            </div>
                            <div id="bootstrap-accordion_0" class="panel-group accordionStyles accordion" role="tablist"
                                aria-multiselectable="true">
                                <div class="card mb-3">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                            data-bs-toggle="collapse" data-core="" href="#collapse1_0"
                                            aria-expanded="false" aria-controls="collapse1">
                                            <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                                How to Register for Events?
                                            </h6>
                                            <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                        </a>
                                    </div>
                                    <div id="collapse1_0" class="panel-collapse noScroll collapse" role="tabpanel"
                                        aria-labelledby="headingOne" data-parent="#accordion"
                                        data-bs-parent="#bootstrap-accordion_0">
                                        <div class="panel-body">
                                            <p class="mbr-fonts-style panel-text display-7">
                                                Simply log in to your account and choose the event you want to attend.
                                                Registration is a breeze!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                            data-bs-toggle="collapse" data-core="" href="#collapse2_0"
                                            aria-expanded="false" aria-controls="collapse2">
                                            <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                                What&#x27;s Included in Event Fees?
                                            </h6>
                                            <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                        </a>
                                    </div>
                                    <div id="collapse2_0" class="panel-collapse noScroll collapse" role="tabpanel"
                                        aria-labelledby="headingOne" data-parent="#accordion"
                                        data-bs-parent="#bootstrap-accordion_0">
                                        <div class="panel-body">
                                            <p class="mbr-fonts-style panel-text display-7">
                                                Event fees cover transportation, accommodation, meals, and all the exciting
                                                activities planned for
                                                the event.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                            data-bs-toggle="collapse" data-core="" href="#collapse3_0"
                                            aria-expanded="false" aria-controls="collapse3">
                                            <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                                Can I Cancel My Registration?
                                            </h6>
                                            <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                        </a>
                                    </div>
                                    <div id="collapse3_0" class="panel-collapse noScroll collapse" role="tabpanel"
                                        aria-labelledby="headingOne" data-parent="#accordion"
                                        data-bs-parent="#bootstrap-accordion_0">
                                        <div class="panel-body">
                                            <p class="mbr-fonts-style panel-text display-7">
                                                Unfortunately, registrations are non-refundable. Once you&#x27;re in for the
                                                adventure,
                                                there&#x27;s no turning back!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                            data-bs-toggle="collapse" data-core="" href="#collapse4_0"
                                            aria-expanded="false" aria-controls="collapse4">
                                            <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                                How to Contact Support?
                                            </h6>
                                            <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                        </a>
                                    </div>
                                    <div id="collapse4_0" class="panel-collapse noScroll collapse" role="tabpanel"
                                        aria-labelledby="headingOne" data-parent="#accordion"
                                        data-bs-parent="#bootstrap-accordion_0">
                                        <div class="panel-body">
                                            <p class="mbr-fonts-style panel-text display-7">
                                                Our support team is available 24/7 to assist you. Drop us a message or give
                                                us a call anytime!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-3">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <a role="button" class="panel-title collapsed" data-toggle="collapse"
                                            data-bs-toggle="collapse" data-core="" href="#collapse5_0"
                                            aria-expanded="false" aria-controls="collapse5">
                                            <h6 class="panel-title-edit mbr-semibold mbr-fonts-style mb-0 display-5">
                                                Are Events Safe for Solo Travelers?
                                            </h6>
                                            <span class="sign mbr-iconfont mobi-mbri-arrow-down"></span>
                                        </a>
                                    </div>
                                    <div id="collapse5_0" class="panel-collapse noScroll collapse" role="tabpanel"
                                        aria-labelledby="headingOne" data-parent="#accordion"
                                        data-bs-parent="#bootstrap-accordion_0">
                                        <div class="panel-body">
                                            <p class="mbr-fonts-style panel-text display-7">
                                                Absolutely! Our events are designed to ensure the safety and enjoyment of
                                                all participants,
                                                especially solo travelers.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ -->

        <!-- Blog -->
        <style>
            .cid-u6lgzwKyAS {
                padding-top: 5rem;
                padding-bottom: 3rem;
                background-color: #ffffff;
            }

            .cid-u6lgzwKyAS .mbr-fallback-image.disabled {
                display: none;
            }

            .cid-u6lgzwKyAS .mbr-fallback-image {
                display: block;
                background-size: cover;
                background-position: center center;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
            }

            .cid-u6lgzwKyAS .title .num {
                width: 100%;
                display: block;
            }

            .cid-u6lgzwKyAS .title .card-title {
                z-index: 1;
            }

            .cid-u6lgzwKyAS .num {
                color: var(--primary-color, #9fe870);
                text-align: center;
            }

            .cid-u6lgzwKyAS .item-mb {
                margin-bottom: 2rem;
            }

            @media (max-width: 767px) {
                .cid-u6lgzwKyAS * {
                    text-align: center !important;
                }

                .cid-u6lgzwKyAS .content-column {
                    margin-bottom: 2rem;
                }
            }

            .cid-u6lgzwKyAS .content-head {
                max-width: 800px;
            }

            .cid-u6lgzwKyAS .card-text {
                text-align: center;
            }

            .cid-u6lgzwKyAS .card-title,
            .cid-u6lgzwKyAS .card-img {
                text-align: center;
            }
        </style>
        <section class="features023 cid-u6lgzwKyAS" id="metrics-1-u6lgzwKyAS">
            <div class="container">
                <div class="row content-row justify-content-center">
                    <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                        <div class="item-wrapper">
                            <div class="title mb-2 mb-md-3">
                                <span class="num mbr-fonts-style display-1"><strong>10,000+</strong></span>
                            </div>
                            <h4 class="card-title mbr-fonts-style display-5">
                                <strong>Happy Travelers</strong>
                            </h4>
                        </div>
                    </div>
                    <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                        <div class="item-wrapper">
                            <div class="title mb-2 mb-md-3">
                                <span class="num mbr-fonts-style display-1"><strong>50+</strong></span>
                            </div>
                            <h4 class="card-title mbr-fonts-style display-5">
                                <strong>Exciting Events</strong>
                            </h4>
                        </div>
                    </div>
                    <div class="item features-without-image col-12 col-md-6 col-lg-4 item-mb">
                        <div class="item-wrapper">
                            <div class="title mb-2 mb-md-3">
                                <span class="num mbr-fonts-style display-1"><strong>100%</strong></span>
                            </div>
                            <h4 class="card-title mbr-fonts-style display-5">
                                <strong>Satisfaction Rate</strong>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog -->

        <!-- community -->
        <style>
            .cid-u6lgzwK2z1 {
                padding-top: 5rem;
                padding-bottom: 5rem;
                background-color: #ffffff;
            }

            .cid-u6lgzwK2z1 .mbr-fallback-image.disabled {
                display: none;
            }

            .cid-u6lgzwK2z1 .mbr-fallback-image {
                display: block;
                background-size: cover;
                background-position: center center;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
            }

            .cid-u6lgzwK2z1 .bg-facebook {
                background: #1778f2;
                color: #ffffff;
            }

            .cid-u6lgzwK2z1 .bg-facebook:hover {
                background: #0b60cb;
            }

            .cid-u6lgzwK2z1 .bg-twitter {
                background: #1da1f2;
                color: #ffffff;
            }

            .cid-u6lgzwK2z1 .bg-twitter:hover {
                background: #0c85d0;
            }

            .cid-u6lgzwK2z1 .bg-instagram {
                background: #f00075;
                color: #ffffff;
            }

            .cid-u6lgzwK2z1 .bg-instagram:hover {
                background: #bd005c;
            }

            .cid-u6lgzwK2z1 .bg-tiktok {
                background: #000000;
                color: #ffffff;
            }

            .cid-u6lgzwK2z1 .bg-tiktok:hover {
                background: #000000;
            }

            .cid-u6lgzwK2z1 .iconfont-wrapper {
                display: inline-block;
                font-size: 32px;
                border-radius: 50%;
                width: 72px;
                height: 72px;
                line-height: 72px;
                text-align: center;
                transition: all 0.3s ease-in-out;
            }

            .cid-u6lgzwK2z1 [class^="socicon-"]:before,
            .cid-u6lgzwK2z1 [class*=" socicon-"]:before {
                line-height: 55px;
                padding: .6rem;
            }
        </style>
        <section class="social4 cid-u6lgzwK2z1" id="follow-us-1-u6lgzwK2z1">
            <div class="container">
                <div class="media-container-row">
                    <div class="col-12">
                        <h3 class="mbr-section-title align-center mb-5 mbr-fonts-style display-2">
                            <strong>Join Our Adventure Community</strong>
                        </h3>
                        <div class="social-list align-center">
                            <a class="iconfont-wrapper bg-facebook m-2 " target="_blank" href="#">
                                <span class="socicon-facebook socicon"></span>
                            </a>
                            <a class="iconfont-wrapper bg-twitter m-2" href="#" target="_blank">
                                <span class="socicon-twitter socicon"></span>
                            </a>
                            <a class="iconfont-wrapper bg-instagram m-2" href="#" target="_blank">
                                <span class="socicon-instagram socicon"></span>
                            </a>
                            <a class="iconfont-wrapper bg-tiktok m-2" href="#" target="_blank">
                                <span class="socicon-tiktok socicon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- community -->


        <!-- Get in touch -->
        <style>
            .cid-u6lgzwKWYg {
                padding-top: 6rem;
                padding-bottom: 6rem;
                background-color: transparent;
            }

            .cid-u6lgzwKWYg .mbr-overlay {
                background-color: #ffffff;
                opacity: 0.4;
            }

            .cid-u6lgzwKWYg form .mbr-section-btn {
                text-align: center;
                width: 100%;
            }

            .cid-u6lgzwKWYg form .mbr-section-btn .btn {
                display: inline-flex;
            }

            @media (max-width: 991px) {
                .cid-u6lgzwKWYg form .mbr-section-btn .btn {
                    width: 100%;
                }
            }

            .cid-u6lgzwKWYg .content-head {
                max-width: 800px;
            }
        </style>
        <section class="form5 cid-u6lgzwKWYg" id="contact-form-2-u6lgzwKWYg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 content-head">
                        <div class="mbr-section-head mb-5">
                            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                                <strong>Get in Touch Now!</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                        <form action="https://mobirise.eu/" method="POST" class="mbr-form form-with-styler"
                            data-form-title="Form Name"><input type="hidden" name="email" data-form-email="true"
                                value="">
                            <div class="row">
                                <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for
                                    filling out the
                                    form!</div>
                                <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                                    Oops...! some problem!
                                </div>
                            </div>
                            <div class="dragArea row">
                                <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                                    <input type="text" name="name" placeholder="Name" data-form-field="name"
                                        class="form-control" value="" id="name-form02-0">
                                </div>
                                <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                                    <input type="email" name="email" placeholder="Email" data-form-field="email"
                                        class="form-control" value="" id="email-form02-0">
                                </div>
                                <div class="col-12 form-group mb-3" data-for="textarea">
                                    <textarea name="textarea" placeholder="Message" data-form-field="textarea" class="form-control"
                                        id="textarea-form02-0"></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button
                                        type="submit" class="btn btn-primary display-7">Send Message</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Get in touch -->

        <!-- contact us -->
        <style>
            .cid-u6lgzwKHRG {
                padding-top: 6rem;
                padding-bottom: 6rem;
                background-color: transparent;
            }

            .cid-u6lgzwKHRG .mbr-fallback-image.disabled {
                display: none;
            }

            .cid-u6lgzwKHRG .mbr-fallback-image {
                display: block;
                background-size: cover;
                background-position: center center;
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
            }

            .cid-u6lgzwKHRG .row {
                justify-content: center;
            }

            .cid-u6lgzwKHRG .item {
                margin-bottom: 2rem;
            }

            @media (max-width: 767px) {
                .cid-u6lgzwKHRG .item {
                    margin-bottom: 1rem;
                }
            }

            .cid-u6lgzwKHRG .item .item-wrapper {
                display: flex;
                flex-direction: column;
                height: 100%;
                background: #ffffff;
                padding: 2.25rem;
            }

            @media (min-width: 992px) and (max-width: 1200px) {
                .cid-u6lgzwKHRG .item .item-wrapper {
                    padding: 2rem 1.5rem;
                }
            }

            @media (max-width: 767px) {
                .cid-u6lgzwKHRG .item .item-wrapper {
                    padding: 2rem 1.5rem;
                }
            }

            .cid-u6lgzwKHRG .content-head {
                max-width: 800px;
            }
        </style>
        <section class="contacts01 cid-u6lgzwKHRG" id="contacts-1-u6lgzwKHRG">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 content-head">
                        <div class="mbr-section-head mb-5">
                            <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                                <strong>Contact Us</strong>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="item features-without-image col-12 col-md-6 active">
                        <div class="item-wrapper">
                            <div class="text-wrapper">
                                <h6 class="card-title mbr-fonts-style mb-3 display-5">
                                    <strong>Phone</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    <a href="tel:+880 123 456 789" class="text-black">+880 123 456 789</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item features-without-image col-12 col-md-6">
                        <div class="item-wrapper">
                            <div class="text-wrapper">
                                <h6 class="card-title mbr-fonts-style mb-3 display-5">
                                    <strong>Email</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    <a href="mailto:info@travelbangladesh.com"
                                        class="text-black">info@travelbangladesh.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item features-without-image col-12 col-md-6">
                        <div class="item-wrapper">
                            <div class="text-wrapper">
                                <h6 class="card-title mbr-fonts-style mb-3 display-5">
                                    <strong>Address</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    123 Adventure Street, Dhaka, Bangladesh
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item features-without-image col-12 col-md-6">
                        <div class="item-wrapper">
                            <div class="text-wrapper">
                                <h6 class="card-title mbr-fonts-style mb-3 display-5">
                                    <strong>Working Hours</strong>
                                </h6>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    Mon-Fri: 9am-6pm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact us -->
    @endsection
