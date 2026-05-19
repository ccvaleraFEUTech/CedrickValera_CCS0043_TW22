<?php
$fullname = "Cedrick Nicolas C. Valera";
$job_title = "Junior Web & Application Developer";
$address = "Quezon City";
$phone = "09199832828";
$email = "cedrickvalera@yahoo.com";
$email2 = "cedrickvalera0305@gmail.com";
$profile_img = "https://paraverse.feutech.edu.ph/briefcase/assets/images/avatars/T2024/MD-T202410110.jpg";
?>

<div class="container">

<div class="profile">
    <img src="<?php echo $profile_img; ?>" alt="Profile Picture">
    <div>
        <h1><?php echo $fullname; ?></h1>
        <p class="job-title"><?php echo $job_title; ?></p>
        <p class="contact">
            <?php echo $address; ?><br>
            <?php echo $phone; ?><br>
            <?php echo $email; ?> | <?php echo $email2; ?>
        </p>
    </div>
</div>
