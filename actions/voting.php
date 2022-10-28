<?php
session_start();
include('connect.php');
$votes=$_POST['groupvotes'];
$totalvotes=$votes+1;
$gid=$_POST['groupid'];
$uid=$_SESSION['id'];
$updatesvotes=mysqli_query($con,"update `userdata` set votes='$totalvotes' where id='$gid'");
$updatestatus=mysqli_query($con,"update `userdata` set status=1 where id='$uid'");

if($updatesvotes and $updatestatus){
$getgroups=mysqli_query($con,"Select username,photo,votes,id from 'userdata' where standard='group'");
$_SESSION['status']=1;
$_SESSION[' groups']=$groups;
echo'<script>
    alert("Voting successful");
    window.location="../partials/dashboard.php";
    </script>';
}
else{
    echo'<script>
    alert("tech error!! vote after sometime");
    window.location="../partials/dashboard.php";
    </script>';
}
?>