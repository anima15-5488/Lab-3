<form action="insert.php" method="post">
    <!-- Existing fields -->
    <label for="name">Name:</label><br />
    <input type="text" id="name" name="name" required><br /><br />

    <label for="email">Email:</label><br />
    <input type="email" id="email" name="email" required><br /><br />

    <label for="age">Age:</label><br />
    <input type="number" id="age" name="age" required min="0"><br /><br />

    <label for="address">Address:</label><br />
    <input type="text" id="address" name="address" required><br /><br />

    <label for="mobile_number">Mobile Number:</label><br />
    <input type="tel" id="mobile_number" name="mobile_number" required pattern="[0-9]{10,15}" title="Enter a valid mobile number"><br /><br />

    <!-- New Gender Radio Buttons -->
    <label>Gender:</label><br />
    <input type="radio" id="male" name="gender" value="Male" required>
    <label for="male">Male</label><br />
    <input type="radio" id="female" name="gender" value="Female" required>
    <label for="female">Female</label><br />
    <input type="radio" id="other" name="gender" value="Other" required>
    <label for="other">Other</label><br /><br />

    <!-- CSE Courses Radio Buttons -->
    <label>Assigned Course:</label><br />
    <input type="radio" id="cse1" name="course" value="Computer Networks" required>
    <label for="cse1">Computer Networks</label><br />
    <input type="radio" id="cse2" name="course" value="Data Structures" required>
    <label for="cse2">Data Structures</label><br />
    <input type="radio" id="cse3" name="course" value="Operating Systems" required>
    <label for="cse3">Operating Systems</label><br />
    <input type="radio" id="cse4" name="course" value="Database Systems" required>
    <label for="cse4">Database Systems</label><br />
    <input type="radio" id="cse5" name="course" value="Software Engineering" required>
    <label for="cse5">Software Engineering</label><br /><br />

    <input type="submit" value="Submit">
</form>
