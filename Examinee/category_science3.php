<!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h4 class="bg-light text-center">Science category</h4>
                      <hr>
                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 40, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_one" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_one" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q101" class="form-control form-control-sm" name="ans_q101" value="NA">
                      <h5><b>101.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q101" value="<?php echo $row['choice_one']; ?>" id="Science1" onclick="hundredone();"> 
                      <label style="font-weight: normal;" for="Science1"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q101" value="<?php echo $row['choice_two']; ?>" id="Science2" onclick="hundredone();"> 
                      <label style="font-weight: normal;" for="Science2"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q101" value="<?php echo $row['choice_three']; ?>" id="Science3" onclick="hundredone();"> 
                      <label style="font-weight: normal;" for="Science3"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q101" value="<?php echo $row['choice_four']; ?>" id="Science4" onclick="hundredone();"> 
                      <label style="font-weight: normal;" for="Science4"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredone() {
                            var a = document.getElementById("Science1").value;
                            var b = document.getElementById("Science2").value;
                            var c = document.getElementById("Science3").value;
                            var d = document.getElementById("Science4").value;
                            var x = document.getElementById("ans_q101");

                                 if(document.getElementById('Science1').checked) { x.value = a; }
                            else if(document.getElementById('Science2').checked) { x.value = b; } 
                            else if(document.getElementById('Science3').checked) { x.value = c; } 
                            else if(document.getElementById('Science4').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                       <?php           
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 41, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_two" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_two" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q102" class="form-control form-control-sm" name="ans_q102" value="NA">
                      <h5><b>102.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q102" value="<?php echo $row['choice_one']; ?>" id="Science5" onclick="hundredtwo();"> 
                      <label style="font-weight: normal;" for="Science5"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q102" value="<?php echo $row['choice_two']; ?>" id="Science6" onclick="hundredtwo();"> 
                      <label style="font-weight: normal;" for="Science6"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q102" value="<?php echo $row['choice_three']; ?>" id="Science7" onclick="hundredtwo();"> 
                      <label style="font-weight: normal;" for="Science7"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q102" value="<?php echo $row['choice_four']; ?>" id="Science8" onclick="hundredtwo();"> 
                      <label style="font-weight: normal;" for="Science8"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredtwo() {
                            var a = document.getElementById("Science5").value;
                            var b = document.getElementById("Science6").value;
                            var c = document.getElementById("Science7").value;
                            var d = document.getElementById("Science8").value;
                            var x = document.getElementById("ans_q102");

                                 if(document.getElementById('Science5').checked) { x.value = a; }
                            else if(document.getElementById('Science6').checked) { x.value = b; } 
                            else if(document.getElementById('Science7').checked) { x.value = c; } 
                            else if(document.getElementById('Science8').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 42, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_three" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_three" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q103" class="form-control form-control-sm" name="ans_q103" value="NA">
                      <h5><b>103.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q103" value="<?php echo $row['choice_one']; ?>" id="Science9" onclick="hundredthree();"> 
                      <label style="font-weight: normal;" for="Science9"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q103" value="<?php echo $row['choice_two']; ?>" id="Science10" onclick="hundredthree();"> 
                      <label style="font-weight: normal;" for="Science10"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q103" value="<?php echo $row['choice_three']; ?>" id="Science11" onclick="hundredthree();"> 
                      <label style="font-weight: normal;" for="Science11"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q103" value="<?php echo $row['choice_four']; ?>" id="Science12" onclick="hundredthree();"> 
                      <label style="font-weight: normal;" for="Science12"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredthree() {
                            var a = document.getElementById("Science9").value;
                            var b = document.getElementById("Science10").value;
                            var c = document.getElementById("Science11").value;
                            var d = document.getElementById("Science12").value;
                            var x = document.getElementById("ans_q103");

                                 if(document.getElementById('Science9').checked) { x.value = a; }
                            else if(document.getElementById('Science10').checked) { x.value = b; } 
                            else if(document.getElementById('Science11').checked) { x.value = c; } 
                            else if(document.getElementById('Science12').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 43, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_four" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_four" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q104" class="form-control form-control-sm" name="ans_q104" value="NA">
                      <h5><b>104.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q104" value="<?php echo $row['choice_one']; ?>" id="Science13" onclick="hundredfour();"> 
                      <label style="font-weight: normal;" for="Science13"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q104" value="<?php echo $row['choice_two']; ?>" id="Science14" onclick="hundredfour();"> 
                      <label style="font-weight: normal;" for="Science14"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q104" value="<?php echo $row['choice_three']; ?>" id="Science15" onclick="hundredfour();"> 
                      <label style="font-weight: normal;" for="Science15"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q104" value="<?php echo $row['choice_four']; ?>" id="Science16" onclick="hundredfour();"> 
                      <label style="font-weight: normal;" for="Science16"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredfour() {
                            var a = document.getElementById("Science13").value;
                            var b = document.getElementById("Science14").value;
                            var c = document.getElementById("Science15").value;
                            var d = document.getElementById("Science16").value;
                            var x = document.getElementById("ans_q104");

                                 if(document.getElementById('Science13').checked) { x.value = a; }
                            else if(document.getElementById('Science14').checked) { x.value = b; } 
                            else if(document.getElementById('Science15').checked) { x.value = c; } 
                            else if(document.getElementById('Science16').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 44, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_five" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_five" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q105" class="form-control form-control-sm" name="ans_q105" value="NA">
                      <h5><b>105.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q105" value="<?php echo $row['choice_one']; ?>" id="Science17" onclick="hundredfive();"> 
                      <label style="font-weight: normal;" for="Science17"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q105" value="<?php echo $row['choice_two']; ?>" id="Science18" onclick="hundredfive();"> 
                      <label style="font-weight: normal;" for="Science18"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q105" value="<?php echo $row['choice_three']; ?>" id="Science19" onclick="hundredfive();"> 
                      <label style="font-weight: normal;" for="Science19"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q105" value="<?php echo $row['choice_four']; ?>" id="Science20" onclick="hundredfive();"> 
                      <label style="font-weight: normal;" for="Science20"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredfive() {
                            var a = document.getElementById("Science17").value;
                            var b = document.getElementById("Science18").value;
                            var c = document.getElementById("Science19").value;
                            var d = document.getElementById("Science20").value;
                            var x = document.getElementById("ans_q105");

                                 if(document.getElementById('Science17').checked) { x.value = a; }
                            else if(document.getElementById('Science18').checked) { x.value = b; } 
                            else if(document.getElementById('Science19').checked) { x.value = c; } 
                            else if(document.getElementById('Science20').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 45, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_six" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_six" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q106" class="form-control form-control-sm" name="ans_q106" value="NA">
                      <h5><b>106.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q106" value="<?php echo $row['choice_one']; ?>" id="Science21" onclick="hundredsix();"> 
                      <label style="font-weight: normal;" for="Science21"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q106" value="<?php echo $row['choice_two']; ?>" id="Science22" onclick="hundredsix();"> 
                      <label style="font-weight: normal;" for="Science22"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q106" value="<?php echo $row['choice_three']; ?>" id="Science23" onclick="hundredsix();"> 
                      <label style="font-weight: normal;" for="Science23"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q106" value="<?php echo $row['choice_four']; ?>" id="Science24" onclick="hundredsix();"> 
                      <label style="font-weight: normal;" for="Science24"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredsix() {
                            var a = document.getElementById("Science21").value;
                            var b = document.getElementById("Science22").value;
                            var c = document.getElementById("Science23").value;
                            var d = document.getElementById("Science24").value;
                            var x = document.getElementById("ans_q106");

                                 if(document.getElementById('Science21').checked) { x.value = a; }
                            else if(document.getElementById('Science22').checked) { x.value = b; } 
                            else if(document.getElementById('Science23').checked) { x.value = c; } 
                            else if(document.getElementById('Science24').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 46, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_seven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_seven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q107" class="form-control form-control-sm" name="ans_q107" value="NA">
                      <h5><b>107.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q107" value="<?php echo $row['choice_one']; ?>" id="Science25" onclick="hundredseven();"> 
                      <label style="font-weight: normal;" for="Science25"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q107" value="<?php echo $row['choice_two']; ?>" id="Science26" onclick="hundredseven();"> 
                      <label style="font-weight: normal;" for="Science26"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q107" value="<?php echo $row['choice_three']; ?>" id="Science27" onclick="hundredseven();"> 
                      <label style="font-weight: normal;" for="Science27"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q107" value="<?php echo $row['choice_four']; ?>" id="Science28" onclick="hundredseven();"> 
                      <label style="font-weight: normal;" for="Science28"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredseven() {
                            var a = document.getElementById("Science25").value;
                            var b = document.getElementById("Science26").value;
                            var c = document.getElementById("Science27").value;
                            var d = document.getElementById("Science28").value;
                            var x = document.getElementById("ans_q107");

                                 if(document.getElementById('Science25').checked) { x.value = a; }
                            else if(document.getElementById('Science26').checked) { x.value = b; } 
                            else if(document.getElementById('Science27').checked) { x.value = c; } 
                            else if(document.getElementById('Science28').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 47, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_eight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_eight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q108" class="form-control form-control-sm" name="ans_q108" value="NA">
                      <h5><b>108.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q108" value="<?php echo $row['choice_one']; ?>" id="Science29" onclick="hundredeight();"> 
                      <label style="font-weight: normal;" for="Science29"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q108" value="<?php echo $row['choice_two']; ?>" id="Science30" onclick="hundredeight();"> 
                      <label style="font-weight: normal;" for="Science30"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q108" value="<?php echo $row['choice_three']; ?>" id="Science31" onclick="hundredeight();"> 
                      <label style="font-weight: normal;" for="Science31"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q108" value="<?php echo $row['choice_four']; ?>" id="Science32" onclick="hundredeight();"> 
                      <label style="font-weight: normal;" for="Science32"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredeight() {
                            var a = document.getElementById("Science29").value;
                            var b = document.getElementById("Science30").value;
                            var c = document.getElementById("Science31").value;
                            var d = document.getElementById("Science32").value;
                            var x = document.getElementById("ans_q108");

                                 if(document.getElementById('Science29').checked) { x.value = a; }
                            else if(document.getElementById('Science30').checked) { x.value = b; } 
                            else if(document.getElementById('Science31').checked) { x.value = c; } 
                            else if(document.getElementById('Science32').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 48, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_nine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_nine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q109" class="form-control form-control-sm" name="ans_q109" value="NA">
                      <h5><b>109.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q109" value="<?php echo $row['choice_one']; ?>" id="Science33" onclick="hundrednine();"> 
                      <label style="font-weight: normal;" for="Science33"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q109" value="<?php echo $row['choice_two']; ?>" id="Science34" onclick="hundrednine();"> 
                      <label style="font-weight: normal;" for="Science34"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q109" value="<?php echo $row['choice_three']; ?>" id="Science35" onclick="hundrednine();"> 
                      <label style="font-weight: normal;" for="Science35"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q109" value="<?php echo $row['choice_four']; ?>" id="Science36" onclick="hundrednine();"> 
                      <label style="font-weight: normal;" for="Science36"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundrednine() {
                            var a = document.getElementById("Science33").value;
                            var b = document.getElementById("Science34").value;
                            var c = document.getElementById("Science35").value;
                            var d = document.getElementById("Science36").value;
                            var x = document.getElementById("ans_q109");

                                 if(document.getElementById('Science33').checked) { x.value = a; }
                            else if(document.getElementById('Science34').checked) { x.value = b; } 
                            else if(document.getElementById('Science35').checked) { x.value = c; } 
                            else if(document.getElementById('Science36').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 49, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredten" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredten" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q110" class="form-control form-control-sm" name="ans_q110" value="NA">
                      <h5><b>110.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q110" value="<?php echo $row['choice_one']; ?>" id="Science37" onclick="hundredTen();"> 
                      <label style="font-weight: normal;" for="Science37"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q110" value="<?php echo $row['choice_two']; ?>" id="Science38" onclick="hundredTen();"> 
                      <label style="font-weight: normal;" for="Science38"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q110" value="<?php echo $row['choice_three']; ?>" id="Science39" onclick="hundredTen();"> 
                      <label style="font-weight: normal;" for="Science39"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q110" value="<?php echo $row['choice_four']; ?>" id="Science40" onclick="hundredTen();"> 
                      <label style="font-weight: normal;" for="Science40"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredTen() {
                            var a = document.getElementById("Science37").value;
                            var b = document.getElementById("Science38").value;
                            var c = document.getElementById("Science39").value;
                            var d = document.getElementById("Science40").value;
                            var x = document.getElementById("ans_q110");

                                 if(document.getElementById('Science37').checked) { x.value = a; }
                            else if(document.getElementById('Science38').checked) { x.value = b; } 
                            else if(document.getElementById('Science39').checked) { x.value = c; } 
                            else if(document.getElementById('Science40').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 50, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_eleven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_eleven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q111" class="form-control form-control-sm" name="ans_q111" value="NA">
                      <h5><b>111.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q111" value="<?php echo $row['choice_one']; ?>" id="Science41" onclick="hundredEleven();"> 
                      <label style="font-weight: normal;" for="Science41"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q111" value="<?php echo $row['choice_two']; ?>" id="Science42" onclick="hundredEleven();"> 
                      <label style="font-weight: normal;" for="Science42"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q111" value="<?php echo $row['choice_three']; ?>" id="Science43" onclick="hundredEleven();"> 
                      <label style="font-weight: normal;" for="Science43"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q111" value="<?php echo $row['choice_four']; ?>" id="Science44" onclick="hundredEleven();"> 
                      <label style="font-weight: normal;" for="Science44"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredEleven() {
                            var a = document.getElementById("Science41").value;
                            var b = document.getElementById("Science42").value;
                            var c = document.getElementById("Science43").value;
                            var d = document.getElementById("Science44").value;
                            var x = document.getElementById("ans_q111");

                                 if(document.getElementById('Science41').checked) { x.value = a; }
                            else if(document.getElementById('Science42').checked) { x.value = b; } 
                            else if(document.getElementById('Science43').checked) { x.value = c; } 
                            else if(document.getElementById('Science44').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 51, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_twelve" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_twelve" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q112" class="form-control form-control-sm" name="ans_q112" value="NA">
                      <h5><b>112.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q112" value="<?php echo $row['choice_one']; ?>" id="Science45" onclick="hundredTwelve();"> 
                      <label style="font-weight: normal;" for="Science45"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q112" value="<?php echo $row['choice_two']; ?>" id="Science46" onclick="hundredTwelve();"> 
                      <label style="font-weight: normal;" for="Science46"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q112" value="<?php echo $row['choice_three']; ?>" id="Science47" onclick="hundredTwelve();"> 
                      <label style="font-weight: normal;" for="Science47"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q112" value="<?php echo $row['choice_four']; ?>" id="Science48" onclick="hundredTwelve();"> 
                      <label style="font-weight: normal;" for="Science48"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredTwelve() {
                            var a = document.getElementById("Science45").value;
                            var b = document.getElementById("Science46").value;
                            var c = document.getElementById("Science47").value;
                            var d = document.getElementById("Science48").value;
                            var x = document.getElementById("ans_q112");

                                 if(document.getElementById('Science45').checked) { x.value = a; }
                            else if(document.getElementById('Science46').checked) { x.value = b; } 
                            else if(document.getElementById('Science47').checked) { x.value = c; } 
                            else if(document.getElementById('Science48').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 52, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_thirteen" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_thirteen" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q113" class="form-control form-control-sm" name="ans_q113" value="NA">
                      <h5><b>113.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q113" value="<?php echo $row['choice_one']; ?>" id="Science49" onclick="hundredThirteen();"> 
                      <label style="font-weight: normal;" for="Science49"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q113" value="<?php echo $row['choice_two']; ?>" id="Science50" onclick="hundredThirteen();"> 
                      <label style="font-weight: normal;" for="Science50"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q113" value="<?php echo $row['choice_three']; ?>" id="Science51" onclick="hundredThirteen();"> 
                      <label style="font-weight: normal;" for="Science51"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q113" value="<?php echo $row['choice_four']; ?>" id="Science52" onclick="hundredThirteen();"> 
                      <label style="font-weight: normal;" for="Science52"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredThirteen() {
                            var a = document.getElementById("Science49").value;
                            var b = document.getElementById("Science50").value;
                            var c = document.getElementById("Science51").value;
                            var d = document.getElementById("Science52").value;
                            var x = document.getElementById("ans_q113");

                                 if(document.getElementById('Science49').checked) { x.value = a; }
                            else if(document.getElementById('Science50').checked) { x.value = b; } 
                            else if(document.getElementById('Science51').checked) { x.value = c; } 
                            else if(document.getElementById('Science52').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 53, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredfourteen" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredfourteen" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q114" class="form-control form-control-sm" name="ans_q114" value="NA">
                      <h5><b>114.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q114" value="<?php echo $row['choice_one']; ?>" id="Science53" onclick="hundredFourteen();"> 
                      <label style="font-weight: normal;" for="Science53"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q114" value="<?php echo $row['choice_two']; ?>" id="Science54" onclick="hundredFourteen();"> 
                      <label style="font-weight: normal;" for="Science54"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q114" value="<?php echo $row['choice_three']; ?>" id="Science55" onclick="hundredFourteen();"> 
                      <label style="font-weight: normal;" for="Science55"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q114" value="<?php echo $row['choice_four']; ?>" id="Science56" onclick="hundredFourteen();"> 
                      <label style="font-weight: normal;" for="Science56"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFourteen() {
                            var a = document.getElementById("Science53").value;
                            var b = document.getElementById("Science54").value;
                            var c = document.getElementById("Science55").value;
                            var d = document.getElementById("Science56").value;
                            var x = document.getElementById("ans_q114");

                                 if(document.getElementById('Science53').checked) { x.value = a; }
                            else if(document.getElementById('Science54').checked) { x.value = b; } 
                            else if(document.getElementById('Science55').checked) { x.value = c; } 
                            else if(document.getElementById('Science56').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 54, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredfifteen" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredfifteen" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q115" class="form-control form-control-sm" name="ans_q115" value="NA">
                      <h5><b>115.</b><?php echo $row['question']; ?></h5>
                      <input type="radio" name="q115" value="<?php echo $row['choice_one']; ?>" id="Science57" onclick="hundredFifteen();"> 
                      <label style="font-weight: normal;" for="Science57"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q115" value="<?php echo $row['choice_two']; ?>" id="Science58" onclick="hundredFifteen();"> 
                      <label style="font-weight: normal;" for="Science58"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q115" value="<?php echo $row['choice_three']; ?>" id="Science59" onclick="hundredFifteen();"> 
                      <label style="font-weight: normal;" for="Science59"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q115" value="<?php echo $row['choice_four']; ?>" id="Science60" onclick="hundredFifteen();"> 
                      <label style="font-weight: normal;" for="Science60"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFifteen() {
                            var a = document.getElementById("Science57").value;
                            var b = document.getElementById("Science58").value;
                            var c = document.getElementById("Science59").value;
                            var d = document.getElementById("Science60").value;
                            var x = document.getElementById("ans_q115");

                                 if(document.getElementById('Science57').checked) { x.value = a; }
                            else if(document.getElementById('Science58').checked) { x.value = b; } 
                            else if(document.getElementById('Science59').checked) { x.value = c; } 
                            else if(document.getElementById('Science60').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 55, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredsixteen" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredsixteen" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q116" class="form-control form-control-sm" name="ans_q116" value="NA">
                      <h5><b>116.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q116" value="<?php echo $row['choice_one']; ?>" id="Science61" onclick="hundredSixteen();"> 
                      <label style="font-weight: normal;" for="Science61"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q116" value="<?php echo $row['choice_two']; ?>" id="Science62" onclick="hundredSixteen();"> 
                      <label style="font-weight: normal;" for="Science62"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q116" value="<?php echo $row['choice_three']; ?>" id="Science63" onclick="hundredSixteen();"> 
                      <label style="font-weight: normal;" for="Science63"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q116" value="<?php echo $row['choice_four']; ?>" id="Science64" onclick="hundredSixteen();"> 
                      <label style="font-weight: normal;" for="Science64"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSixteen() {
                            var a = document.getElementById("Science61").value;
                            var b = document.getElementById("Science62").value;
                            var c = document.getElementById("Science63").value;
                            var d = document.getElementById("Science64").value;
                            var x = document.getElementById("ans_q116");

                                 if(document.getElementById('Science61').checked) { x.value = a; }
                            else if(document.getElementById('Science62').checked) { x.value = b; } 
                            else if(document.getElementById('Science63').checked) { x.value = c; } 
                            else if(document.getElementById('Science64').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 56, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredseventeen" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredseventeen" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q117" class="form-control form-control-sm" name="ans_q117" value="NA">
                      <h5><b>117.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q117" value="<?php echo $row['choice_one']; ?>" id="Science65" onclick="hundredSeventeen();"> 
                      <label style="font-weight: normal;" for="Science65"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q117" value="<?php echo $row['choice_two']; ?>" id="Science66" onclick="hundredSeventeen();"> 
                      <label style="font-weight: normal;" for="Science66"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q117" value="<?php echo $row['choice_three']; ?>" id="Science67" onclick="hundredSeventeen();"> 
                      <label style="font-weight: normal;" for="Science67"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q117" value="<?php echo $row['choice_four']; ?>" id="Science68" onclick="hundredSeventeen();"> 
                      <label style="font-weight: normal;" for="Science68"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredSeventeen() {
                            var a = document.getElementById("Science65").value;
                            var b = document.getElementById("Science66").value;
                            var c = document.getElementById("Science67").value;
                            var d = document.getElementById("Science68").value;
                            var x = document.getElementById("ans_q117");

                                 if(document.getElementById('Science65').checked) { x.value = a; }
                            else if(document.getElementById('Science66').checked) { x.value = b; } 
                            else if(document.getElementById('Science67').checked) { x.value = c; } 
                            else if(document.getElementById('Science68').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 57, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredeighteen" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredeighteen" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q118" class="form-control form-control-sm" name="ans_q118" value="NA">
                      <h5><b>118.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q118" value="<?php echo $row['choice_one']; ?>" id="Science69" onclick="hundredEighteen();"> 
                      <label style="font-weight: normal;" for="Science69"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q118" value="<?php echo $row['choice_two']; ?>" id="Science70" onclick="hundredEighteen();"> 
                      <label style="font-weight: normal;" for="Science70"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q118" value="<?php echo $row['choice_three']; ?>" id="Science71" onclick="hundredEighteen();"> 
                      <label style="font-weight: normal;" for="Science71"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q118" value="<?php echo $row['choice_four']; ?>" id="Science72" onclick="hundredEighteen();"> 
                      <label style="font-weight: normal;" for="Science72"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredEighteen() {
                            var a = document.getElementById("Science69").value;
                            var b = document.getElementById("Science70").value;
                            var c = document.getElementById("Science71").value;
                            var d = document.getElementById("Science72").value;
                            var x = document.getElementById("ans_q118");

                                 if(document.getElementById('Science69').checked) { x.value = a; }
                            else if(document.getElementById('Science70').checked) { x.value = b; } 
                            else if(document.getElementById('Science71').checked) { x.value = c; } 
                            else if(document.getElementById('Science72').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 58, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundrednineteen" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundrednineteen" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q119" class="form-control form-control-sm" name="ans_q119" value="NA">
                      <h5><b>119.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q119" value="<?php echo $row['choice_one']; ?>" id="Science73" onclick="hundredNineteen();"> 
                      <label style="font-weight: normal;" for="Science73"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q119" value="<?php echo $row['choice_two']; ?>" id="Science74" onclick="hundredNineteen();"> 
                      <label style="font-weight: normal;" for="Science74"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q119" value="<?php echo $row['choice_three']; ?>" id="Science75" onclick="hundredNineteen();"> 
                      <label style="font-weight: normal;" for="Science75"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q119" value="<?php echo $row['choice_four']; ?>" id="Science76" onclick="hundredNineteen();"> 
                      <label style="font-weight: normal;" for="Science76"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredNineteen() {
                            var a = document.getElementById("Science73").value;
                            var b = document.getElementById("Science74").value;
                            var c = document.getElementById("Science75").value;
                            var d = document.getElementById("Science76").value;
                            var x = document.getElementById("ans_q119");

                                 if(document.getElementById('Science73').checked) { x.value = a; }
                            else if(document.getElementById('Science74').checked) { x.value = b; } 
                            else if(document.getElementById('Science75').checked) { x.value = c; } 
                            else if(document.getElementById('Science76').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Science' LIMIT 59, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredtwenty" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredtwenty" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q120" class="form-control form-control-sm" name="ans_q120" value="NA">
                      <h5><b>120.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q120" value="<?php echo $row['choice_one']; ?>" id="Science77" onclick="hundredTwenty();"> 
                      <label style="font-weight: normal;" for="Science77"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q120" value="<?php echo $row['choice_two']; ?>" id="Science78" onclick="hundredTwenty();"> 
                      <label style="font-weight: normal;" for="Science78"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q120" value="<?php echo $row['choice_three']; ?>" id="Science79" onclick="hundredTwenty();"> 
                      <label style="font-weight: normal;" for="Science79"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q120" value="<?php echo $row['choice_four']; ?>" id="Science80" onclick="hundredTwenty();"> 
                      <label style="font-weight: normal;" for="Science80"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredTwenty() {
                            var a = document.getElementById("Science77").value;
                            var b = document.getElementById("Science78").value;
                            var c = document.getElementById("Science79").value;
                            var d = document.getElementById("Science80").value;
                            var x = document.getElementById("ans_q120");

                                 if(document.getElementById('Science77').checked) { x.value = a; }
                            else if(document.getElementById('Science78').checked) { x.value = b; } 
                            else if(document.getElementById('Science79').checked) { x.value = c; } 
                            else if(document.getElementById('Science80').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                    </div>

                  