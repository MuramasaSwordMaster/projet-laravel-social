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
    cursor: pointer;
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

.btn-light{
    color:#17a2b8;
    font-size:bold;
}




.search-container input{

    border-radius: 20px 0 0 20px;
    border:none;
    width:300px;
    height: 26px;
    margin-left:20px;
}

.search-container button{

        border-radius: 0 20px 20px 0;
        border:none;
        background : white;
        height: 26px;
        color:#17a2b8;

}
.search-container button:hover{
    cursor:pointer;
}


.options{

    border-radius: 4px;
    
}

.options{
 
 border:2px solid #eee;

}

.options ul {
    list-style: none;
  padding:5px;
  margin:0;
}

.options ul li{
    padding:4px;
}

.options ul li:hover{
   background-color:#eee;
   cursor:pointer;
}
body{
    background-color:#eee;
}
.espaceur{
    
    margin-top:20px;
    border-radius:4px;
    padding:40px;
    background-color:white;
}

.espaceur h1{

    margin-bottom:40px;
    font-size:2em;
    text-align:center;
}

#corps-conteneur{

padding-left : 20px;
padding-right : 20px;

}

.options a {
    color : black;
}
</style>

</head>

<div id='wrapper'>
    <div class="container-fluid">
        <nav id="nav-principale" class="navbar navbar-expand-md navbar-light bg-faded nav-principale">
            <a class="navbar-brand" href="javascript:void(0)">Paris Nanterre</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder=" Rechercher un membre" name="search"><button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                          </div>
                        <div id="nom-nav-principale" >
                                    Bonjour {{ucfirst($personne->prenom)}} {{ucfirst($personne->nom)}}
                                    <img id="photo-profil-nav-principale"
                                     src="{{asset("img/$personne->prenom.jpg")}}">
                        </div>
                <div class='nav-item nav-dropdown ' style='position :absolute; right:20px;'>
                    <a href="#" class='btn btn-light'>Se déconnecter</a>
                </div>
             
            </div>
          </nav>
        </div>
</div>

   @yield('contenu')

    <!-- Bootstrap core JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <!-- Menu Toggle Script -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    </script>
</body>

<script>
    var el = $(`<div class='options'>
    <ul>
    <li>
    <a href="../public/mon-compte" >Mon compte</a>
    </li>
    <li>
    <a href="../public/mes-messages">Mes messages</a>
    </li>
    <li>
    <a href="../public/administration">Administration</a>
    </li>
    </ul>
    </div>`)
    el.css({
        'display':'none',
        'position':'fixed',
        'background':'white',
        'top': '0px',
        'left': '0px',
        'display': 'none',
    })

 

   $('body').append(el)
    var clique = false
    $("#nom-nav-principale").click(function(e){
        if(!clique){
        clique = true
        var th = $(this)
        el.css({
        'left' : th.offset().left + "px",
        'top' : th.offset().top + +th.height()+10+ "px",
        'width' : th.width()+ "px",
        'display':'block',
     })
         e.stopPropagation()
            }
    })
    $(document).click(function(e){
        if(clique){
            el.hide()
            clique = false
        }
    })

       el.find('li').click(function(e){
     
    
     $(this).find('a').click()

 


 })
</script>

</html>

