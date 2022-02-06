<?php 

  require_once "inc/conn.php";



  if (post('msg') and post('numbers')) {
    print_r($_POST);

    $numbers = explode(',', post('numbers'));
    $msg = post('msg');



    // die();
  }


  require "nav.php";




 ?>



  <main id="main" class="main">


    <div class="pagetitle">
      <h1>Send Message</h1>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              

              <!-- <h5 class="card-title">Message Title/Label</h5> -->
              <br>
              
              <form method="post">

              <div class="row mb-3">

                <label for="inputEmail" class="col-sm-2 col-form-label">Phone Numbers</label>

                <div class="col-sm-10">
                    <textarea name="numbers" class="form-control" style="height: 100px"></textarea>
                  <div class="mt-3"><small><i>Separate phone numbers by comma</i></small></div>
                </div>

              </div>

              <div class="row mb-3">
                
                <label for="inputEmail" class="col-sm-2 col-form-label">Message</label>

                <div class="col-sm-10">
                    <textarea name="msg" class="form-control" style="height: 100px"></textarea>
                  <div class="mt-3"><small><i>0/143</i></small></div>
                </div>

              </div>

              <center><button type="submit" class="mt-3 btn btn-primary" style="width: 100%"><i class="bi bi-send"></i> &nbsp;SEND</button></center>
              </form>

            </div>
          </div>

        </div>


      </div>
    </section>



  </main><!-- End #main -->








<!--  -->



<?php 


  require "footer.php";

 ?>