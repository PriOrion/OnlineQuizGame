<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>QuizGame</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color:black;
                color: #0fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            
             .links > a {
                color: #0fff;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            
        </style>
    </head>
    <body >
       <center>

     <br>
	     <table border="5" width="25%" allign="center" cellspacing="0" 
	     cellpadding="5">
	
	     <tr><td align="center">
	     <Font size="10" >
	     <a  >Categories</a>
	     </Font>
       </td></tr>
     </table>
	</br>
                <table>
                 <tr>
        <td>Name</td>
        <td>Total Question</td>
        <td>Total Marks</td>
        </tr>
         @foreach($data as $value)
         <tr>
        <td>{{$value->cname}}</td>
        <td>{{$value->tques}}</td>
        <td>{{$value->tmarks}}</td>
        </tr>
         @endforeach
        </table>
        <div class="links">
                    
        <center><a href="front1">Back to home</a></center> 
        
         </div>
          </center>
    </body>
</html>
