<?php
session_start();
include 'includes/header.php';
include 'dbcon.php';

?>
   
        <main>


        <?php

            if(isset($_GET['id'])){
                $key_child = $_GET['id'];

                // echo $key_child;


                  // get student details
                    $ref_table = 'details';
                    $getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();



                    if($getdata > 0){

                      ?>

                          <div class="container py-5">
                              <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6">
                                  <div class="card shadow-lg rounded-4">
                                    <div class="card-header bg-primary text-white text-center">
                                      <h4 class="mb-0">Update Student Record</h4>
                                    </div>
                                    <div class="card-body">
                                      <form action="code.php" method="POST">

                                    
                                      <input type="hidden" name="key_child" value="<?php echo $key_child; ?>">
                                        <div class="mb-3">
                                          <label for="studentName" class="form-label">Full Name</label>
                                          <input type="text" class="form-control" id="studentName" value="<?php echo $getdata['name'] ?>" name="studentName" placeholder="Enter full name" required>
                                        </div>
                                        <div class="mb-3">
                                          <label for="studentAge" class="form-label">Age</label>
                                          <input type="number" class="form-control" id="studentAge" value="<?php echo $getdata['age'] ?>" name="studentAge" placeholder="Enter age" required>
                                        </div>
                                        <div class="mb-3">
                                          <label for="studentEmail" class="form-label">Email</label>
                                          <input type="email" class="form-control" id="studentEmail" value="<?php echo $getdata['email'] ?>" name="studentEmail" placeholder="Enter email" required>
                                        </div>
                                        <div class="mb-3">
                                          <label for="studentCourse" class="form-label">Course</label>
                                          <input type="text" class="form-control" id="studentCourse" value="<?php echo $getdata['course'] ?>" name="studentCourse" placeholder="Enter course name" required>
                                        </div>
                                        <div class="d-grid">
                                          <button type="submit" name="update_records" class="btn btn-success">Update Record</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>


                      <?php

                    }else{
                          $_SESSION['status'] = "No Record Found";
                          header("Location: index.php");
                    }



            }


      


        ?>

     


        </main>
        
<?php
include 'includes/footer.php';

?>