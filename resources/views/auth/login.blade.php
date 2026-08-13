```blade
@extends('layouts.app')

@section('content')

    <style>
        * {
            box-sizing: border-box;
        }

        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 15px;
            background: #f5f7fa;
            direction: ltr;
        }

        .login-box {
            width: 100%;
            max-width: 450px;
            background: #ffffff;
            border-radius: 14px;
            padding: 35px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .login-header h2 {
            margin: 0 0 8px;
            color: #222;
            font-size: 28px;
            font-weight: 700;
        }

        .login-header p {
            margin: 0;
            color: #777;
            font-size: 14px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-size: 14px;
            font-weight: 600;
        }

        .form-input {
            width: 100%;
            height: 48px;
            padding: 0 14px;
            border: 1px solid #dcdfe4;
            border-radius: 8px;
            background: #fff;
            color: #333;
            font-size: 15px;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-input:focus {
            border-color: #3498db;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.12);
        }

        .form-input.is-invalid {
            border-color: #e74c3c;
        }

        .invalid-feedback {
            display: block;
            margin-top: 7px;
            color: #e74c3c;
            font-size: 13px;
        }

        .login-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }

        .remember-box {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            color: #555;
            font-size: 14px;
        }

        .remember-box input {
            width: 16px;
            height: 16px;
            cursor: pointer;
        }

        .login-button {
            width: 100%;
            height: 48px;
            border: none;
            border-radius: 8px;
            background: #3498db;
            color: #fff;
            font-size: 15px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s ease, transform 0.2s ease;
        }

        .login-button:hover {
            background: #2980b9;
        }

        .login-button:active {
            transform: scale(0.98);
        }

        .forgot-password {
            display: block;
            margin-top: 18px;
            text-align: center;
            color: #3498db;
            font-size: 14px;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .forgot-password:hover {
            color: #2980b9;
            text-decoration: underline;
        }

        @media (max-width: 500px) {
            .login-page {
                padding: 20px 15px;
            }

            .login-box {
                padding: 25px 20px;
            }

            .login-header h2 {
                font-size: 24px;
            }
        }
    </style>

    <div class="login-page">

        <div class="login-box">

            <div class="login-header">
                <h2>{{ __('Login') }}</h2>
                <p>وارد حساب کاربری خود شوید</p>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="form-label">
                        {{ __('Email Address') }}
                    </label>

                    <input
                        id="email"
                        type="email"
                        class="form-input @error('email') is-invalid @enderror"
                        name="email"
                        value="{{ old('email') }}"
                        required
                        autocomplete="email"
                        autofocus
                    >

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password" class="form-label">
                        {{ __('Password') }}
                    </label>

                    <input
                        id="password"
                        type="password"
                        class="form-input @error('password') is-invalid @enderror"
                        name="password"
                        required
                        autocomplete="current-password"
                    >

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="login-options">

                    <label class="remember-box" for="remember">
                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            {{ old('remember') ? 'checked' : '' }}
                        >

                        <span>{{ __('Remember Me') }}</span>
                    </label>

                </div>

                <button type="submit" class="login-button">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a
                        class="forgot-password"
                        href="{{ route('password.request') }}"
                    >
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif

            </form>

        </div>

    </div>

@endsection
```
