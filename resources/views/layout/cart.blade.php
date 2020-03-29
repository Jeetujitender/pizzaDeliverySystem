<html>
<head>
    <style>
      body{
            background-color: #211F40;

      }

        table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}

.div1{
    margin-top:100px;
    margin: 0px 350px;
    background-color: #BEC187;
    padding: 50px;
}

.div2{
    margin-top:100px;
 
}
    </style>
</head>
<body>
    <div class="div1">
        <center><h2>Your Order</h2></center>
    
        <table>
            <tr>
            <th>Items</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Amount</th>
            </tr>
            @foreach ($products as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->amount}}</td>
                </tr>
            @endforeach
                <td></td>
                <td></td>
                <td>Total</td>
            <td>{{$total[0]->sum}}</td>
          </table>
    
    
    
    <div class="div2">
        <form action="\order" method="POST">
            @csrf
            <h2>Details : </h2>
            <p><label style="margin-right:40px;"> Name :</label>
                <input type="text" name="name" ></p>
            <p><label style="margin-right:40px;"> Fill your Address :</label>
                <input type="text" name="address" ></p>
            <p> <label style="margin-right:108px;">Phone no.</label>
                <input type="text" name="phone" ></p>
               <input type="submit" value="Place your Order">
           

        </form>
    
    </div>

    
    </div> 
</body>
</html>