@extends('layouts.app')

@section('styles')
    <style>
        .popover {
            max-width: none !important;
        }
    </style>
    <meta name="base-url" content="{{ url('') }}">
    <meta name="base-url" content="http://localhost/proyectoalan">
    <link href="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
@endsection

@section('content')
    <div class="d-flex flex-column flex-column-fluid">
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                
            </div>
        </div>
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <div id="kt_app_content_container" class="app-container container-xxl">
                <<form action="{{ route('maestros.guardar') }}" method="POST" class="form" autocomplete="off">
                    @csrf
                    <div class="d-flex flex-column flex-column-fluid">

                        @include('maestros.index')

         
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>
@endsection






@section('javascript')
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src=" https://cdn.jsdelivr.net/npm/jquery.repeater@1.2.1/jquery.repeater.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>

    <script src="{{ asset('assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/cursoss/cursos.js') }}"></script>
@endsection
