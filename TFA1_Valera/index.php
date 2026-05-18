<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Online Resume</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
  $firstname = 'Cedrick Nicolas';
  $middleinitial = 'C.';
  $lastname = 'Valera';
  $fullname = $firstname . ' ' . $middleinitial . ' ' . $lastname;

  $job_title = 'Junior Web & Application Developer';

  $address = 'Blk 80, Lot 64 Florante at Laura St., Lagro Quezon City, Metro Manila';
  $phone = '09199832828';
  $email = 'cedrickvalera@yahoo.com';
  $profile_img = 'https://paraverse.feutech.edu.ph/briefcase/assets/images/avatars/T2024/MD-T202410110.jpg';

  $professional_summary = 'Motivated and detail-oriented Information Technology student at FEU Institute of Technology, specializing in Web and Mobile Application Development. Holds three active Certiport IT Specialist certifications in JavaScript, Python, and Java — demonstrating validated, industry-recognized technical competency ahead of graduation. Experienced in building web applications using HTML, CSS, JavaScript, and PHP. Brings strong time-management, strategic planning, and multilingual communication skills, with a track record of initiative shown through participation in national-level design events and professional development seminars.';

  $school1 = 'FEU Institute of Technology';
  $year1 = '2024-2028';
  $degree1 = 'BS in Information Technology (Web and Mobile Application)';

  $school2 = 'UST Angelicum College';
  $year2 = '2022-2024';
  $degree2 = 'Senior High School (TVL ICT Programming)';

  $school3 = 'School of St. Anthony';
  $year3 = '2018-2022';
  $degree3 = 'Junior High School';

  $school4 = 'Mercedarian School';
  $year4 = '2009-2018';
  $degree4 = 'Elementary';

  $seminar1 = 'Design Thinking Summit and iTam Design Jam 2026 - FEU Institute of Technology | Participated in collaborative product ideation and UX design challenge alongside industry practitioners.';
  $seminar2 = 'Pre-Immersion Seminar 2024 - UST Angelicum College | Completed industry-readiness orientation in preparation for technical immersion program.';
  $seminar3 = '"Developing a Professional Person Within You" - UST Angelicum College | Completed professional development seminar focused on workplace behavior and career readiness.';

  $skill_lang1 = 'Java';
  $skill_lang2 = 'Python';
  $skill_lang3 = 'JavaScript';

  $skill_web1 = 'HTML & CSS';
  $skill_web2 = 'PHP (Server-side scripting)';

  $skill_tool1 = 'Microsoft Word';
  $skill_tool2 = 'Microsoft Excel';
  $skill_tool3 = 'Microsoft PowerPoint';

  $skill_soft1 = 'Strategic Planning and Scheduling';
  $skill_soft2 = 'Time-Management Skills';
  $skill_soft3 = 'Fluent in English and Filipino';

  $cert1_title = 'IT Specialist - JavaScript';
  $cert1_issuer = 'Certiport';
  $cert1_date = 'March 24, 2026 - March 24, 2031';

  $cert2_title = 'IT Specialist - Python';
  $cert2_issuer = 'Certiport';
  $cert2_date = 'March 08, 2026 - March 09, 2031';

  $cert3_title = 'IT Specialist - Java';
  $cert3_issuer = 'Certiport';
  $cert3_date = 'November 24, 2025 - November 25, 2030';

  $ref1_name = 'Kenneth Decena';
  $ref1_email = 'tristanph@gmail.com';
  $ref1_contact = '09976022644';

  $ref2_name = 'Ryan John Belisario';
  $ref2_email = 'rjgbelisario104@gmail.com';
  $ref2_contact = '09161293485';

  $ref3_name = 'Dr. Ma. Imelda S. Santos';
  $ref3_contact = '09174332966';
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
          <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
        </p>
      </div>
    </div>

    <div class="section">
      <h2>Professional Summary</h2>
      <p><?php echo $professional_summary; ?></p>
    </div>

    <div class="section">
      <h2>Technical Skills</h2>
      <div class="skills-grid">
        <div class="skill-group">
          <p class="skill-cat">Programming Languages</p>
          <ul>
            <li><?php echo $skill_lang1; ?></li>
            <li><?php echo $skill_lang2; ?></li>
            <li><?php echo $skill_lang3; ?></li>
          </ul>
        </div>
        <div class="skill-group">
          <p class="skill-cat">Web Technologies</p>
          <ul>
            <li><?php echo $skill_web1; ?></li>
            <li><?php echo $skill_web2; ?></li>
          </ul>
        </div>
        <div class="skill-group">
          <p class="skill-cat">Productivity Tools</p>
          <ul>
            <li><?php echo $skill_tool1; ?></li>
            <li><?php echo $skill_tool2; ?></li>
            <li><?php echo $skill_tool3; ?></li>
          </ul>
        </div>
        <div class="skill-group">
          <p class="skill-cat">Professional Skills</p>
          <ul>
            <li><?php echo $skill_soft1; ?></li>
            <li><?php echo $skill_soft2; ?></li>
            <li><?php echo $skill_soft3; ?></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="section">
      <h2>Certifications</h2>
      <ul>
        <li><strong><?php echo $cert1_title; ?></strong> — Issued by <?php echo $cert1_issuer; ?> | <?php echo $cert1_date; ?></li>
        <li><strong><?php echo $cert2_title; ?></strong> — Issued by <?php echo $cert2_issuer; ?> | <?php echo $cert2_date; ?></li>
        <li><strong><?php echo $cert3_title; ?></strong> — Issued by <?php echo $cert3_issuer; ?> | <?php echo $cert3_date; ?></li>
      </ul>
    </div>

    <div class="section">
      <h2>Education</h2>
      <ul>
        <li><strong><?php echo $school1; ?></strong><br><?php echo $year1; ?> - <?php echo $degree1; ?></li>
        <li><strong><?php echo $school2; ?></strong><br><?php echo $year2; ?> - <?php echo $degree2; ?></li>
        <li><strong><?php echo $school3; ?></strong><br><?php echo $year3; ?> - <?php echo $degree3; ?></li>
        <li><strong><?php echo $school4; ?></strong><br><?php echo $year4; ?> - <?php echo $degree4; ?></li>
      </ul>
    </div>

    <div class="section">
      <h2>Professional Development</h2>
      <ul>
        <li><?php echo $seminar1; ?></li>
        <li><?php echo $seminar2; ?></li>
        <li><?php echo $seminar3; ?></li>
      </ul>
    </div>

    <div class="section">
      <h2>Character References</h2>
      <ul>
        <li>
          <strong><?php echo $ref1_name; ?></strong><br>
          Email: <?php echo $ref1_email; ?><br>
          Contact: <?php echo $ref1_contact; ?>
        </li>
        <li>
          <strong><?php echo $ref2_name; ?></strong><br>
          Email: <?php echo $ref2_email; ?><br>
          Contact: <?php echo $ref2_contact; ?>
        </li>
        <li>
          <strong><?php echo $ref3_name; ?></strong><br>
          Contact: <?php echo $ref3_contact; ?>
        </li>
      </ul>
    </div>

  </div>

</body>
</html>