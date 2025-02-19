<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
        /* Background Styling */
        body {
        background: #000;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }

      /* Form Container */
      .form-container {
        max-width: 400px;
        background: #54101d; /* Dark Red */
        padding: 30px;
        border-radius: 12px;
        border: 2px solid #b18653; /* Gold Border */
        box-shadow: 0px 5px 15px rgba(255, 215, 0, 0.3);
      }

      /* Form Header */
      .form-container h3 {
        color: #b18653; /* Gold */
        font-weight: bold;
        text-align: center;
      }

      /* Input Field Styling */
      .form-control {
        background-color: #312229; /* Dark Brown */
        border-radius: 8px;
        border: 1px solid #b18653; /* Gold */
        color: white;
      }
      .form-control::placeholder {
        color: #d5c5ae; /* Light Beige */
      }

      /* Buttons */
      .btn-login {
        background-color: #b18653; /* Gold */
        border: none;
        color: black;
        width: 100%;
      }
      .btn-login:hover {
        background-color: #d5c5ae; /* Lighter Gold */
      }

      .btn-cancel {
        background-color: #8b0000; /* Deep Red */
        border: none;
        color: white;
        width: 100%;
      }
      .btn-cancel:hover {
        background-color: #a52a2a; /* Lighter Red */
      }


</style></head>
<body>
    <div class="form-container">
        <h3>Login</h3>
        <form method="POST" action="/login">
            @csrf()
            <div class="mb-3">
                <label for="username" class="form-label text-white">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <div class="d-flex gap-2">
                <button type="button" class="btn btn-cancel">Cancel</button>
                <button type="submit" class="btn btn-login">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
