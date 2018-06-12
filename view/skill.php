<section id="skills" class="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" >
                   	<h2>Skills</h2>
                    <hr class="under_header">
                </div>
            </div>
                <h3>Programming skills</h3>
                 <?php 
                 if($skill_result) {
                    echo '<div class="row">';
                        
                    while($row = $skill_result->fetch_array()){
                                
                       if ($row['category'] == 'Programming skills'){
                            echo '<div class ="col-lg-3">';
                            echo '<h4>'.$row['name'] . '</h4>' ;
                            echo '</div>';
                        }
                    }
                    echo '</div>';
                } else { 
                    echo "empty";
                }
                ?>
                <h3>Web Design Skill</h3>
                <?php 
                 if($dskill_result) {
                    echo '<div class="row">';
                        
                    while($row = $dskill_result->fetch_array()){
                                
                            echo '<div class ="col-lg-6">';
                            echo '<h4>'.$row['name'] . '</h4>' ;
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