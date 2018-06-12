<section id="skills" class="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" >
                   	<h2>Skills</h2>
                    <hr class="under_header">
                </div>
            </div>
            >
                       <?php if($skill_result) {

                            while($row = $skill_result->fetch_array()){
                                $count = 0 ;
                                if $count = 0{
                                    '<div class="row">';
                                }
                                '<div class ="col-md-3">';                               
                                    echo '<h3>'.$row['name'] . '</h3>' . $row['category'] . "\n";
                                '</div>';
                                $count ++;
                                if $count = 4{
                                    '</div>';
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