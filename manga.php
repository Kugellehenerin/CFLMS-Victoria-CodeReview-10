<!DOCTYPE html>
<html>
<head>
<!-- Add Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
   <title>Big Library</title>

   <style type ="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }
       a {
        text-decoration: none;
        }

   </style>

</head>
<body>
<?php 

require_once 'actions/db_connect.php';

?>
<!-- Add Navbar -->
<nav class="navbar navbar-light bg-light">
  <ul class="nav">
  <li class="nav-item">
    <a class="navbar-brand" href="../cflms-victoria-codereview-10/manga.php">Big Library</a>
  </li>
</ul>
<a href= "create.php"><button type="button" >Add Book</button></a>
</nav>

<div class ="manageBook table">
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead class="thead-dark">
           <tr>
               <th>ID</th>
               <th>Image</th>
               <th>Author</th>
               <th>Description</th>
               <th>Type</th>
               <th>ISBN</th>
               <th>Status</th>
               <th>Change</th>
           </tr>
       </thead>
       <tbody>
       <?php
           $sql = "SELECT * FROM books";
           $result = $conn->query($sql);

            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo  "<tr>
                   <td>" .$row['id']."</td>
                   <td><img src='img/" . $row['books_img'] . "' width='250px' /></td>
                   <td>" .$row['books_author']."</td>
                   <td>" .$row['books_description']."</td>
                   <td>" .$row['books_type']."</td>
                   <td>" .$row['books_isbn']."</td>
                   <td>" .$row['books_status']."</td>
                       <td>
                           <a href='update.php?id=" .$row['id']."'><button type='button'>Edit</button></a>
                           <a href='delete.php?id=" .$row['id']."'><button type='button'>Delete</button></a>
                       </td>
                   </tr>" ;
               }
           } else  {
               echo  "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
           }
            ?>
       </tbody>
   </table>
</div>

</body>
</html>