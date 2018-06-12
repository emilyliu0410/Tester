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
                        echo '<h3>'.$row['name'] . '</h3>' ;
                        echo '</div>';
                        
                        }
                    
                    }   
                        echo '</div>';
                } else { 
                    echo "empty";
                }
                    ?>
                <h3>Web Design skills</h3>
                <?php 
                 if($skill_result) {
                    echo '<div class="row">';
                        
                    while($row = $skill_result->fetch_array()){
                                
                       if ($row['category'] == 'Web design skills'){
                        echo '<div class ="col-lg-3">';

                        echo '<h3>'.$row['name'] . '</h3>' ;
                        echo '</div>';
                        
                        }else{
                            continue;
                        }
                    
                    }   
                        echo '</div>';
                } else { 
                    echo "empty";
                }
                    ?>
            
        </div>
    </section>