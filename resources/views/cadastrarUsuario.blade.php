@extends('padrao')
@section('content')
<section>
  <div class="container cadastroUsuario">
    <form class="row g-3" method="post" action="{{route('salvar-banco')}}">
      @csrf
      <div class="col-md-12">
        <label for="inputnome" class="form-label">nome</label>
        <input type="text" name="nome" value="{{old('nome')}}" class="form-control" id="inputnome" placeholder="nome do HQ">
        @error('nome')
        <div class="text-sm-start text-light">*Preencher o campo nome.</div>
        @enderror
      </div>

      <div class="col-12"> 
        <label for="inputUsuario" class="form-label">usuario</label>
        <input type="text" name="usuario" value="{{old('usuario')}}" class="form-control" id="inputUsuario" placeholder="ano do volume">
        @error('Usuario')
        <div class="text-sm-start text-light">*Preencher o campo ano do volume.</div>
        @enderror
      </div>
      <div class="col-12">
        <label for="inputsenha" class="form-label">senha</label>
        <input type="text" name="senha" value="{{old('senha')}}" class="form-control" id="inputsenha" placeholder="numero da edição">
        @error('senha')
        <div class="text-sm-start text-light">*Preencher o campo numero da edição.</div>
        @enderror
      </div>
      <div class="col-md-12">
        <label for="inputCor" class="form-label">email</label>
        <input type="text" name="email" value="{{old('email')}}" class="form-control" id="inputemail" placeholder="o nome do autor">
        @error('email')
        <div class="text-sm-start text-light">*Preencher o campo autor.</div>
        @enderror
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
      </div>
    </form>
  </div>
</section>
@endsection