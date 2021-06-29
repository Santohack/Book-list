<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Leeway</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h5>Check all book list </h5>
                    <div class="p-t-10">
                        <button class="btn btn--radius-2 btn--blue" type="submit"><a href="list.php">click
                                here</a></button>
                    </div>

                    <?php 
                    include 'db.php';
                    

                
 if(isset($_POST['submit'])){

    $title =mysqli_real_escape_string ($connection,$_POST['title']);
    $name = mysqli_real_escape_string($connection,$_POST['name']);
    $date= date('Y-m-d');
    $query ="INSERT INTO list(title,name,date) VALUES('$title','$name',now())";
    $result =mysqli_query($connection,$query);
    if(!$result){

        die("failed" .mysqli_error($connection));
    }
    else{

        echo " inserted successfully";
    }


   
    

 }








                    
                    ?>





                    <h2 style="text-align:center" class="title"><b>Add a Book</b></h2>
                    <form method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label"> Book Title</label>
                                    <input class="input--style-4" type="text" name="title"
                                        placeholder="Enter book title">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Auther name</label>
                                    <input class="input--style-4" type="text" name="name"
                                        placeholder="Enter auther name">
                                </div>
                            </div>
                        </div>




                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" name="submit" type="submit">Add Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendor/jquery/jquery.min.js"></script>

    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <script src="js/global.js"></script>

</body>

</html>