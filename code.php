<?php
session_start();
include 'dbcon.php';



if(isset($_POST['update_records'])){
    
    $Sname = $_POST['studentName'];
    $Sage = $_POST['studentAge'];
    $Semail = $_POST['studentEmail'];
    $Scourse = $_POST['studentCourse'];

    $key_child = $_POST['key_child'];

    

    $updateData = [
        'name' => $Sname,
        'age' => $Sage,
        'email' => $Semail,
        'course' => $Scourse
    ];


    $ref_table = 'details/'.$key_child;
    $updateRef_results = $database->getReference($ref_table)->update($updateData);
 

    if($updateRef_results){

        $_SESSION['status'] = "Record Updated Successfully";
        header("Location: index.php");

        }else{
        $_SESSION['status'] = "Record Not Added";
            header("Location: index.php");
        }



}

if(isset($_POST['add_records'])){

    $Sname = $_POST['studentName'];
    $Sage = $_POST['studentAge'];
    $Semail = $_POST['studentEmail'];
    $Scourse = $_POST['studentCourse'];



    $postData = [
    'name' => $Sname,
    'age' => $Sage,
    'email' => $Semail,
    'course' => $Scourse
];

$ref_table = 'details';

$postRef_results = $database->getReference($ref_table)->push($postData);

if($postRef_results){

    $_SESSION['status'] = "Record Added Successfully";
    header("Location: index.php");
}else{
    $_SESSION['status'] = "Record Not Added";
    header("Location: addrecord.php");
}


    
}



// Delete Record

if(isset($_GET['delete'])){
    $del_key = $_GET['delete'];

    echo $del_key;

    $ref_table = 'details/'.$del_key;
    $deleteRef_results = $database->getReference($ref_table)->remove();


    if($deleteRef_results){

        $_SESSION['status'] = "Record Deleted Successfully";
        header("Location: index.php");

    }else{
        $_SESSION['status'] = "Record Not Deleted";
        header("Location: index.php");
    }
}



?>