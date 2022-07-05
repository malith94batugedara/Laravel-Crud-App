<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud Opreations Update</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    </head>

  
    <body>

            <div class="container mt-3">
                 <form action="/updatetasks" method="post">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="name1" value="{{$taskdata->name}}"/><br/>
                    <input type="text" class="form-control" name="age1" value="{{$taskdata->age}}"/><br/>
                    <input type="text" class="form-control" name="city1" value="{{$taskdata->city}}"/><br/>
                    <input type="hidden" name="id" value="{{$taskdata->id}}"/>
                    <br/>
                    <input type="submit" class="btn btn-primary" value="Update"/>

                 </form>
         
            </div>


    </body>



</html>