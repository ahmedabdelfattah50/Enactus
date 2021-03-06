<?php
 
// this the timer to return to main page after do any action like (add - delete - update)
function timer($seconds,$page) {
    echo "<p class='alert alert-warning'>Your will leave this page after " . $seconds . "s</p>";
    header("Refresh:" . $seconds . ";url=" . $page);
}

// the counter to calculate the number of Admins
/*function totalAdmins(){
    global $con;
    $stmt = $con->prepare("SELECT COUNT(*) FROM hosters");
    $stmt->execute();
    return $stmt->fetchColumn();
} */

// select Custom Admin
/*function selectCustomAdmin($status){
    global $con; 
    $stmt = $con->prepare("SELECT * FROM hosters WHERE trust_status = $status");
    $stmt->execute();
    return $stmt->fetchAll();
}*/

// check User Existing
/*function checkAdminExisting($username,$email){
    global $con; 
    $stmt = $con->prepare("SELECT * FROM hosters WHERE username = :username OR email = :email");
    $stmt->execute(array(
        ':username' => $username,
        ':email' => $email
    ));
    return $stmt->fetchColumn();
}*/

// return one Admin from hosters table from the database
/*function selectPersonalAdmin($id){
    global $con; 
    $stmt = $con->prepare("SELECT * FROM hosters WHERE ID = :id");
    $stmt->execute(array(
        ':id' => $id
    ));
    return $stmt->fetch(PDO::FETCH_ASSOC);
}*/

// selectHighBoard
function selectHighBoard(){
    global $con; 
    $stmt = $con->prepare("SELECT * FROM hosters WHERE position_name != :Member");
    $stmt->execute(array(
        ':Member' => "Member"
    ));
    return $stmt->fetchAll();
}

// selectCommities
function selectCommities(){
    global $con; 
    $stmt = $con->prepare("SELECT * FROM commity");
    $stmt->execute();
    return $stmt->fetchAll();
}

// selectUniversities
function selectUniversities(){
    global $con; 
    $stmt = $con->prepare("SELECT * FROM university");
    $stmt->execute();
    return $stmt->fetchAll();
}

// selectColleges
function selectColleges(){
    global $con; 
    $stmt = $con->prepare("SELECT * FROM college");
    $stmt->execute();
    return $stmt->fetchAll();
}

// selectPositions
function selectPositions(){
    global $con; 
    $stmt = $con->prepare("SELECT * FROM position");
    $stmt->execute();
    return $stmt->fetchAll();
}

// selectSeasons
function selectSeasons(){
    global $con; 
    $stmt = $con->prepare("SELECT * FROM season");
    $stmt->execute();
    return $stmt->fetchAll();
}