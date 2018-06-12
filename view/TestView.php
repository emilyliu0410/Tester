<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Emily Liu</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet"  href="view/custom.css">
    <link rel="stylesheet"  href="view/lines.css">
    <!--border on the top-->
    
    
</head>


<body style = "background-color: #555555">
    <!--homepage button-->
    <div class="on_the_top">
    	<a  href="file:///Users/liuyingpik1/Downloads/bootstrap-4/test.html">
        	<img src="http://mobilephonetabletrepair.co.uk/image/cache/catalog/Product%20Icons/Home-Button-500x500.png" style="width: 70px; height: 70px;" >
    	</a>

    	<div class="btn-group" style='float:right; padding:10px; '>
        	<button  class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 200px;">
            	≡
        	</button>
        	<div class="dropdown-menu" style="width: 200px">
            <a class="dropdown-item" href="#profile">Profile</a>
            <a class="dropdown-item" href="#skills">Skills</a>
            <a class="dropdown-item" href="#education">Education</a>
            <a class="dropdown-item" href="#experience">Experience</a>
            <a class="dropdown-item" href="#contact">Contact Me</a>
       		 </div>
    	</div>
    </div>

    <header>
          <div class="container" style="color: #ffcc00; height: 530px;">
            <div class="row">
                <div class="col-lg-12 text-center " style="padding-top: 100px" >
                	<p>&nbsp;</p>
                	<p>&nbsp;</p>
                	<p>&nbsp;</p>
                    <h2 class="name">Emily Liu</h2>
                    <h3 class="skills">Logic and Computation</h3>
                </div>
            </div>
        </div>
     </header>

     <section id="profile" style="background-color: #dddddd">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style="color: #ffcc00;">
                        <h2>Profile</h2>
                        <hr class="under_header">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p style="color: #000000"> Communicative and enthusiastic fresh graduate in Logic and Computation(Computer Science and philosophy) at University of Auckland who is looking for a full-time position. I am a patient individual, in that I can deal with colleagues harmoniously in any situations. Aiming to apply my abilities to fill the internship role in your company.</p>
                    </div>
                </div>
            </div>
        </section>

    <section id="skills" style="background-color: #ffffff">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" style="color: #ffcc00;">
                   	<h2>Skills</h2>
                    <hr class="under_header">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                        <p style="color: #FFFFFF"> Communicative and enthusiastic fresh graduate in Logic and Computation(Computer Science and philosophy) at University of Auckland who is looking for a full-time position. I am a patient individual, in that I can deal with colleagues harmoniously in any situations. Aiming to apply my abilities to fill the internship role in your company.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="educations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Education</h2>
                    <hr class="under_header" >
                </div>
            </div>
  		</div>
  		<div class="ed_information">
                    <?php 
        				if($result){
        				 while($row = $result->fetch_array()){
                				echo '<h3>'.$row['school'] . '</h3>' . '<h4s>' . $row['place_name'] . '</h4>' . '<h5>' . $row['start_date'] . "-" . $row['end_date'] . '</h5>'. $row['description'] ;
                				echo nl2br("\n");
                				echo nl2br("\n");
        				}
           				
        				} else { 
            				echo "empty";
        					}
    				?>
        </div>       
            
        
    </section>

        <section id="experience" style="background-color: #ffffff">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" style="color: #ffcc00;">
                        <h2>Experience</h2>
                        <hr class="under_header">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p style="color: #FFFFFF"> Communicative and enthusiastic fresh graduate in Logic and Computation(Computer Science and philosophy) at University of Auckland who is looking for a full-time position. I am a patient individual, in that I can deal with colleagues harmoniously in any situations. Aiming to apply my abilities to fill the internship role in your company.</p>
                    </div>
                </div>
            </div>
        </section>

<!-- <?php 
        				if($result) {
            				while($row = $result->fetch_array()){
                				echo $row['school'] . "\t" . $row['place_name'] . "\n";
           					}
        				} else { 
            				echo "empty";
        					}
    				?>-->
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>