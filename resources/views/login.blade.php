<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<form method="POST">
    <div class="form-group">
            {{ csrf_field() }}
        <label for="exampleInputEmail1">Email address</label>

        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>