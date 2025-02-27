<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['agree'])) {
            header('Location: welcome.php'); 
            exit();
        } elseif (isset($_POST['disagree'])) {
            header('Location: login.php'); 
            exit();
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Privacy - DYCI Roadmap</title>
    <link rel="stylesheet" href="dprivacy.css">
</head>
<body>
    <div class="dycidp">
        <div class="head">
            <h1>Data Privacy Act for Dr. Yanga's College, Inc.</h1>
        </div>
        <div class="p1">
            Dr. Yanga's College, Inc. values the privacy and security of all personal data provided by students, faculty, staff, and other stakeholders. In compliance with the Data Privacy Act of 2012 (Republic Act No. 10173), 
            we ensure that all personal information collected is handled responsibly and transparently. 
            The data we collect is used exclusively for academic, administrative, and communication purposes, including enrollment, academic performance tracking, and institutional reporting.
        </div>
        <div class="p2">
            We are committed to safeguarding personal data through the implementation of strict security protocols to prevent unauthorized access, alteration, or misuse. Personal data will not be shared with third parties without the consent of the individual, except when required by law or regulatory authorities.
            Individuals have the right to access, correct, and request the deletion of their personal data in accordance with the Data Privacy Act. Dr. Yanga's College, Inc. takes all necessary steps to protect privacy and maintain compliance with data protection regulations.
        </div>
        <form method="POST">
            <div class="agreement">
                <div class="btnagree">
                    <button type="submit" name="agree">I Agree</button>
                </div>
                <div class="btndisagree">
                    <button type="submit" name="disagree">I Disagree</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
