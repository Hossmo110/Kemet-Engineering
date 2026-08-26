<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Admin Login | KEMET Engineering</title>

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])

</head>

<body>

    <div class="admin-login-page">

        <div class="admin-login-card">

            <div class="admin-login-logo">

                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="KEMET Engineering"
                >

            </div>


            <div class="admin-login-header">

                <span>
                    KEMET ENGINEERING
                </span>

                <h1>
                    Admin Login
                </h1>

                <p>
                    Sign in to access the administration area.
                </p>

            </div>


            @if ($errors->any())

                <div class="admin-login-error">

                    {{ $errors->first() }}

                </div>

            @endif


            <form
                action="{{ route('admin.login.submit') }}"
                method="POST"
                class="admin-login-form"
            >

                @csrf


                <div class="admin-form-group">

                    <label for="email">
                        Email Address
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Enter your email"
                        required
                        autofocus
                    >

                </div>


                <div class="admin-form-group">

                    <label for="password">
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Enter your password"
                        required
                    >

                </div>


                <div class="admin-remember">

                    <label>

                        <input
                            type="checkbox"
                            name="remember"
                            value="1"
                        >

                        <span>
                            Remember me
                        </span>

                    </label>

                </div>


                <button
                    type="submit"
                    class="admin-login-button"
                >

                    LOGIN

                    <span>
                        →
                    </span>

                </button>

            </form>


            <a
                href="{{ route('home') }}"
                class="admin-back-home"
            >
                ← Back to Website
            </a>

        </div>

    </div>

</body>

</html>
