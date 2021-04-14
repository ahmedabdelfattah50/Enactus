<?php
    include '../../conection.php';
    require_once 'functions.php';
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password_hased     = password_hash($password, PASSWORD_DEFAULT);
        $birthdate = $_POST['birthdate'];
        $mobile = $_POST['mobile'];
        $commity_name = $_POST['commity_name'];
        $season_year = $_POST['season_year'];
        $position_name = $_POST['position_name'];
        $university_name = $_POST['university_name'];
        $college_name = $_POST['college_name'];
        $college_year = $_POST['college_year'];
        $about_person = $_POST['about_person'];
        $facebook_link = $_POST['facebook_link'];
        $twitter_link = $_POST['twitter_link'];
        $instgram_link = $_POST['instgram_link'];
        $linkeding_link = $_POST['linkeding_link'];
        $admin_trust = $_POST['admin_trust'];
        $person_photo = $_POST['person_photo'];
        $hosterCategory = $_POST['hosterCategory'];


        // check required field empty   
        $insertingError = array();
        if(empty($first_name)){
            array_push($insertingError,"<i class='fas fa-exclamation-triangle'></i> First Name is empty </br>");
        }
        if(empty($last_name)){  
            array_push($insertingError,"<i class='fas fa-exclamation-triangle'></i> Last Name is empty </br>");
        }
        if(empty($username)){   
            array_push($insertingError,"<i class='fas fa-exclamation-triangle'></i> Username is empty </br>");
        }
        if(empty($email)){ 
            array_push($insertingError,"<i class='fas fa-exclamation-triangle'></i> Email is empty </br>");
        }
        if(empty($password)){ 
            array_push($insertingError,"<i class='fas fa-exclamation-triangle'></i> Password is empty </br>");
        }

        if(count($insertingError) > 0){
            for($i=0 ; $i<count($insertingError); $i++){
                echo $insertingError[$i];
            }
        }

        if(!empty($first_name && $last_name && $username && $email && $password)){

        //     $checkAdminExisting = checkAdminExisting($username_add , $email_add);
        //     if($checkAdminExisting){
        //         echo "Sorry this Admin is existed";
        //     } else {
        //         $stmt = $con->prepare("INSERT INTO hosters(name,username,password,email,phone,date,trust_status) VALUES(:nameInsert,:username,:passwordInsert,:emailInsert,:phoneInsert,now(),:trust_status)");
                
        //         $stmt->execute(array(
        //             ":nameInsert"           => $name_add,                    
        //             ":username"             => $username_add,
        //             ":passwordInsert"       => $password_add_hased,
        //             ":emailInsert"          => $email_add,
        //             ":phoneInsert"          => $phone_add,
        //             ":trust_status"         => $status_add
        //         ));
        //         echo 'success';
            echo 'success';
        }
        