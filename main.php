<!DOCTYPE html>
 <html>
 <head>
 	<title>stress_detector</title>
 	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 	<link rel="stylesheet" href='file.css'>

<script type="text/javascript">
			
            function windowClose() {
                window.open('','_parent','');
                window.close();
             }
</script>

 </head>
 <body>

 <div class="bg-img">
  <div class="container">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Peace Of Mind</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span> Home</a></li>
        <li class="dropdown">

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li> <a href="javascript: windowClose()"><span class="glyphicon glyphicon-log-out"></span>
     Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

  


<div class="container1">
  <h3><p style="color:#7e160b" >Stress Level Result...</p></h3>
    <p align="center" style="color:#101010"><b> Hey...!!<?php echo $_POST['name']; ?><br>
    </b></p>

<?php

if(isset($_POST))
{
        $name =  $_POST['name'];
        $reason1= $_POST['options'];
        $reason2 = $_POST['options1'];
        $reason3 = $_POST['options2'];
        $reason4 = $_POST['options3'];
        $reason5 = $_POST['options4'];
             
        $reason11 =  $_POST['options11'];
        $reason12 =  $_POST['options12'];
        $reason13 =  $_POST['options13'];
        $reason14 =  $_POST['options14'];
        $reason15 =  $_POST['options15'];

        $reason16 =  $_POST['options16'];
        $reason17 =  $_POST['options17'];
        $reason18 =  $_POST['options18'];
        $reason19 =  $_POST['options19'];
        $reason20 = $_POST['options20'];
        $reason21 = $_POST['options21'];

        $reason22 = $_POST['options22'];
        $reason23 = $_POST['options23'];
        $reason24 = $_POST['options24'];
        $reason25 = $_POST['options25'];
        $reason26 = $_POST['options26'];
        $reason27 = $_POST['options27'];

        $reason29 = $_POST['options29'];
        $reason30 = $_POST['options30'];
        $reason31 = $_POST['options31'];
        $reason32 = $_POST['options32'];
        $reason33 = $_POST['options33'];
  



function calculate($r1,$r2,$r3,$r4,$r5) {
    $total=0;
    $total = ($r1+$r2+$r3+$r4+$r5);
    return $total;
}

function calculate1($r1,$r2,$r3,$r4,$r5,$r6){
    $total=0;
    $total= ($r1+$r2+$r3+$r4+$r5+$r6);
    return $total;
}

        $p_score=calculate((int)$reason1,(int)$reason2,(int)$reason3,(int)$reason4,(int)$reason5);
        $s_score = calculate((int)$reason11,(int)$reason12,(int)$reason13,(int)$reason14,(int)$reason15);
        $e_score = calculate1((int)$reason16,(int)$reason17,(int)$reason18,(int)$reason19,(int)$reason20,(int)$reason21);
        $b_score = calculate1((int)$reason22,(int)$reason23,(int)$reason24,(int)$reason25,(int)$reason26,(int)$reason27);
        $h_score = calculate((int)$reason29,(int)$reason30,(int)$reason31,(int)$reason32,(int)$reason33);
        
       
function score1($score)
{

 if ($score>3 and $score<20){
        echo('Physical Stress Detected is LOW... <br/>Suggesstions to reduce your stress: <br/> 1. Give time to think about yourself.<br/> 2. Be with family and friends and enjoy each moment.<br/>');
}

elseif( $score >=20 and $score<40){
        echo("Physical Stress Detected is MODERATE... <br/>Suggesstions to reduce your stress:<br/> 1. Give time to think about yourself.<br/> 2. Be with family and friends and enjoy each moment.<br/> 3. Be calm under certain stressful situations.<br/>4. Carry meditation regularly.<br/>");
}

    elseif ($score >=40 and $score <70){
        echo("Physical Stress Detected is HIGH... <br/>Suggesstions to reduce your stress:<br/> 1. Give time to think about yourself.<br/>2. Be with family and friends and enjoy each moment.<br/> 3. Be calm under certain stressful situations.<br/> 4. Carry meditation regularly.<br/> 5. Do exercise regularly<br/>.");

}
    elseif ($score >=70 and $score<85){
        echo("Physical Stress Detected is VERY HIGH... <br/>Suggesstions to reduce your stress:<br/> 1. Give time to think about yourself.<br/> 2. Be with family and friends and enjoy each moment.<br/>3. Be calm under certain stressful situations.<br/> 4. Carry meditation regularly.<br/> 5. Do exercise regularly.<br/> 6. Practise Gratitude.<br/> 7. Boost up your energy level.<br/>");
}

   elseif($score>=85 and $score<99)
{
        echo("Physical Stress Detected is EXTREMELY HIGH (DANGER)... <br/>Suggesstions to reduce your stress:<br/> 1. Give time to think about yourself.<br/> 2. Be with family and friends and enjoy each moment.<br/> 3. Be calm under certain stressful situations.<br/> 4. Carry meditation regularly.<br/> 5. Do exercise regularly.<br/> 6. Practise Gratitude.<br/> 7. Boost up your energy level.<br/> 8. DO things that makes you feel comformtable.<br/>");

    }
  else
    {echo("Please...,Fillup form correctly<br/>");}
}
 

function  score2($score){
 if ($score>3 and $score<20){
        echo("<br/>Sleep Stress Detected is LOW... <br/>Suggesstions to reduce your stress:<br/> 1. Take proper required sleep of 7-8 hours per day.<br/> 2. Practise meditation.<br/>");}

    elseif( $score >=20 and $score<40){
        echo("<br/>Sleep Stress Detected is MODERATE...<br/>Suggesstions to reduce your stress:<br/>1. Take proper required sleep of 7-8 hours per day.<br/> 2. Practise meditation.<br/>3. Learn to forgive before going to sleep.<br/> 4. Organize yourself before sleeping.<br/>");
}

    elseif ($score >=40 and $score <70){
        echo("<br/>Sleep Stress Detected is HIGH...<br/>Suggesstions to reduce your stress:<br/> 1. Take proper required sleep of 7-8 hours per day.<br/>2. Practise meditation.<br/>3. Learn to forgive before going to sleep.<br/> 4. Organize yourself before sleeping.<br/>5. Have a sleep with silent mind.<br/>");
}

    elseif ($score >=70 and $score<85){
        echo("<br/>Sleep Stress Detected is VERY HIGH...<br/>Suggesstions to reduce your stress:<br/>1. Take proper required sleep of 7-8 hours per day.<br/>2. Practise meditation.<br/> 3. Learn to forgive before going to sleep.<br/> 4. Organize yourself before sleeping.<br/> 5. Have a sleep with silent mind.<br/> 6. Avoid consuming sleep pills.");
}
    elseif($score>=85 and $score<99){
       echo("<br/>Sleep Stress Detected is EXTREMELY HIGH (DANGER)... <br/>Suggesstions to reduce your stress:<br/> 1. Take proper required sleep of 7-8 hours per day<br/> 2. Practise meditation.<br/> 3. Learn to forgive before going to sleep.<br/> 4. Organize yourself before sleeping.<br/> 5. Have a sleep with silent mind.<br/> 6. Avoid consuming sleep pills.<br/> 7. Not to overthink about any stressful conditions.<br/>");
    }
         else
    {echo("Please...,Fillup form correctly<br/>");}
}




function score3($score){
 if ($score>3 and $score<20){
        echo("<br/>Emotional Stress Detected is LOW...<br/>Suggesstions to reduce your stress:<br/> 1. Try to behave properly with everyone.<br/> 2. Meditate regularly.<br/>");
}
     elseif( $score >=20 and $score<40){
        echo("<br/>Emotional Stress Detected is MODERATE...<br/>Suggesstions to reduce your stress:<br/> 1. Try to behave properly with everyone.<br/> 2. Meditate regularly.<br/> 3. Make yourself busy.");
}

    elseif ($score >=40 and $score <70){
        echo("<br/>Emotional Stress Detected is HIGH...<br/>Suggesstions to reduce your stress:<br/> 1. Try to behave properly with everyone.<br/> 2. Meditate regularly.<br/> 3. Make yourself busy.<br/> 4. Do not overthink.<br/> 5. Trust others.<br/>");
}

    elseif ($score >=70 and $score<85){
        echo("<br/>Emotional Stress Detected is VERY HIGH...<br/>Suggesstions to reduce your stress:<br/> 1. Try to behave properly with everyone.<br/> 2. Meditate regularly.<br/> 3. Make yourself busy.<br/> 4. Do not overthink.<br/> 5. Trust others.<br/> 6. Learn to forgive.<br/> 7. Organize yourself.<br/>");
}

   elseif($score>=85 and $score<100){
        echo("<br/>Emotional Stress Detected is EXTREMELY HIGH(DANGER)...<br/>Suggesstions to reduce your stress:<br/> 1. Try to behave properly with everyone.<br/> 2. Meditate regularly.<br/> 3. Make yourself busy.<br/> 4. Do not overthink<br/> 5. Trust others.<br/> 6. Learn to forgive.<br/> 7. Keep the sense of humor.<br/>8. Avoid consumption of alcohol and drugs.<br/>9. Organize yourself.<br/>");
}

  else
    {echo("Please...,Fillup form correctly<br/>");}
}
    
   
function  score4($score){
 if ($score>3 and $score<20){
        echo('<br/>Behavioural Stress Detected is LOW...<br/>Suggesstions to reduce your stress:<br/> 1. Try to speak politely.<br/> 2. Try not to be rude.<br/> 3. Meditate regularly.<br/>');
}

    elseif( $score >=20 and $score<40){
        echo('<br/>Behavioural Stress Detected is MODERATE...<br/>Suggesstions to reduce your stress:<br/> 1. Try to speak politely<br/> 2. Try not to be rude.<br/> 3. Meditate regularly.<br/> 4. Share your feelings.<br/>5. Give time to other activities along with regular work.<br/>');
}

    elseif ($score >=40 and $score <70){
        echo('<br/>Behavioural Stress Detected is HIGH...<br/>Suggesstions to reduce your stress:<br/> 1. Try to speak politely<br/> 2. Try not to be rude<br/> 3. Meditate regularly.<br/> 4. Share your feelings.<br/> 5. Give time to other activities along with regular work.<br/>6. Maintain a proper schedule.<br/> 7. Give time to people who value you.<br/>');
}

   elseif ($score >=70 and $score<85){
        echo('<br/>Behavioural Stress Detected is VERY HIGH...<br/>Suggesstions to reduce your stress:<br/> 1. Try to speak politely.<br/> 2. Try not to be rude.<br/> 3. Meditate regularly.<br/> 4. Share your feelings.<br/> 5. Give time to other activities along with regular work.<br/> 6. Maintain a proper schedule.<br/> 7. Give time to people who value you.<br/> 8. Have a balanced diet.<br/>');
}

    elseif($score>=85 and $score<100){
        echo('<br/>Behavioural Stress Detected is EXTREMELY HIGH(DANGER)...<br/>Suggesstions to reduce your stress:<br/> 1. Try to speak politely.<br/> 2. Try not to be rude.<br/> 3. Meditate regularly.<br/> 4. Share your feelings<br/> 5. Give time to other activities along with regular work.<br/> 6. Maintain a proper schedule.<br/> 7. Give time to people who value you.<br/> 8. Have a balanced diet.<br/> 9. Avoid consmption of alcohol, cigarattes and drugs.<br/> 10. Keep youself entertaining.<br/>');

}
  else
    {echo("Please...,Fillup form correctly<br/>");}


}
   
   

function score5($score){

if ($score>3 and $score<20){
        echo("<br/>Personal Habit Stress Detected is LOW...<br/>Suggesstions to reduce your stress:<br/> 1. Prepare a work schedule<br/> 2. Work according to the schedule.<br/><br/>");
}

     elseif( $score >=20 and $score<40){
        echo("<br/>Personal Habit Stress Detected is MODERATE...<br/>Suggesstions to reduce your stress:<br/> 1. Prepare a work schedule<br/> 2. Give proper timing to each task.<br/> 3. Enjoy accompaning your hobbies.<br/> 4. Love yourself.<br/><br/>");
}

   elseif ($score >=40 and $score <70){
        echo("<br/>Personal Habit Stress Detected is HIGH...<br/>Suggesstions to reduce your stress:<br/> 1. Prepare a work schedule.<br/> 2. Give proper timing to each task.<br/> 3. Enjoy accompaning your hobbies.<br/>4. Love youself.<br/>5. Avoid much involvement in social media.<br/> 6. Keep yourself away from people who may produce stress to you.<br/><br/>");
}

    elseif ($score >=70 and $score<85){
        echo("<br/>Personal Habit Stress Detected is VERY HIGH...<br> Suggesstions to reduce your stress:<br/> 1. Prepare a work schedule.<br/> 2. Give proper timing to each task<br/> 3. Enjoy accompaning your hobbies.<br/> 4. Love yourself.<br/>5. Avoid much involvement in social media.<br/> 6. Avoid addictive things.<br/> 7. Have a well and healty diet.<br/> 8. Keep yourself away from people who may produce stress to you.<br/><br/>");}

    elseif($score>=85 and $score<100){
        echo("<br/>Personal Habit Stress Detected is EXTREMELY HIGH(DANGER)...<br/>Suggesstions to reduce your stress:<br/> 1. Prepare a work schedule<br/> 2. Give proper timing to each task.<br/> 3. Enjoy accompaning your hobbies.<br/> 4. Love yourself.<br/> 5. Avoid much involvement in social media.<br/> 6. Avoid addictive things<br/> 7. Have a well and healty diet.<br/> 8. Enjoy special moments with friends and family.<br/> 9. Keep yourself away from people who may produce stress to you.<br/><br/>");}
        
  else
    {echo("Please...,Fillup form correctly<br/>");
    
    }
   

}

        $result1 = score1($p_score);
        $result2 = score2($s_score);
        $result3 = score3($e_score);
        $result4 = score4($b_score);
        $result5 = score5($h_score);

$conn = mysqli_connect("localhost", "id10177352_root","12345","id10177352_test");

$sql="INSERT INTO test (name,p_score,s_score,e_score,b_score,h_score) VALUES ('$name','$p_score','$s_score','$e_score','$b_score','$h_score')";

if(mysqli_query($conn,$sql)){
echo("");
}

else
{
echo ("");
}

mysqli_close($conn);

}

 


?> 

<?php

 $dataPoints = array( 
    	array("label"=>"Physical Indicator", "y"=>$p_score),
    	array("label"=>"Sleep Indicator", "y"=>$s_score),
    	array("label"=>"Emotional Indicator", "y"=>$e_score),
    	array("label"=>"Behavioural Indicator", "y"=>$b_score),
    	array("label"=>"Personal Habit", "y"=>$h_score))

?>



<!DOCTYPE HTML>
    <html>
    <head>
    <script>
    window.onload = function() {
     
     
    var chart = new CanvasJS.Chart("chartContainer", {
    	animationEnabled: true,
    	title: {
    		text: "Stress level....chart"
    	},
    	
    	data: [{
    		type: "pie",
    		yValueFormatString: "#,##0.00\"%\"",
    		indexLabel: "{label} ({y})",
    		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
    	}]
    });
    chart.render();
     
    }
    </script>
    </head>
    <body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
                               

</div>
</div>

</div>


<!--footer -->
 <div class="footer">
  <p>Created by:&copy;Ak2019 <a href="mailto:ashwin88550@gmail.com">
  ak@gmail.com</a></p>
</div>
 </body>
 </html>
