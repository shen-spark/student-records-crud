<?php
session_start();
include 'includes/header.php';
include 'dbcon.php';

?>
   


       <!-- check session -->

        <?php 
        if(isset($_SESSION['status'])){

            echo "<h5 class='alert alert-success'>".$_SESSION['status'];"</h5>";
            unset($_SESSION['status']);
        }
        
        ?>

        <main>

    

       
            <!-- Table to Display Records -->
    <div class="row justify-content-center table-record ">

      <div class="col-lg-10 ">
        <div class="card shadow-sm rounded-4 ">
          <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Student Records</h5>
            <a href="addrecord.php"><button class="btn btn-success add-btn">Add records</button></a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="recordsTable">
                <thead class="table-light">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- Dynamic Rows Here -->
                   

                  <?php
                  $ref_table = 'details';
                  $fetchdata = $database->getReference($ref_table)->getValue();

                  if($fetchdata > 0){
                            $i = 0;
                            foreach($fetchdata as $key => $row){
                                
                                
                                ?>
                                <tr>
                                    <td><?php echo $i= $i+1 ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['age'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['course'] ?></td>
                                    <td>
                                        <a href="edit_record.php?id=<?php echo $key?>" class="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="code.php?delete=<?php echo $key?>" class="btn btn-danger">Delete</a>
                                    </td>

                                </tr>
                                <?php
                            }

                  }else{
                    echo "<h5 class='alert alert-danger'>No Record Found</h5>";
                  }

                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



        </main>
        
<?php
include 'includes/footer.php';

?>