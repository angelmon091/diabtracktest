<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiabTrack - Registro</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}"> 
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
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="input-group">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nombre Completo" required autofocus autocomplete="name">
                    <i class="fa-regular fa-user"></i>
                </div>
                @error('name')
                    <p style="color: red; font-size: 0.8rem; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</p>
                @enderror
                
                <!-- Email Address -->
                <div class="input-group">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required autocomplete="username">
                    <i class="fa-regular fa-envelope"></i>
                </div>
                @error('email')
                    <p style="color: red; font-size: 0.8rem; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</p>
                @enderror

                <!-- Password -->
                <div class="input-group">
                    <input type="password" name="password" placeholder="Contraseña" required autocomplete="new-password">
                    <i class="fa-solid fa-lock"></i>
                </div>
                @error('password')
                    <p style="color: red; font-size: 0.8rem; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</p>
                @enderror

                <!-- Confirm Password -->
                <div class="input-group">
                    <input type="password" name="password_confirmation" placeholder="Confirmar Contraseña" required autocomplete="new-password">
                    <i class="fa-solid fa-lock"></i>
                </div>
                @error('password_confirmation')
                    <p style="color: red; font-size: 0.8rem; margin-top: -10px; margin-bottom: 10px;">{{ $message }}</p>
                @enderror
                
                <button type="submit" class="btn-primary">Registrarse</button>

                <p class="footer-link">¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia Sesión</a></p>
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
