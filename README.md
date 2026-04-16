# <p align="center">DiabTrack</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" />
  <img src="https://img.shields.io/badge/Google_Auth-4285F4?style=for-the-badge&logo=google&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" />
</p>

<p align="center">
  <strong>Transformando el control de la diabetes con tecnología inteligente.</strong><br />
  <a href="https://diabtrack.app">🌐 Visitar Proyecto Live</a>
</p>

---

## 🌟 Sobre el Proyecto

**DiabTrack** es una plataforma integral diseñada para ayudar a personas con diabetes a gestionar su salud de forma sencilla y analítica. Permite el seguimiento de niveles de glucosa, nutrición, actividad física y signos vitales, todo centralizado en un dashboard inteligente.

### 🚀 Características Principales
*   **Autenticación Social:** Ingreso rápido y seguro con Google.
*   **Análisis Predictivo:** Estimación de A1c y gráficos de tendencia.
*   **Gestión de Nutrición:** Control calórico y de carbohidratos.
*   **Sistema de Notificaciones:** Envíos transaccionales mediante **Resend**.
*   **SEO Optimizado:** Indexación lista para buscadores en el dominio `diabtrack.app`.

---

## 🛠️ Tecnologías y Herramientas

| Categoría | Tecnologías |
| :--- | :--- |
| **Backend** | PHP 8.3+, Laravel 13, Socialite |
| **Frontend** | Blade, Bootstrap 5.3, Vanilla CSS (Design System) |
| **Base de Datos** | MySQL 8.0 |
| **Infraestructura** | Docker, Docker Compose |
| **Email Service** | Resend API |
| **Bundler** | Vite |

---

## 🐳 Instalación con Docker (Producción & Dev)

Este proyecto está completamente dockerizado para facilitar su despliegue en cualquier entorno.

### 1. Clonar el repositorio
```bash
git clone https://github.com/tu-usuario/diabtrack.git
cd diabtrack
```

### 2. Configurar Entorno
```bash
cp .env.example .env
```
*Edita el `.env` con tus credenciales de Google Auth y Resend API Key.*

### 3. Levantar Contenedores
```bash
docker-compose up -d
```

### 4. Inicializar Aplicación
```bash
docker-compose exec app php artisan setup-project
# O manualmente:
docker-compose exec app composer install
docker-compose exec app php artisan key:generate
docker-compose exec app php artisan migrate --seed
```

---

## 📈 SEO y Dominio
La aplicación está configurada para el dominio oficial: **[diabtrack.app](https://diabtrack.app)**.
Incluye:
*   `sitemap.xml` dinámico para Google.
*   `robots.txt` optimizado.
*   Meta etiquetas Open Graph para redes sociales.

---
<p align="center">
  © 2026 DiabTrack App. Cuidando tu salud, paso a paso.
</p>
