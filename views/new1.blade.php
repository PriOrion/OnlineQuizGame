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

       <body >
       
       <center>
	
	<br>
	<table border="5" width="25%" allign="center" cellspacing="0" 
	cellpadding="5">
	
	<tr><td align="center">
	<Font size="10" >
	<a  >Players</a>
	</Font>
  </td></tr>
  </table>
	</br>
  
      
    
    <form action="store" method="post">

    
     <Label for="name">Player Name</Label>
     <input type="text" name="name" value=""><br/>
      <Label for="email">Email</Label>
    <input type="text" name="email" value=""><br/>
    
        
     
    
   
     <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
    
     <Label for=""></Label>
     <input type="submit" name="submit" value="submit">
     
    
    </form>
    </body>
</html>
