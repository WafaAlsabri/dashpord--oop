
<?php
       
       // Include database file
    // Include database file
    include 'category.php';

    $categoryObj = new Categories();
 
   if(isset($_POST['submit'])) {
      $categoryObj->insertData($_POST);
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
             <link rel="stylesheet" type="text/css"  href="css/style.css" />
             <script src="main.js"></script>
         </head>
         <style>
         #page-wrapper {
     width: 60%;
     padding:  15px auto;
     background-color: #fff;
     border-radius: 20px;
     margin: 10rem auto;
 }
         </style>
        <body>
 
 <div id="wrapper">
 
     <!-- Navigation -->
     <div class="page">
		<span class="menu_toggle"> <i
			class="menu_open fa fa-bars fa-lg"></i> <i
			class="menu_close fa fa-times fa-lg"></i>
		</span>
		<ul class="menu_items">
			<li><a href="#"><i class="icon fa fa-signal fa-2x"></i>
					Signal</a></li>
			<li><a href="#"><i class="icon fa fa-coffee fa-2x"></i>
					Coffee</a></li>
			<li><a href="#"><i class="icon fa fa-heart fa-2x"></i> Like</a></li>
		</ul>
		<main class="content">
		
		</main>
	</div>

 
     <div id="page-wrapper">
 
         <div class="container-fluid">
 
     
             <!-- /.row -->
 
 
          <div class="col-lg-12">
               <h2>Add new Category</h2>
                   <div class="col-lg-6">
 
                     <form role="form" method="post" action="addcat.php">
                         
                       
                         <div class="form-group">
                           <input class="form-control" placeholder="Category Name" name="categoryname">
                         </div> 
                      
 
                         <button type="submit" name="submit" class="btn btn-default">Save Category</button>
                         <button type="reset" class="btn btn-default">Clear Entry</button>
 
 
                   </form>  
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
 
 
 
 
 