<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user_data.php" method="POST">
    <label>Full Name</label> &nbsp;
    <input type="text" name="fname"><br><br>
      <span>Email</span> &nbsp;
    <input type="email" name="email" required><br><br>
     <span>Date of birth</span>
    <input type="date" name="date"><br><br>
      <span>Gender</span>&nbsp;
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
    </select><br><br>
      <span>Country</span>&nbsp;
    <input type="text" name="country"><br><br>
    &nbsp;<input type="submit" value ="submit">
    </form>
</body>
</html>