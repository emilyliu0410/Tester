<section id="skills" class="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" >
                   	<h2>Skills</h2>
                    <hr class="under_header">
                </div>
            </div>
                <h3><img src="././img/tick.png" width="40px" height="40px"> Programming skills</h3>
                 <?php 
                 if($skill_result) {
                    echo '<div class="row">';
                     $count = 0;   
                    while($row = $skill_result->fetch_array()){
                                
                       
                            echo '<div class ="col-lg-3">';
                            echo '<img src="././img/' . $row['name'] . '.jpg"  width="50px" height="50px"/>';

                            echo '<p>' . $row['name'] . '</p>' ;
                           
                        
                            
                         echo '</div>';
                        
                    }
                    echo '</div>';
                } else { 
                    echo "empty";
                }
                ?>
                <h3><img src="././img/tick.png" width="40px" height="40px">   Web Design Skill</h3>
                <?php 
                 if($dskill_result) {
                    echo '<div class="row">';
                    $count = 0;
                    while($row = $dskill_result->fetch_array()){
                                
                            echo '<div class ="col-lg-6">';
                            echo '<img src="././img/' . $row['name'] . '.png" alt="php" width="50px" height="50px"/>';

                            echo '<font size="5">'.$row['name'] . '</font>' ;
                            
                        
                        echo '</div>';
                    }
                    echo '</div>';
                } else { 
                    echo "empty";
                }
                ?>
                </div>
            </div>
        </div>
    </section>