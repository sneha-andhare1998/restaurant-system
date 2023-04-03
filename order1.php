<html>
    <body>
    <style>
     body{
         padding:10px;
         margin:10px;
         background-image:url("https://freefrontend.com/assets/img/css-background-patterns/simple-pattern-with-css3.png");
         width:100%;
        text-align:center;
        font-family:"Amatic SC", sans-serif;
        margin-top:10px;
        border:2px solid black;
       
        
     }
     header{
         color:blue;
     }
     
     </style>
    
 <header>
 <?php echo '<script>alert("you have sucessfully placed order")</script>'?>
 <h1>INVOICE RECEIPT</h1>
 <hr>
 
    </header>
    <h2>ORDER NUMBER 10002</h2>
  Customer name is <?php echo $_POST["CustomerName"];
    ?><br>   
 <br>
 
     Customer Mobile no is <?php echo $_POST["CustomerNumber"];
    ?><br><br>

   Customer city is <?php echo $_POST["city"];
    ?>
    <br>
    <br>

    Customer Email address is <?php echo $_POST["email"];?><br><br>
     Customer dispatch address is <?php echo $_POST["dispatchaddress"];?>
     <br>
     <br>  

     Customer has choosed <?php echo $_POST["radio"];?> Pizza<br>
     <br>  

     Customer has choosed <?php echo $_POST["r1"];?> Burgur<br>
     <br>  

     Customer has choosed <?php echo $_POST["r2"];?> Sandwich<br>
     <br>

     Customer has choosed <?php echo $_POST["r3"];?> Pasta<br>
     <br>

    Payment method of Customer is <?php echo $_POST["payment"];?></h3>
 <br>
<br>
    <img src="https://i.pinimg.com/564x/bb/19/2d/bb192d00960abc2efa068122e8fd44d8.jpg" style=width:200;>
</body>
</html>

