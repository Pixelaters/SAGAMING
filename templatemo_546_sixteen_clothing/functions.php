<?php

define ('USER_LEVEL_ADMIN', '1');

function check_login($con)
{
    if (isset($_SESSION['user_id'])) {
        $id = $_SESSION['user_id'];
        $query = "SELECT * FROM SAGaming WHERE user_id = '$id' LIMIT 1";

        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //redirect to login
    header("Location: signin.php");
    die;
}

function random_nu($length){
$text = "";
if($length<5){
$length = 5;
}

$len = rand(4,$length);
for($i=0; $i < $len; $i++ ){
    $text .= rand(0,9);

}
return $text;
}

//function isAdmin($con) {
    // if ( isset( $_SESSION['user_info'] ) && $_SESSION['user_info'] && USER_LEVEL_ADMIN == $_SESSION['user_info']['user_level'] ) {
    //     return true;
    // } else {
    //     return false;
    // }




    // $id = $_SESSION['user_id'];
    // $query = "select user_level from users where user_id = '$id' limit 1";
    // $result = mysqli_query($con, $query);
    // $user_data = mysqli_fetch_assoc($result);
    // if ( $user_data == USER_LEVEL_ADMIN ) {
    //     return true;
    // } else {
    //     return false;
    // }

    // $_SESSION['user_level']= $user_level; //this should be a field in DB for each user
    // //============Add other codes that needs no Admin rights==========
    // //If this page needs admin access then put this code
    // if( $_SESSION['user_level']==1){
    //     echo "Karibu Mr. Admin!";
    // }
    // else{
    //     echo "Acess denied: Hauruhusiwi Kuingia eneo hili!";
    // }

    

//}

function isAdmin()
{
    

	if (isset($_SESSION['user_data']) && $_SESSION['user_data']['user_level'] == '1' ) {
		return true;
	}else{
		return false;
	}
}
