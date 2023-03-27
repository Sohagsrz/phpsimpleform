<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="/check.php" method="post">
        <div>
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name" placeholder="Your name here" required> 
        </div>
        <div>
            <label for="email">Your Email</label>
            <input type="email" name="email" id="email" placeholder="Your email here" required>
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter a password" required>
        </div>

        <div>
            <label for="passwordc">Confirm Password</label>
            <input type="password" name="passwordc" id="passwordc" placeholder="Renter a password" required>
        </div>
        
        <div>
            <label for="division">Your Division</label>
            <select name="division" id="division" required>
                <option value="Dhaka">Dhaka</option>
                <option value="Barisal">Barisal</option>
                <option value="Chittagong">Chittagong</option>
                <option value="Khulna">Khulna</option>
                <option value="Mymensingh">Mymensingh</option>
                <option value="Rajshahi">Rajshahi</option>
                <option value="Rangpur">Rangpur</option>
                <option value="Sylhet">Sylhet</option>
            </select>
        </div>
        <div>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
        </div>

        <div>
            <label for="subjects">Subjects</label>
            <input type="checkbox" name="subjects[]" value="ip"> IP
            <input type="checkbox" name="subjects[]" value="dm"> DM
            <input type="checkbox" name="subjects[]" value="dc"> DC
            <input type="checkbox" name="subjects[]" value="eng01"> EN01
        </div>
        <div>
            <input type="submit" value="Register">
        </div>

        

    </form>
</body>
</html>