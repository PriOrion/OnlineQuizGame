<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">


        <title>Laravel</title>

    </head>
    
       <style>
         html, body {
                background-color:black ;
                color: #0fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            </style>

    <body>
    <center>
    <form action="loginme" method="post">
    
      <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
    Username:<input type="text" name="name" ><br/>
     Email:<input type="text" name="email" ><br/>
     Password:<input type="password" name="password" ><br/>
     
     <input type="submit" name="login" value="Login">
     <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>

     
    
    </form>
    </center>
    </body>
</html>