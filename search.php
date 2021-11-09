<!DOCTYPE html>
<html>
<head>
  <title>Serach Donar</title>
  <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <style type="text/css">

    table{
      text-align:left;
      border: 1px solid black;
      border-collapse:collapse;
      width:70%;
      margin-left: 170px;
      }
th,td{
      padding:15px;
      text-align:lrft;
    }
th{
   border: 1px solid black;
}
td{
    border-right:1px dotted;
    border-bottom:1px dotted;
}



    .img{
      border-radius: 50%;
      vertical-align:middle;
            width: 50px;
            height: 50px;
 
        }


        .t {
               
          height: 40px;
          width: 50%;
          outline: none;
          border-radius: 5px;
          border:1px solid #ccc;
          padding-left: 15px;
          font-size: 16px;
          border-bottom-width: 2px;
          margin-left: 320px;
          transition: all 0.3s ease;
          box-shadow: 0 5px 10px rgba(0,0,0,0.15);
          border:1px blue;
          box-shadow: 1px 1px 2px 1px green;
        /* box-shadow: 0 5px 10px rgba(0,0,0,0.15);*/

         }


        .s {
               
          height: 40px;
          width: 50%;
          outline: none;
          border-radius: 5px;
          border:1px solid #ccc;
          padding-left: 15px;
          font-size: 16px;
          border-bottom-width: 2px;
          transition: all 0.3s ease;
          margin-left:130px;
          /*box-shadow: 0 5px 10px rgba(0,0,0,0.15);*/
          border:1px blue;
          box-shadow: 1px 1px 2px 1px green;
         /*box-shadow: 0 5px 10px rgba(0,0,0,0.15);*/

         }


  </style>
</head>
<body>

  <h2 style="text-align: center;">Search for Blood OR Plasma Donar</h2> <br>
  <center><img src="logo5.png" alt="Avatar"></center><br>

  <form action=""  method="POST" autocomplete="off">

    <div class="row">

    <div class="col-5" >

      
                  <select class="t" name="blood" required=""/>
                        
                         <option value="">Select Blood Group</option>
                           <option value="A+">A+</option>
                           <option value="B+">B+</option>
                           <option value="AB+">AB+</option>
                           <option value="O+">O+</option>
                           <option value="A-">A-</option>
                           <option value="B-">B-</option>
                           <option value="AB-">AB-</option>
                           <option value="O">O-</option>
                        
                        </select> 

    </div>

      <div class="col-5" >

      
                  <select class="s" name="address" required=""/>
                        
                         <option value="">Search by Place</option>
                           <option value="Koradi">Koradi</option>
                           <option value="Jaripatka">JP</option>
                           <option value="Sadar">Sadar</option>
                           <option value="Burdi">Burdi</option>
                           <option value="Dhantoli">Dhantoli</option>
                           <option value="Wadi">Wadi</option>
                           <option value="Hingana">Hingana</option>
                           <option value="Vardha">Vardha</option>
                        
                        </select> 

    </div>
   
    </div> <br>

    <button class='btn btn-success' type="submit" name="search" style="margin-left: 670px;">Search</button> <br><br>

</form>


  <table> 
     <tr> 

        <th> Name </th>
        <th> Blood Group </th>
        <th> Location </th>
        <th> contact </th>

     </tr>

        <br> 



     <?php



    $conn= mysqli_connect("localhost","root","","check");


    if(isset($_POST['search']))
    {
      $blood=$_POST['blood'];
      $address=$_POST['address'];


      $sql = "SELECT  *  FROM `registration` WHERE  blood='$blood' && address= '$address'";
 
      $result= $conn-> query($sql);


    if($result-> num_rows > 0)
    {
      while ($row =$result-> fetch_assoc())
      {

     
     

           echo '<tr>';
           echo '<td>'.$row['fullname'].'</td>';
           echo '<td>'.$row['blood'].'</td>';
           echo '<td>'.$row['address'].'</td>';
           echo '<td>'.$row['number'].'</td>';
           echo '</tr>';


        }

       } 

     } 


     ?>


  </table>


</body>
</html>























