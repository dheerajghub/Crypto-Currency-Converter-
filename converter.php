<!DOCTYPE html>
<html lang="en">
<head>
    <!--THE CRYPTO CURRENCY CALCULATOR-->
     <title>calculator</title>
    <!--jquery cdn-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--myscript-->
    <script src="script.js?1=<?php echo time();?>"></script>
    <!--bootstrap css library-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <!--mycss-->
    <link rel="stylesheet" href="conv.css?1=<?php echo time();?>">
    <!--fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
</head>
<body>
<div class="container">
        <div class="col-md-12">
        <h3 class=" text-capitalize text-info display-4 heading"><span class="color-bit"><i class="fab fa-bitcoin"></i>
        </span>&nbsp;cryptocurrency converter&nbsp;<span class="color-eth"><i class="fab fa-ethereum"></i></span></h3><hr>
        </div>
        <div class="row panel">
        <div class="row innerpanel col-md-12">
            <div class="col-md-6">
                <input type="number" onkeyup="amount(event,this.value)" id="amount" placeholder="Enter amount here..">
            </div>
        </div>
        <div class="row col-md-12 innerpanel">
                <div class="col-md-6">  
                    <select onchange="to(event,this.value)" id="to">
                        <?php
                            include('config.php');
                            $query = "select * from crypto";
                            $result = mysqli_query($conn , $query);
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option value=".$row['crypto'].">".$row['crypto']."</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-6">
                    <select onchange="from(event,this.value)" id="from">
                        <?php
                            include('config.php');
                            $query = "select * from crypto";
                            $result = mysqli_query($conn , $query);
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<option value=".$row['crypto'].">".$row['crypto']."</option>";
                            }
                        ?>
                    </select>
                </div>
        </div>
        <div class="row col-md-12 innerpanel">
                <div class="col-md-6">
                    <input type="number" id="result" placeholder="0" disabled>
                </div>
                <div class="col-md-6">
                    <input type="number" id="resultof" placeholder="0"  disabled>
                </div>
        </div>
        <div id="check"></div>
    </div>
</div>
<script id="script_conv"></script>
</body>
</html>