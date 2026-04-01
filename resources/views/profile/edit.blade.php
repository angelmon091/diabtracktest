@extends('layouts.app')

@section('title', 'DiabTrack - Configuración de Perfil')

@section('styles')
<style>
    .profile-card {
        background: rgba(255, 255, 255, 0.45) !important;
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border: 1px solid rgba(255, 255, 255, 0.4) !important;
        border-radius: 24px;
        box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.05);
        transition: all 0.3s ease;
    }
    .profile-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.08);
    }
    .settings-header {
        margin-bottom: 2.5rem;
    }
    .section-icon {
        width: 40px;
        height: 40px;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 1rem;
        font-size: 1.2rem;
    }
    .bg-soft-primary { background: rgba(0, 180, 216, 0.1); color: var(--diab-primary); }
    .bg-soft-warning { background: rgba(255, 159, 67, 0.1); color: #FF9F43; }
    .bg-soft-danger { background: rgba(234, 84, 85, 0.1); color: #EA5455; }
    
    /* Input overrides for glassmorphism */
    input[type="text"], input[type="email"], input[type="password"] {
        background: rgba(255, 255, 255, 0.5) !important;
        border: 1px solid rgba(255, 255, 255, 0.5) !important;
        border-radius: 12px !important;
        padding: 0.75rem 1rem !important;
        transition: all 0.2s ease !important;
    }
    input:focus {
        background: rgba(255, 255, 255, 0.8) !important;
        border-color: var(--diab-primary) !important;
        box-shadow: 0 0 0 4px rgba(0, 180, 216, 0.1) !important;
    }
    .btn-save {
        background: var(--diab-primary);
        color: white;
        border: none;
        border-radius: 12px;
        padding: 0.75rem 2rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-save:hover {
        background: #0096B4;
        transform: scale(1.02);
        box-shadow: 0 4px 12px rgba(0, 180, 216, 0.3);
    }
</style>
@endsection

@section('content')
<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-8">
            
            <div class="settings-header animate-fade-in">
                <h2 class="fw-extrabold mb-1 fs-3">Configuración de <span class="text-diab-primary">Cuenta</span></h2>
                <p class="text-muted">Gestiona tu información personal y seguridad</p>
            </div>

            <div class="space-y-6">
                <!-- Profile Info -->
                <div class="profile-card p-4 p-md-5 mb-4 animate-fade-in" style="animation-delay: 0.1s;">
                    <div class="section-icon bg-soft-primary">
                        <i class="fa-solid fa-user-gear"></i>
                    </div>
                    @include('profile.partials.update-profile-information-form')
                </div>

                <!-- Password Update -->
                <div class="profile-card p-4 p-md-5 mb-4 animate-fade-in" style="animation-delay: 0.2s;">
                    <div class="section-icon bg-soft-warning">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    @include('profile.partials.update-password-form')
                </div>

                <!-- Delete Account -->
                <div class="profile-card p-4 p-md-5 mb-5 animate-fade-in border-danger-subtle" style="animation-delay: 0.3s;">
                    <div class="section-icon bg-soft-danger">
                        <i class="fa-solid fa-user-slash"></i>
                    </div>
                    @include('profile.partials.delete-user-form')
                </div>
            </div>

        </div>
    </div>
</main>
@endsection
