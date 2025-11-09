<?php
//to get js alert
function alert($text){
    echo "<script>alert(\"$text\");</script>";
}
//to go to locaton
function redirect_to($path){
    echo "<script>location=\"$path\";</script>";
}
//confirming right to visit
function confirm_user($user){
    if(strtolower($_SESSION['user_type']) != strtolower("$user")){
        alert("Un-Autherize Access");
        redirect_to("index.php");
    }    
}
//confirming log in
function confirm_logged_in(){
    if(isset($_SESSION['user_type'])){
        return true;
    }else{
        alert("Login Required.");
        redirect_to("login.php");
    }
}
//confirmin nt login
function confirm_not_logged_in(){
    if(isset($_SESSION['user_type'])){
        redirect_to("index.php");
    }
}
//index to user penal
function index_func(){
    if(isset($_SESSION['user_type'])){
        $path=$_SESSION['user_type']."_penal.php";
        redirect_to($path);
    }    
}
function get_safe_value($link,$str){
	if($str!=''){
		$str=trim($str);
		return mysqli_real_escape_string($link,$str);
	}
}
            //delete mail 
            function deletmail($link,$id){
                $rtSql = "delete from contactus where cont_id='$id' ";
                $resultrtSql = mysqli_query($link, $rtSql);
                 
                alert(" mail delete successfuly.");
                  
                   redirect_to("manage_mail.php");
                } 
                
// delete child enrollment from admin panel


function deletchildenrollment($link,$id){
    $rtSql = "delete from child_enroll where childenroll_id='$id' ";
    $resultrtSql = mysqli_query($link, $rtSql);
     
    alert(" Enrollment delete successfuly.");
      
       redirect_to("manage_enrollment.php");
    } 
    // delete user 

    function deletuser($link,$id){
        $rtSql = "delete from user where user_id='$id' ";
        $resultrtSql = mysqli_query($link, $rtSql);
         
        alert(" user delete successfuly.");
          
           redirect_to("manage_user.php");
        } 

        // delete services

        function deletservices($link,$id){
            $rtSql = "delete from services where service_id='$id' ";
            $resultrtSql = mysqli_query($link, $rtSql);
             
            alert(" service delete successfuly.");
              
               redirect_to("manage_services.php");
            }
            
            
            // delete babysitter 

            function deletbabysitter($link,$id){
                $rtSql = "delete from babysitter where babysitter_id='$id' ";
                $resultrtSql = mysqli_query($link, $rtSql);
                 
                alert(" babysitter delete successfuly.");
                  
                   redirect_to("manage_babysitter.php");
                }
                // delete babysitter schedule 

                   
            // delete babysitter 

            function deletschedule($link,$id){
                $rtSql = "delete from babysitter_schedule where schd_id='$id' ";
                $resultrtSql = mysqli_query($link, $rtSql);
                 
                alert(" babysitter schedule delete successfuly.");
                  
                   redirect_to("babysitter_schedule.php");
                }
// count users

 function getuser($link){
	$rtSql = "Select * from user";
    $resultrtSql = mysqli_query($link, $rtSql);
    $arr = array();
    if(mysqli_num_rows($resultrtSql))
        while($row = mysqli_fetch_assoc($resultrtSql))
            $arr[] = $row;
       // $routeJson = json_encode($arr);
	   return $arr;
	}

    // count pending enrollment
	function pendingreq($link){
$ctSql = "Select * from child_enroll where status='Pending' ";
    $resultctSql = mysqli_query($link, $ctSql);
    $arr = array();
    if(mysqli_num_rows($resultctSql))
        while($row = mysqli_fetch_assoc($resultctSql))
            $arr[] = $row;
    return $arr;
	}
	function approve($link){
	$stSql = "Select * from child_enroll where status='accepted' ";
    $resultstSql = mysqli_query($link, $stSql);
    $arr = array();
    if(mysqli_num_rows($resultstSql))
        while($row = mysqli_fetch_assoc($resultstSql))
            $arr[] = $row;
    return $arr;
	}

    //  count rejected enrollment
    function rejected($link){
        $stSql = "Select * from child_enroll where status='rejected' ";
        $resultstSql = mysqli_query($link, $stSql);
        $arr = array();
        if(mysqli_num_rows($resultstSql))
            while($row = mysqli_fetch_assoc($resultstSql))
                $arr[] = $row;
        return $arr;
        }

        // count services
        function countservices($link){
            $stSql = "Select * from services";
            $resultstSql = mysqli_query($link, $stSql);
            $arr = array();
            if(mysqli_num_rows($resultstSql))
                while($row = mysqli_fetch_assoc($resultstSql))
                    $arr[] = $row;
            return $arr;
            }
    // count babysitter

    function countbabysitter($link){
        $stSql = "Select * from babysitter";
        $resultstSql = mysqli_query($link, $stSql);
        $arr = array();
        if(mysqli_num_rows($resultstSql))
            while($row = mysqli_fetch_assoc($resultstSql))
                $arr[] = $row;
        return $arr;
        }
