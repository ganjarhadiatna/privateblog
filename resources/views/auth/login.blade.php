@extends('layouts.app')

@section('content')
<div class="frame-sign">
    <div class="main">
        <div class="pad-20px"></div>
        <div class="pos top">
            <h1>Admin Login</h1>
        </div>
        <div class="pos mid">
            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="block">
                    <div class="ttl">E-mail Address</div>
                    <input id="email" type="email" class="txt txt-primary-color" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="block">
                    <div class="ttl">Password</div>
                    <input id="password" type="password" class="txt txt-primary-color" name="password" required>
                </div>
                <div class="block">
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
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div>
                </div>
                <div class="block">
                    <input type="submit" name="login" class="btn btn-main-color width-all" value="Login">
                </div>
            </form>
        </div>
        <div class="pad-20px"></div>
    </div>
</div>
@endsection
