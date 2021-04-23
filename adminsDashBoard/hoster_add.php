<?php 
  $hoster = $_GET['hoster'];
  $pageTitle = $hoster . " data";
  session_start();
  if(isset($_SESSION['username']) && isset($_GET['hoster'])) {
    if($hoster == "High_Board"){
      include "init.php";     
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <!-- /.row -->
      <div class="row">
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-info mt-4">
            <div class="card-header">
              <h3 class="card-title">Add New <?php echo $hoster?> Member</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="" enctype="multipart/form-data" id="addHosterForm">
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control" name="first_name" placeholder="Enter First Name" required>
                    </div>
                    <div class="col-6">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" name="username" id="exampleInputEmail1" placeholder="Enter Username" required>
                    </div>
                    <div class="col-6">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter email" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Enter Password" required>
                    </div>
                    <div class="col-6">
                      <label for="exampleInputPassword1">Birthdate</label>
                      <input type="text" class="form-control" name="birthdate" id="exampleInputPassword1" placeholder="Enter Birthdate">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label>Mobile</label>
                      <input type="text" class="form-control" name="mobile" placeholder="Enter Password">
                    </div>
                    <div class="col-6">
                      <label>Commity Name</label>
                      <div class="form-group">
                        <select class="form-control" name="commity_name" style="width: 100%;">
                          <?php
                            $selectCommities = selectCommities(); 
                            foreach($selectCommities as $selectCommity){?>
                               <option value="<?php echo $selectCommity['name']?>"><?php echo $selectCommity['name']?></option>   
                          <?php } ?>
                        </select>
                      </div>     
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label>Season Year</label>
                      <div class="form-group">
                        <select class="form-control" name="season_year" style="width: 100%;">
                        <?php
                            $selectSeasons = selectSeasons(); 
                            foreach($selectSeasons as $selectSeason){?>
                               <option value="<?php echo $selectSeason['year']?>"><?php echo $selectSeason['year']?></option>   
                          <?php } ?>
                        </select>
                      </div>     
                    </div>
                    <div class="col-6">
                      <label>Position</label>
                      <div class="form-group">
                        <select class="form-control" name="position_name" style="width: 100%;">
                          <?php
                            $selectPositions = selectPositions(); 
                            foreach($selectPositions as $selectPosition){?>
                               <option value="<?php echo $selectPosition['name']?>"><?php echo $selectPosition['name']?></option>   
                          <?php } ?>
                        </select>
                      </div>     
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label>University Name</label>
                      <div class="form-group">
                        <select class="form-control" name="university_name" style="width: 100%;">
                          <?php
                            $selectUniversities = selectUniversities(); 
                            foreach($selectUniversities as $selectUniversity){?>
                               <option value="<?php echo $selectUniversity['name']?>"><?php echo $selectUniversity['name']?></option>   
                          <?php } ?>
                        </select>
                      </div>     
                    </div>
                    <div class="col-6">
                      <label>College Name</label>
                      <div class="form-group">
                        <select class="form-control" name="college_name" style="width: 100%;">
                        <?php
                            $selectColleges = selectColleges(); 
                            foreach($selectColleges as $selectCollege){?>
                               <option value="<?php echo $selectCollege['name']?>"><?php echo $selectCollege['name']?></option>   
                          <?php } ?>
                        </select>
                      </div>     
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label>College Year</label>
                      <input type="text" class="form-control" name="college_year" placeholder="Enter College Year">     
                    </div>
                    <div class="col-6">
                      <label>About Person</label>
                      <div class="form-group">
                        <textarea class="form-control" name="about_person" rows="3" placeholder="About Person"></textarea>
                      </div>     
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label>Facebook Link</label>
                      <input type="text" class="form-control" name="facebook_link" placeholder="Enter Facebook Link">     
                    </div>
                    <div class="col-6">
                      <label>Twitter Link</label>
                      <input type="text" class="form-control" name="twitter_link" placeholder="Enter Twitter Link">     
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label>Instgram Link</label>
                      <input type="text" class="form-control" name="instgram_link" placeholder="Enter Instgram Link">     
                    </div>
                    <div class="col-6">
                      <label>Linkedin Link</label>
                      <input type="text" class="form-control" name="linkeding_link" placeholder="Enter Linkedin Link">     
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label>Admin Trust</label>
                      <div class="form-group">
                        <select class="form-control" name="admin_trust" style="width: 100%;">
                          <option value="1">Main Admin</option>
                          <option value="2">Head</option>
                          <option value="3">Member</option>
                        </select>
                      </div>                    
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Person Photo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="person_photo" id="person_photo">
                      <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="d-none" name="hosterCategory" value="<?php echo $hoster?>">                 
                  <h4 id="insertingResult"></h4>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info" id="btnAdminAddHoster">Submit</button>
              </div>
            </form>
          </div>
        <!-- /.card -->
      </div>
      <!-- /.row -->
    </div>
  </section>
</div>


<?php 
      include  $tmpl . "footer.php";?>
    <?php } else {
      header("Location:index.php");
      exit();
    }
  } else {
    header("Location:index.php");
    exit();
  } 
?>