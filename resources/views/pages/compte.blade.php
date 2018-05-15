@extends("defaut")

@section('contenu')
<div id="corps-conteneur">


<div class="container-fluid">
<div class="espaceur">

<h1>Mon compte</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
                <div class="card" style="width: 100%;">
                        <div class="card-header">
                          Paramètres de compte
                        </div>
                        <ul class="list-group list-group-flush">
                        
                          <li class="list-group-item">Généraux</li>
                          <li class="list-group-item">A propos</li>
                          <li class="list-group-item">Confidentialité</li>
                          <li class="list-group-item">Mot de passe</li>
                          <li class="list-group-item">Avatar</li>
                          
                        </ul>
                      </div>

        </div>
        <div class="col-md-9">
                <div class="card" style="width: 100%;">
                        <div class="card-header">
                          Paramètre généraux
                        </div>
                       <div class="card-body">
<form action="#">
        <div class="form-group">
        <div class="row">
                <div class="col-6">
                    <label for="">Prénom :</label>
                <input type="text" class="form-control" placeholder="{{$personne->prenom}}">
                </div>
                <div class="col-6">
                    <label for="">Nom :</label>
                  <input type="text" class="form-control" placeholder="{{$personne->nom}}">
                </div>
               
              </div>
        </div>
        <div class="form-group">
              <div class="row">
                    <div class="col-6">
                        <label for="">Mail :</label>
                      <input type="text" class="form-control" placeholder="{{$personne->mail}}">
                    </div>
                    <div class="col-6">
                        <label for="">Téléphone :</label>
                      <input type="text" class="form-control" placeholder="{{$personne->telephone}}">
                    </div>
                   
                  </div>
                </div>
                <div class="form-group">
                        <div class="row">
                              <div class="col-6">
                                  <label for="">Adresse :</label>
                                <input type="text" class="form-control" placeholder="{{$personne->adresse}}">
                              </div>
                              <div class="col-6">
                                  <label for="">Ville :</label>
                                <input type="text" class="form-control" placeholder="{{$personne->ville}}">
                              </div>
                             
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                                  <div class="col-6">
                                      <label for=""  >Code postal :</label>
                                    <input type="text" class="form-control" placeholder="{{$personne->codepostal}}">
                                  </div>
              
                                  <div class="col-6">
                                      <label for="">Naissance :</label>
                                    <input type="date" class="form-control"  placeholder="{{$personne->naissance}}">
                                  </div>
                                 
                                </div>
                              </div>
</form>
                       </div>
                      </div>
        </div>
    </div>
</div>
</div>
</div>
    
</div>
@endsection