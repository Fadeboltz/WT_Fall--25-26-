<DOCTYPE html>
<html>
<head>
    <title>
        Registration Form1
    </title>
</head>
<style>
    body {
        background-color: lightblue;
    }
    h1 
    {
        color: red;
        font family: Arial, Helvetica, sans-serif;
        font size : 20px;
    }

    
    .alwz
    {
        width: 500px;
        margin: auto;
        padding: 10px;
        background-color: white;
    }
</style>
<div class="alwz">
<body>

    <h1 allign ="left" style= "color:red; border-bottom: 3px solid red">Student Registration Form</h1>

    First name:<br>
    <input type="text" style="width:300px; height:20px; background-color: white; color: black ;" /> <br>
    Last name:<br>
    <input type="text" style="width:300px; height:20px;"  /> <br>
    Student ID:<br>
    <input type="number" style="width:300px; height:20px;" /> <br>
    Program/major:<br>
    <input type="dropbox" style="width:300px; height:20px;" /> <br>
    Department:<br>
    <input type="dropbox" style="width:300px; height:20px;" /> <br>
    Phone:<br>
    <input type="number" style="width:300px; height:20px;" /> <br>
    University email:<br>
    <input type="text" style="width:300px; height:20px;" /> <br>
    Create password (minimum 8 characters):<br>
    <input type="password" style="width:300px; height:20px;" /> <br>
    Confirm password:<br>
    <input type="password" style="width:300px; height:20px;" /> <br><br>

    Semester Selection:
    <input type="radio"> Summer 2024
    <input type="radio"> Fall 2024
    <input type="radio"> Spring 2025 
    <input type="radio"> Other/Special Terms <br><br>

    Requested Credit Load (Max 15 credits):<br>
    <input type="number" style="width:300px; height:20px;"  /> <br><br>

    <input type="checkbox"> I require academic advising before final registration<br>

    <h1 allign ="left" style= "color:red; border-bottom: 3px solid red">Course Selection:</h1>
    <input type="checkbox"> Math 1201 (Calculus 1)
    <input type="checkbox"> CS 2105 (Data Structres)
    <input type="checkbox"> ECON 1001 (Microeconomics)
    <input type="checkbox"> PHY 1102 (Physcs lab)<br><br>

    Comments/ Special Requests:<br>
    <input type="text" style="width:300px; height:100px;" /><br><br>

    <center>
        <input type="submit" style="width:100px; height:30px; background-color: lightgreen; color: black ;" /> 
        <input type="reset" style="width:100px; height:30px; background-color: lightcoral; color: black ;" />
    </center>


