<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  
  <title>LARAVEL CRUD with Products</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark">

<!-- Links -->
<ul class="navbar-nav">
  <li class="nav-item">
    
    <a class="nav-link text-light" href="#">Products</a>
  </li>
  
</ul>

</nav>
  <div class="container">
  <div class="text-right">
      <a href="/createproduct" class="btn btn-dark mt-2">New Product</a>
    </div>
    <h1>Products</h1>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Product Id</th>
        <th>Product Name</th>
        <th>Description</th>
        <th>Image</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
      <tr>
        
        <td>{{$loop -> index +1 }}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->description}}</td>
        <td><img src="{{asset('productimages/'.$product->image)}}" alt="image" style="width:100px;height:100px;"></td>
      </tr>
     
    @endforeach  
    </tbody>

    </table> 



  </div>
</body>
</html>