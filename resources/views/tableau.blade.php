<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css.style.css')}}">
</head>
<body>
    

    <table class="table container">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Url</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
            @foreach($user as $users)
          <tr>
            <th scope="row">{{$users->id}}</th>
            <td>{{$users->url}}</td>
            <td>{{$users->nom}}</td>
            <td>{{$users->description}}</td>
            <td>
              <div class="d-flex">
                  <form action="{{route('users.destroy', $users->id)}}" method="post">
                      @csrf
                      @method('DELETE')
                      <button class=" btn rounded m-3 bg-danger" type="submit">Delete</button>
                  </form>
      
                 
              </div>
          </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endsection



    
 

 <!-- Template Main JS File -->
 <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('js/app.js')}}"></script>
</body>
</html>