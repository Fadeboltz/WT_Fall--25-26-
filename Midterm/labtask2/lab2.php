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
    <input type="text" /> <br> <br>
    Email:  <br>
    <input type="text" /> <br> <br>
    Phone Number:  <br>
    <input type="number" /> <br> <br>
    Password :  <br>
    <input type="password" /> <br> <br>
    Confirm Password:  <br>
    <input type="password" /> <br><br>
    
    <button onclick="register()">Register</button>
    </div>
<br> <br>
<div class="formpage">
    <h1>Activity Section</h1>
    Activity name: <br>
    <input type="text" /> <br> <br>
    <button onclick="addActivity()">Add Activity</button>
</div>
    