<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body>
<h2>Admin Login</h2>

<form action="{{ route('admin.login') }}" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
    </div>

    <button type="submit">Login</button>

    @if ($errors->any())
        <div>
            <p>{{ $errors->first('email') }}</p>
        </div>
    @endif
</form>
</body>
</html>
