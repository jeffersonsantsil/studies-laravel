@extends('layouts.layout')

@section('title', 'Teste')


@section('content')
    <h1>Cheguei aqui</h1>


    <div class="geral">

        <div class="form-control" id="dados">
            <form action="{{ route('cad.fralda') }}" id="formCad" method="post">
                @csrf


                <label class="form-check-label">Operador: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select class="form-select" name="operador" aria-label="Default" id="operador">
                    <option selected></option>
                    <option value="Rafael">Rafael</option>
                    <option value="Jefferson">Jefferson</option>
                    <option value="Jessica">Jessica</option>
                    <option value="Helton">Helton</option>
                    <option value="Marcia">Marcia</option>
                    <option value="Felipe">Felipe</option>
                    <option value="Jamile">Jamile</option>
                    <option value="Phelipe">Phelipe</option>
                </select>

                <div class="radios">
                    <label class="form-check-label">Turno: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="turno" value="A" id="A">
                        <label class="form-check-label">A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="turno" value="B" id="B">
                        <label class="form-check-label">B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="turno" value="C" id="C">
                        <label class="form-check-label">C&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="turno" value="ADM" id="ADM">
                        <label class="form-check-label">ADM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    </div>
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
