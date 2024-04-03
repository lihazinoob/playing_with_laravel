<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <title>Create Your Team</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark">

<!-- Links -->
<ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link text-light" href="/">Team List</a>
  </li>
  
</ul>

</nav>
  <div class="container">
    <h1>Create a New Team</h1>
    <div class="row justify-content-center">
      <div class="col-sm-8">
      <div class="card mt-3 p-3">
        <form method="POST" action="/storeTeam" enctype="multipart/form-data">
          @csrf
          <div class="form-group">

            <label for="name">Name:</label>
            <input type="text" class="form-control" id="teamname" name="teamname" value="{{old('teamname')}}">
            @if($errors->has('teamname'))
              <p class="text-danger">{{$errors->first('teamname')}}</p>
            @endif
          </div>
          <!-- <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" rows= "4" id="description" name="description" >{{old('description')}}</textarea>
            @if($errors->has('description'))
              <p class="text-danger">{{$errors->first('description')}}</p>
            @endif
          </div> -->
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="teamimage" name="teamimage" value="old{{'teamimage'}}">  
            @if($errors->has('teamimage'))
              <p class="text-danger">{{$errors->first('teamimage')}}</p>
            @endif
          </div>

          <button type="submit" class="btn btn-dark">Create a New Team</button>

        </form>

      </div>
        
      </div>
    </div>
  </div>
</body>
</html>