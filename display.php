<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $address = htmlspecialchars($_POST['address']);
    $department = htmlspecialchars($_POST['department']);
    $roll = htmlspecialchars($_POST['roll']);
    echo "<div class='container'>
            <h2>Student Details</h2>
            <p><strong>Full Name:</strong> $first_name</p>
            <p><strong>Full Name:</strong> $last_name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone Number:</strong> $phone</p>
            <p><strong>Date of Birth:</strong> $dob</p>
            <p><strong>Address:</strong> $address</p>
            <p><strong>Department:</strong> $department</p>
            <p><strong>Roll Number:</strong> $roll</p>
          </div>";
}