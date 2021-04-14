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
            <form>
              <div class="card-body">
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label for="exampleInputEmail1">First Name</label>
                      <input type="text" class="form-control first_name" placeholder="Enter First Name" required>
                    </div>
                    <div class="col-6">
                      <label for="exampleInputEmail1">Last Name</label>
                      <input type="text" class="form-control last_name" placeholder="Enter Last Name" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control username" id="exampleInputEmail1" placeholder="Enter Username" required>
                    </div>
                    <div class="col-6">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control email" id="exampleInputEmail1" placeholder="Enter email" required>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control password" id="exampleInputPassword1" placeholder="Enter Password" required>
                    </div>
                    <div class="col-6">
                      <label for="exampleInputPassword1">Birthdate</label>
                      <input type="text" class="form-control birthdate" id="exampleInputPassword1" placeholder="Enter Birthdate">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label>Mobile</label>
                      <input type="text" class="form-control mobile" placeholder="Enter Password">
                    </div>
                    <div class="col-6">
                      <label>Commity Name</label>
                      <div class="form-group">
                        <select class="form-control commity_name" style="width: 100%;">
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
                        <select class="form-control season_year" style="width: 100%;">
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
                        <select class="form-control position_name" style="width: 100%;">
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
                        <select class="form-control university_name" style="width: 100%;">
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
                        <select class="form-control college_name" style="width: 100%;">
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
                      <input type="text" class="form-control college_year" placeholder="Enter College Year">     
                    </div>
                    <div class="col-6">
                      <label>About Person</label>
                      <div class="form-group">
                        <textarea class="form-control about_person" rows="3" placeholder="About Person"></textarea>
                      </div>     
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label>Facebook Link</label>
                      <input type="text" class="form-control facebook_link" placeholder="Enter Facebook Link">     
                    </div>
                    <div class="col-6">
                      <label>Twitter Link</label>
                      <input type="text" class="form-control twitter_link" placeholder="Enter Twitter Link">     
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label>Instgram Link</label>
                      <input type="text" class="form-control instgram_link" placeholder="Enter Instgram Link">     
                    </div>
                    <div class="col-6">
                      <label>Linkedin Link</label>
                      <input type="text" class="form-control linkeding_link" placeholder="Enter Linkedin Link">     
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-6">
                      <label>Admin Trust</label>
                      <div class="form-group">
                        <select class="form-control admin_trust" style="width: 100%;">
                          <option value="Main Admin">Main Admin</option>
                          <option value="Head">Head</option>
                          <option value="Member">Member</option>
                        </select>
                      </div>                    
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Person Photo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input person_photo">
                      <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="d-none hosterCategory" value="<?php echo $hoster?>">                 
                  <h4 id="insertingResult"></h4>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info adminAddHoster">Submit</button>
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
      <script>    
        $(document).ready(function(){
            $('.adminAddHoster').on('click',function(e){
                e.preventDefault();
                var first_name = $('.first_name').val(),
                    last_name = $('.last_name').val(),
                    username = $('.username').val(),
                    email = $('.email').val(),
                    password = $('.password').val(),
                    birthdate = $('.birthdate').val(),
                    mobile = $('.mobile').val(),
                    commity_name = $('.commity_name').val(),
                    season_year = $('.season_year').val(),
                    position_name = $('.position_name').val(),
                    university_name = $('.university_name').val(),
                    college_name = $('.college_name').val(),
                    college_year = $('.college_year').val(),
                    about_person = $('.about_person').val(),
                    facebook_link = $('.facebook_link').val(),
                    twitter_link = $('.twitter_link').val(),
                    instgram_link = $('.instgram_link').val(),
                    linkeding_link = $('.linkeding_link').val(),
                    admin_trust = $('.admin_trust').val(),
                    person_photo = $('.person_photo').val(),
                    hosterCategory = $('.hosterCategory').val(),
                    insertingResult = $('#insertingResult');
                $.ajax({
                    url:'includes/functions/addHosterAjax.php',
                    method:'POST',
                    cashe:false,
                    data:{
                      first_name:first_name,
                      last_name:last_name,
                      username:username,
                      email:email,
                      password:password,
                      birthdate:birthdate,
                      mobile:mobile,
                      commity_name:commity_name,
                      season_year:season_year,
                      position_name:position_name,
                      university_name:university_name,
                      college_name:college_name,
                      college_year:college_year,
                      about_person:about_person,
                      facebook_link:facebook_link,
                      twitter_link:twitter_link,
                      instgram_link:instgram_link,
                      linkeding_link:linkeding_link,
                      admin_trust:admin_trust,
                      person_photo:person_photo,
                      hosterCategory:hosterCategory
                    },
                    success:function(resultData){
                        if( resultData == 'success'){
                            insertingResult.show();
                            insertingResult.html("<h4 class='mt-4 alert alert-success'>The Admin has been added successfuly</h4>");
                        } else {
                            insertingResult.show();
                            insertingResult.html("<h4 class='mt-4 pt-2 pb-2 alert alert-danger'>" + resultData + "</h4>");
                        }
                    }
                });	
            });
        });
      </script>
    <?php } else {
      header("Location:index.php");
      exit();
    }
  } else {
    header("Location:index.php");
    exit();
  } 
?>