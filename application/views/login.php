<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-9 col-lg-8 col-md-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            
            <!-- Nested Row within Card Body -->
            <div class="row justify-content-center">
              
              <div class="col-lg-10">
                <div class="p-5">
                  
                  <!-- Welcome Title -->
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  
                  <!-- shows message, if any -->
                  <?= $this->session->flashdata('register') ?>
                  
                  <form class="user" method="post" action="<?= base_url('auth/check_login') ?>">
                    
                    <!-- input: email -->
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address...">
                    </div>
                    
                    <!-- input: password -->
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                    </div>
                    
                    <!-- button: login -->
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  
                  </form>

                  <hr>

                  <!-- link to sign up -->
                  <div class="text-center">
                    <a class="small" href="<?= base_url('auth/signup') ?>">Create an Account!</a>
                  </div>

                </div>
              </div>

            </div>
            <!-- END OF Nested Row within Card Body -->

          </div>
        </div>

      </div>

    </div>

  </div>