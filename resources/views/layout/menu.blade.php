<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <style>
      body{
            background-color: #211F40;

      }
   .container{
       margin-left: 200px;
       
   }
  </style>
  
  
    </head>
    <body>
        <div class="container" style="margin-bottom:20px;">
            <a href="\cart" style="float:right;padding-right:250px;" ><button class="btn btn-large btn-dark"> Go to cart</button></a> 
        </div>
        
        <div class="d-flex align-content-start flex-wrap container">
            @foreach ($products as $product)
        
            <form action="\menu " method="POST">
                @csrf

                <div class="card " style="width: 18rem;background-color:#BEC187;">
                    <img src="/images/pizza1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title"><b>{{$product->itemname}}</b></h5>
                      <input type="hidden" name="name" value="{{$product->itemname}}">  
                      <p class="card-text"><b>Price : {{$product->price}}</b></p>
                      <input type="hidden" name="price" value="{{$product->price}}">
                      <select name="quantity" class="btn btn-dark" >
                        <option value="0" class="btn btn-dark">QTY</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>
                    <input type="submit" value="Add" class="btn btn-dark" >
                    </div>
                  </div>
                 </form>
            @endforeach
         </div> 
        </body>
</html>


