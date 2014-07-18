@extends('layout.master')
@section('content')
    <head>
        <title>{{ $title }}</title>
    </head>
    
    <body>
        <h1>Login</h1>
        <div>
            <?php echo '<form method="post" action="'. URL::to('login') .'">';?>
                <label>Email:</label><br>
                <input type="text" id="email" name="email"><br><br>
        
                <label>Password:</label><br>
                <input type="password" id="password" name="password"><br><br>
        
                <button class="btn btn-success" type="submit" value="Login">Login</button>
            </form>
        </div>
    </body>
@stop 
