<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>@yield('title')</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <style>
          body {
               background-color: #f1f1f1;
          }
          .container {
               display: flex;
               justify-content: center;
               align-items: center;
               height: 100vh;
          }
          .card {
               width: 400px;
               padding: 20px;
               border-radius: 5px;
               background-color: #ffffff;
               box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
          }
          h4 {
               text-align: center;
               margin-bottom: 20px;
               color: #333333;
          }
          .form-group label {
               color: #333333;
               font-weight: bold;
          }
          .form-group input {
               border: 1px solid #cccccc;
               border-radius: 3px;
               padding: 8px;
               width: 100%;
          }
          .form-group button {
               margin-top: 10px;
               background-color: #007bff;
               color: #ffffff;
               border: none;
               padding: 10px 20px;
               border-radius: 3px;
               cursor: pointer;
          }
          .form-group a {
               color: #007bff;
               text-decoration: none;
          }
          .alert {
               margin-top: 10px;
          }
          .text-danger {
               color: #dc3545;
          }

          @media (max-width: 576px) {
               .card {
                    width: 100%;
                    box-shadow: none;
               }
          }
     </style>
</head>
<body>
     <div class="container">
          <div class="card">
               <h4>New User Registration</h4>
               <hr>
               <form action="{{ route('register-user') }}" method="post">
                    @csrf
                    @if (Session::has('success'))
                         <div class="alert alert-success">{{ Session::get('success') }} <a href="login">Login Now</a></div> 
                    @endif
                    @if (Session::has('fail'))
                         <div class="alert alert-success">{{ Session::get('fail') }}</div>
                    @endif

                    <div class="form-group">
                         <label for="fullname">Fullname</label>
                         <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                         <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                         <label for="email">Email</label>
                         <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                         <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" name="password" value="{{ old('password') }}" class="form-control">
                         <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                    </div>
                    <div class="form-group">
                         <button class="btn btn-primary" type="submit">Register</button>
                         Already have an account? -> <a href="login">Login</a>
                    </div>
               </form>
          </div>
     </div>

     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
