<?php
session_start();

error_reporting(0);

// Database Connection 
$host = 'localhost:3306';  
$user = 'root';  
$pass = '';  
$dbname = 'assessdb';

$conn = mysqli_connect($host, $user, $pass,$dbname);  

if(! $conn )  
{  
  //die('Could not connect: ' . mysqli_error());
  $_SESSION["msgmode"] = "error";
  mysqli_close($conn);
  header("Location: /assess classes/?message='Database is not connected.'");  

}  
 





// Enquiry Variable

$mode = $_POST["mode"];

switch($mode){

    //  *** Enquiry Setting  ***
    case "enquiry":

        $ename   = $_POST["enquiryName"];
        $email   = $_POST["enquiryEmail"];
        $phone   = $_POST["enquiryPhone"];
        $course  = $_POST["enquiryCourse"];
        $message = $_POST["enquiryMessage"];

        $sql = 'INSERT INTO enquiryinfo(edate,ename,emailid,phoneno,course,message) VALUES (CURRENT_TIMESTAMP,"'.$ename.'","'.$email.'","'.$phone.'","'.$course.'","'.$message.'")';  
        if(mysqli_query($conn, $sql)){    
            
                // data put in .json file start   
                $myFile = "admin/js/subscriber.json";
                $arr_data = array();

                //Get form data
                $formdata = array(
                    'date'=> date('Y-m-d H:i:s'),
                    'email'=> $email
                );

                $jsondata = file_get_contents($myFile);
                $arr_data = json_decode($jsondata, true);
                array_push($arr_data,$formdata);

                $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
                file_put_contents($myFile, $jsondata);

                // end .json

            $_SESSION["msgmode"] = "success";
            mysqli_close($conn);
            echo '{"mode":"ok","msg":"Form as been Submit, We will get back to you as soon as possible."}';
        
        }else{  
           
            $_SESSION["msgmode"] = "error";
            mysqli_close($conn);
              
            echo '{"mode":"notok","msg":"Could not Submit your record due to tecnical problem."}';
        }  

        
        
    break;

    //  *** Login Setting  ***
    case "login":
        
        $uname = $_POST["loginName"];
        $upass = $_POST["loginPassword"];
        
        $sql = 'SELECT * FROM userlogin where uname = "'.$uname.'" AND upassword = "'.$upass.'"';
        
        $retval =  mysqli_query($conn, $sql); 
        
        if(mysqli_fetch_assoc($retval)['remark'] == "admin")
        {
            //   " Welcome to admin ";
            $_SESSION["activeuser"] = "admin";
            mysqli_close($conn);
            echo '{"mode":"ok"}';
        }else{
            mysqli_close($conn);
            echo '{"mode":"notok","msg":"Wrong UserName & Password."}';
        }
        
    break;

    //  *** Logout Setting  ***
    case "logout":
        unset($_SESSION["activeuser"]);
        header("Location: /assess classes/");
    break;

    //  *** changepassword Setting  ***
    case "changepassword":
        
        $oldpass = $_POST["oldpasstxt"];
        $newpass = $_POST["newpasstxt"];
        $confpass = $_POST["confirmpasstxt"];

        $sql = 'SELECT upassword FROM userlogin where upassword = "'.$oldpass.'"';
        $retval =  mysqli_query($conn, $sql); 
        if(count(mysqli_fetch_assoc($retval)) == 1){
            if($newpass == $confpass){
                $sql = 'UPDATE userlogin SET upassword = "'.$newpass.'"';
                if(mysqli_query($conn, $sql)){  
                    echo '{"mode":"ok","msg":"Password Changed Successfully."}';
                    mysqli_close($conn);
                    //header("Location: /assess classes/admin/index.php"); 
                }
            }else{
                echo '{"mode":"notok","msg":"New & Confirm Password does not match."}';
            }
        }else{
            echo '{"mode":"notok","msg":"Current Password is Wrong."}';
        }

    break;

    //  *** Subscriber Setting  ***
    case "subscriber":
        
        $newslet = $_POST["newsletter"];

        $myFile = "admin/js/subscriber.json";
        $arr_data = array();

        //Get form data
        $formdata = array(
            'date'=> date('Y-m-d H:i:s'),
            'email'=> $newslet
        );

        $jsondata = file_get_contents($myFile);
        $arr_data = json_decode($jsondata, true);
        array_push($arr_data,$formdata);

        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
        file_put_contents($myFile, $jsondata);

        header("Location: /assess classes/");

    break;
    //  *** SubscriberDelete Setting  ***
    case "subscriberdelete":
        
        $newslet = $_POST["rowno"];

        $myFile = "admin/js/subscriber.json";
        $arr_data = array();

        $jsondata = file_get_contents($myFile);
        $arr_data = json_decode($jsondata, true);

        unset($arr_data[$newslet-1]);
        $arr_data = array_values($arr_data);
        $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
        
        file_put_contents($myFile, $jsondata);

        echo '{"mode":"ok","msg":"Row as been deleted."}';
        //header("Location: /assess classes/admin/subscriber.php");

    break;
    //  *** EnquiryDelete Setting  ***
    case "enquirydelete":
        
        $newslet = $_POST["rowno"];


        // sql to delete a record
        $sql = "DELETE FROM enquiryinfo WHERE eid=".$newslet;
        if(mysqli_query($conn, $sql)){
            echo '{"mode":"ok","msg":"Row as been deleted."}';
        }else{
            echo '{"mode":"notok","msg":"There is Some Problem."}';
        }
        mysqli_close($conn);

       // header("Location: /assess classes/admin/enquirylist.php");

        
    break;


    
    default:
     echo "error in mode";
    break;
}
  


?>