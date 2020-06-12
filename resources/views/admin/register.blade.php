@extends('layouts.site')
@section('title' , __('site.addNewAdmin'))
@section('content')
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div
            class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin"
            id="m_login">
            <div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
                <div class="m-stack m-stack--hor m-stack--desktop">
                    <div class="m-stack__item m-stack__item--fluid">
                        <div class="m-login__wrapper">
                            <div class="m-login__logo">
                                <a href="#">
                                    <img src="{{ url('/') }}/dashboard/assets/app/media/img//logos/logo-2.png">
                                </a>
                            </div>

                            <div class="m-login__signin">
                                <div class="m-login__head">
                                    <h3 class="m-login__title">
                                        {{ trans('site.registerNow') }}
                                    </h3>

                                    <br>
                                </div>

                                <form method="post">

                                    {{ csrf_field() }}

                                    <div class="form-group has-feedback">
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                               placeholder="{{ trans('site.name') }}">
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        @if($errors->has('name'))
                                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group has-feedback">
                                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                                               placeholder="{{ trans('site.email') }}">
                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                        @if($errors->has('email'))
                                            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>

                                    <div class="form-group has-feedback">
                                        <input type="password" name="password" value="{{ old('password') }}"
                                               class="form-control"
                                               placeholder="{{ __('site.password') }}">
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if($errors->has('password'))
                                            <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                        @endif
                                    </div>


                                    <div class="form-group has-feedback">
                                        <input type="password" name="password_confirmation"
                                               value="{{ old('password_confirmation') }}" class="form-control"
                                               placeholder="{{ __('site.password_confirmation') }}">
                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                        @if($errors->has('password_confirmation'))
                                            <div
                                                class="alert alert-danger">{{ $errors->first('password_confirmation') }}</div>
                                        @endif
                                    </div>


                                {{--                                <div class="row">--}}

                                <!-- /.col -->
                                    <div class="col-xs-4">
                                        <button style="margin-bottom: 13px" type="submit"
                                                class="btn btn-primary btn-block btn-flat">
                                            <span style="font-family: Cairo">{{ __('site.register') }}</span>
                                        </button>
                                    </div>
                                </form>
                                {{-- End Of Form --}}
                            </div>
                        </div>
                    </div>

                    <div class="m-stack__item m-stack__item--center">
                        <div class="m-login__account">
								<span class="m-login__account-msg">
									 {{ __('site.haveAccount') }}
								</span>
                            <a style="font-size: large" href="{{ route('admin.login') }}" class="text-center">{{ __('site.login') }}</a>
                        </div>
                    </div>

                </div>
            </div>

            <div
                class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content"
                style="background-color:#0b58a2">
                <div class="m-grid__item m-grid__item--middle">
                    <h3 class="m-login__welcome">
                        {{ __('site.joincom') }}

                    </h3>
                    <p class="m-login__msg">
                        {{ __('site.lorem') }}

                        <br>
                        {{ __('site.lorem') }}

                    </p>
                </div>
            </div>


        </div>
    </div>
    <!-- end:: Page -->
@stop
