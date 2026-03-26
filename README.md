# DiabTrack - Sistema de Gestión de Salud para Diabéticos

DiabTrack es una aplicación web integral diseñada para ayudar a las personas con diabetes a llevar un control preciso y simplificado de su salud. Mediante el seguimiento de niveles de glucosa, nutrición con asistencia de IA y actividad física, la plataforma proporciona herramientas críticas para la toma de decisiones informadas sobre el bienestar personal.

---

## Tecnologías Utilizadas

El proyecto está construido sobre un stack moderno y escalable:

*   **Backend:** [Laravel 11](https://laravel.com/) (PHP 8.2+) - Framework robusto para la lógica de negocio y APIs.
*   **Frontend:** [Blade Templates](https://laravel.com/docs/blade) - Motor de plantillas dinámicas para la interfaz de usuario.
*   **Estilos:** [Bootstrap 5.3](https://getbootstrap.com/) & **Vanilla CSS** - Diseño responsivo con un sistema de diseño (Design System) propio.
*   **Gráficos:** [Chart.js](https://www.chartjs.org/) - Visualización interactiva de tendencias de glucosa y métricas.
*   **Bundler:** [Vite](https://vitejs.dev/) - Gestión eficiente de activos (JS/CSS).
*   **Base de Datos:** [MySQL](https://www.mysql.com/) - Almacenamiento relacional de perfiles, mediciones y registros nutricionales.
*   **Autenticación:** [Laravel Breeze](https://laravel.com/docs/starter-kits#laravel-breeze) - Implementación segura de registro, login y gestión de sesiones.

---

## Funcionalidades Principales

### 1. Panel de Control (Dashboard)
Visualización centralizada de la salud del usuario:
*   **Métrica de Glucosa en Tiempo Real:** Muestra la última medición con indicadores visuales de estado (Normal, Elevado, Bajo).
*   **Gráfico de Tendencias:** Seguimiento semanal interactivo de los niveles de glucosa.
*   **Estimación de A1c:** Cálculo proyectado del promedio de hemoglobina glicosilada.
*   **Progreso Diario:** Barras dinámicas de cumplimiento de metas en Calorías, Actividad Física y Pasos.

### 2. Gestión de Registros (Tracking)
*   **Signos Vitales:** Registro manual de glucosa, presión arterial y peso.
*   **Nutrición Asistida:** Seguimiento de ingesta calórica y carbohidratos.
*   **Actividad Física:** Registro de minutos de ejercicio diarios.

### 3. Sistema de Usuarios
*   **Perfiles de Paciente:** Configuración de metas personalizadas (pasos, calorías, minutos de actividad).
*   **Roles y Permisos:** Sistema preparado para administración y vista de paciente.

---

## Flujos del Sistema

### Flujo de Usuario (Paciente)
1.  **Registro/Onboarding:** El usuario crea una cuenta y completa su perfil médico con sus metas personalizadas.
2.  **Registro Diario:** El usuario ingresa sus niveles de glucosa después de las comidas o en ayunas.
3.  **Monitoreo:** El sistema actualiza automáticamente el Dashboard, alertando si los niveles están fuera de rango.
4.  **Ajuste:** Basado en los gráficos y el "Tip del Día", el usuario ajusta su dieta o actividad.

### Flujo de Datos
*   **Entrada:** Formulario de registro -> Validación (Requests) -> Almacenamiento (Models).
*   **Procesamiento:** `DashboardMetricsService` calcula promedios, porcentajes de metas y tendencias semanales.
*   **Salida:** Vistas Blade inyectan datos dinámicos en componentes de Chart.js y barras de progreso CSS.

---

## Instalación y Configuración

1.  **Clonar el repositorio:**
    ```bash
    git clone https://github.com/tu-usuario/diabtrack.git
    cd diabtrack
    ```
2.  **Instalar dependencias de PHP:**
    ```bash
    composer install
    ```
3.  **Instalar dependencias de Frontend:**
    ```bash
    npm install
    ```
4.  **Configurar el entorno:**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
5.  **Migrar y Sembrar la Base de Datos:**
    ```bash
    php artisan migrate --seed
    ```
6.  **Compilar activos y ejecutar:**
    ```bash
    npm run dev
    # En otra terminal:
    php artisan serve
    ```

---

## Estructura del Proyecto

*   `app/Http/Controllers/Tracking`: Controladores para el registro de datos.
*   `app/Services`: Lógica de cálculo de métricas (DashboardMetricsService).
*   `resources/css/design-system.css`: Estándares visuales unificados.
*   `resources/views/layouts/app.blade.php`: Layout base con menú responsivo inteligente.

---
© 2026 DiabTrack App. Cuidando tu salud.
