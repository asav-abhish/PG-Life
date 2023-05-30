<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
    <style>
    body {
  background-color: #f5f5f5;
  font-family: Arial, sans-serif;
}

.container {
  width: 400px;
  margin: 0 auto;
  background-color: #fff;
  border-radius: 5px;
  padding: 20px;
  margin-top: 50px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.sign-h1{
  text-align: center;
  color: #333;
}

.sign-form{
  display: flex;
  flex-direction: column;
}

.sign-label{
  margin-top:10px;
  color: #333;
}

.sign-inp[type="text"],
.sign-inp[type="email"],
.sign-inp[type="password"] {
  padding: 10px;
  margin-top: 5px;
  margin-bottom: 15px;
  border-radius: 5px;
  border: none;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

.sign-button[type="submit"] {
  background-color: #333;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px;
  cursor: pointer;
  margin-top: 10px;
  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
}

.sign-button[type="submit"]:hover {
  background-color: #555;
}


    </style>
  </head>
  <body>
    <div class="container1">
      <h1 class="sign-h1">Sign Up</h1>
      <form class="sign-form" >
        <label class="sign-label" for="name">Name</label>
        <input class="sign-inp" type="text" id="name" name="name" required>

        <label class="sign-label" for="email">Email</label>
        <input class="sign-inp"  type="email" id="email" name="email" required>

        <label class="sign-label" for="password">Password</label>
        <input class="sign-inp" type="password" id="password" name="password" required>

        <button class="sign-button" type="submit">Sign Up</button>
      </form>
    </div>
  </body>
</html>
