@extends('layouts.app')

@section('styles')
    <style>
        .card-payment {
            border: 1px solid #e2e8f0;
            border-radius: 1rem;
        }

        .card-payment .card-body {
            padding: 1.5rem;
        }

        .card-payment .card-footer {
            background-color: transparent;
            border-top: 1px solid #f1f3f5;
        }
    </style>
@endsection

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                        Mis tarjetas</h1>
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <li class="breadcrumb-item text-muted">
                            <a href="#" class="text-muted text-hover-primary">Perfil</a>
                        </li>
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-500 w-5px h-2px"></span>
                        </li>
                        <li class="breadcrumb-item text-muted">Tarjetas</li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <a href="#" class="btn btn-primary">Agregar tarjeta</a>
                </div>
            </div>
        </div>

        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                @php
                    $cards = $cards ?? [
                        [
                            'holder' => 'Juan Pérez',
                            'last4' => '4242',
                            'expiry' => '08/27',
                            'type' => 'Visa',
                        ],
                        [
                            'holder' => 'Ana Rodríguez',
                            'last4' => '1111',
                            'expiry' => '11/28',
                            'type' => 'Mastercard',
                        ],
                    ];
                @endphp

                <div class="row g-6">
                    @forelse($cards as $card)
                        <div class="col-xl-6">
                            <div class="card card-payment shadow-sm">
                                <div class="card-body">
                                    <div class="d-flex flex-column flex-sm-row justify-content-between align-items-start mb-8">
                                        <div>
                                            <div class="fs-4 fw-bold text-gray-900 mb-1">{{ $card['type'] ?? 'Tarjeta' }}</div>
                                            <div class="text-gray-600">•••• {{ $card['last4'] }}</div>
                                        </div>
                                        <span class="badge badge-light-success fw-bold fs-8 px-3 py-2">{{ $card['type'] ?? 'N/A' }}</span>
                                    </div>

                                    <div class="row gy-5">
                                        <div class="col-12 col-sm-6">
                                            <div class="fw-semibold text-gray-700 fs-7 mb-2">Nombre del titular</div>
                                            <div class="text-gray-900">{{ $card['holder'] }}</div>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <div class="fw-semibold text-gray-700 fs-7 mb-2">Vence</div>
                                            <div class="text-gray-900">{{ $card['expiry'] }}</div>
                                        </div>
                                        <div class="col-6 col-sm-3">
                                            <div class="fw-semibold text-gray-700 fs-7 mb-2">Últimos 4</div>
                                            <div class="text-gray-900">{{ $card['last4'] }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end gap-2 py-4">
                                    <a href="#" class="btn btn-light btn-sm">Editar</a>
                                    <a href="#" class="btn btn-danger btn-sm">Eliminar</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-12">
                            <div class="card shadow-sm">
                                <div class="card-body text-center py-10">
                                    <h3 class="text-gray-900 fw-bold mb-3">Aún no tienes tarjetas registradas</h3>
                                    <p class="text-gray-600 mb-6">Agrega una tarjeta para gestionar tus métodos de pago.</p>
                                    <a href="#" class="btn btn-primary">Agregar tarjeta</a>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
