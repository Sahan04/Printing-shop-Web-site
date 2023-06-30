<html>
    <body>
<?php  
 
if(isset($_POST['submit'])){
    $con = mysqli_connect('localhost', 'root','','orders');

if(!$con){  
  die("Could not connect: ". mysqli_error($con));  
} else{
echo " ";  
}

    $Name = $_POST['name'];
    $Address = $_POST['address'];
    $Phone = $_POST['phone'];
    $Category = $_POST['category'];
    $Details = $_POST['details'];

    $query = "INSERT INTO orders(name,address,phone,category,details) 
              VALUES ('$Name','$Address',$Phone,'$Category','$Details')";

    $result = mysqli_query($con,$query);
            if($result){
                echo "We got your order. <br> We will contact you fastly.. <br> THANK YOU FOR ORDER........";
            }else{
                echo " Query Failed". mysqli_error($con);
            }
     
           }
    
mysqli_close($con);  
?>  
</body>
</html>