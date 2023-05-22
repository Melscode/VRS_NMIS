<?php 
include '../includess/header.php';
include "db_conn.php"; ?>

<style>
		.alb {
			width: 80%;
			height: 80%;
			padding: 5px;
		}
		.alb img {
			width: 100%;
			height: 100%;
		}
		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>
<body>
     <a href="index.php">&#8592;</a>
     <?php 
	 		$transaction_id = $_GET['transaction_id'];
          $sql = "SELECT * FROM images WHERE transaction_id ='$transaction_id'";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<img src="uploads/<?=$images['image_url']?>">
             </div>
		<?php	
			//  if(isset($_POST['view'])) {
            //    header("content-type: application/pdf");
			//    readfile($images['image_url']);
			//  }
          ?>	
		  
		  <!-- <form action="" method="post">
			<button name="view">VIEW PDF</button>
		  </form> -->
    <?php } }?>
</body>
</html>