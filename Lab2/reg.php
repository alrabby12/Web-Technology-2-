<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Form Submission</title>
</head>
<body>
    
    <h1>Registration Form Submission</h1>
    
    <?php
    
    $firstName = isset($_POST['First_Name']) ? htmlspecialchars($_POST['First_Name']) : '';
    $lastName = isset($_POST['Last_Name']) ? htmlspecialchars($_POST['Last_Name']) : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    $fatherName = isset($_POST['Father_Name']) ? htmlspecialchars($_POST['Father_Name']) : '';
    $motherName = isset($_POST['Mother_Name']) ? htmlspecialchars($_POST['Mother_Name']) : '';
    $bloodType = isset($_POST['blood_type']) ? $_POST['blood_type'] : '';
    $religion = isset($_POST['religion']) ? $_POST['religion'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phoneMobile = isset($_POST['phone_mobile']) ? $_POST['phone_mobile'] : '';
    $website = isset($_POST['website']) ? $_POST['website'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';
    $division = isset($_POST['division']) ? $_POST['division'] : '';
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmPassword = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

    
    echo "<h2>Submitted Information:</h2>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Father's Name:</strong> $fatherName</p>";
    echo "<p><strong>Mother's Name:</strong> $motherName</p>";
    echo "<p><strong>Blood Type:</strong> $bloodType</p>";
    echo "<p><strong>Religion:</strong> $religion</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Phone/Mobile:</strong> $phoneMobile</p>";
    echo "<p><strong>Website:</strong> $website</p>";
    echo "<p><strong>Address:</strong> $address, $country, $division</p>";
    echo "<p><strong>Username:</strong> $username</p>";
  
    if ($password === $confirmPassword) {
        echo "<p>Passwords match. Registration successful!</p>";
        
    } else {
        echo "<p>Passwords do not match. Please try again.</p>";
    }
    ?>

    

</body>
</html>
