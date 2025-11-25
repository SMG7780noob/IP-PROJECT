<?php

?>
<div class="navbar">
    <div class="dropdown">
        <a href="index.php" class="dropbtn">About Us</a>
        <div class="dropdown-content">
            <a href="discover.php">Discover SIWS</a>
            <a href="apex_body.php">Apex Body</a>
            <a href="advisory.php">Advisory</a>
            <a href="staff.php">Our Staff</a>
            <a href="revelations.php">Revelations</a>
            <a href="jubilations.php">Jubilations</a>
        </div>
    </div>

    <a href="academics.php">Academics</a>

    <div class="dropdown">
        <a href="admissions.php" class="dropbtn">Admissions</a>
        <div class="dropdown-content">
            <a href="prospectus.php">Prospectus</a>
            <a href="fee_structure.php">Fee Structure</a>
            <a href="flowchart.php">Admission Flowchart</a>
            <a href="preadmission.php">Pre-Admission and Admission</a>
            <a href="links.php">Links</a>
            <a href="schedule.php">Admission Schedule</a>
            <a href="merit_list.php">Merit List</a>
        </div>
    </div>

    <a href="amenities.php">Amenities</a>
    <a href="student_corner.php">Student Corner</a>
    <a href="contact.php">Contact Us</a>
    <a href="student_register.php">Student Register</a>
</div>

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
}

.navbar {
    background-color: #003366;
    overflow: visible;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    position: relative;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    z-index: 100;
}

.navbar a {
    color: white;
    padding: 16px 20px;
    text-decoration: none;
    display: block;
    text-align: center;
    transition: 0.3s;
    font-weight: 500;
}

.navbar a:hover {
    background-color: #0059b3;
}

.dropdown {
    position: relative;
}

.dropbtn {
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 220px;
    top: 100%;
    left: 0;
    box-shadow: 0px 4px 8px rgba(0,0,0,0.2);
    z-index: 999;
}

.dropdown-content a {
    color: #333;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    border-bottom: 1px solid #eee;
    font-weight: 500;
}

.dropdown-content a:hover {
    background-color: #f5f5f5;
    color: #0059b3;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.content {
    padding: 40px;
    text-align: center;
}
</style>
