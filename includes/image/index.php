<?php include '../includess/header.php';?>

	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">
           <?php
  $transaction_id =$_GET['transaction_id']; 
           ?>
           <input type="text" 
                  name="trasaction_id" placeholder="<?php echo $transaction_id;?>"  value =<?php echo $transaction_id;?>>

           <input type="file" 
                  name="my_image">
                  

           <input type="submit" 
                  name="submit"
                  value="Upload">
     	
     </form>
</body>
</html>