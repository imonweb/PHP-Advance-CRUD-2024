<?php 
  require_once 'partials/Database.php';
  // $dbobj = new Database();
  // var_dump($dbobj);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Advanced CRUD 2024</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../Downloads/font-awesome-4.2.0/css/font-awesome.min.css"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
    
  </head>

  <body>
 
  <h1 class="bg-dark text-light text-center py-2">CRUD</h1>

  <div class="container">

  <!--========= form ==========-->
    <div class="row">
      <div class="col-lg-10 mb-4">
        <div class="input-group">
          <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"></path>
            </svg>
          </span>
          
          <input type="text" class="form-control" placeholder="Search User..." aria-label="Search User" aria-describedby="basic-addon1">
          
        </div> <!--========= input-group ==========-->
      </div> <!--========= col-10 ==========-->

      <!--========= modal ==========-->
      <div class="col-lg-2">
        <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#usermodal">Add User</button>
      </div>

      <!-- Modal -->
      <?php include 'form.php'; ?>
      <?php include 'profile.php'; ?>

      <!--========= Table ==========-->
      <?php include 'table.php'; ?>

      <nav aria-label="Page navigation" id="pagination">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
      </nav>
 
    </div> <!--========= row ==========-->
  </div> <!--========= container ==========-->


   
    <!--========= jQuery ==========-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!--========= bootstrap ==========--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script> -->
  </body>

  <!--========= Script ==========-->
  <script src="js/script.js"></script>

</html>