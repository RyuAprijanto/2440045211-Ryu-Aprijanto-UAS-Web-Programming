<h1>Amazing E-Grocery</h1>
<a href="/home">Home</a>
<nav class="navbar">
    <ul>
        @auth
            @if (Auth::user()->role_id == '1')
            <li><a class="roleName">Admin</a>
                <ul id="dropdown">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/myCart">Cart</a></li>
                    <li><a href="/updateProfile/{{ $user->id }}">Profile</a></li>
                    <li><a href="/accMaintainance">Account Maintainance</a></li>
                    <li>
                        <form action="/logout" method="post">
                        @csrf
                        <button type="submit"><a>Logout</a></button>
                        </form>
                    </li>
                </ul>
            </li>
            <!-- User -->
            @elseif (Auth::user()->role_id == '2')

            <li><a class="roleName">User</a>
                <ul id="dropdown">
                    <li><a href="/home">Home</a></li>
                    <li><a href="/myCart">Cart</a></li>
                    <li><a href="/updateProfile/{{ $user->id }}">Profile</a></li>
                    <li>
                        <form action="/logout" method="post">
                        @csrf
                        <button type="submit"><a>Logout</a></button>
                        </form>
                    </li>
                </ul>
            </li>
            @endif
        @endauth
        @guest
            <!-- Guest -->
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>
        @endguest
    </ul>
</nav>
