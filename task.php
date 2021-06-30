<!doctype html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Control panel</title>

  </head>
  <style>
    body{
background-color: #0250c5;    }
    .button-super{
        position: relative;
    }
    
    .container{
        height: 600px;
    }
    .button-super>.btn{
border-radius: 40px;
    }

 
 
    .input-range{

        border: 1px solid;
        border-radius: 20px;
        text-align: center;
        
    }

 
  </style>
    <script> 
  
        function change_range(value,range_id) {
        document.getElementById(range_id).value=value;
      }
      
      function change_input(value,input_id) {
        document.getElementById(input_id).value=value;
      }
        </script>
<body>

    <div class="container">



        <div class="row pt-5 justify-content-lg-center">

<div class="col-5 col-lg-6 col-s-12 bg-white" style="border-radius: 20px;">
<form action="connection.php" method="POST"> 
    <div class="container">
        <h1 class="text-center pt-2">Control panel</h1>

        
        <div class="row">
                       
   <div class="col col-12"> 
       
    <label class="form-label">Motor 1</label>
    
    <input type="number" class="input-range" name="motor1" id="motor_text1"  max="180" min="0" value="90"  
    oninput="change_range(this.value , 'motor_range1')";>

    <input type="range" class="form-range" id="motor_range1" max="180" min="0" value="90"
    oninput="change_input(this.value, 'motor_text1')";> </div>
</div>

                  

<div class="row">
                       
    <div class="col col-12"> 
        
     <label class="form-label">Motor 2</label>
     
     <input type="number" class="input-range" name="motor2" id="motor_text2"  max="180" min="0" value="90"  
     oninput="change_range(this.value , 'motor_range2')";>
 
     <input type="range" class="form-range" id="motor_range2" max="180" min="0" value="90"
     oninput="change_input(this.value, 'motor_text2')";> </div>
 </div>
 
                   
 <div class="row">
                       
    <div class="col col-12"> 
        
     <label class="form-label">Motor 3</label>
     
     <input type="number" class="input-range" name="motor3" id="motor_text3"  max="180" min="0" value="90"  
     oninput="change_range(this.value , 'motor_range3')";>
 
     <input type="range" class="form-range" id="motor_range3" max="180" min="0" value="90"
     oninput="change_input(this.value, 'motor_text3')";> </div>
 </div>
 
                   
 <div class="row">
                       
    <div class="col col-12"> 
        
     <label class="form-label">Motor 4</label>
     
     <input type="number" class="input-range" name="motor4" id="motor_text4"  max="180" min="0" value="90"  
     oninput="change_range(this.value , 'motor_range4')";>
 
     <input type="range" class="form-range" id="motor_range4" max="180" min="0" value="90"
     oninput="change_input(this.value, 'motor_text4')";> </div>
 </div>
 
                   
 
 <div class="row">
                       
    <div class="col col-12"> 
        
     <label class="form-label">Motor 5</label>
     
     <input type="number" class="input-range" name="motor5" id="motor_text5"  max="180" min="0" value="90"  
     oninput="change_range(this.value , 'motor_range5')";>
 
     <input type="range" class="form-range" id="motor_range5" max="180" min="0" value="90"
     oninput="change_input(this.value, 'motor_text5')";> </div>
 </div>
 
 <div class="row">
                       
    <div class="col col-12"> 
        
     <label class="form-label">Motor 6</label>
     
     <input type="number" class="input-range" name="motor6" id="motor_text6"  max="180" min="0" value="90"  
     oninput="change_range(this.value , 'motor_range6')";>
 
     <input type="range" class="form-range" id="motor_range6" max="180" min="0" value="90"
     oninput="change_input(this.value, 'motor_text6')";> </div>
 </div>
 
                   
 
 

    <div class="row"> 
        <div class="col col-12   text-center pt-5">   
    
        <button type="submit" name="Save" class="btn btn-primary">Save</button>
        <button type="submit" name="Run" class="btn btn-secondary">Run</button>
    </div>
    </div>
  

</div>
</form>

    </div>

</div>

    </div>
</body>
</html>
