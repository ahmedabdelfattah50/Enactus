<?php 
  $pageTitle = "Enactus Dashboard";
  include "init.php";
?>
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Hello ... <?php echo $_SESSION['first_name']?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Enactus Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h2>My trust: <?php echo $_SESSION['admin_trust']?></h2>
        <div class="row">
        <?php 
          if( $_SESSION['admin_trust'] == 1 ){
        ?>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <h4>High Board</h4>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53</h3>
                <h4>Members</h4>
              </div>
              <div class="icon">
                <i class="far fa-address-card"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <h4>Commities</h4>
              </div>
              <div class="icon">
                <i class="fas fa-american-sign-language-interpreting"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>
                <h4>Old Board</h4>
              </div>
              <div class="icon">
                <i class="fas fa-hat-cowboy"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>150</h3>
                <h4>Universities</h4>
              </div>
              <div class="icon">
                <i class="fas fa-university"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>150</h3>
                <h4>Colleges</h4>
              </div>
              <div class="icon">
                <i class="fas fa-graduation-cap"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>44</h3>
                <h4>Events</h4>
              </div>
              <div class="icon">
                <i class="far fa-calendar-check"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>150</h3>
                <h4>About Us</h4>
              </div>
              <div class="icon">
                <i class="fas fa-home"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <h4>Videos</h4>
              </div>
              <div class="icon">
              <i class="fas fa-play"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>150</h3>
                <h4>Gallary</h4>
              </div>
              <div class="icon">
                <i class="far fa-images"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>150</h3>
                <h4>Opinion</h4>
              </div>
              <div class="icon">
                <i class="far fa-comment"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>150</h3>
                <h4>Messages</h4>
              </div>
              <div class="icon">
                <i class="far fa-envelope"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <?php 
          } else if ($_SESSION['admin_trust'] == 2){?>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>53</h3>
                <h4>IT Members</h4>
              </div>
              <div class="icon">
                <i class="far fa-address-card"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>44</h3>
                <h4>IT Commity</h4>
              </div>
              <div class="icon">
                <i class="fas fa-american-sign-language-interpreting"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>150</h3>
                <h4>Universities</h4>
              </div>
              <div class="icon">
                <i class="fas fa-university"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>150</h3>
                <h4>Colleges</h4>
              </div>
              <div class="icon">
                <i class="fas fa-graduation-cap"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>44</h3>
                <h4>Events</h4>
              </div>
              <div class="icon">
                <i class="far fa-calendar-check"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>150</h3>
                <h4>About Us</h4>
              </div>
              <div class="icon">
                <i class="fas fa-home"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <h4>Videos</h4>
              </div>
              <div class="icon">
              <i class="fas fa-play"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>150</h3>
                <h4>Gallary</h4>
              </div>
              <div class="icon">
                <i class="far fa-images"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <h4>Opinion</h4>
              </div>
              <div class="icon">
                <i class="far fa-comment"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>150</h3>
                <h4>Messages</h4>
              </div>
              <div class="icon">
                <i class="far fa-envelope"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>  
          <?php 
          } else if ($_SESSION['admin_trust'] == 3){
          ?>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>53</h3>
                <h4>Your Data</h4>
              </div>
              <div class="icon">
                <i class="far fa-address-card"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>150</h3>
                <h4>Opinion</h4>
              </div>
              <div class="icon">
                <i class="far fa-comment"></i>
              </div>
              <a href="#" class="small-box-footer">Lets Go <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 
          <?php 
          }
          ?>
        </div>
      </div>
    </section>
  </div>

<!-- ######################## include footer ##################### -->
<?php 
  include  $tmpl . "footer.php";
?>


