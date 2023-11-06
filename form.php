<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Page Title</title>
  <style>
    body {
      background-color: #f4f4f4;
      font-family: 'Arial', sans-serif;
    }

    .card {
      background-color: #fff;
      border: 1px solid #ccc;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 700px;
      margin: auto;
      margin-top: 20px;
      text-align: center;
      padding: 20px;
      border-radius: 10px;
    }

    .title {
      color: #333;
      font-size: 24px;
      margin-bottom: 20px;
    }

    button {
      width: 50%;
      border: none;
      outline: 0;
      display: inline-block;
      padding: 10px;
      color: #fff;
      background-color: #007bff;
      text-align: center;
      cursor: pointer;
      font-size: 18px;
      margin-top: 20px;
      border-radius: 5px;
    }

    label {
      display: block;
      margin-top: 10px;
      color: #333;
      font-weight: bold;
    }

    .form-group {
      text-align: left;
      padding: 10px;
    }

    .radio-group,
    .checkbox-group {
      display: flex;
      align-items: center;
      margin-top: 10px;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    input[type="radio"],
    input[type="checkbox"] {
      margin-right: 5px;
    }

    a {
      text-decoration: none;
      font-size: 22px;
      color: #007bff;
    }

    button:hover,
    a:hover {
      opacity: 0.7;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1 class="title">USER DETAILS FORM</h1>
    <p>Enter Your Details</p>
    <form method="post">
      <div class="form-group">
        <label for="name">Full Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your full name">
      </div>
      <div class="form-group">
        <label>Gender:</label>
        <div class="radio-group">
          <input type="radio" name="gender" value="male" id="male">
          <label for="male">Male</label>
          &nbsp;
          <input type="radio" name="gender" value="female" id="female">
          <label for="female">Female</label>
          &nbsp;
          <input type="radio" name="gender" value="others" id="others">
          <label for="others">Others</label>
          &nbsp;
        </div>
      </div>
      <div class="form-group">
        <label for="email">Email Address:</label>
        <input type="text" name="email" id="email" placeholder="Enter your email address">
      </div>
      <div class "form-group">
        <label for="city">City:</label>
        <select name="city" id="city">
          <option value="nagpur">Nagpur</option>
          <option value="mumbai">Mumbai</option>
          <option value="delhi">Delhi</option>
          <option value="chennai">Chennai</option>
          <option value="jammu">Jammu</option>
          <option value="bangalore">Bangalore</option>
          <option value="bhilai">Bhilai</option>
          <option value="pune">Pune</option>
        </select>
      </div>
      <p><button type="submit">Submit</button></p>
    </form>
    <a href="index.html">Go To Previous</a>
  </div>
</body>
</html>
