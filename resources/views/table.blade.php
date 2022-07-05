<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud Opreations</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    </head>

  
    <body>
 
        <div class="container">
                  <div class="text-center">
                        <h1>Crud Operations</h1>
                           <form method="post" action="/save">
                               {{csrf_field()}}
                               <input type="text" class="form-control" name="name" placeholder="Enter your name" required/><br/>
                               <input type="text" class="form-control" name="age" placeholder="Enter your age" required/><br/>
                               <input type="text" class="form-control" name="city" placeholder="Enter your city" required/><br/><br/>
                               <input type="submit" class="btn btn-primary" value="Save"/>
                           </form>
                                 <br/><br/><br/><br/>

                                <table class="table table-dark">

                                        <thead>
                                             <tr>
                                                 <th>name</th>
                                                 <th>age</th>
                                                 <th>city</th>
                                                 <th>Action</th>

                                             </tr>

                                        </thead>

                                        <tbody>
                                            @foreach($tasks as $task)
                                             <tr>
                                                 <td>{{$task->name}}</td>
                                                 <td>{{$task->age}}</td>
                                                 <td>{{$task->city}}</td>
                                                 <td>
                                                     <a href="/delete/{{$task->id}}" class="btn btn-danger">Delete</a>
                                                     <a href="/update/{{$task->id}}" class="btn btn-success">Update</a>
                                                 </td>

                                             </tr>
                                            @endforeach
                                        </tbody>


                                </table>



                   </div>


        </div>


    </body>

</html>