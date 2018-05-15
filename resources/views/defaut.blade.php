<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">


    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/navbar.css') }}" rel="stylesheet" type="text/css" >

<style>


#conteneur-image-sidebar{

padding-left: 10px;
padding-right: 10px;

display: flex;
flex-direction: column;
}
.photo-profil-sidebar{
border-radius: 100%;
border:5px solid #eee;
margin:auto;
width: 60%;
  height: auto;

}

.nom-sidebar{
  text-align: center;
  padding-top:10px;
}

.nav-principale{

  margin-left:-40px;
  margin-top:-40px;
}



#nav-principale{
  padding:20px;

}

#photo-profil-nav-principale{

  border-radius : 100%;

  width:52px;
  height: auto;
  margin-left:10px;

}

#nom-nav-principale{
  font-weight: bold;
  margin-left:20px;
  color:white;
  margin-right: 80px;

}


.cacher{
 
  display: none;
}

*{
  font-size: 1em;
  

}
</style>

  </head>

<div class="wrapper">
 
    <nav id="sidebar">
        <div class="sidebar-header">
          <div id="conteneur-image-sidebar">
          <img class="photo-profil-sidebar" src="{{asset("img/$prenom.jpg")}}" alt="">
          <div class='nom-sidebar'>{{ucfirst($prenom)}} {{$nom}}</div>
          </div>
        </div>

        <ul class="list-unstyled components">

            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Mon Compte</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li><a href="#">Mon profil</a></li>
                    <li><a href="#">Mon CV</a></li>
                    <li><a href="#">Droits d'accès</a></li>
                </ul>
            </li>
            <li>
               
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">Administration</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li><a href="#">Mettre à jour des profils</a></li>
                    <li><a href="#">Importer des profils</a></li>
                    <li><a href="#">Contacter l'administration</a></li>
                </ul>
            </li>
            <li>
                <a href="#">A propos</a>
            </li>
            <li>
                <a href="#">Messagerie</a>
            </li>
        </ul>

        <ul class="list-unstyled CTAs">
            <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Parainer un amis</a></li>
            <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Se déconnecter</a></li>
        </ul>
    </nav>









    <!-- Contenu de la page et navigation -->


    <div id="contenu">
        <nav id="nav-principale" class="navbar navbar-expand-md navbar-light bg-faded nav-principale">
            <a class="navbar-brand" href="javascript:void(0)">Paris Nanterre</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
                <div id="nom-nav-principale" class="nav-item cacher">
                    {{ucfirst($prenom)}}
                    <img id="photo-profil-nav-principale"
                     src="{{asset("img/$prenom.jpg")}}" alt="">
                </div>
            
              <ul class="navbar-nav">
                
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)" id='action-sidebar'> <span class='fa fa-bars'></span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="javascript:void(0)">Messagerie</a>
                </li>
     
              </ul>
              <form class="form-inline mr-auto">
                <input class="form-control mr-sm-2" placeholder="Rechercher un membre ..." type="search">
                <button class="btn btn-light my-2 my-sm-0" type="submit">Rechercher</button>
              </form>
              <ul class="navbar-nav">
               
            
                   
                <li class="nav-item dropdown">
                    <a href="#" class='btn btn-light'>Créer un compte</a>
                  </li>
              </ul>
            </div>
          </nav>

 
</div>






    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <!-- Menu Toggle Script -->

      <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

  
  <script type="text/javascript" >
    $(document).ready(function () {
                $("#sidebar").mCustomScrollbar({
                    theme: "minimal"
                });

                $('#action-sidebar').on('click', function () {

                 $("#nom-nav-principale").toggleClass('cacher');
                    $('#sidebar, #contenu').toggleClass('active');
                    $('.collapse.in').toggleClass('in');
                    $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                });
            });
        </script>
    </script>

</body>

</html>
