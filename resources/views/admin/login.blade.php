<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>
        {{ trans('site.login') }}
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="{{ url('/') }}/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ url('/') }}/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="{{ url('/') }}/assets/demo/default/media/img/logo/favicon.ico" />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body  class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
        <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
            <div class="m-stack m-stack--hor m-stack--desktop">
                <div class="m-stack__item m-stack__item--fluid">
                    <div class="m-login__wrapper">
                        <div class="m-login__logo">
                            <a href="#">
                                <img src="{{ url('/') }}/assets/app/media/img//logos/logo-2.png">
                            </a>
                        </div>
                        <div class="m-login__signin">
                            <div class="m-login__head">
                                <h3 class="m-login__title">
                                        {{ trans('site.login') }}

                                </h3>

                                <br>
                            </div>


{{--                            <form method="post">--}}
{{--                                {{ csrf_field() }}--}}
{{--                                <div class="form-group m-form__group">--}}
{{--                                    <input class="form-control m-input"  value="{{ old('email') }}"  type="text" placeholder="Email" name="email" autocomplete="off">--}}
{{--                                </div>--}}
{{--                                <div class="form-group m-form__group">--}}
{{--                                    <input class="form-control m-input m-login__form-input--last"  value="{{ old('password') }}"   type="password" placeholder="Password" name="password">--}}
{{--                                </div>--}}

{{--                                <div class="m-login__form-action">--}}
{{--                                    <button style="margin-bottom: 13px" type="submit" class="btn btn-primary btn-block btn-flat">--}}
{{--                                        {{ trans('site.login') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </form>--}}



                            <form  method="post">

                                {{ csrf_field() }}

                                <div class="form-group has-feedback">
                                    <input type="email" name="email" value="{{ old('email') }}"  class="form-control" placeholder="{{ trans('site.email') }}">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    @if($errors->has('email'))
                                        <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>

                                <div class="form-group has-feedback">
                                    <input type="password" name="password"  value="{{ old('password') }}" class="form-control" placeholder="{{ trans('site.password') }}">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                    @if($errors->has('password'))
                                        <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>

{{--                                <div class="row">--}}

                                    <!-- /.col -->
                                    <div class="col-xs-4">
                                        <button style="margin-bottom: 13px" type="submit" class="btn btn-primary btn-block btn-flat">
                                            {{ trans('site.login') }}
                                        </button>
                                    </div>
                                    <!-- /.col -->
{{--                                </div>--}}
                            </form>

















                        </div>
{{--                        <div class="m-login__signup">--}}
{{--                            <div class="m-login__head">--}}
{{--                                <h3 class="m-login__title">--}}
{{--                                    Sign Up--}}
{{--                                </h3>--}}
{{--                                <div class="m-login__desc">--}}
{{--                                    Enter your details to create your account:--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="m-login__forget-password">--}}
{{--                            <div class="m-login__head">--}}
{{--                                <h3 class="m-login__title">--}}
{{--                                    Forgotten Password ?`--}}
{{--                                </h3>--}}
{{--                                <div class="m-login__desc">--}}
{{--                                    Enter your email to reset your password:--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
                    </div>
                </div>
                <div class="m-stack__item m-stack__item--center">
                    <div class="m-login__account">
								<span class="m-login__account-msg">
									 {{ trans('site.haveNotAccount') }}
								</span>


                        <a  href="{{ route('admin.register') }}" class="text-center">{{ trans('site.newAccPlz') }}</a>

                    </div>
                </div>
            </div>
        </div>
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content"
             style="background-color:#0b58a2">
            <div class="m-grid__item m-grid__item--middle">
                <h3 class="m-login__welcome">
                    {{ trans('site.joincom') }}
                </h3>
                <p class="m-login__msg">
                    {{ trans('site.lorem') }}
                    <br>
                    {{ trans('site.lorem') }}

                </p>
            </div>
        </div>


    </div>
</div>
<!-- end:: Page -->
<!--begin::Base Scripts -->
<script src="{{ url('/') }}/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="{{ url('/') }}/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Snippets -->
<script src="{{ url('/') }}/assets/snippets/custom/pages/user/login.js" type="text/javascript"></script>
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
