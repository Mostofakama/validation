<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>validation </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container row">
        <div class="md-8">
            @if(session('status'))
            
            <div class="alert alert-success">
                {{session('status')}}
            </div>
            @endif
           
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="my-4">
                    <h2 class="bg-success text-white fs-8 p-2">From Validation</h2>
                <a class="btn btn-primary " href="{{route('insert')}}">Add User</a>
                </div>
                <div class="">
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Name</th>
                              <th scope="col">Email</th>
                              <th scope="col">City</th>
                              <th scope="col">Age</th>
                              <th scope="col">View</th>
                              <th scope="col">Update</th>
                              <th scope="col">Delete</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->city}}</td>
                                <td>{{$user->age}}</td>
                                <td><a class="btn btn-sm btn-success" href="{{route('single.user',$user->id)}}">View</a></td>
                                <td><a class="btn btn-sm btn-primary" href="{{route('update.user',$user->id)}}">Update</a></td>
                                <td><a class="btn btn-sm btn-danger" href="{{route('delete',$user->id)}}">Delete</a></td>
                              </tr>
                            @endforeach
                            
                          </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>