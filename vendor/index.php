<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>VietSpeak Status</title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fira+Sans&family=Indie+Flower&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Viaoda+Libre&display=swap" rel="stylesheet">


  <style>

    @font-face {
      font-family: InlineVN;
        src: url("static/fonts/VNF-Intro-Inline.ttf");
    }

    @font-face {
      font-family: svnfutura;
        src: url("static/fonts/SVN-Futura-Regular.otf");
      }


  	*{
  		font-family: 'svnfutura', sans-serif;
  		margin: 0; 		
  		padding: 0;
  		box-sizing: border-box

  	}

  	body{
  		/*background-image: linear-gradient(120deg, #9c27b0 0%, #673ab7 100%);*/
      /*image credit https://www.deviantart.com/bisbiswas/art/Taj-858108930*/
      background-image: url("static/images/nice.jpg");
      background-attachment: fixed; 	
  	}

  	main{  		
	    width: 100%;
	    height: 100%;
	    max-width: 1200px;
	    margin: 0 auto;
	    margin-top: 10px;
	    display: flex;
	    flex-direction: column;
	    justify-content: center;
	    align-items: center;
	    color: #fff06e;
  	}

  	h1{
  		/*font-family: 'Indie Flower', cursive;*/
  		font-family: 'InlineVN', cursive;
    	color: #ffeb3b;
    	font-size: 6rem;
    	text-shadow: 0px 15px 5px rgb(0 0 0 / 10%), 10px 20px 5px rgb(0 0 0 / 5%), -10px 20px 5px rgb(0 0 0 / 5%);
  	}

  	th {
   		 color: #fff;
    	font-family: 'Viaoda Libre', cursive;
    	font-size: 220%;
    	text-shadow: 0px 15px 5px rgb(0 0 0 / 10%), 10px 20px 5px rgb(0 0 0 / 5%), -10px 20px 5px rgb(0 0 0 / 5%);
	}

  	tr{
  		text-align: -webkit-center;
 		font-size: 131%;

  	}

  	.pending{
  		color: #e655ff;
  	}

  	.approve{
  		color:  #ff4685;
  		font-family: 'Dancing Script', cursive;
  		font-weight: 400;
  	}

  	.thinking{
  		color: #795548;
  	}

  	.deny{
  		color: black;
  		font-size: 80%;
  	}

  	.waiting{
  		color: #fff8bf;
    	font-size: 90%;
  	}

  	img{
  		width: 100%;
  		display: block;
  	}
  	header{
  		position: relative;
  	}
  	#bird{
  		    width: 13%;
    position: absolute;
    right: -10%;
    top: 4%;
    z-index: -10;
  	}

  	h2#label {
    position: absolute;
    transform: rotate(
270deg
);
        top: 400%;
    right: 68%;
    width: 500px;
    outline: 2px solid mediumspringgreen;
    padding: 1.3%;
    outline-offset: 5px;
    border: 2px solid mediumspringgreen;    
    background-color: #9c27b0;
    border-radius: 5px;
}

#bubble {
   position: fixed;
    width: 150px;
    height: 150px;
    bottom: 10px;
    color: #f8f6f1;
    padding-top: 50px;
    padding-left: 20px;
    background-color: #ff4282;
    left: 10px;
    border: 2px dotted #ffc107;
    outline: 2px dashed #ffc107;
    outline-offset: 6px;
    border-top-right-radius: 50%;
    border-bottom-left-radius: 50%;
    animation: scale 3s infinite;
    font-family: 'Viaoda Libre', cursive;
    font-size: 18px;
    font-weight: bold;
}

@keyframes scale{
  0%{
    transform: scale(1);
    outline: 3px dashed #ffc107;
  }
  
  50%{
    transform: scale(1.051);
    outline: 6px dashed #f2ac46;
  }

  100%{
    transform: scale(1);
    outline: 2px dashed #ffc107;
  }
}

#bubble:before{
  content:"";  
  background-color: blue;
  position: absolute;
  background-color: bisque;
  width: 50px;
  height: 50px;
  left: 103px;
  top: -7px;
  /* z-index: -5; */
  border-top-right-radius: 50%;
  border-bottom-left-radius: 50%;
  animation: rotating 4s infinite;
}

@keyframes rotating{
  0%{
    transform: rotate(0deg);
  }

  100%{
    transform: rotate(3600deg);
  }

}

#bubble:after{
  content:"";  
  background-color: blue;
  position: absolute;
  background-color: bisque;
  width: 50px;
  height: 50px;
  left: -8px;
  top: 104px;  
  border-top-right-radius: 50%;
  border-bottom-left-radius: 50%;
  animation: rotatingreverse 3s alternate infinite;  
}

@keyframes rotatingreverse{
  0%{
    transform: rotate(0deg);
  }

  100%{
    transform: rotate(3600deg);
  }

}

#moon {
    position: absolute;    
    left: 591px;
    top: 507px;
    transform: rotate(
279deg
);
    animation: moving 15s infinite;
}

@keyframes moving {
  0%{
    transform: scale(0.5);
    opacity: 0.1;
    left: 5px;
    top: 1507px;

  }

  50%{
    transform: scale(1.2) rotate(279deg);
    top: 507px;
    left: 591px;
    opacity: 1;

  }

  100%{
    transform: scale(0.5) ;
    opacity: 0.7;
    top: 507px;
    left: 591px;
  }
}


@media (max-width: 800px){
  h1{
    font-size: 2.53rem;
  }
}
  	
  </style>
</head>
<body>
<main>
<header>
	<h1>Vietspeak status</h1>
	<img id ="bird" src = "https://media.giphy.com/media/aTWLVsvacZMVq/giphy.gif">
	<h2 id = "label">lastest members eagerly joining the cohort</h2>
</header>
<?php
require 'vendor/autoload.php';

use \TANIOS\Airtable\Airtable;
$airtable = new Airtable(array(
    'api_key' => 'keyvOV5g9FBLTdcvK',
    'base'    => 'appDhJQmOmVO1x4DM'
));

$params = array(
    // "filterByFormula" => "AND( Status = 'New' )",
    "sort" => array(array('field' => 'Formdate', 'direction' => "desc")),
    "maxRecords" => 100,
    "pageSize" => 100,
    
);

$request = $airtable->getContent( 'register_form_vietspeak', $params);




function remove($email){
    $pieces = explode("@", $email);
    $length = strlen($pieces[0]);    
    $rest = substr($pieces[0], 0, $length-3);     
    return $rest."**********";    
}

$pendingApplication = 0;

do {
    $response = $request->getResponse();
    

    		$data = $response[ 'records' ];
    		$users = [];
        

    		foreach($data as $datium){    			
    			$addess = $datium->fields->email__address;
    			$st = property_exists($datium->fields, "status") ? $datium->fields->status: "pending";
    			$users[] = [$addess => $st];								
    		}

    		echo "<table style='width:50%'>";
			  echo "<tr>";
			  	echo "<th>Number</th>";
			    echo "<th>Email </th>";
			    echo "<th>Status</th>";			    
			  echo "</tr>";		  			 
			
			 $x = 0;     

    		foreach($users as $user){    				
    			foreach($user as $key=>$value){
    				$x++;

    				if($value == "pending"){
    					$className = "pending";
              
              $pendingApplication++;

    				}else if ($value == "Đã duyệt"){
    					$className = "approve";
    				}else if($value == "Thinking.."){
    					$className = "thinking";
    				}else if ($value == "Không duyệt, chờ xóa form"){
    					$className = "deny";
    				}else {
    					$className = "waiting";
    				}

    				echo "<tr>";
    					echo "<td>".$x."</td>";
			    		echo "<td>".remove($key)."</td>";
			    		echo "<td><span class = ${className}>${value}</span></td>";
			  		echo "</tr>";

    				// echo "<li>".remove($key). " ------------ "."<span class = ${className}>${value}</span>"."</li>";
    			}
    		}

    		//echo "</ol>";

    		echo "</table>";      

}
while( $request = $response->next() );

// print("<pre>");
// print_r($request);
// print("</pre>");

?>

<section id = "bubble"><?php echo $pendingApplication; ?> pending application(s)</section>
<section id = "moon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="72" height="72"><path fill="none" d="M0 0h24v24H0z"/><path d="M10 7a7 7 0 0 0 12 4.9v.1c0 5.523-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2h.1A6.979 6.979 0 0 0 10 7zm-6 5a8 8 0 0 0 15.062 3.762A9 9 0 0 1 8.238 4.938 7.999 7.999 0 0 0 4 12z" fill="rgba(255,255,255,1)"/></svg>
</svg>
  </section>
</main>
<script>
// window.addEventListener("mousemove", function(e){
// 	console.log(e.offsetX);
// 	console.log(e.offsetY);
// })
</script>	

</body>
</html>
