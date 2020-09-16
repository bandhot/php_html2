<?php include "data.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data siswa magang pt top</title>
        <link rel="stylesheet" href="asset/css/all.css">
        <link rel="stylesheet" href="asset/css/bootstrap.min.css">
</head>
<body>
 <div class="container">

        <div class="row">

                <?php foreach($data_siswa as $key=>$value): ?>

            <div class="col">
                <div class="card <?php if($value[3]==true){echo "bg-primary";}?>" style="width: 18rem;">
                       <img src="asset/image/boon.jpg" class="card-img-top img-thumbnail" alt="...">
                           <div class="card-body">
                              <h5 class="card-title"><?php echo $value[0];?></h5>
                              <p class="card-text"><?php echo $value[1];?></p>
                              <p class="card-text"><?php echo $value[2];?></p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                           </div>
                 </div>
            </div>

                <?php endforeach; ?>
       </div>
 </div>
<script src="asset/js/jquery-3.5.1.min.js"></script>
<script src="asset/js/popper.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>