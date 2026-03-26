<?php

namespace App\Http\Controllers;

use App\Services\DashboardMetricsService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $metricsService;

    public function __construct(DashboardMetricsService $metricsService)
    {
        $this->metricsService = $metricsService;
    }

    /**
     * Display the analytics and overview dashboard for the authenticated user.
     */
    public function index()
    {
        $user = auth()->user();
        
        // Redirigir si no tiene perfil inicial creado
        if (!$user->patientProfile) {
            return redirect()->route('onboarding.index');
        }

        // Obtener la data limpia a través de la Capa de Servicios
        $metrics = $this->metricsService->getDashboardMetrics($user->id);

        return view('dashboard', $metrics);
    }
}
