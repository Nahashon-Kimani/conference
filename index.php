<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tafaria Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c99e7cdcbd.js" crossorigin="anonymous"></script>
</head>
<body>
    
   
   <section class="newsSection">
       <div class="row">

        <?php
            include('db_connect.php');
            
            $getAllNews = "SELECT * from news";
            $query_run = mysqli_query($connection, $getAllNews);

            if(mysqli_num_rows($query_run) > 0)
            {
                while($news = mysqli_fetch_assoc($query_run))
                {
                       echo "
                       
                       
                       <div class='col-md-4'>
                        <div class='card'>
                            <img src='' alt='' class='card-img-top'>
                            <p>".date('d F, Y', strtotime($news['created_at']))."</p>
                            <h3>".$news['title']."</h3>
            
                            <p>".$news['message']."</p>
                        </div>
                    </div>
                       
                       
                       ";
                }
            }

        
        ?>

          

           
           
       </div>
   </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>