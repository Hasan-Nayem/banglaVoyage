@extends('frontend.layouts.main')
@section('content')
<style>
    .cid-u6lgzwH7NQ {
      padding-top: 10rem;
      padding-bottom: 10rem;
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
        <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2 animate__animated animate__delay-1s animate__fadeIn">
            <strong>Our Events In This Week</strong>
        </h4>
        </div>
    </div>
    </div>
    <div class="row">
    <div class="item features-image col-12 col-md-6 col-lg-3 active animate__animated animate__delay-1s animate__fadeIn">
        <div class="item-wrapper">
        <div class="item-img mb-3">
            <img src="assets/images/photo-1585296910838-ff8e46ea7979.jpeg">
        </div>
        <div class="item-content align-left">
            <h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
            <strong><a class="text-black fw-bold" href="#">Mystical Sundarbans </a></strong>
            </h6>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">April 15, 2024</p>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">Unleash Your Inner Explorer in the Enchanting Mangrove
            Forests</p>
            <div class="mbr-section-btn item-footer"><a href="{{ route('event.details') }}" class="btn item-btn btn-primary display-7">Details</a>
            </div>
        </div>
        </div>
    </div>
    <div class="item features-image col-12 col-md-6 col-lg-3 animate__animated animate__delay-1s animate__fadeIn">
        <div class="item-wrapper">
        <div class="item-img mb-3">
            <img src="assets/images/photo-1593547440394-72b9cb07b7b8.jpeg" data-slide-to="1" data-bs-slide-to="1">
        </div>
        <div class="item-content align-left">
            <h6 class="item-subtitle mbr-fonts-style mb-3 display-5">
            <strong><a class="text-black fw-bold" href="#">Charming Cox's Bazar </a></strong>
            </h6>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">May 20, 2024</p>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">Relax and Rejuvenate on the World's Longest
            Natural Sea Beach</p>
            <div class="mbr-section-btn item-footer"><a href="{{ route('event.details') }}" class="btn item-btn btn-primary display-7"> Details</a>
            </div>
        </div>
        </div>
    </div>
    <div class="item features-image col-12 col-md-6 col-lg-3 animate__animated animate__delay-1s animate__fadeIn">
        <div class="item-wrapper">
        <div class="item-img mb-3">
            <img src="assets/images/photo-1599074914978-2946b69e5a4a.jpeg" data-slide-to="2" data-bs-slide-to="2">
        </div>
        <div class="item-content align-left">
            <h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
            <strong><a class="text-black fw-bold" href="#">Majestic Sylhet Escapade</a></strong>
            </h6>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">June 30, 2024</p>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">Immerse Yourself in the Serene Beauty of Tea Gardens
            and Waterfalls</p>
            <div class="mbr-section-btn item-footer"><a href="{{ route('event.details') }}" class="btn item-btn btn-primary display-7"> Details</a>
            </div>
        </div>
        </div>
    </div>
    <div class="item features-image col-12 col-md-6 col-lg-3 animate__animated animate__delay-1s animate__fadeIn">
        <div class="item-wrapper">
        <div class="item-img mb-3">
            <img src="assets/images/photo-1587222318667-31212ce2828d.jpeg" data-slide-to="3" data-bs-slide-to="3">
        </div>
        <div class="item-content align-left">
            <h6 class="item-subtitle mbr-fonts-style mt-0 mb-3 display-5">
            <strong><a class="text-black fw-bold" href="#">Vibrant Dhaka City Tour</a></strong>
            </h6>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">July 15, 2024</p>
            <p class="mbr-text mbr-fonts-style mb-3 display-7">Experience the Bustling Capital with a Blend of
            Tradition and Modernity</p>
            <div class="mbr-section-btn item-footer"><a href="{{ route('event.details') }}" class="btn item-btn btn-primary display-7"> Details</a>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
</section>
@endsection
