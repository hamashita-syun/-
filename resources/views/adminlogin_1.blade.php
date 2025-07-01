
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <div class="prose mx-auto text-center pt-10">
        <h2 class="text-3xl font-bold">Log in</h2>
    </div>

    <div class="flex justify-center pt-10">
        <form id="loginForm" class="w-1/2 bg-white shadow-md rounded-lg p-8" onsubmit="handleLogin(event)">
            <div class="form-control my-4">
                <label for="email" class="label">
                    <span class="label-text font-semibold">Email</span>
                </label>
                <input type="email" id="email" class="input input-bordered w-full mb-4" placeholder="Enter your email" required>
            </div>

            <div class="form-control my-4">
                <label for="password" class="label">
                    <span class="label-text font-semibold">Password</span>
                </label>
                <input type="password" id="password" class="input input-bordered w-full mb-4" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn btn-primary btn-block normal-case bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Log in</button>
            <p id="message" class="mt-2 text-red-500 text-center"></p>
        </form>
    </div>

    <script>
function handleLogin(event) {
    event.preventDefault();

    const validEmail = "user@example.com";
    const validPassword = "password123";

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const messageElement = document.getElementById('message');

    if (email === validEmail && password === validPassword) {
        messageElement.textContent = "Login successful! Redirecting...";
        messageElement.classList.remove('text-red-500');
        messageElement.classList.add('text-green-500');
        sessionStorage.setItem('loggedIn1', 'true');

        window.location.href = '/congratulations1';
    } else {
        messageElement.textContent = "Invalid email or password.";
        messageElement.classList.remove('text-green-500');
        messageElement.classList.add('text-red-500');
    }
}
    </script>
</body>
</html>