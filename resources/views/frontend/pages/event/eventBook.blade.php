@extends('frontend.layouts.main')
@section('content')
    <style>
        .cid-u6lgzwKWYg {
            padding-top: 8rem;
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
                    <h4 class="mbr-section-title mbr-fonts-style mb-0 display-2 animate__animated animate__delay-1s animate__fadeIn"
                        style="font-size: 2rem">
                        Book your event - <strong class="hind-siliguri-regular">মারায়ংতং ক্যাম্পিং ও কক্সবাজার
                            ভ্রমণ</strong>
                    </h4>
                    <p>Event Code - #FBSOSKLEFMLSDF</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form action="#" method="POST" class="mbr-form form-with-styler" data-form-title="Form Name">
                    {{-- <input type="hidden" name="email" data-form-email="true" value="">
                    <div class="row">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling
                            out the
                            form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                            Oops...! some problem!
                        </div>
                    </div> --}}
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="name" placeholder="Your Full Name" data-form-field="name"
                                class="form-control" value="" id="name-form02-0">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input type="email" name="email" placeholder="Your Email" data-form-field="email"
                                class="form-control" value="" id="email-form02-0">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <input type="text" name="phone" placeholder="Phone number" data-form-field="phone"
                                class="form-control" value="" id="name-form02-0">
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <input id="seatCount" type="number" name="seatCount" placeholder="No. of seats" data-form-field="seat_count"
                                class="form-control" value="" id="email-form02-0">
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <label for="booking fee">Per seat booking fee</label>
                            <input id="bookingFee" type="text" name="phone" data-form-field="booking fee"
                                class="form-control" value="1800" id="name-form02-0" disabled>
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <label for="ammounts">Total payable ammounts</label>
                            <input id="totalFee" type="number" name="totalFee" data-form-field="totalFee"
                                class="form-control" value="0" id="email-form02-0" disabled>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"><button type="submit"
                                class="btn btn-primary display-7">SSLCommerze Checkout</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
const bookingFee = document.getElementById('bookingFee');
const seatCount = document.getElementById('seatCount');
const totalFee = document.getElementById('totalFee')

console.log(bookingFee.value, seatCount.value, totalFee.value);

seatCount.addEventListener('blur', () => {
    totalFee.value = bookingFee.value * seatCount.value;
    console.log(bookingFee.value, seatCount.value, totalFee.value);
});

</script>
@endsection
