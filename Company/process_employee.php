<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 5/21/17
 * Time: 7:07 PM
 */
$first_name="";
$last_name="";
$age="";
$email="";
$password="";
$gender="";
$birth_day="";
$birth_month="";
$birth_year="";
$first_name_error="";
$last_name_error="";
$age_error="";
$email_error="";
$password_error="";
$gender_error="";
$birth_day_error="";
$birth_month_error="";
$birth_year_error="";
$records_complete=true;
function register(){
    if($_SERVER["REQUEST_METHOD"]==POST){
        $records_complete=true;
        if(empty($_POST["first_name"])){
            $first_name_error="First name required";
            $records_complete=false;
        }else{
            $first_name=$_POST["first_name"];
        }
        if(empty($_POST["first_name"])){
            $last_name_error="Last name required";
            $records_complete=false;
        }else{
            $last_name=$_POST["last_name"];
        }
        if(empty($_POST["age"])){
            $age_error="Age required";
            $records_complete=false;
        }else{
            $age=$_POST["age"];
        }
        if(empty($_POST["email"])){
            $email_error="Email required";
            $records_complete=false;
        }else{
            $email=$_POST["email"];
        }
        if(empty($_POST["gender"])){
            $gender_error="Select gender";
            $records_complete=false;
        }else{
            $gender=$_POST["gender"];
        }
        if(empty($_POST["birth_day"])){
            $birth_day_error="Birth day required";
            $records_complete=false;
        }else{
            $birth_day=$_POST["birth_day"];
        }
        if(empty($_POST["birth_month"])){
            $birth_month_error="Birth month required";
            $records_complete=false;
        }else{
            $birth_month=$_POST["birth_month"];
        }
        if(empty($_POST["birth_year"])){
            $birth_year_error="Birth year required";
            $records_complete=false;
        }else{
            $birth_year=$_POST["birth_year"];
        }

    }

}