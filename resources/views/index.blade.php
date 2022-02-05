<html>
    <head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body>
        <h1> category</h1>
            <table border="1">
<tr>
    @foreach ( $catdetails as $catgory)
    <td>{{$catgory}}<td>
    @endforeach    
</tr>
</table>

<br>
<br>
<table class="table" border=1>
    <thead>
      <tr>
        <th>A</th>
        <th>B</th>
        <th>C</th>
        <th>Actions</th>
        
      </tr>
    </thead>
    <tbody>
        @foreach($products as $product)

     <tr>
         <td> {{$product['id']}} </td>
         <td>{{$product['name']}} </td>
         <td> {{$product['price']}} </td>
         <td> <a href="productdetails/{{$product['id']}}">view</a></td>
     </tr>
     
     @endforeach  
    </tbody>
  </table>
</div>

</body>
</body>
</html>