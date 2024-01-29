@extends('layouts.layout')

@section('title', 'Login - Fraldas')
    
@section('content')
    
<div class="form-control" id="dados">
    <form action="{{ route('fraldas.login') }}" id="formCad" method="post">
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
        <div class="col-auto">
            <button type="submit" class="btn btn-success mb-3">Iniciar</button>
        </div>
    </form>

</div>

@endsection