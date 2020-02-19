@extends('layouts.master')
@section('webtitle','my account ')

@section('webcontent')
<div class="my-account">

<div class="container">
    <h1 class="text-center">حسابي</h1>
    <div class="row justify-content-center">
        <div class="col-md-6 ">
                 <h2>تسجيل الدخول</h2>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row flex-row-reverse">
                            <label for="email" class="col-md-3 col-form-label ">{{ __('البريد الإلكتروني') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row flex-row-reverse">
                            <label for="password" class="col-md-3 col-form-label">{{ __('كلمة المرور') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row flex-row-reverse">
                            <div class="col-md-3 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('تذكرني') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 flex-row-reverse">
                            <div class="col-md-5 offset-md-4">

                                <button type="submit" class="btn">
                                    {{ __('تسجيل الدخول') }}
                                </button>
                            </div>
                            <div class="col-md-5 offset-md-4 ">


                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('نسيت كلمة مرورك؟') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>


        </div>
        <div class="col-md-6 bd">

            <h2>تسجيل جديد</h2>


                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row flex-row-reverse">
                            <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('الإسم') }}</label>

                            <div class="col-md-7">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row flex-row-reverse">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('البريد الإلكتروني') }}</label>

                            <div class="col-md-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row flex-row-reverse">
                            <label for="password" class="col-md-3 col-form-label text-md-right">{{ __('كلمة المرور') }}</label>

                            <div class="col-md-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row flex-row-reverse">
                            <label for="password-confirm" class="col-md-3 col-form-label text-md-right">{{ __('تأكيد كلمة المرور') }}</label>

                            <div class="col-md-7">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-4">
                                <button type="submit" class="btn">
                                    {{ __('تسجيل جديد') }}
                                </button>
                            </div>
                        </div>
                    </form>

            </div>
        </div>
    </div>
</div>

@endsection
