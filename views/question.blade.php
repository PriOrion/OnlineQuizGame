<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QuizGame</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
 </head>
        <!-- Styles -->
        <style>
            html, body {
                background-color:black ;
                color: #0fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            

            .links > a {
                color: yellow;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            
        </style>
   
    
    <body>
    <center>
    
    
    
	
	
	
	<img src="Penguins"/>
	
	
  <br>
           <table border="3" width="40%" allign="center" cellspacing="0" 
           cellpadding="3">
	
	<tr><td align="center">
	<Font size="8" >
	<a>Choose Category</a>
	</Font>
  </td></tr>
  </table>
	</br>
          <form method="post" action="store3">
         
          
               
          @foreach($data as $value)
         <div class="links">
         <tr>
        <td><a href="{{route('selectcat',['id'=>$value->id])}}">{{$value->id}}){{$value->cname}}</td>

        
        </tr>
        </div>
        
         @endforeach
                </center>
                <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
<center><input type="submit" name="submit" value="submit"></center>
</form>
           
    </body>
</html>
