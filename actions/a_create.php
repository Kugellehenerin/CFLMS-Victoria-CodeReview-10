<?php 

require_once 'db_connect.php';

?>
<!DOCTYPE html>
<html>
<head>
<!-- Add Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   
   <title>Big Library Add Books</title>

   <style type ="text/css">
       .manageUser {
           width : 50%;
           margin: auto;
       }

        table {
           width: 100%;
            margin-top: 20px;
       }

   </style>

</head>
<body>
<!-- Add Navbar -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="../cflms-victoria-codereview-10/manga.php">Big Library</a>
  <a href= "create.php"><button type="button">Add Book</button></a>
</nav>

<?php 

if ($_POST) {
    $img = $_POST['books_img'];
    $author = $_POST['books_author'];
    $des = $_POST[ 'books_description'];
    $type = $_POST['books_type'];
    $isbn = $_POST[ 'books_isbn'];
    $status = $_POST[ 'books_status'];

   $sql = "INSERT INTO books (books_img, books_author, books_description, books_type, books_isbn, books_status) VALUES ('$img', '$author', '$des', '$type', '$isbn', '$status')";
    if($conn->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../manga.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $conn->conn_error;
   }

   $conn->close();
}
?>
</body>
</html>