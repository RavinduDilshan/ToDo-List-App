<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="text-center">
        <h1>Daily Tasks</h1>
       

        <div class="row">

        <div class="col-md-12">

                @foreach($errors->all() as $error )
                    <div class="alert alert-danger" role="alert">
                      {{$error}}
                    
                    </div>


                @endforeach

            <form action="/saveTask" method="post">
            {{csrf_field()}}

            <input type="text" class="form-control" placeholder="Enter Your Task" name="task">
            <br>
            <input type="submit" class="btn btn-primary" value="Save">
            <input type="button" class="btn btn-warning" value="Clear">

            
            
            
            
            
            </form>
            

            <table class="table table-dark">

                <th>Id</th>
                <th>Task</th>
                <th>Completed</th>
                <th>Action</th>

                    @foreach($tasks as $task)
                <tr>

                    <td>{{$task->id}}</td>
                    <td>{{$task->Tasks}}</td>
                    <td>

                    @if($task->isCompleted)
                        <button class="btn btn-success">Completed</button>

                        @else
                        <button class="btn btn-warning">Not Completed</button>

                        @endif
                    
                    
                    
                    </td>

                    <td>
                        <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
                    </td>
                
                
                
                </tr>
                    @endforeach
            
            
            </table>
        
        </div>
        
        
        
        </div>
    
        </div>
    </div>
    
</body>
</html>