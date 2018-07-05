<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       
    <body>

    <div class="container-fluid">
        <br>
        <div class="row">
           
            <div class="col-md-12">
              @foreach($animales as $key)
                    <div class="col-md-3">
                        <div class="panel panel-default">
                            <div class="panel-heading"><img src=""/>Aprendible</div>
                            <div class="panel-body text-left">

                                <div class="row">
                                     
                                    <div class="col-md-12 ">
                                        <center>
                                            <a class="" href="#">
                                                <img class="media-object dp img-circle" src="{{$key->image_url}}" style="width: 180px;height:180px;">
                                            </a>
                                        </center>
                                    </div>
                                    <div class="col-md-12">

                                        <h2>{{$key->nombre_animal}}</h2>
                                        <p>{{$key->descripcion_animal}}</p>
                                        <p>
                                            <a href="{{url('descargar').'/'. $key->id }}" class="remove-decoration"><i class="glyphicon glyphicon-download"></i> Descargar</a> <br>
                                            <a href="https://aprendible.com/" target="_blank" class="remove-decoration"><i class="glyphicon glyphicon-globe"></i> Aprendible.com </a><br>
                                            <a href="#" class="remove-decoration"> <i class="glyphicon glyphicon-phone"></i>+573108998338</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                             
                            
                        </div>
                    </div>
                    @endforeach
                <div class="col-md-4"></div>
                </div>
                
        </div>
       
    </div>
          
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    </body>
</html>
