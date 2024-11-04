<div>
    <h1>Login Form </h1>
    <form method="POST" name="login" action="/formlogin">
        @csrf
        <input type="text" name="user" placeholder="Enter your name" value="">
        <br>
        <input type="password" name="password" placeholder="Enter your pass" value="">
        <br>
        <button>Login</button>
    </form>
    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>
