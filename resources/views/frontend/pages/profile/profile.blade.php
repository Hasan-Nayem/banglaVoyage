@extends('frontend.layouts.main')
@section('content')
<style>
    .cid-u6lgzwHr9Z {
        padding-top: 8rem;
        /* padding-bottom: 10rem; */
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
        .table-font {
            font-size: 18px;
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
    /* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #704990;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}

</style>
<section class="article8 cid-u6lgzwHr9Z" id="about-us-8-u6lgzwHr9Z">
    <div class="container" style="margin-bottom: 2rem">
        <div class="row justify-content-center">
            <div class="card col-md-12 col-lg-10">
                <div class="card-wrapper">
                    <div style="padding: 2rem" class="image-wrapper d-flex justify-content-center mb-4">
                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D"
                            style="width: 12rem; height: 12rem" class="animate__animated animate__delay-1s animate__fadeIn">
                    </div>
                    <div class="card-content-text">
                        <h3
                            class="card-title mbr-fonts-style mbr-white mt-3 mb-4 display-2 animate__animated animate__delay-1s animate__fadeIn">
                            <strong class="" style="font-size: 25px">Welcome - Hasan Nayem</strong>
                        </h3>
                        <div class="row card-box align-left" >
                            <div class="tab" style="background-color: #704990">
                                <button style="color: white; font-weight: 400" class="tablinks" onclick="openCity(event, 'profile')">Profile Information</button>
                                <button style="color: white; font-weight: 400" class="tablinks" onclick="openCity(event, 'updateProfile')">Update Profile Information</button>
                                <button style="color: white; font-weight: 400" class="tablinks" onclick="openCity(event, 'myEvents')">My Events</button>
                                <button style="color: white; font-weight: 400" class="tablinks" onclick="openCity(event, 'eventWishlist')">Event Whishlist</button>
                              </div>

                              <div id="profile" style="padding-left: 2rem" class="tabcontent">
                                <h3>My profile</h3>
                                <div class="row card-box align-left">
                                    <div
                                        class="item features-without-image col-12 animate__animated animate__delay-1s animate__fadeIn">
                                        <div class="item-wrapper">
                                            <p class="mbr-text mbr-fonts-style display-7">
                                                Name : Hasan Nayem
                                            </p>
                                            <p class="mbr-text mbr-fonts-style display-7">
                                                Email : hasannayem@gmail.com
                                            </p>
                                            <p class="mbr-text mbr-fonts-style display-7">
                                                Phone : 0167554648
                                            </p>
                                            <p class="mbr-text mbr-fonts-style display-7">
                                                Address : Shaheenbagh naakhal para
                                            </p>
                                        </div>
                                    </div>
                                </div>

                              </div>
                              <div id="updateProfile" style="padding-left: 2rem" class="tabcontent">
                                <h3>Update my profile</h3>
                                <form action="" class="form-control">
                                    <div class="form-group my-3">
                                        <label for="name">Your Full Name</label>
                                        <input type="text" name="name" id="" class="form-control">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="email">Email address</label>
                                        <input type="email" name="email" id="" class="form-control">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="phone">Phone number</label>
                                        <input type="text" name="phone" id="" class="form-control">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="image">Profile picture</label>
                                        <input type="file" name="image" id="" class="form-control">
                                    </div>
                                    <div class="form-group my-3">
                                        <label for="phone">Current address</label>
                                        <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group my-1">
                                        <input type="submit" value="Update profile" class="btn btn-success text-center">
                                    </div>
                                </form>
                              </div>

                              <div id="myEvents"style="padding-left: 2rem; overflow-x:auto;" class="tabcontent">
                                <h3>My Events</h3>
                                <table class="table table-striped table-responsive text-center">
                                    <thead class="">
                                        <tr>
                                            <th>#SL</th>
                                            <th>Event Title</th>
                                            <th>Event Id</th>
                                            <th>Date</th>
                                            <th>Event Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Marangtong Cox tour</td>
                                            <td>#Afalkoie865asl</td>
                                            <td>01-05-2024 to 03-05-2024</td>
                                            <td>
                                                <span class="badge bg-success mx-2">Payment completed</span>
                                                <span class="badge bg-info mx-2">Upcomming Event</span>
                                            </td>
                                            <td>
                                                <a href="#" class="mx-2"> <span class="badge bg-danger">Clear from history</span></a>
                                                <a href="#" class="text-white mx-2"><span class="badge bg-info">Invoice</span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                              <div id="eventWishlist"style="padding-left: 2rem; overflow-x:auto;" class="tabcontent">
                                <h3>Event Wishlist</h3>
                                <table class="table table-striped table-responsive text-center">
                                    <thead class="">
                                        <tr>
                                            <th>#SL</th>
                                            <th>Event Title</th>
                                            <th>Event Id</th>
                                            <th>Date</th>
                                            <th>Event Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Marangtong Cox tour</td>
                                            <td>#Afalkoie865asl</td>
                                            <td>01-05-2024 to 03-05-2024</td>
                                            <td>
                                                <span class="badge bg-success mx-1">Event is completed</span>
                                                <span class="badge bg-warning text-white mx-1">Upcomming Event</span>
                                            </td>
                                            <td>
                                                <a href="#" class="mx-1"> <span class="badge bg-danger">Clear from wishlist</span></a>
                                                <a href="#" class="text-white mx-1"><span class="badge bg-success">Make payment</span></a>
                                                <a href="#" class="mx-1"> <span class="badge bg-info">See Details</span></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }
        </script>
@endsection
