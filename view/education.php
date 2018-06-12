<section id="education" class="educations">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Education</h2>
                    <hr class="under_header" >
                </div>
            </div>
  		</div>
        <div class="row">
                    <div class="col-lg-12 text-center">
  		                <div class="ed_information">
                            <?php 
        				    if($result){
        				        while($row = $result->fetch_array()){
                		      		echo '<h3>'.$row['school'] . '</h3>' . '<h4>' . $row['place_name'] . '</h4>' . '<h5>' . $row['start_date'] . "-" . $row['end_date'] . '</h5>'. $row['description'] ;
                				echo nl2br("\n");
                				echo nl2br("\n");
        				        }
        				    } else { 
            				echo "empty";
        					}
    				        ?>
                        </div>
                    </div>
        </div>       