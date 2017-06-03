<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">


        <title>Add Category</title>

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
	<a  >Category</a>
	</Font>
  </td></tr>
  </table>
	</br>
    
    <form action="store1" method="post">

    
     <Label for="cname">Category Name</Label>
    <input type="text" name="cname" value=""><br/>
    
        
    
     <Label for="tques">Total Question</Label>
    <input type="text" name="tques" value=""><br/>
    
     <Label for="tmarks">Total Marks</Label>
    <input type="text" name="tmarks" value=""><br/>
     
    
   
     <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
    
     <Label for=""></Label>
     <input type="submit" name="submit" value="submit">
     
      <div class="links">
       <a  href="add2">Add Question</a></div>
  <a  href="front1">Back</a></div>
    </form>
    </body>
</html>
