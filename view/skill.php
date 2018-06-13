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
                            echo '<font size="5">' . $row['name'] . '</font>' ;
                           
                        if ($count == 0){
                            echo '<img src="././img/php.png" alt="php" width="50px"
                            height="40px"/>';
                            $count ++;
                        }
                        elseif($count == 1){
                            echo '<img src="././img/html.png" alt="html" width="30px"
                            height="40px"/>';
                            $count ++;
                        }elseif($count == 2){
                            echo '<img src="././img/css.png" alt="css" width="40px"
                            height="40px"/>';
                            $count ++;
                        }elseif($count == 3){
                            echo '<img src="././img/js.png" alt="js" width="40px"
                            height="40px"/>';
                            $count ++;
                        }elseif($count == 4){
                            echo '<img src="././img/AngularJS.png" alt="AngularJS" width="90px"
                            height="40px"/>';
                            $count ++;
                        }elseif($count == 5){
                            echo '<img src="././img/bootstrap.png" alt="bootstarp" width="40px"
                            height="40px"/>';
                            $count ++;
                        }elseif($count == 6){
                            echo '<img src="././img/c++.png" alt="c++" width="40px"
                            height="40px"/>';
                            $count ++;
                        }elseif($count == 7){
                            echo '<img src="././img/java.png" alt="java" width="40px"
                            height="40px"/>';
                            $count ++;
                        }elseif($count == 8){
                            echo '<img src="././img/python.png" alt="python" width="40px"
                            height="40px"/>';
                            $count ++;
                        }elseif($count == 9){
                            echo '<img src="././img/Haskell.png" alt="Haskell" width="40px"
                            height="40px"/>';
                            $count ++;
                        }elseif($count == 10){
                            echo '<img src="././img/prolog.png" alt="prolog" width="50px"
                            height="40px"/>';
                            $count ++;
                        }
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
                            echo '<font size="5">'.$row['name'] . '</font>' ;
                            
                        if ($count == 0){
                            echo '<img src="././img/ps.png" alt="php" width="40px"
                            height="40px"/>';
                            $count ++;
                        }
                        elseif($count == 1){
                            echo '<img src="././img/lightroom.jpeg" alt="html" width="40px"
                            height="40px"/>';
                            $count ++;
                        }
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