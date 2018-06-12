<section id="skills" class="skills">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center" >
                   	<h2>Skills</h2>
                    <hr class="under_header">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                       <?php if($skill_result) {
                            while($row = $skill_result->fetch_array()){
                                echo $row['name'] . "\t" . $row['category'] . "\n";
                            }
                        } else { 
                            echo "empty";
                            }
                    ?>
                </div>
            </div>
        </div>
    </section>