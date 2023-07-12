<!DOCTYPE html>
<html lang="en">
<head>
    <title>User home page</title>
</head>
<body>
    <div class="container">
        <h2>Welcome to ABC music player</h2>
        <nav>
            <form action="/loginPage" method="POST">
                <button name="loginBtn">login</button>
            </form>
            <form action="/signupPage" method="POST">
                <button name="singnupBtn">signUp</button>
            </form>
        </nav>
    </div>
</body>

<!-- For styleing -->


<head>
    <style>
        .container{
        
        }
        nav {
    display: flex;
    justify-content: end;
    gap:25px;
}
button {
    height: 39px;
    width: 100px;
    background-color: blue;
    color: white;
    font-size: large;
    border: 0;
}
    </style>

</html>