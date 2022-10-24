@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Booking Now
@endsection

@section('content')

    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->booking_page_banner }});">
        <div class="container">
            <div class="breadcrumb-text">
                <span>{{ title_banner_settings()->booking_page_subtitle }}</span>
                <h2 class="page-title">{{ title_banner_settings()->booking_page_title }}</h2>
                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">Booking Confirmation</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="booking-form-body room-details mb-45">
                <h3 class="mb-20">Booking Details</h3>
                <p>Check-in: <strong>September 18, 2020</strong>, from 11:00 am</p>
                <p class="mb-20">Check-out: <strong>September 19, 2020</strong>, until 11:00 am</p>
                <div class="booking-inner-body room-booking-form">
                    <h4 class="mb-20 left-line">Accommodation #1</h4>
                    <p class="inner-title mb-20">Accommodation Type: <a href="#">Homestay</a></p>
                    <form>
                        <div class="form-group input-group input-group-two left-icon mb-20">
                            <label>Adults <span class="required">*</span></label>
                            <select required>
                                <option selected>--Select--</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                            </select>
                        </div>
                        <div class="form-group input-group input-group-two left-icon mb-20">
                            <label>Children <span class="required">*</span></label>
                            <select required>
                                <option selected>--Select--</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                            </select>
                        </div>
                        <div class="form-group input-group input-group-two left-icon mb-20">
                            <label>Full Guest Name <span class="required">*</span></label>
                            <input type="text" name="#" placeholder="Full Guest Name" required>
                        </div>
                        <h4 class="mb-20">Choose Additional Services</h4>
                        <div class="form-group mb-20 custom-checkbox">
                            <label for="service1">
                                <input type="checkbox" id="service1" name="service1" value="Bike">
                                Sports<em>($40/Once)</em>
                                <span></span>
                            </label>
                        </div>
                        <div class="form-group input-group input-group-two left-icon mb-20 group-fix">
                            <div class="input-group-prepend">
                                <span class="input-group-text">for</span>
                            </div>
                            <select required>
                                <option selected>--Select--</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                            </select>
                            <div class="input-group-append">
                                <span class="input-group-text">guest(s)</span>
                            </div>
                        </div>
                        <div class="form-group mb-20 custom-checkbox">
                            <label for="service2">
                                <input type="checkbox" id="service2" name="service2" value="Bike">
                                Shower<em>($50/Per Day)</em>
                                <span></span>
                            </label>
                        </div>
                        <div class="form-group input-group input-group-two left-icon mb-20 group-fix">
                            <div class="input-group-prepend">
                                <span class="input-group-text">for</span>
                            </div>
                            <select required>
                                <option selected>--Select--</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                            </select>
                            <div class="input-group-append">
                                <span class="input-group-text">guest(s)</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="booking-form-body room-details mb-45">
                <form>
                    <div class="form-group mb-20">
                        <label>Coupon Code</label>
                        <input type="text" name="#" placeholder="Coupon Code">
                        <div class="input-group justify-content-end mt-3">
                            <button class="main-btn btn-filled">Apply</button>
                        </div>
                    </div>
                    <h4 class="mb-20">Price Breakdown</h4>
                    <div class="bookingtable table-responsive mb-20">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th><a href="javascript:void(0)" data-toggle="collapse" data-target="#demo">#1 Homestay</a> Rate: Rate 1</th>
                                    <td>$50</td>
                                </tr>
                            </thead>
                            <tbody id="demo" class="collapse show">
                                <tr>
                                    <th>Adults</th>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <th>Children</th>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <th>Nights</th>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <th><strong>Dates</strong></th>
                                    <td><strong>Amount</strong></td>
                                </tr>
                                <tr>
                                    <th>September 18, 2020</th>
                                    <td>$50</td>
                                </tr>
                                <tr>
                                    <th><strong>Dates Subtotal</strong></th>
                                    <td><strong>$50</strong></td>
                                </tr>
                                <tr>
                                    <th><strong>Accommodation Subtotal</strong></th>
                                    <td><strong>$50</strong></td>
                                </tr>
                                <tr>
                                    <th><strong>Subtotal</strong></th>
                                    <td><strong>$50</strong></td>
                                </tr>
                                <tr>
                                    <th><strong>Total</strong></th>
                                    <td><strong>$50</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                </form>
            </div>
            <div class="booking-form-body room-details">
                <h3 class="mb-20">Your Information</h3>
                <div class="room-booking-form p-0">

                    <p class="mb-20">Required fields are followed by *</a></p>
                    <form>
                        <div class="form-group input-group input-group-two mb-20">
                            <label>First Name <span class="required">*</span></label>
                            <input type="text" name="#" placeholder="First Name" required>
                        </div>
                        <div class="form-group input-group input-group-two mb-20">
                            <label>Last Name <span class="required">*</span></label>
                            <input type="text" name="#" placeholder="Last Name" required>
                        </div>
                        <div class="form-group input-group input-group-two mb-20">
                            <label>Email <span class="required">*</span></label>
                            <input type="email" name="#" placeholder="Email" required>
                        </div>
                        <div class="form-group input-group input-group-two mb-20">
                            <label>Phone <span class="required">*</span></label>
                            <input type="email" name="#" placeholder="Phone" required>
                        </div>
                        <div class="form-group input-group input-group-two left-icon mb-20">
                            <label>Country of residence <span class="required">*</span></label>
                            <select required>
                                <option selected>--Select--</option>
                                <option>Country 01</option>
                                <option>Country 02</option>
                                <option>Country 03</option>
                                <option>Country 04</option>
                                <option>Country 05</option>
                            </select>
                        </div>
                        <div class="form-group mb-0">
                            <label>Notes</label>
                            <textarea rows="5" placeholder="Write Something..."></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
