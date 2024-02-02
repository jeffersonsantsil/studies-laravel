@extends('site.layouts.app')
@section('title', 'Parâmetros Pesagem')



@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Bracell Papéis</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Zuiko - Dashboard</li>
                </ol>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Operador</h3>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('set.session') }}" method="POST">
                                        @method('PUT')
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="nameOperador" id="nameOperador">
                                                <option value="">Operador</option>
                                                <option value="Rafael">Rafael</option>
                                                <option value="Helton">Helton</option>
                                                <option value="Marcia">Marcia</option>
                                                <option value="Lucas">Lucas</option>
                                                <option value="Antônio">Antônio</option>
                                            </select>
                                            <label for="nameOperador">Operador</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="turno" id="turno">
                                                <option value="">Turno</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="ADM">ADM</option>
                                            </select>
                                            <label for="turno">Turno</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="produto" id="produto">
                                                <option value="">Produto</option>
                                                <option value="Fofura Baby">Fofura Baby</option>
                                                <option value="Fofura Soft Sec">Fofura Soft Sec</option>
                                            </select>
                                            <label for="produto">Produto</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select class="form-control" name="tamanhoProduto" id="tamanhoProduto">
                                                <option value="">Tamanho</option>
                                                <option value="P">RN</option>
                                                <option value="P">PP</option>
                                                <option value="P">P</option>
                                                <option value="P">M</option>
                                                <option value="P">G</option>
                                                <option value="P">GG</option>
                                                <option value="P">XG</option>
                                                <option value="P">XGG</option>
                                            </select>
                                            <label for="tamanhoProduto">Tamanho Produto</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0"> <button class="btn btn-success" type="submit">Iniciar Pesagem</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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
