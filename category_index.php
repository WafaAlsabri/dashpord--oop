
        <?php
  
  // Include database file
  include 'category.php';

  $categoryObj = new Categories();

  // Delete Category from table
  if(isset($_GET['deleteId']) && !empty($_GET['deleteId'])) {
      $deleteId = $_GET['deleteId'];
      $categoryObj->deleteCategory($deleteId);
  }
  include('header.php');
  
?>  
  <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
            <script src="main.js"></script>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="css/style.css">
  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/leaf.svg">
        </head>
        <style>


            /**new */
        #page-wrapper {
    width: 85%;
    padding:  15px 10rem;
    background-color: #fff;
    border-radius: 20px;
    margin: 10rem auto;
}
.table-responsive>.table-bordered {
    border: 0;
    overflow: hidden;
}


        </style>

    <div id="wrapper">

        <!-- Navigation -->
        <div class="page">
		<span class="menu_toggle"> <i
			class="menu_open fa fa-bars fa-lg"></i> <i
			class="menu_close fa fa-times fa-lg"></i>
		</span>
		<ul class="menu_items">
			<li><a href="#"><i class="icon fa fa-signal fa-2x"></i>
					home</a></li>
			<li><a href="category_index.php"><i class="icon fa fa-coffee fa-2x"></i>
            cateogries</a></li>
			<li><a href="index.php"><i class="icon fa fa-heart fa-2x"></i> prducts</a></li>
		</ul>
		<main class="content">
		
		</main>
	</div>

        <div id="page-wrapper">

            <div class="container-fluid">
            <?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration added successfully
            </div>";
      } 
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration updated successfully
            </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Category deleted successfully
            </div>";
    }
  ?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        Category                         </h1>
                       
                    </div>
                </div>


             <div class="col-lg-12">
                       <a href="addcat.php?action=addcat" type="button" class="btn btn-xs btn-info">Add New</a>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                    <th>Category id</th>                                                                          
                                        <th>Category Name</th>                                       
                                        <th>Options</th>
                                    </tr>
                                </thead>
                                <tbody>                 
                  <?php 
          $categories =  $categoryObj->displayData(); 
          foreach ($categories as $category) {
        ?>
        <tr>
          <td><?php echo $category['category_id'] ?></td>
          <td><?php echo $category['Category_name'] ?></td>
       
          <td>
            <a href="edit_cat.php?editId=<?php echo $category['category_id'] ?>" style="color:green">
              <i class="fas fa-edit" aria-hidden="true"></i></a>&nbsp
            <a href="category_index.php?deleteId=<?php echo $category['category_id'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this Category')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      <?php } ?>                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<script>
	var page = document.querySelector(".page");
	document.querySelector(".menu_toggle").addEventListener("click",
			toggleTheClass);
	document.querySelector(".content")
			.addEventListener("click", toggleTheClass);
	function toggleTheClass() {
		page.classList.toggle("shazam");
	}
</script>
</html>
