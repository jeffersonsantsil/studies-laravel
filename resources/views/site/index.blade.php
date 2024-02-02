@extends('site.layouts.app')
@section('title', 'Home')
    


@section('content')
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Bracell Papéis</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Zuiko - Dashboard</li>
            </ol>
            
            @include('site.elementos.cards')            
            @include('site.elementos.graficos')            
            @include('site.elementos.tabelas')                      
            
            






            
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; Zuiko - Bracell Papéis 2024</div>
                {{-- <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div> --}}
            </div>
        </div>
    </footer>
</div>
@endsection