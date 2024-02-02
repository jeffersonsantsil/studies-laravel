@extends('site.layouts.app')
@section('title', 'Pesagem Iniciada')



@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Bracell Papéis <a class="btn btn-danger" href="{{ route('session.destroy') }}">Trocar de
                        Turno</a></h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Zuiko - Dashboard</li>
                </ol>

                <div class="form-control">
                    <label for="Operador"><strong>Operador:</strong>
                        {{ $dadosSessao['operador'] }}</label><strong>&nbsp;|&nbsp;</strong>
                    <label for="Turno"><strong>Turno:</strong> {{ $dadosSessao['turno'] }}</label>
                    <strong>&nbsp;|&nbsp;</strong>
                    <label for="Produto"><strong>Produto:</strong>
                        {{ $dadosSessao['produto'] }}</label><strong>&nbsp;|&nbsp;</strong>
                    <label for="TamanhoProduto"><strong>Tamanho Produto:</strong>
                        {{ $dadosSessao['tamanhoProduto'] }}</label>
                </div>

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
