@extends('layouts.app')

@section('title')
    {{ config('app.name') }} | Contact
@endsection

@section('content')
    <!--====== BREADCRUMB PART START ======-->
    <section class="breadcrumb-area" style="background-image: url({{ asset('uploads/title&banners') }}/{{ title_banner_settings()->contact_page_banner }});">
        <div class="container">
            <div class="breadcrumb-text">
                <span>{{title_banner_settings()->contact_page_subtitle}}</span>
                <h2 class="page-title">{{title_banner_settings()->contact_page_title}}</h2>

                <ul class="breadcrumb-nav">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--====== BREADCRUMB PART END ======-->
    <!--====== CONTACT PART START ======-->
    <section class="contact-part pt-115 pb-115">
        <div class="container">
            <!-- Contact Info -->
            <div class="contact-info">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                {!! generalsettings()->address_icon !!}
                            </div>
                            <div class="desc">
                                <h4>{{ generalsettings()->address_title }}</h4>
                                <p>{{ generalsettings()->address }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                {!! generalsettings()->phone_icon !!}
                            </div>
                            <div class="desc">
                                <h4>{{ generalsettings()->phone_title }}</h4>
                                <p>{{ generalsettings()->phone }}<br>{{ generalsettings()->phone_2 ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-10">
                        <div class="info-box">
                            <div class="icon">
                                {!! generalsettings()->email_icon !!}
                            </div>
                            <div class="desc">
                                <h4>{{ generalsettings()->email_title }}</h4>
                                <p>{{ generalsettings()->email }}<br> {{ generalsettings()->email_2 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Mapts -->
            <div class="contact-maps mb-30" id="contactMaps"></div>
            <!-- Contact Form -->
            <div class="contact-form">
                <form action="#">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <small class="text-danger" id="nameError"></small>
                                <span class="icon"><i class="far fa-user"></i></span>
                                <input type="text" name="name" id="name" placeholder="Your full name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <small class="text-danger" id="emailError"></small>
                                <span class="icon"><i class="far fa-envelope"></i></span>
                                <input type="email" name="email" id="email" placeholder="Enter email address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <small class="text-danger" id="phoneError"></small>
                                <span class="icon"><i class="far fa-phone"></i></span>
                                <input type="text" name="phone" id="phone" placeholder="Add phone number">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group mb-30">
                                <small class="text-danger" id="subjectError"></small>
                                <span class="icon"><i class="far fa-book"></i></span>
                                <input type="text" name="subject" id="subject" placeholder="Select Subject">
                            </div>
                        </div>
                        <div class="col-12">
                            <small class="text-danger" id="messageError"></small>
                            <div class="input-group textarea mb-30">
                                <span class="icon"><i class="far fa-pen"></i></span>
                                <textarea type="text" name="message" id="message" placeholder="Enter messages"></textarea>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" id="send_message" class="main-btn btn-filled">Get Free Quote</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--====== CONTACT PART END ======-->
@endsection

@section('js')
    <script>
        $(document).ready(function () {
            $('#send_message').on('click', function(e){
                e.preventDefault();
                // alert('hi');

                let name = $('#name').val();
                let email = $('#email').val();
                let phone = $('#phone').val();
                let subject = $('#subject').val();
                let message = $('#message').val();

                function isValidEmailAddress(emailAddress) {
                var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
                return pattern.test(emailAddress);
                }

                console.log(name);
                console.log(phone);
                console.log(subject);
                console.log(message);
                console.log(email);

                if(name == '')
                {
                    $("#nameError").html('Please Enter name');
                }
                if(email == '')
                {
                    $("#emailError").html('Please Enter email');
                }
                if(subject == '')
                {
                    $("#subjectError").html('Please Write Subject');
                }
                if(phone == '')
                {
                    $("#phoneError").html('Please Enter Phone');
                }

                if(message == '')
                {
                    $("#messageError").html('Please Write message');

                }
                if(email != '')
                {
                    if(!isValidEmailAddress(email))
                    {
                        $("#emailError").html('Please Enter Valid email');
                    }
                }


                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: "{{ route('contacts.store') }}",
                    type: "POST",
                    data: {
                        name: name,
                        email: email,
                        subject: subject,
                        phone: phone,
                        message: message,
                    },
                    success: function(data){
                        if(data.success == '200'){
                            toastr.success(data.message);
                            // window.location.reload();
                            $('#name').val('')
                            $('#email').val('');
                            $('#phone').val('');
                            $('#subject').val('');
                            $('#message').val('');
                            $('#nameError').html('');
                            $('#emailError').html('');
                            $('#messageError').html('');
                            $('#subjectError').html('');
                            $('#phoneError').html('');
                        }

                    },

                });
            })
        })
    </script>
@endsection
