<!DOCTYPE html>
<html>
<head>
    <title>Participant Registration</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f0f8ff;
        }

        h1 {
            text-align: center;
            color: #003366;
        }

        .form-box {
            background: white;
            width: 350px;
            padding: 20px;
            margin: auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        input, button {
            width: 100%;
            padding: 8px;
            margin-top: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        button {
            background-color: #003366;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #0055aa;
        }

        #success {
            margin-top: 15px;
            color: green;
        }

        #activitiesList div {
            background: #ffffff;
            margin-top: 8px;
            padding: 8px;
            border-radius: 6px;
            display: flex;
            justify-content: space-between;
            border: 1px solid #ccc;
        }

        .remove-btn {
            background: red;
            color: white;
            border: none;
            padding: 5px 8px;
            border-radius: 4px;
            cursor: pointer;
        }

        .remove-btn:hover {
            background: darkred;
        }
    </style>
</head>
<body>

    <h1>Participant Registration Form</h1>

    <div class="form-box">
        <label>Full Name:</label>
        <input type="text" id="fullname">

        <label>Email:</label>
        <input type="text" id="email">

        <label>Phone Number:</label>
        <input type="text" id="phone">

        <label>Password:</label>
        <input type="password" id="pass">

        <label>Confirm Password:</label>
        <input type="password" id="confirmPass">

        <button onclick="register()">Register</button>

        <div id="success"></div>
    </div>

    <br><br>

    <!-- Activity Selection -->
    <h1>Activity Selection</h1>

    <div class="form-box">
        <label>Activity Name:</label>
        <input type="text" id="activityInput">

        <button onclick="addActivity()">Add Activity</button>

        <h3>Selected Activities:</h3>
        <div id="activitiesList"></div>
    </div>

    <script>
        function register() {
            let name = document.getElementById("fullname").value.trim();
            let email = document.getElementById("email").value.trim();
            let phone = document.getElementById("phone").value.trim();
            let pass = document.getElementById("pass").value.trim();
            let confirmPass = document.getElementById("confirmPass").value.trim();

            if (name === "" || email === "" || phone === "" || pass === "" || confirmPass === "") {
                alert("All fields are required!");
                return;
            }

            if (!email.includes("@")) {
                alert("Email must contain '@'");
                return;
            }

            if (isNaN(phone)) {
                alert("Phone number must contain only digits!");
                return;
            }

            if (pass !== confirmPass) {
                alert("Passwords do not match!");
                return;
            }

            document.getElementById("success").innerHTML =
                ` 
                <strong>Registration Successful!</strong><br><br>
                Name: ${name}<br>
                Email: ${email}<br>
                Phone: ${phone}
                `;
        }

        function addActivity() {
            let activityName = document.getElementById("activityInput").value.trim();

            if (activityName === "") {
                alert("Activity name cannot be empty!");
                return;
            }

            let activitiesDiv = document.getElementById("activitiesList");

            let newDiv = document.createElement("div");

            newDiv.innerHTML = `
                ${activityName}
                <button class="remove-btn" onclick="this.parentElement.remove()">Remove</button>
            `;

            activitiesDiv.appendChild(newDiv);

            document.getElementById("activityInput").value = "";
        }
    </script>

</body>
</html>

