<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiabTrack - Iniciar Sesión</title>
    <link rel="stylesheet" href="{{ asset('css/singin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <div class="main-container">
        <div class="brand-section">
            <h1 class="logo">D<span>ia</span>bTrack</h1>
            <p class="slogan">Monitorea tu salud, vive mejor</p>
            <p class="description">Con Diabtrack lleva un control más inteligente para una vida más saludable</p>
        </div>

        <div class="login-card">
            <!-- Session Status -->
            @if (session('status'))
                <div style="color: green; margin-bottom: 1rem;">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="input-group">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required autofocus autocomplete="username">
                    <i class="fa-regular fa-envelope"></i>
                </div>
                @error('email')
                    <p style="color: red; font-size: 0.8rem; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</p>
                @enderror

                <!-- Password -->
                <div class="input-group">
                    <input type="password" name="password" placeholder="Contraseña" required autocomplete="current-password">
                    <i class="fa-solid fa-lock"></i>
                </div>
                @error('password')
                    <p style="color: red; font-size: 0.8rem; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</p>
                @enderror
                
                <div class="forgot-pass">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">¿Olvidó su contraseña?</a>
                    @endif
                </div>

                <div class="forgot-pass" style="margin-top: 10px;">
                    <label class="remember-me">
                        <input type="checkbox" name="remember"> 
                        <span>Recuérdame</span>
                    </label>
                </div>

                <button type="submit" class="btn-primary">Iniciar Sesión</button>

                <div class="separator">
                    <span>O</span>
                </div>

                <div class="social-buttons">
                    <button type="button" class="btn-social">
                        <i class="fa-brands fa-facebook" style="color: #1877F2;"></i> Continuar con Facebook
                    </button>
                    <button type="button" class="btn-social">
                        <img src="{{ asset('img/medios/logos/google.png') }}" alt="Google"> Continuar con Google
                    </button>
                    <button type="button" class="btn-social">
                        <i class="fa-brands fa-apple"></i> Continuar con Apple
                    </button>
                </div>

                <p class="footer-link">¿No tienes una cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
            </form>
        </div>
    </div>

    <footer class="site-footer">
        <div class="footer-content">
            <div class="links">
                <a href="#">Políticas de Privacidad</a>
                <a href="#">Términos y Condiciones</a>
                <a href="#">Desarrolladores</a>
            </div>
            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <i class="fa-brands fa-facebook"></i>
                <i class="fa-brands fa-apple"></i>
                <i class="fa-brands fa-reddit"></i>
            </div>
        </div>
    </footer>

</body>
</html>
