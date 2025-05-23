<?php
include 'includes/header.php';

?>
   
        <main>

     <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow-lg rounded-4">
          <div class="card-header bg-primary text-white text-center">
            <h4 class="mb-0">Add Student Record</h4>
          </div>
          <div class="card-body">
            <form action="code.php" method="POST">
              <div class="mb-3">
                <label for="studentName" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="studentName" name="studentName" placeholder="Enter full name" required>
              </div>
              <div class="mb-3">
                <label for="studentAge" class="form-label">Age</label>
                <input type="number" class="form-control" id="studentAge" name="studentAge" placeholder="Enter age" required>
              </div>
              <div class="mb-3">
                <label for="studentEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="studentEmail" name="studentEmail" placeholder="Enter email" required>
              </div>
              <div class="mb-3">
                <label for="studentCourse" class="form-label">Course</label>
                <input type="text" class="form-control" id="studentCourse" name="studentCourse" placeholder="Enter course name" required>
              </div>
              <div class="d-grid">
                <button type="submit" name="add_records" class="btn btn-success">Add Record</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



        </main>
        
<?php
include 'includes/footer.php';

?>