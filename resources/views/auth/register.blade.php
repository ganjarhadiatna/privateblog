@extends('layouts.app')

@section('content')
<div class="frame-sign">
    <div class="main">
        <div class="pad-20px"></div>
        <div class="pos top">
            <h1>Register</h1>
        </div>
        <div class="pos mid">
            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="block">
                    <div class="ttl">Name</div>
                    <input id="name" type="text" class="txt txt-primary-color" name="name" value="{{ old('name') }}" required autofocus>
                </div>
                <div class="block">
                    <div class="ttl">E-mail Address</div>
                    <input id="email" type="email" class="txt txt-primary-color" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="block">
                    <div class="ttl">Password</div>
                    <input id="password" type="password" class="txt txt-primary-color" name="password" required>
                </div>
                <div class="block">
                    <div for="password-confirm" class="ttl">Confirm Password</div>
                    <input id="password-confirm" type="password" class="txt txt-primary-color" name="password_confirmation" required>
                </div>
                <div class="block">
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="block">
                    <input type="submit" name="login" class="btn btn-main-color width-all" value="Register">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
