<!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h4 class="bg-light text-center">Mathematics category</h4>
                      <hr>
                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics'");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredtwenty_one" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredtwenty_one" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q121" class="form-control form-control-sm" name="ans_q121" value="NA">
                      <h5><b>121.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q121" value="<?php echo $row['choice_one']; ?>" id="math1" onclick="hundredTwentyone();"> 
                      <label style="font-weight: normal;" for="math1"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q121" value="<?php echo $row['choice_two']; ?>" id="math2" onclick="hundredTwentyone();"> 
                      <label style="font-weight: normal;" for="math2"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q121" value="<?php echo $row['choice_three']; ?>" id="math3" onclick="hundredTwentyone();"> 
                      <label style="font-weight: normal;" for="math3"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q121" value="<?php echo $row['choice_four']; ?>" id="math4" onclick="hundredTwentyone();"> 
                      <label style="font-weight: normal;" for="math4"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredTwentyone() {
                            var a = document.getElementById("math1").value;
                            var b = document.getElementById("math2").value;
                            var c = document.getElementById("math3").value;
                            var d = document.getElementById("math4").value;
                            var x = document.getElementById("ans_q121");

                                 if(document.getElementById('math1').checked) { x.value = a; }
                            else if(document.getElementById('math2').checked) { x.value = b; } 
                            else if(document.getElementById('math3').checked) { x.value = c; } 
                            else if(document.getElementById('math4').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                       <?php           
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 1, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredTwentytwo" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredTwentytwo" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q122" class="form-control form-control-sm" name="ans_q122" value="NA">
                      <h5><b>122.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q122" value="<?php echo $row['choice_one']; ?>" id="math5" onclick="hundredTwentyTwo();"> 
                      <label style="font-weight: normal;" for="math5"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q122" value="<?php echo $row['choice_two']; ?>" id="math6" onclick="hundredTwentyTwo();"> 
                      <label style="font-weight: normal;" for="math6"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q122" value="<?php echo $row['choice_three']; ?>" id="math7" onclick="hundredTwentyTwo();"> 
                      <label style="font-weight: normal;" for="math7"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q122" value="<?php echo $row['choice_four']; ?>" id="math8" onclick="hundredTwentyTwo();"> 
                      <label style="font-weight: normal;" for="math8"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredTwentyTwo() {
                            var a = document.getElementById("math5").value;
                            var b = document.getElementById("math6").value;
                            var c = document.getElementById("math7").value;
                            var d = document.getElementById("math8").value;
                            var x = document.getElementById("ans_q122");

                                 if(document.getElementById('math5').checked) { x.value = a; }
                            else if(document.getElementById('math6').checked) { x.value = b; } 
                            else if(document.getElementById('math7').checked) { x.value = c; } 
                            else if(document.getElementById('math8').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 2, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Twentythree" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Twentythree" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q123" class="form-control form-control-sm" name="ans_q123" value="NA">
                      <h5><b>123.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q123" value="<?php echo $row['choice_one']; ?>" id="math9" onclick="hundredTwentythree();"> 
                      <label style="font-weight: normal;" for="math9"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q123" value="<?php echo $row['choice_two']; ?>" id="math10" onclick="hundredTwentythree();"> 
                      <label style="font-weight: normal;" for="math10"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q123" value="<?php echo $row['choice_three']; ?>" id="math11" onclick="hundredTwentythree();"> 
                      <label style="font-weight: normal;" for="math11"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q123" value="<?php echo $row['choice_four']; ?>" id="math12" onclick="hundredTwentythree();"> 
                      <label style="font-weight: normal;" for="math12"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredTwentythree() {
                            var a = document.getElementById("math9").value;
                            var b = document.getElementById("math10").value;
                            var c = document.getElementById("math11").value;
                            var d = document.getElementById("math12").value;
                            var x = document.getElementById("ans_q123");

                                 if(document.getElementById('math9').checked) { x.value = a; }
                            else if(document.getElementById('math10').checked) { x.value = b; } 
                            else if(document.getElementById('math11').checked) { x.value = c; } 
                            else if(document.getElementById('math12').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 3, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Twentyfour" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Twentyfour" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q124" class="form-control form-control-sm" name="ans_q124" value="NA">
                      <h5><b>124.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q124" value="<?php echo $row['choice_one']; ?>" id="math13" onclick="hundredTwentyfour();"> 
                      <label style="font-weight: normal;" for="math13"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q124" value="<?php echo $row['choice_two']; ?>" id="math14" onclick="hundredTwentyfour();"> 
                      <label style="font-weight: normal;" for="math14"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q124" value="<?php echo $row['choice_three']; ?>" id="math15" onclick="hundredTwentyfour();"> 
                      <label style="font-weight: normal;" for="math15"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q124" value="<?php echo $row['choice_four']; ?>" id="math16" onclick="hundredTwentyfour();"> 
                      <label style="font-weight: normal;" for="math16"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredTwentyfour() {
                            var a = document.getElementById("math13").value;
                            var b = document.getElementById("math14").value;
                            var c = document.getElementById("math15").value;
                            var d = document.getElementById("math16").value;
                            var x = document.getElementById("ans_q124");

                                 if(document.getElementById('math13').checked) { x.value = a; }
                            else if(document.getElementById('math14').checked) { x.value = b; } 
                            else if(document.getElementById('math15').checked) { x.value = c; } 
                            else if(document.getElementById('math16').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 4, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Twentyfive" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Twentyfive" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q125" class="form-control form-control-sm" name="ans_q125" value="NA">
                      <h5><b>125.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q125" value="<?php echo $row['choice_one']; ?>" id="math17" onclick="hundredTwentyfive();"> 
                      <label style="font-weight: normal;" for="math17"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q125" value="<?php echo $row['choice_two']; ?>" id="math18" onclick="hundredTwentyfive();"> 
                      <label style="font-weight: normal;" for="math18"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q125" value="<?php echo $row['choice_three']; ?>" id="math19" onclick="hundredTwentyfive();"> 
                      <label style="font-weight: normal;" for="math19"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q125" value="<?php echo $row['choice_four']; ?>" id="math20" onclick="hundredTwentyfive();"> 
                      <label style="font-weight: normal;" for="math20"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredTwentyfive() {
                            var a = document.getElementById("math17").value;
                            var b = document.getElementById("math18").value;
                            var c = document.getElementById("math19").value;
                            var d = document.getElementById("math20").value;
                            var x = document.getElementById("ans_q125");

                                 if(document.getElementById('math17').checked) { x.value = a; }
                            else if(document.getElementById('math18').checked) { x.value = b; } 
                            else if(document.getElementById('math19').checked) { x.value = c; } 
                            else if(document.getElementById('math20').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 5, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Twentysix" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Twentysix" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q126" class="form-control form-control-sm" name="ans_q126" value="NA">
                      <h5><b>126.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q126" value="<?php echo $row['choice_one']; ?>" id="math21" onclick="hundredTwentysix();"> 
                      <label style="font-weight: normal;" for="math21"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q126" value="<?php echo $row['choice_two']; ?>" id="math22" onclick="hundredTwentysix();"> 
                      <label style="font-weight: normal;" for="math22"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q126" value="<?php echo $row['choice_three']; ?>" id="math23" onclick="hundredTwentysix();"> 
                      <label style="font-weight: normal;" for="math23"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q126" value="<?php echo $row['choice_four']; ?>" id="math24" onclick="hundredTwentysix();"> 
                      <label style="font-weight: normal;" for="math24"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredTwentysix() {
                            var a = document.getElementById("math21").value;
                            var b = document.getElementById("math22").value;
                            var c = document.getElementById("math23").value;
                            var d = document.getElementById("math24").value;
                            var x = document.getElementById("ans_q126");

                                 if(document.getElementById('math21').checked) { x.value = a; }
                            else if(document.getElementById('math22').checked) { x.value = b; } 
                            else if(document.getElementById('math23').checked) { x.value = c; } 
                            else if(document.getElementById('math24').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 6, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Twentyseven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Twentyseven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q127" class="form-control form-control-sm" name="ans_q127" value="NA">
                      <h5><b>127.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q127" value="<?php echo $row['choice_one']; ?>" id="math25" onclick="hundredTwentyseven();"> 
                      <label style="font-weight: normal;" for="math25"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q127" value="<?php echo $row['choice_two']; ?>" id="math26" onclick="hundredTwentyseven();"> 
                      <label style="font-weight: normal;" for="math26"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q127" value="<?php echo $row['choice_three']; ?>" id=mathh27" onclick="hundredTwentyseven();"> 
                      <label style="font-weight: normal;" for="math27"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q127" value="<?php echo $row['choice_four']; ?>" id="math28" onclick="hundredTwentyseven();"> 
                      <label style="font-weight: normal;" for="math28"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredTwentyseven() {
                            var a = document.getElementById("math25").value;
                            var b = document.getElementById("math26").value;
                            var c = document.getElementById("math27").value;
                            var d = document.getElementById("math28").value;
                            var x = document.getElementById("ans_q127");

                                 if(document.getElementById('math25').checked) { x.value = a; }
                            else if(document.getElementById('math26').checked) { x.value = b; } 
                            else if(document.getElementById('math27').checked) { x.value = c; } 
                            else if(document.getElementById('math28').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 7, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Twentyeight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Twentyeight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q128" class="form-control form-control-sm" name="ans_q128" value="NA">
                      <h5><b>128.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q128" value="<?php echo $row['choice_one']; ?>" id="math29" onclick="hundredTwentyeight();"> 
                      <label style="font-weight: normal;" for="math29"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q128" value="<?php echo $row['choice_two']; ?>" id="math30" onclick="hundredTwentyeight();"> 
                      <label style="font-weight: normal;" for="math30"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q128" value="<?php echo $row['choice_three']; ?>" id="math31" onclick="hundredTwentyeight();"> 
                      <label style="font-weight: normal;" for="math31"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q128" value="<?php echo $row['choice_four']; ?>" id="math32" onclick="hundredTwentyeight();"> 
                      <label style="font-weight: normal;" for="math32"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredTwentyeight() {
                            var a = document.getElementById("math29").value;
                            var b = document.getElementById("math30").value;
                            var c = document.getElementById("math31").value;
                            var d = document.getElementById("math32").value;
                            var x = document.getElementById("ans_q128");

                                 if(document.getElementById('math29').checked) { x.value = a; }
                            else if(document.getElementById('math30').checked) { x.value = b; } 
                            else if(document.getElementById('math31').checked) { x.value = c; } 
                            else if(document.getElementById('math32').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 8, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Twentynine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Twentynine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q129" class="form-control form-control-sm" name="ans_q129" value="NA">
                      <h5><b>129.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q129" value="<?php echo $row['choice_one']; ?>" id="math33" onclick="hundredTwentynine();"> 
                      <label style="font-weight: normal;" for="math33"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q129" value="<?php echo $row['choice_two']; ?>" id="math34" onclick="hundredTwentynine();"> 
                      <label style="font-weight: normal;" for="math34"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q129" value="<?php echo $row['choice_three']; ?>" id="math35" onclick="hundredTwentynine();"> 
                      <label style="font-weight: normal;" for="math35"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q129" value="<?php echo $row['choice_four']; ?>" id="math36" onclick="hundredTwentynine();"> 
                      <label style="font-weight: normal;" for="math36"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredTwentynine() {
                            var a = document.getElementById("math33").value;
                            var b = document.getElementById("math34").value;
                            var c = document.getElementById("math35").value;
                            var d = document.getElementById("math36").value;
                            var x = document.getElementById("ans_q129");

                                 if(document.getElementById('math33').checked) { x.value = a; }
                            else if(document.getElementById('math34').checked) { x.value = b; } 
                            else if(document.getElementById('math35').checked) { x.value = c; } 
                            else if(document.getElementById('math36').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 9, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredThirty" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredThirty" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q130" class="form-control form-control-sm" name="ans_q130" value="NA">
                      <h5><b>130.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q130" value="<?php echo $row['choice_one']; ?>" id="math37" onclick="hundredThreezero();"> 
                      <label style="font-weight: normal;" for="math37"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q130" value="<?php echo $row['choice_two']; ?>" id="math38" onclick="hundredThreezero();"> 
                      <label style="font-weight: normal;" for="math38"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q130" value="<?php echo $row['choice_three']; ?>" id="math39" onclick="hundredThreezero();"> 
                      <label style="font-weight: normal;" for="math39"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q130" value="<?php echo $row['choice_four']; ?>" id="math40" onclick="hundredThreezero();"> 
                      <label style="font-weight: normal;" for="math40"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredThreezero() {
                            var a = document.getElementById("math37").value;
                            var b = document.getElementById("math38").value;
                            var c = document.getElementById("math39").value;
                            var d = document.getElementById("math40").value;
                            var x = document.getElementById("ans_q130");

                                 if(document.getElementById('math37').checked) { x.value = a; }
                            else if(document.getElementById('math38').checked) { x.value = b; } 
                            else if(document.getElementById('math39').checked) { x.value = c; } 
                            else if(document.getElementById('math40').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 10, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Thirtyone" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Thirtyone" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q131" class="form-control form-control-sm" name="ans_q131" value="NA">
                      <h5><b>131.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q131" value="<?php echo $row['choice_one']; ?>" id="math41" onclick="hundredThirtyone();"> 
                      <label style="font-weight: normal;" for="math41"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q131" value="<?php echo $row['choice_two']; ?>" id="math42" onclick="hundredThirtyone();"> 
                      <label style="font-weight: normal;" for="math42"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q131" value="<?php echo $row['choice_three']; ?>" id="math43" onclick="hundredThirtyone();"> 
                      <label style="font-weight: normal;" for="math43"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q131" value="<?php echo $row['choice_four']; ?>" id="math44" onclick="hundredThirtyone();"> 
                      <label style="font-weight: normal;" for="math44"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredThirtyone() {
                            var a = document.getElementById("math41").value;
                            var b = document.getElementById("math42").value;
                            var c = document.getElementById("math43").value;
                            var d = document.getElementById("math44").value;
                            var x = document.getElementById("ans_q131");

                                 if(document.getElementById('math41').checked) { x.value = a; }
                            else if(document.getElementById('math42').checked) { x.value = b; } 
                            else if(document.getElementById('math43').checked) { x.value = c; } 
                            else if(document.getElementById('math44').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 11, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_thirtytwo" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_thirtytwo" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q132" class="form-control form-control-sm" name="ans_q132" value="NA">
                      <h5><b>132.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q132" value="<?php echo $row['choice_one']; ?>" id="math45" onclick="hundredThreeTwo();"> 
                      <label style="font-weight: normal;" for="math45"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q132" value="<?php echo $row['choice_two']; ?>" id="math46" onclick="hundredThreeTwo();"> 
                      <label style="font-weight: normal;" for="math46"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q132" value="<?php echo $row['choice_three']; ?>" id="math47" onclick="hundredThreeTwo();"> 
                      <label style="font-weight: normal;" for="math47"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q132" value="<?php echo $row['choice_four']; ?>" id="math48" onclick="hundredThreeTwo();"> 
                      <label style="font-weight: normal;" for="math48"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredThreeTwo() {
                            var a = document.getElementById("math45").value;
                            var b = document.getElementById("math46").value;
                            var c = document.getElementById("math47").value;
                            var d = document.getElementById("math48").value;
                            var x = document.getElementById("ans_q132");

                                 if(document.getElementById('math45').checked) { x.value = a; }
                            else if(document.getElementById('math46').checked) { x.value = b; } 
                            else if(document.getElementById('math47').checked) { x.value = c; } 
                            else if(document.getElementById('math48').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 12, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Thirtythree" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Thirtythree" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q133" class="form-control form-control-sm" name="ans_q133" value="NA">
                      <h5><b>133.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q133" value="<?php echo $row['choice_one']; ?>" id="math49" onclick="hundredThreethree();"> 
                      <label style="font-weight: normal;" for="math49"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q133" value="<?php echo $row['choice_two']; ?>" id="math50" onclick="hundredThreethree();"> 
                      <label style="font-weight: normal;" for="math50"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q133" value="<?php echo $row['choice_three']; ?>" id="math51" onclick="hundredThreethree();"> 
                      <label style="font-weight: normal;" for="math51"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q133" value="<?php echo $row['choice_four']; ?>" id="math52" onclick="hundredThreethree();"> 
                      <label style="font-weight: normal;" for="math52"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredThreethree() {
                            var a = document.getElementById("math49").value;
                            var b = document.getElementById("math50").value;
                            var c = document.getElementById("math51").value;
                            var d = document.getElementById("math52").value;
                            var x = document.getElementById("ans_q133");

                                 if(document.getElementById('math49').checked) { x.value = a; }
                            else if(document.getElementById('math50').checked) { x.value = b; } 
                            else if(document.getElementById('math51').checked) { x.value = c; } 
                            else if(document.getElementById('math52').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 13, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredThirtyfour" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredThirtyfour" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q134" class="form-control form-control-sm" name="ans_q134" value="NA">
                      <h5><b>134.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q134" value="<?php echo $row['choice_one']; ?>" id="math53" onclick="hundredThreefour();"> 
                      <label style="font-weight: normal;" for="math53"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q134" value="<?php echo $row['choice_two']; ?>" id="math54" onclick="hundredThreefour();"> 
                      <label style="font-weight: normal;" for="math54"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q134" value="<?php echo $row['choice_three']; ?>" id="math55" onclick="hundredThreefour();"> 
                      <label style="font-weight: normal;" for="math55"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q134" value="<?php echo $row['choice_four']; ?>" id="math56" onclick="hundredThreefour();"> 
                      <label style="font-weight: normal;" for="math56"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredThreefour() {
                            var a = document.getElementById("math53").value;
                            var b = document.getElementById("math54").value;
                            var c = document.getElementById("math55").value;
                            var d = document.getElementById("math56").value;
                            var x = document.getElementById("ans_q134");

                                 if(document.getElementById('math53').checked) { x.value = a; }
                            else if(document.getElementById('math54').checked) { x.value = b; } 
                            else if(document.getElementById('math55').checked) { x.value = c; } 
                            else if(document.getElementById('math56').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                       $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 14, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredThirtyfive" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredThirtyfive" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q135" class="form-control form-control-sm" name="ans_q135" value="NA">
                      <h5><b>135.</b><?php echo $row['question']; ?></h5>
                      <input type="radio" name="q135" value="<?php echo $row['choice_one']; ?>" id="math57" onclick="hundredThreefive();"> 
                      <label style="font-weight: normal;" for="math57"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q135" value="<?php echo $row['choice_two']; ?>" id="math58" onclick="hundredThreefive();"> 
                      <label style="font-weight: normal;" for="math58"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q135" value="<?php echo $row['choice_three']; ?>" id="math59" onclick="hundredThreefive();"> 
                      <label style="font-weight: normal;" for="math59"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q135" value="<?php echo $row['choice_four']; ?>" id="math60" onclick="hundredThreefive();"> 
                      <label style="font-weight: normal;" for="math60"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredThreefive() {
                            var a = document.getElementById("math57").value;
                            var b = document.getElementById("math58").value;
                            var c = document.getElementById("math59").value;
                            var d = document.getElementById("math60").value;
                            var x = document.getElementById("ans_q135");

                                 if(document.getElementById('math57').checked) { x.value = a; }
                            else if(document.getElementById('math58').checked) { x.value = b; } 
                            else if(document.getElementById('math59').checked) { x.value = c; } 
                            else if(document.getElementById('math60').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 15, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredThirtysix" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredThirtysix" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q136" class="form-control form-control-sm" name="ans_q136" value="NA">
                      <h5><b>136.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q136" value="<?php echo $row['choice_one']; ?>" id="math61" onclick="hundredThreesix();"> 
                      <label style="font-weight: normal;" for="math61"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q136" value="<?php echo $row['choice_two']; ?>" id="math62" onclick="hundredThreesix();"> 
                      <label style="font-weight: normal;" for="math62"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q136" value="<?php echo $row['choice_three']; ?>" id="math63" onclick="hundredThreesix();"> 
                      <label style="font-weight: normal;" for="math63"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q136" value="<?php echo $row['choice_four']; ?>" id="math64" onclick="hundredThreesix();"> 
                      <label style="font-weight: normal;" for="math64"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredThreesix() {
                            var a = document.getElementById("math61").value;
                            var b = document.getElementById("math62").value;
                            var c = document.getElementById("math63").value;
                            var d = document.getElementById("math64").value;
                            var x = document.getElementById("ans_q136");

                                 if(document.getElementById('math61').checked) { x.value = a; }
                            else if(document.getElementById('math62').checked) { x.value = b; } 
                            else if(document.getElementById('math63').checked) { x.value = c; } 
                            else if(document.getElementById('math64').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 16, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredThirtyseven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredThirtyseven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q137" class="form-control form-control-sm" name="ans_q137" value="NA">
                      <h5><b>137.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q137" value="<?php echo $row['choice_one']; ?>" id="math65" onclick="hundredThreeseven();"> 
                      <label style="font-weight: normal;" for="math65"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q137" value="<?php echo $row['choice_two']; ?>" id="math66" onclick="hundredThreeseven();"> 
                      <label style="font-weight: normal;" for="math66"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q137" value="<?php echo $row['choice_three']; ?>" id="math67" onclick="hundredThreeseven();"> 
                      <label style="font-weight: normal;" for="math67"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q137" value="<?php echo $row['choice_four']; ?>" id="math68" onclick="hundredThreeseven();"> 
                      <label style="font-weight: normal;" for="math68"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredThreeseven() {
                            var a = document.getElementById("math65").value;
                            var b = document.getElementById("math66").value;
                            var c = document.getElementById("math67").value;
                            var d = document.getElementById("math68").value;
                            var x = document.getElementById("ans_q137");

                                 if(document.getElementById('math65').checked) { x.value = a; }
                            else if(document.getElementById('math66').checked) { x.value = b; } 
                            else if(document.getElementById('math67').checked) { x.value = c; } 
                            else if(document.getElementById('math68').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 17, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredThirtyeight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredThirtyeight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q138" class="form-control form-control-sm" name="ans_q138" value="NA">
                      <h5><b>138.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q138" value="<?php echo $row['choice_one']; ?>" id="math69" onclick="hundredThreeeight();"> 
                      <label style="font-weight: normal;" for="math69"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q138" value="<?php echo $row['choice_two']; ?>" id="math70" onclick="hundredThreeeight();"> 
                      <label style="font-weight: normal;" for="math70"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q138" value="<?php echo $row['choice_three']; ?>" id="math71" onclick="hundredThreeeight();"> 
                      <label style="font-weight: normal;" for="math71"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q138" value="<?php echo $row['choice_four']; ?>" id="math72" onclick="hundredThreeeight();"> 
                      <label style="font-weight: normal;" for="math72"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredThreeeight() {
                            var a = document.getElementById("math69").value;
                            var b = document.getElementById("math70").value;
                            var c = document.getElementById("math71").value;
                            var d = document.getElementById("math72").value;
                            var x = document.getElementById("ans_q138");

                                 if(document.getElementById('math69').checked) { x.value = a; }
                            else if(document.getElementById('math70').checked) { x.value = b; } 
                            else if(document.getElementById('math71').checked) { x.value = c; } 
                            else if(document.getElementById('math72').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 18, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredThirtynine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredThirtynine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q139" class="form-control form-control-sm" name="ans_q139" value="NA">
                      <h5><b>139.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q139" value="<?php echo $row['choice_one']; ?>" id="math73" onclick="hundredThreenine();"> 
                      <label style="font-weight: normal;" for="math73"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q139" value="<?php echo $row['choice_two']; ?>" id="math74" onclick="hundredThreenine();"> 
                      <label style="font-weight: normal;" for="math74"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q139" value="<?php echo $row['choice_three']; ?>" id="math75" onclick="hundredThreenine();"> 
                      <label style="font-weight: normal;" for="math75"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q139" value="<?php echo $row['choice_four']; ?>" id="math76" onclick="hundredThreenine();"> 
                      <label style="font-weight: normal;" for="math76"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredThreenine() {
                            var a = document.getElementById("math73").value;
                            var b = document.getElementById("math74").value;
                            var c = document.getElementById("math75").value;
                            var d = document.getElementById("math76").value;
                            var x = document.getElementById("ans_q139");

                                 if(document.getElementById('math73').checked) { x.value = a; }
                            else if(document.getElementById('math74').checked) { x.value = b; } 
                            else if(document.getElementById('math75').checked) { x.value = c; } 
                            else if(document.getElementById('math76').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 19, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredFourty" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredFourty" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q140" class="form-control form-control-sm" name="ans_q140" value="NA">
                      <h5><b>140.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q140" value="<?php echo $row['choice_one']; ?>" id="math77" onclick="hundredFourzero();"> 
                      <label style="font-weight: normal;" for="math77"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q140" value="<?php echo $row['choice_two']; ?>" id="math78" onclick="hundredFourzero();"> 
                      <label style="font-weight: normal;" for="math78"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q140" value="<?php echo $row['choice_three']; ?>" id="math79" onclick="hundredFourzero();"> 
                      <label style="font-weight: normal;" for="math79"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q140" value="<?php echo $row['choice_four']; ?>" id="math80" onclick="hundredFourzero();"> 
                      <label style="font-weight: normal;" for="math80"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredFourzero() {
                            var a = document.getElementById("math77").value;
                            var b = document.getElementById("math78").value;
                            var c = document.getElementById("math79").value;
                            var d = document.getElementById("math80").value;
                            var x = document.getElementById("ans_q140");

                                 if(document.getElementById('math77').checked) { x.value = a; }
                            else if(document.getElementById('math78').checked) { x.value = b; } 
                            else if(document.getElementById('math79').checked) { x.value = c; } 
                            else if(document.getElementById('math80').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                    </div>

                  