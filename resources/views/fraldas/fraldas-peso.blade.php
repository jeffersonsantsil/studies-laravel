@extends('layouts.layout')

@section('title', 'Teste')


@section('content')
    <h1>Cheguei aqui</h1>


    <div class="geral">

        <div class="form-control" id="dados">
            <form action="{{ route('cad.fralda') }}" id="formCad" method="post">
                @csrf
                
                <div class="mb-3">
                    <label for="operador" class="form-label col-auto">Operador</label>
                    <input type="text" name="operador" class="form-control col-auto" id="operador" value="{{ $arrayOperadorTurno['operador'] }}" readonly> 
                </div>

                <div class="mb-3">
                    <label for="turno" class="form-label col-auto">Turno</label>
                    <input type="text" name="turno" class="form-control col-auto" id="turno" value="{{ $arrayOperadorTurno['turno'] }}" readonly>
                </div>
                
                <div class="mb-3">
                    <label for="peso" class="form-label col-auto">Peso da fralda</label>
                    <input type="text" name="peso" class="form-control col-auto" id="peso"
                        placeholder="Peso da fralda">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-success mb-3">Cadastrar</button>
                </div>
            </form>

        </div>



        <div id="table">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Horário</th>
                        <th scope="col">Operador</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Especificação</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($produtos as $produto)
                        <tr>
                            <th scope="row">#{{ $produto->id }}</th>
                            <td>{{ $produto->created_at }}</td>
                            <td>{{ $produto->operador }}</td>
                            <td>{{ $produto->peso }}</td>
                            <td>{{ $produto->status }}</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        {{-- <div class="pagina">
            {{ $produtos->links() }}
        </div> --}}
    </div>

@endsection
