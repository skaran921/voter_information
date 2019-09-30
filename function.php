<?php

// * getUserNameByID

function getUserNameByID($userID)
{
    include "./db.php";
    $sql = "SELECT firstName,lastName from users where user_id='$userID'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["firstName"] . " " . $row["lastName"];
    }
}

// * showUserName
function showUserName($userID)
{
    include "./db.php";
    $sql = "SELECT firstName,lastName from users where user_id='$userID'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["firstName"][0] . $row["lastName"][0];
    }
}



// * getTotalUsers
function getTotalUsers()
{
    include "./db.php";
    $sql = "SELECT count(*) as total from users";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["total"];
    }
}


// * totalFamilyHeadInfo
function totalFamilyHeadInfo()
{
    include "./db.php";
    $sql = "SELECT count(*) as total from family_head_info";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["total"];
    }
}


// * totalInActiveFamilyHeadInfo
function totalInActiveFamilyHeadInfo()
{
    include "./db.php";
    $sql = "SELECT count(*) as total from family_head_info WHERE status='InActive'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["total"];
    }
}

// * totalFamilyMemberInfo
function totalFamilyMemberInfo()
{
    include "./db.php";
    $sql = "SELECT count(*) as total from family_member_info";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["total"];
    }
}


// * totalTodaysEntry
function totalTodaysEntry()
{
    include "./db.php";
    $currentDate = date('Y-m-d');
    $sql = "SELECT count(*) as total from family_head_info WHERE DATE(create_date)='$currentDate' OR DATE(update_date)='$currentDate'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
        return $row["total"];
    }
}
