<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid bg-body-secondary p-4 text-center">
        <h4>Registration staff</h4><br>
      

        </div><br>
        <div class="container-fluid border border-dark-subtle h-75 w-75">
            <form action="db.php" method="post"  class="form-control">
               <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label for="fullname" class="form-label">Full name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Yourname" required>                  
                </div>
                <br>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <b>Gender</b><br>
                    <label for="" class="form-label">Male</label>
                    <input type="radio" class="form-check-input" value="male" name="gender" id="gender" placeholder="Yourname" required>
                    <label for="" class="form-label">Femle</label>
                    <input type="radio" class="form-check-input" value="female"  name="gender" id="gender" placeholder="Yourname" required>
                    
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label for="number" class="form-label">Phone</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Number" required>
                    
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label for="father" class="form-label">Father name</label>
                    <input type="text" class="form-control" name="father" id="father" placeholder="Father name" required>
                    
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label for="mother" class="form-label">Mother name</label>
                    <input type="text" class="form-control" name="mother" id="mother" placeholder="Mother name" required>
                    
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" required>
                    
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label for="pwd" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pwd" id="pwd" placeholder="Password" required>
                    
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6">
                    <label for="options" class="form-label">Select City</label>
                    <select class="form-select" name="options" id="options">
                        <option value="Lucknow">Lucknow</option>
                         <option value="Gorakhpur">Gorakhpur</option>
                         <option value="Deoria">Deoria</option>
                         <option value="Agra">Agra</option>
                          <option value="Noida">Noida</option>
                    </select>
    
                    
                </div>
                
                
               </div><br>
               <div class="text-center mt-3 mm">
                <input type="submit" value="Submit" class="btn btn-outline-danger w-75">
                <label class="form-check-label" for="invalidCheck2">
                        Agree to terms and conditions<input type="checkbox">
                        <p>Alerady Have a Account <a href="staticBackdrop" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Login Here</a></p>
                      </label>
            </div>

                



            </form>

        </div>

        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdrop">Login Up</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
              
                <!--From control Start-->
                <form class="row g-3" id="dmo" action="log.php" method="post">
                  
                  <div class="col-md-4 col-lg-4">
                    <label for="validationDefaultUsername" class="form-label">Phone No or Email:</label>
                    <div class="input-group">
                      <input type="text" class="form-control" id="pwd"  name="email" aria-describedby="inputGroupPrepend2" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationDefault03" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pwd" name="pwd" required>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
       
        </div>
       </div>

    
</body>
</html>