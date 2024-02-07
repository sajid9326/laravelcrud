@extends("master")
@section("dynamic")
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <style>
    .swal-text {
      color: #000 !important;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      /* background: url("https://t4.ftcdn.net/jpg/02/40/63/55/360_F_240635575_EJifwRAbKsVTDnA3QE0bCsWG5TLhUNEZ.jpg");
  overflow: hidden; */
      background-color: #f2f2f2;
    }

    ::selection {
      background: rgba(26, 188, 156, 0.3);
    }

    .container {
      max-width: 440px;
      padding: 0 20px;
      margin: 170px auto;
    }

    .wrapper {
      width: 100%;
      background: #fff;
      border-radius: 5px;
      box-shadow: 0px 4px 10px 1px rgba(0, 0, 0, 0.1);
      margin-top: -20%;
    }

    .wrapper .title {
      height: 90px;
      background: #9F5635;
      border-radius: 5px 5px 0 0;
      color: #fff;
      font-size: 30px;
      font-weight: 600;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .wrapper form {
      padding: 30px 25px 25px 25px;
    }

    .wrapper form .row {
      height: 45px;
      margin-bottom: 15px;
      position: relative;
    }

    .wrapper form .row input {
      height: 100%;
      width: 100%;
      outline: none;
      padding-left: 60px;
      border-radius: 5px;
      border: 1px solid lightgrey;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    form .row input:focus {
      border-color: #9F5635;
      box-shadow: inset 0px 0px 2px 2px rgba(26, 188, 156, 0.25);
    }

    form .row input::placeholder {
      color: #999;
    }

    .wrapper form .row i {
      position: absolute;
      width: 47px;
      height: 100%;
      color: #fff;
      font-size: 18px;
      background: #D98308;
      border: 1px solid #D98308;
      border-radius: 5px 0 0 5px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .wrapper form .pass {
      margin: -8px 0 20px 0;
    }

    .wrapper form .pass a {
      color: #9F5635;
      font-size: 17px;
      text-decoration: none;
    }

    .wrapper form .pass a:hover {
      text-decoration: underline;
    }

    .wrapper form .button input {
      color: #fff;
      font-size: 20px;
      font-weight: 500;
      padding-left: 0px;
      background: #9F5635;
      border: 1px solid #9F5635;
      cursor: pointer;
    }

    form .button input:hover {
      background: #12876f;
    }

    .wrapper form .signup-link {
      text-align: center;
      margin-top: 20px;
      font-size: 17px;
    }

    .wrapper form .signup-link a {
      color: #9F5635;
      text-decoration: none;
    }

    form .signup-link a:hover {
      text-decoration: underline;
    }

    textarea {
      height: 100%;
      width: 100%;
      outline: none;
      padding-left: 60px;
      border-radius: 5px;
      border: 1px solid lightgrey;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    .select-deign {
      width: 100%;
      height: 100%;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="wrapper">
      <div class="title"><span>Add Employee details</span></div>

      <form action="add" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" name="name" class="form-control" required placeholder="Name">
        </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" name="email" class="form-control" required placeholder="Email">
        </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="file" name="image" class="form-control" required placeholder="upload image">
        </div>
        <div class="row">
          <i class="fas fa-user"></i>
          <select name="designation" id="designation" class="form-control select-deign" required>
            <option value="" disabled selected>Designation</option>
            <option value="Team">Team</option>
            <option value="SoftwareEngineer">Software Engineer</option>
            <option value="TeamLeader">Team Leader</option>
            <option value="Manager">Manager</option>

          </select>
        </div>

        <div class="row button">
          <input type="submit" value="Add" name="submit">
        </div>
      </form>


    </div>
  </div>

</body>

</html>
@endsection