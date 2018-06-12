<section id="skills" class="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" >
                   	<h2>Skills</h2>
                    <hr class="under_header">
                </div>
            </div>
                 <?php 
                 if($skill_result) {
                    $count = 0 ;
                    while($row = $skill_result->fetch_array()){
                                
                        if ($count = 0){
                            echo '<div class="row">';
                        }
                        echo '<div class ="col-md-3">';                               
                        echo '<h3>'.$row['name'] . '</h3>' . '<h5>' .  $row['category'] . '</h5>';
                        echo '</div>';
                        $count ++;
                        if ($count = 4){
                            echo '</div>';
                            $count = 0;
                        }   

                    }
                } else { 
                    echo "empty";
                }
                    ?>
                </div>
            </div>
        </div>
    </section>