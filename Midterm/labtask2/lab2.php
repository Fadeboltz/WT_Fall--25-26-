<!DOCTYPE html>

<html>
<head>
    <title>Participant  Registration</title>
</head>
<style>
    body 
    {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color: #f0f8ff;
    }
    h1 
    {
      text-align: center;
      color: #003366;
    }
    .formpage
    {
        background-color: #ffffff;
        width: 500px;
        padding: 20px;
        margin: auto;
    }
    input
    {
        width: 480px;
        padding: 8px;
        margin-top: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
</style>
<body>

    
     <h1>Participant Registration Form</h1>
    <div class="formpage">
    Full Name: <br> 
    <input type="text" id="fullname"> <br> <br>

    Email:  <br>
    <input type="text" id="email"> <br> <br>

    Phone Number:  <br>
    <input type="number" id="phone"> <br> <br>

    Password :  <br>
    <input type="password" id="pass"> <br> <br>

    Confirm Password:  <br>
    <input type="password" id="confirmpass:"> <br><br>
    
    <button onclick="register()">Register</button>

    <div id="success"></div>

    </div>

<br> <br>
<div class="formpage">

    <h1>Activity Section</h1>

    Activity name: <br>
    <input type="text" id="activityinput"> <br> <br>

    <button onclick="addActivity()">Add Activity</button>

    <h1>Activities List</h1>
    <div id="activitylist"></div>
</div>
    
<script>

    function register()
    {
        let name = document.getElementById("fullname").value.trim();
        let email = document.getElementById("email").value.trim();
        let phone = document.getElementById("phone").value.trim();
        let pass = document.getElementById("pass").value.trim();
        let confirmpass = document.getElementById("confirmpass").value.trim();

        if(name === "" || email === "" || phone === "" || pass === "" || confirmpass === "")
        {
            alert("All fields are required!");
            return;
        }

        if(!email.includes("@"))
        {
            alert("Email must contain '@'");
            return;
        }

        if(isNaN(phone))
        {
            alert("Phone number must contain only digits!");
            return;
        }

        if(pass !== confirmpass)
        {
            alert("Passwords do not match!");
            return;
        }

        document.getElementById("success").innerHTML = ` 
        <strong>Registration Successful</strong><br>
        Name: ${name} <br>
        Email: ${email} <br>
        Phone: ${phone} `;
    }
    function addactivity()
    {
        let activityname =document.getElementbyId("activityinput").value.trim();
        
        if(activityname === "")
        {
            alert("Activity name cannot be empty!");
            return;
        }
    }