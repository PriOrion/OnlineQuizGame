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
	<a  >Questions</a>
	</Font>
  </td></tr>
  </table>
	</br>
    
    <form action="store2" method="post">

    
     <Label for="quiz_id">Category ID</Label>
    <input type="text" name="quiz_id" value=""><br/>
    
        
    
     <Label for="ques">Question</Label>
    <input type="text" name="question" value=""><br/>
    
     <Label for="ans">Ans1</Label>
    <input type="text" name="ans1" value=""><br/>
     <Label for="ans">Ans2</Label>
    <input type="text" name="ans2" value=""><br/>
      <Label for="ans">Ans3</Label>
    <input type="text" name="ans3" value=""><br/>
      <Label for="ans">Ans4</Label>
    <input type="text" name="ans4" value=""><br/>
      <Label for="ans">Ans</Label>
    <input type="text" name="ans" value=""><br/>
      
   
     <input type="hidden" name="_token" value="{{csrf_token()}}"><br/>
    
     <Label for=""></Label>
     <input type="submit" name="submit" value="submit">
     
      <div class="links">
  <a  href="add">Back</a></div>
    </form>
    </body>
</html>
