@extends('layouts.master-without-nav')

@section('title')
@lang('translation.Register') 2
@endsection

@section('css')
<!-- owl.carousel css -->
<link rel="stylesheet" href="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.css') }}">
<link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('body')

<body class="auth-body-bg">
    @endsection

    @section('content')

    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">

                <div class="col-xl-9">
                    <div class="auth-full-bg pt-lg-5 p-4">
                        <div class="w-100">
                            <div class="bg-overlay"></div>
                        </div>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xl-3">
                    <div class="auth-full-page-content p-md-5 p-4">
                        <div class="w-100">
                            <!-- {{ URL::asset($setting->logo) }} -->
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5">
                                    <a href="index" class="d-block auth-logo">
                                        <img src="{{asset('assets/front/Images/header/mainHeader.png')}}" alt="assets/front/Images/header/mainHeader.png" class="auth-logo-dark">
                                        <img src="{{asset('assets/front/Images/header/mainHeader.png')}}" alt="assets/front/Images/header/mainHeader.png" class="auth-logo-light">
                                    </a>
                                </div>
                                <div class="my-auto">

                                    <div>
                                        <h5 class="text-primary">Register account</h5>
                                        <p class="text-muted">{{ucwords(str_replace('-',' ',session()->get('package_name'))).' -  $'.session()->get('amount')}}</p>
                                    </div>

                                    <div class="mt-4">
                                        <form method="POST" class="form-horizontal validation" action="{{ route('register') }}" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3 required">
                                                <label for="useremail" class="form-label">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="useremail" value="{{ old('email') }}" name="email" placeholder="Enter email" autofocus required>
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 required">
                                                <label for="username" class="form-label">Username</label>
                                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="username" name="name" autofocus required placeholder="Enter username">
                                                @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 required">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="number" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="phone" name="phone" autofocus required placeholder="Phone">
                                                @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 required">
                                                <label for="cardName" class="form-label">Name on Card</label>
                                                <input type="text" class="form-control @error('cardName') is-invalid @enderror" value="{{ old('cardName') }}" id="cardName" name="cardName" autofocus required placeholder="Enter Name on Card">
                                                @error('cardName')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 required">
                                                <label for="cardNumber" class="form-label">Card Number</label>
                                                <input type="number" class="form-control card-num @error('cardNumber') is-invalid @enderror" value="{{ old('cardNumber') }}" id="cardNumber" name="cardNumber" autofocus required placeholder="Enter Card Number">
                                                @error('cardNumber')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 required">
                                                <label for="username" class="form-label">CVC</label>
                                                <input type="number" class="form-control card-cvc @error('cvs') is-invalid @enderror" value="{{ old('cvs') }}" id="cvs" name="cvs" autofocus required placeholder="Enter CVC">
                                                @error('cvs')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 required">
                                                <label for="username" class="form-label">Expiration Month</label>
                                                <input type="number" class="form-control card-expiry-month @error('month') is-invalid @enderror" value="{{ old('month') }}" id="month" name="month" autofocus required placeholder="Enter Expiration Month">
                                                @error('month')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 required">
                                                <label for="username" class="form-label">Expiration Year</label>
                                                <input type="number" class="form-control card-expiry-year @error('year') is-invalid @enderror" value="{{ old('year') }}" id="year" name="year" autofocus required placeholder="Enter Expiration Year">
                                                @error('year')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 required">
                                                <label for="userpassword" class="form-label">Password</label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="userpassword" name="password" placeholder="Enter password" autofocus required>
                                                @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 required">
                                                <label for="confirmpassword" class="form-label">Confirm
                                                    Password</label>
                                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="confirmpassword" name="password_confirmation" placeholder="Enter Confirm password" autofocus required>
                                                @error('password_confirmation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3 required">
                                                <label for="userdob">Date of Birth</label>
                                                <div class="input-group" id="datepicker1">
                                                    <input type="text" class="form-control @error('dob') is-invalid @enderror" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy" data-date-container='#datepicker1' data-date-end-date="0d" value="{{ old('dob') }}" data-provide="datepicker" name="dob" autofocus required>
                                                    <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                                                    @error('dob')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="avatar">Profile Picture</label>
                                                <div class="input-group">
                                                    <input type="file" class="form-control @error('avatar') is-invalid @enderror" id="inputGroupFile02" name="avatar" autofocus required>
                                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                                                </div>
                                                @error('avatar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <div class='col-md-12 hide error form-group'>
                                                    <div class='alert-danger alert'>Fix the errors before you begin.</div>
                                                </div>
                                            </div>

                                            <div class="mt-4 d-grid">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Register
                                                </button>
                                            </div>

                                            <div class="mt-4 text-center">
                                                <p class="mb-0">By registering you agree to
                                                    the {{ $setting->title ?? '' }} <a href="#" class="text-primary">Terms of
                                                        Use</a></p>
                                            </div>
                                        </form>

                                        <div class="mt-3 text-center">
                                            <p>Already have an account ? <a href="{{ url('login') }}" class="fw-medium text-primary">
                                                    Login</a></p>
                                        </div>

                                    </div>
                                </div>

                                <div class="mt-4 mt-md-3 text-center">
                                    <p class="mb-0">©
                                        <script>
                                            document.write(new Date().getFullYear())
                                        </script>
                                        {{ $setting->title ?? '' }} Crafted with <i class="mdi mdi-heart text-danger"></i> by
                                        Outsource To Asia
                                    </p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>

    @endsection
    @section('script')
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <!-- owl.carousel js -->
    <script src="{{ URL::asset('/assets/libs/owl.carousel/owl.carousel.min.js') }}"></script>
    <!-- auth-2-carousel init -->
    <script src="{{ URL::asset('/assets/js/pages/auth-2-carousel.init.js') }}"></script>


    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script type="text/javascript">
        $(function() {
            var $form = $(".validation");
            $('form.validation').bind('submit', function(e) {
                var $form = $(".validation"),
                    inputVal = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'
                    ].join(', '),
                    $inputs = $form.find('.required').find(inputVal),
                    $errorStatus = $form.find('div.error'),
                    valid = true;
                $errorStatus.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function(i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorStatus.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-num').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeHandleResponse);
                }

            });

            function stripeHandleResponse(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    var token = response['id'];
                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
    @endsection