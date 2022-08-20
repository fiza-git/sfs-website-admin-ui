<?php 
      session_start();

     if(!isset($_SESSION['reg']) || trim($_SESSION['reg']) == ''){
		header('location: ./registration2.php');
		exit();
	}?>
	
<?php  
include 'includes/conn.php';  ?>

<!DOCTYPE html>
<html lang="en">
  

<head>

  <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>
      Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com
    </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png" />
	
    <link
      rel="stylesheet"
      href="admin-panels/admission-2/fonts/material-icon/css/material-design-iconic-font.min.css"
    />
    <link
      rel="stylesheet"
      href="admin-panels/admission-2/vendor/nouislider/nouislider.min.css"
    />
     <link rel="stylesheet" href="admin-panels/admission-2/css/style.css" />
	<link rel="stylesheet" href="admin-panels/css/admission-form.css" />
	
	
	
	    <link
      href="admin-panels/plugins/tables/css/datatable/dataTables.bootstrap4.min.css"
      rel="stylesheet"
    />

	 <link href="admin-panels/css/style.css" rel="stylesheet">
	
    <link
      href="https://fonts.googleapis.com/css?family=Muli:900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css"
    />

    <link href="admin-panels/css/style.css" rel="stylesheet" />

    <link
      href="https://fonts.googleapis.com/css?family=Questrial"
      rel="stylesheet"
    />

    
	
	
	
  </head>
  
 
  
  <body>
   <div id="preloader">
      <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
          <circle
            class="path"
            cx="50"
            cy="50"
            r="20"
            fill="none"
            stroke-width="3"
            stroke-miterlimit="10"
          />
        </svg>
      </div>
    </div>   
  
    <div id="main-wrapper">
 
      <div class="content-body">
       
    
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">
			      <?php
	
                                     
               
        if(isset($_SESSION['error'])){
          echo " 
       <div class='alert alert-danger alert-dismissible fade show'>
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
              </button><h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>

          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "

      <div class='alert alert-primary alert-dismissible fade show'>
             <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span>
              </button><h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."

			</div>
          ";
          unset($_SESSION['success']);
        }
      ?>
              <div class="card">
                <div class="card-body">
                  <!-- Admission Form -->

        <div class="main">
          <div class="container">
            <div class="signup-content">
              <div class="signup-img">
                <img src="images/logo-a.png" alt="" />
              </div>
              <div class="signup-form">
                <form method="POST" class="register-form" id="register-form" action="intial_reg.php">
                  <div class="form-row">
                    <div class="form-group">
                      <div class="form-input">
                        <label for="first_name" class="required"
                          >Registration ID</label
                        >
                        <input
                          type="text"
                          name="registration_id"
                          id="first_name"
                           value = "<?php echo $_SESSION['reg']; ?>"                       
					        readonly disabled
					   />
                      </div>
                      <div class="form-input">
                        <label for="first_name" class="required">Name</label>
                        <input type="text" name="name" id="first_name" />
                      </div>
                      <div class="form-input">
                        <label for="last_name" class="required"
                          >Father's Name</label
                        >
                        <input type="text" name="father_name" id="last_name" />
                      </div>
                    </div>
                    <div class="form-group">
                      
					   <div class="form-input">
                        <label for="payable">Campus</label>
                           
						    <select class="form-control"   id="camp" name="camp" required>
                               <option value="">Select Campus</option>
							  <?php
                     
                        $conn = $pdo->open();
                        $stmt = $conn->prepare("SELECT * FROM category");
                        $stmt->execute();                        
						
                          
                             foreach($stmt as $crow){
                              ?>
                                <option value="<?php echo $crow['name'];?>"><?php echo $crow['name'];?></option>
                                <?php }?>
                            </select>
					 
                      </div>
					  
					  
					  <div class="form-input">
                        <label for="payable">Expected Class</label>
                       
					  
					   <select   name="expected_class" id="expected_class">
					
					 
					            </select>
					  
					  
					  </div>

                      <div class="form-input">
                        <label for="chequeno">نام</label>
                        <input type="text" name="urdu_name" id="chequeno" />
                      </div>
                      <div class="form-input">
                        <label for="blank_name">والد کا نام</label>
                        <input
                          type="text"
                          name="urdu_father_name"
                          id="blank_name"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="form-submit">
                    <input
                      type="submit"
                      value="Submit"
                      class="submit"
                      id="submit"
                      name="add"
                    />
                    <input
                      type="submit"
                      value="Go Back"
                      class="submit"
                      id="reset"
                      name="reset"
                    />
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

                  <!-- End Admission Form -->

      
                </div>
              </div>
            </div>
          </div>
        </div>

		<!-- Chartjs -->
     <!-- Circle progress -->
  
    <!-- Datamap -->
     
   
    
	
        <!-- container -->
      </div>


  
   <script src="admin-panels/plugins/common/common.min.js"></script>
    <script src="admin-panels/js/custom.min.js"></script>
    <script src="admin-panels/js/settings.js"></script>
    <script src="admin-panels/js/gleek.js"></script>
    <script src="admin-panels/js/styleSwitcher.js"></script>

    <script src="admin-panels/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="admin-panels/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="admin-panels/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>	
	  
      <!-- End Delete Modal -->

      <!--**********************************
            Content body end
        ***********************************-->

      <!--**********************************
            Footer start
        ***********************************-->
     
      <!--**********************************
            Footer end
        ***********************************-->
   	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->

	<script>
	
	
	$(document).ready(function(){
$("#camp").change(function(e){
    
	      
		  alert('hi');
   var s = $(this).val();
     
  
	
		$.ajax({
			url:"pbpb.php",
			method:"post",
			data:{que:s		
			},
			success:function(data)
			{
			
			alert(data);
				data = JSON.parse(data);
var option1='';			
		option1 = '<option value="All Class" selected="selected" disabled value="">Select BANK</option>';
		
    
		
     
	 for (var i=0;i<data.length;i++){
	
	
	
	
   option1 += '<option value="'+ data[i].id + '">' + data[i].name+ '</option>';
   }


   data.length=0;
   
  $('#expected_class')
    .empty()
    .append(option1);   
	
		},
        error: function(result) {
            alert('error');
        }
		});
	
	
});	
});	

	
</script>	
	
  </body>
</html>
