@extends('padrao')
@section('content')
<section>
  <div class="container cadastroUsuario">
    <form class="row g-3" method="post" action="{{route('alterar-banco-usuario',$registrosUsuario->id)}}">
      @csrf
      @method('put')
      <div class="col-md-12">
        <label for="inputnome" class="form-label">nome</label>
        <input type="text" name="nome" value="{{old('nome',$registrosUsuario->nome)}}" class="form-control" id="inputModelo" placeholder="Fusca">
        @error('nome')
        <div class="text-sm-start text-light">*Preencher o campo nome.</div>
        @enderror
      </div>

      <div class="col-12">
        <label for="inputusuario" class="form-label">usuario</label>
        <input type="text" name="usuario" value="{{old('usuario',$registrosUsuario>usuario)}}" class="form-control" id="inputMarca" placeholder="BMW">
        @error('usuario')
        <div class="text-sm-start text-light">*Preencher o campo usuario.</div>
        @enderror
      </div>
      <div class="col-12">
        <label for="inputsenha" class="form-label">senha</label>
        <input type="text" name="senha" value="{{old('senha',$registrosUsuario->senha)}}" class="form-control" id="inputAno" placeholder="2000">
        @error('senha')
        <div class="text-sm-start text-light">*Preencher o campo senha.</div>
        @enderror
      </div>
      <div class="col-md-12">
        <label for="inputemail" class="form-label">email</label>
        <input type="text" name="email" value="{{old('email',$registrosUsuario->email)}}" class="form-control" id="inputCor" placeholder="Preto">
        @error('email')
        <div class="text-sm-start text-light">*Preencher o campo email.</div>
        @enderror
      </div>

     
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
      </div>
    </form>
  </div>
</section>
@endsection