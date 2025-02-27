<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['agree'])) {
        header('Location: dprivacy.php');
        exit();
    } elseif (isset($_POST['decline'])) {
        header('Location: login.php');
        exit();
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="conforme.css">
    <title>Conforme - DYCI Roadmap</title>
</head>
<body>
    <div class="dycilogo">
        <img src="dyci-logo.png" alt="DYCI Logo">
    </div>
    <div class="conform">
        <div class="content-conforme">
            <div class="title">
                <h1>CONFORME</h1>
            </div>
            <div class="certify">
                <p>This is to certify that I have read the contents of</p>
            </div>
            <div class="system-title">
                <h3>THE DYCIAN LEARNING ROAD MAP</h3>
            </div>
            <div class="p1message">
                <p>and I agree to abide by the rules and regulations, data privacy,
                    and quality statement set by Dr. Yanga’s Colleges, Inc (DYCI)
                    as here in stipulated</p>
            </div>
            <div class="p2message">
                <p>As a Student of Dr. Yanga Colleges, Inc.,
                    I promise to do my best to be a responsible and self-directed
                    individual embodying the DYCIan values expected of me.</p>
            </div>
            <form method="POST">
                <div class="signatory">
                    <div class="btnagree">
                        <button type="submit" name="agree">I Agree</button>
                    </div>
                    <div class="btndecline">
                        <button type="submit" name="decline">I Decline</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>