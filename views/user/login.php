<div class="regForm  col-4 offset-2">
    <h3>Login form</h3>
    <p></p>

    <!-- <form action="profile" class="" method="POST"> -->
    <form action="" class="" method="POST">

        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <!-- <input type="email" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email"> -->
            <input type="text" name="login" class="form-control"  placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" disabled>
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <input type="submit">
        <input type="hidden" name="action" value="UserController@loginUser">

        <button class="btn btn-primary mr-auto btn-lg" name="login">Login</button>
    </form>

</div>