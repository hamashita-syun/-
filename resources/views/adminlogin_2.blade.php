<div class="prose mx-auto text-center">
    <h2>Log in</h2>
</div>

<div class="flex justify-center">
    <form method="POST" action="" class="w-1/2">
        @csrf

        <div class="form-control my-4">
            <label for="email" class="label">
                <span class="label-text">Email</span>
            </label>
            <input type="email" name="email" class="input input-bordered w-full">
        </div>

        <div class="form-control my-4">
            <label for="password" class="label">
                <span class="label-text">Password</span>
            </label>
            <input type="password" name="password" class="input input-bordered w-full">
        </div>

        <button type="submit" class="btn btn-primary btn-block normal-case">Log in</button>

    </form>
</div>

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $valid_email = "user@example.com";
    $valid_password = "password123";

    if ($email === $valid_email && $password === $valid_password) {
        echo "Login successful! Welcome!";
    } else {
        echo "Invalid email or password.";
    }
}
?>