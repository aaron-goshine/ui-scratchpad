<?php
$con = mysqli_connect("localhost","","","comments");

$stmt = $con->prepare("INSERT INTO comments(sectionId,
email,comment) VALUES (?, ?, ?)");
$stmt->bind_param('iss', $_REQUEST['sectionId'],
    $_REQUEST['authorName'],
    $_REQUEST['comment']);
$stmt->execute();
$stmt->close();