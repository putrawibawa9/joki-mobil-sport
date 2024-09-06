<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Register Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
        .switch {
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
          <?php if(isset($_GET)): ?>
                <p style="color : red">Username / Password salah</p>
                <?php endif; ?>
        <form id="loginForm" action="<?= BASEURL?>/auth/signin" method="post">
            <h2>Login</h2>
            <div class="form-group">
                <label for="loginEmail">Username:</label>
                <input name="username" type="text" id="loginEmail" required>
            </div>
            <div class="form-group">
                <label for="loginPassword">Password:</label>
                <input name="password" type="password" id="loginPassword" required>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="switch">
                <p>Don't have an account? <a href="#" onclick="toggleForm()">Register</a></p>
            </div>
        </form>

        <form action="<?= BASEURL?>/auth/register" method="post" id="registerForm" style="display: none;">
            <h2>Register</h2>
            <div class="form-group">
                <label for="registerName">Username:</label>
                <input name="username" type="text" id="registerName" required>
            </div>

            <div class="form-group">
                <label for="registerPassword">Password:</label>
                <input name="password" type="password" id="registerPassword" required>
            </div>

            <button type="submit" class="btn">Register</button>
            <div class="switch">
                <p>Already have an account? <a href="#" onclick="toggleForm()">Login</a></p>
            </div>
        </form>
    </div>

    <script>
        function toggleForm() {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            loginForm.style.display = loginForm.style.display === 'none' ? 'block' : 'none';
            registerForm.style.display = registerForm.style.display === 'none' ? 'block' : 'none';
        }
    </script>
</body>
</html>