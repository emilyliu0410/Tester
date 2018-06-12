<section id="experience" class="experience">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center" >
                        <h2>Experience</h2>
                        <hr class="under_header">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <?php 
                        if($experience_result){
                         while($row = $experience_result->fetch_array()){
                                echo '<h3>'.$row['company'] . '</h3>' . '<h5>' . $row['start_date'] . "-" . $row['end_date'] . '</h5>'. $row['description'] ;
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
        </section>