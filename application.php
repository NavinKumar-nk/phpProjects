<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Computer Programmer Application</title>
</head>

<body>
    <form action="register.php" method="POST">
        <fieldset>
            <legend>
                <h2>REGISTRATION FORM</h2>
            </legend>
            <p class="about">Our Company organization is looking for an Computer Programmer to contribute the skills on one of our Web Development project as a PHP Developer on immediate request. Please enter your details here so that our team can contact you for further process.</p>
            <hr>

            <label for="name">Name of the Candiate:</label><br>
            <input type="text" id="name" name="name" placeholder="Plese enter your full name here.." required><br><br>

            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender">Male
            <input type="radio" id="female" name="gender">Female
            <input type="radio" id="others" name="gender">Others
            <input type="radio" id="prefer_not_to_say" name="gender">Prefer not to say!<br><br>

            <label for="dob">Date Of Birth:</label>
            <input type="date" id="dob" name="dob" required><br><br>

            <label for="address">Address:</label>
            <textarea name="address" id="address" cols="30" rows="4" placeholder="Please your full enter address here.." required></textarea><br><br>

            <label for="number">Mobile Number:</label>
            <input type="number" id="number" name="number" placeholder="Please enter your contact number here.." required><br><br>

            <label for="email">Email-ID:</label>
            <input type="email" id="email" name="email" placeholder="Please enter your email ID here.."><br><br>

            <label for="edu_quali">Education Qualification:</label>
            <select name="edu_quali" id="edu_quali">
                <option value="select">Please click here and select your Qualification</option>
                <option value="pg">Post Graduation</option>
                <option value="ug">Under Graduation</option>
                <option value="hs">Higher Secondary</option>
                <option value="ss">Senior Secondary</option>
                <option value="below">Below Primary</option>
            </select><br><br>

            <label for="id_proof">ID Proof Document:</label><br>
            <label for="doc_name">Document Name:</label>
            <input type="text" id="doc_name" name="doc_name" placeholder="Please enter document name here.."><br><br>
            <label for="doc_no">Document Number:</label>
            <input type="text" id="doc_no" name="doc_no" placeholder="Please enter document number here.."><br><br>

            <input type="submit" value="Submit & Register" id="sub_reg" name="sub_reg">
        </fieldset>
    </form>
    <br>
    <a href="view_data.php"><button style="width: 200px; height: 50px;">View Submitted Data</button></a>
</body>

</html>