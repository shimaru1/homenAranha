@extends('padrao')
@section('content')
<div class="card-group">
        <div class="card">
          <img src="img/homemA.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Resumo</h5>
            <p class="card-text">Otto Octavius (Doutor Octopus) estava morrendo. A fim de enganar a morte, ele usou suas habilidades de cientista louco e transferiu sua mente para seu maior inimigo: Peter Parker, mais conhecido como Homem-Aranha. Agora Otto Octavius está com o corpo... </p>
            <p class="card-text"><small class="text-muted"></small></p>
                        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
              leia mais. 
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Homen-Aranha Superior</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <img src="img/homem3.jpg" class="card-img-top" alt="...">
                  <div class="modal-body">
                  Otto Octavius (Doutor Octopus) estava morrendo. A fim de enganar a morte, ele usou suas habilidades de cientista louco e transferiu sua mente para seu maior inimigo: Peter Parker, mais conhecido como Homem-Aranha. Agora Otto Octavius está com o corpo, a mente e com os poderes de Peter, além de suas memórias. E com o corpo moribundo do Doutor Octopus, Peter tenta de tudo para reverter a transferência e tomar seu corpo novamente, porém Peter não consegue e, aparentemente, morre. Como seu último ato, Peter faz Otto prometer que continuará o legado do Homem-Aranha: assim, Otto entende a lição de grandes responsabilidades. Agora, o Doutor Octopus tem que ser um novo Homem-Aranha, um super-herói superior: ele será o Homem-Aranha Superior. Ele será um Homem-Aranha com os poderes de Peter e a genialidade de Otto.

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection