<html>
    <head>
        
</head>
 <style>
     body{
         padding:10px;
         margin:10px;
         background-image:url("https://images.pexels.com/photos/2088205/pexels-photo-2088205.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=699.825&fit=crop&h=1133.05");
         width:100%;
        text-align:center;
        font-family:"Amatic SC", sans-serif;
        margin-top:10px;
        border:2px solid black;
        display:inline-block;
        
     }
     header{
         color:blue;
     }
     
     </style>
    
 <header>
 <?php echo '<script>alert("you have sucessfully booked table")</script>'?>
  
   <MARQUEE><h1>WELCOME <?php echo $_POST["Name"];
    ?><br></h1></MARQUEE>
    </header>
 <br>
    you have booked a table for  <?php echo $_POST["people"];
    ?> people <br>
<br>
    Your date & time is <?php echo $_POST["datetime"];?>
     <?php echo $_POST["message"];
     ?>
     
 <img src="https://revenue-hub.com/wp-content/uploads/2021/09/restaurant-revenue-management-strategies-1.77.png">
    
</body>
</html>
