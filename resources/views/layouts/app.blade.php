
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('title')</title>

    @include('layouts.style')
    @yield('style')

</head>
<body>

 @if(Auth::check())

 <header class="top-bar">
    <div class="container">
        <div class="clearfix">
          
            <div class="col-right float_right">
               
            </div>
        </div>
    </div>
</header>

<div class = "span12">
 <img src="{{asset('img/Logo.gif')}}" alt=""
                             class="circle responsive-img valign profile-image-login">
<!--width : 1175px-->

</div>

<!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
      <a class="navbar-brand" href="{{ route('home') }}">Accueil</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-3"
        aria-controls="navbarSupportedContent-3" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-3">
        <ul class="navbar-nav mr-auto">

       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Etudiants
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('etudiant.index') }}">Inscrire un étudiant</a>
             <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myMod">Rechercher un étudiant</a>


          <a class="dropdown-item" href="{{ route('etudiant.liste') }}">Liste des étudiants</a>
         </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Enseignants
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
         
          <a class="dropdown-item" href="{{ route('enseignant.index') }}">Ajouter un enseignant</a>
          <a class="dropdown-item" href="{{ route('enseignant.liste', ['liste'=>'rien']) }}">Liste des enseignants</a>
          <a class="dropdown-item" href="{{ route('enseignant.liste', ['liste'=>'module']) }}">Assigner un module à un enseignant</a>
          <a class="dropdown-item" href="#">Envoyer un email à un enseignant</a>
         
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Notes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('note.index') }}">Saisie des notes</a>
          <a class="dropdown-item" href="#">Etat des notes</a>
         
        </div>
      </li>

       <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Délibérations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

       <a class="dropdown-item" href="{{ route('deliberation.index') }}">Effectuer une délibération</a>
       <a class="dropdown-item" href="#">Résultats</a>
       
        </div>
      </li>

      <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Comptes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

       <a class="dropdown-item" href="#">Créer un compte étudiant</a>
       <a class="dropdown-item" href="#">Créer un compte enseignant</a>
       <a class="dropdown-item" href="#">Liste des utilisateurs</a>
        </div>
      </li>


      <li class="nav-item dropdown" style="margin-right: 250px;">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Paramètres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="{{ route('annee.index') }}">Année Académique</a>
          <a class="dropdown-item" href="{{ route('institut.index') }}">Gestion des Instituts</a>
          <a class="dropdown-item" href="{{ route('departement.index') }}">Gestion des Départements</a>
          <a class="dropdown-item" href="{{ route('cycle.index') }}">Gestion des Cycles</a>
          <a class="dropdown-item" href="{{ route('filiere.index') }}">Gestion des Filières</a>
          <a class="dropdown-item" href="{{ route('semestre.index') }}">Gestion des Semestres</a>
          <a class="dropdown-item" href="{{ route('uv.index') }}">Gestion des Unités de Valeur</a>
          <a class="dropdown-item" href="{{ route('module.index') }}">Gestion des Modules</a>
          <a class="dropdown-item" href="{{ route('session.index') }}">Gestion des Sessions</a>

        </div>
      </li>

        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
            2<i class="fa fa-bell" aria-hidden="true"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
              3<i class="fa fa-envelope"></i>
            </a>

          </li>



     <li class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }} 
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                                <a class="dropdown-item" href="#"> <i class="fa fa-user-circle"></i> Compte</a>

                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();"  >
                                 <i class="fa fa-user-times" aria-hidden="true"></i></i> <span>Deconnexion</span>
                                </a>
                                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>



        </div>
      </li>


        </ul>
      </div>
    </nav>
    <!--/.Navbar -->

                      <div class="modal fade" id="myMod" tabIndex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header"> 
                            <h4 class="modal-title">Matricule</h4>
                            <button type="button" class="close" data-dismiss="modal">
                              ×
                            </button>
                         
                          </div>
                          <div class="modal-body">

                     
                              <form method="POST" action="#">
                              <input class="form-control" type="text" name="matricule" value="">
                              <input type="hidden" name="_method" value="DELETE">
                         
                         
                          </div>
                          <div class="modal-footer">
                           
                              <button type="button" class="btn btn-danger"
                                      data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
                              <button type="submit" class="btn btn-primary">
                                <!-- <i class="fa fa-times-circle"></i> -->
                                <i class="fa fa-chevron-circle-down"></i> Valider
                              </button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>

@endif


        <main>
            @yield('content')
        </main>

    </div>

 @if(Auth::check())

        @include('layouts.footer')

@endif
        @include('layouts.scripts')
        @include('sweet::alert')
        @yield('scripts')


</body>


</div>

</html>
