<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
<h2>Welcome, {{ Auth::guard('admin')->user()->name }}!</h2>
<a href="{{ route('admin.logout') }}">Logout</a>

<!-- Host approval section -->
<h3>Pending Host Users</h3>
@if($hosts->isEmpty())
    <p>No pending host users.</p>
@else
    <ul>
        @foreach ($hosts as $host)
            <li>
                {{ $host->name }} - <a href="{{ route('admin.approve.host', $host->id) }}">Approve</a>
            </li>
        @endforeach
    </ul>
@endif
</body>
</html>
