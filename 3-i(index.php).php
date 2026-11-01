<?php session_start(); ?>

<html>
<head>
    <title>Complaint Form</title>
    <script src="valid.js"></script>
</head>
<body>

<h1>Complaint Form</h1>

<form name="comp" method="post"
      action="result.php" onsubmit="return compValidate()">

    First Name:
    <input type="text" name="fname"><br><br>

    Last Name:
    <input type="text" name="lname"><br><br>

    Email:
    <input type="text" name="email"><br><br>

    Device:
    <select name="device">
        <option value="mobile">Mobile</option>
        <option value="tv">TV</option>
        <option value="computer">Computer</option>
        <option value="home">Home Electronics</option>
    </select><br><br>

    Is your device under warranty?<br>

    <input type="radio" name="warranty" value="yes"> Yes
    <input type="radio" name="warranty" value="no"> No

    <br><br>
    <button type="submit">Submit</button>

</form>

</body>
</html>
