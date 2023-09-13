<!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h4 class="bg-light text-center">Mathematics category</h4>
                      <hr>
                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 20, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredFourone" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredFourone" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q141" class="form-control form-control-sm" name="ans_q141" value="NA">
                      <h5><b>141.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q141" value="<?php echo $row['choice_one']; ?>" id="ma1" onclick="hundredFourOne();"> 
                      <label style="font-weight: normal;" for="ma1"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q141" value="<?php echo $row['choice_two']; ?>" id="ma2" onclick="hundredFourOne();"> 
                      <label style="font-weight: normal;" for="ma2"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q141" value="<?php echo $row['choice_three']; ?>" id="ma3" onclick="hundredFourOne();"> 
                      <label style="font-weight: normal;" for="ma3"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q141" value="<?php echo $row['choice_four']; ?>" id="ma4" onclick="hundredFourOne();"> 
                      <label style="font-weight: normal;" for="ma4"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFourOne() {
                            var a = document.getElementById("ma1").value;
                            var b = document.getElementById("ma2").value;
                            var c = document.getElementById("ma3").value;
                            var d = document.getElementById("ma4").value;
                            var x = document.getElementById("ans_q141");

                                 if(document.getElementById('ma1').checked) { x.value = a; }
                            else if(document.getElementById('ma2').checked) { x.value = b; } 
                            else if(document.getElementById('ma3').checked) { x.value = c; } 
                            else if(document.getElementById('ma4').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                       <?php           
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 21, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredFourtwo" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredFourtwo" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q142" class="form-control form-control-sm" name="ans_q142" value="NA">
                      <h5><b>142.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q142" value="<?php echo $row['choice_one']; ?>" id="hma5" onclick="hundredFourTwo();"> 
                      <label style="font-weight: normal;" for="hma5"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q142" value="<?php echo $row['choice_two']; ?>" id="hma6" onclick="hundredFourTwo();"> 
                      <label style="font-weight: normal;" for="hma6"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q142" value="<?php echo $row['choice_three']; ?>" id="hma7" onclick="hundredFourTwo();"> 
                      <label style="font-weight: normal;" for="hma7"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q142" value="<?php echo $row['choice_four']; ?>" id="hma8" onclick="hundredFourTwo();"> 
                      <label style="font-weight: normal;" for="hma8"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFourTwo() {
                            var a = document.getElementById("hma5").value;
                            var b = document.getElementById("hma6").value;
                            var c = document.getElementById("hma7").value;
                            var d = document.getElementById("hma8").value;
                            var x = document.getElementById("ans_q142");

                                 if(document.getElementById('hma5').checked) { x.value = a; }
                            else if(document.getElementById('hma6').checked) { x.value = b; } 
                            else if(document.getElementById('hma7').checked) { x.value = c; } 
                            else if(document.getElementById('hma8').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 22, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Fourthree" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Fourthree" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q143" class="form-control form-control-sm" name="ans_q143" value="NA">
                      <h5><b>143.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q143" value="<?php echo $row['choice_one']; ?>" id="ma9" onclick="hundredFourthree();"> 
                      <label style="font-weight: normal;" for="ma9"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q143" value="<?php echo $row['choice_two']; ?>" id="ma10" onclick="hundredFourthree();"> 
                      <label style="font-weight: normal;" for="ma10"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q143" value="<?php echo $row['choice_three']; ?>" id="ma11" onclick="hundredFourthree();"> 
                      <label style="font-weight: normal;" for="ma11"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q143" value="<?php echo $row['choice_four']; ?>" id="ma12" onclick="hundredFourthree();"> 
                      <label style="font-weight: normal;" for="ma12"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredFourthree() {
                            var a = document.getElementById("ma9").value;
                            var b = document.getElementById("ma10").value;
                            var c = document.getElementById("ma11").value;
                            var d = document.getElementById("ma12").value;
                            var x = document.getElementById("ans_q143");

                                 if(document.getElementById('ma9').checked) { x.value = a; }
                            else if(document.getElementById('ma10').checked) { x.value = b; } 
                            else if(document.getElementById('ma11').checked) { x.value = c; } 
                            else if(document.getElementById('ma12').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 23, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Fourfour" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Fourfour" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q144" class="form-control form-control-sm" name="ans_q144" value="NA">
                      <h5><b>144.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q144" value="<?php echo $row['choice_one']; ?>" id="ma13" onclick="hundredFourfour();"> 
                      <label style="font-weight: normal;" for="ma13"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q144" value="<?php echo $row['choice_two']; ?>" id="ma14" onclick="hundredFourfour();"> 
                      <label style="font-weight: normal;" for="ma14"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q144" value="<?php echo $row['choice_three']; ?>" id="ma15" onclick="hundredFourfour();"> 
                      <label style="font-weight: normal;" for="ma15"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q144" value="<?php echo $row['choice_four']; ?>" id="ma16" onclick="hundredFourfour();"> 
                      <label style="font-weight: normal;" for="ma16"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredFourfour() {
                            var a = document.getElementById("ma13").value;
                            var b = document.getElementById("ma14").value;
                            var c = document.getElementById("ma15").value;
                            var d = document.getElementById("ma16").value;
                            var x = document.getElementById("ans_q144");

                                 if(document.getElementById('ma13').checked) { x.value = a; }
                            else if(document.getElementById('ma14').checked) { x.value = b; } 
                            else if(document.getElementById('ma15').checked) { x.value = c; } 
                            else if(document.getElementById('ma16').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 24, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Fourfive" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Fourfive" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q145" class="form-control form-control-sm" name="ans_q145" value="NA">
                      <h5><b>145.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q145" value="<?php echo $row['choice_one']; ?>" id="ma17" onclick="hundredFourfive();"> 
                      <label style="font-weight: normal;" for="ma17"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q145" value="<?php echo $row['choice_two']; ?>" id="ma18" onclick="hundredFourfive();"> 
                      <label style="font-weight: normal;" for="ma18"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q145" value="<?php echo $row['choice_three']; ?>" id="ma19" onclick="hundredFourfive();"> 
                      <label style="font-weight: normal;" for="ma19"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q145" value="<?php echo $row['choice_four']; ?>" id="ma20" onclick="hundredFourfive();"> 
                      <label style="font-weight: normal;" for="ma20"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFourfive() {
                            var a = document.getElementById("ma17").value;
                            var b = document.getElementById("ma18").value;
                            var c = document.getElementById("ma19").value;
                            var d = document.getElementById("ma20").value;
                            var x = document.getElementById("ans_q145");

                                 if(document.getElementById('ma17').checked) { x.value = a; }
                            else if(document.getElementById('ma18').checked) { x.value = b; } 
                            else if(document.getElementById('ma19').checked) { x.value = c; } 
                            else if(document.getElementById('ma20').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 25, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Foursix" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Foursix" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q146" class="form-control form-control-sm" name="ans_q146" value="NA">
                      <h5><b>146.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q146" value="<?php echo $row['choice_one']; ?>" id="ma21" onclick="hundredFoursix();"> 
                      <label style="font-weight: normal;" for="ma21"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q146" value="<?php echo $row['choice_two']; ?>" id="ma22" onclick="hundredFoursix();"> 
                      <label style="font-weight: normal;" for="ma22"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q146" value="<?php echo $row['choice_three']; ?>" id="ma23" onclick="hundredFoursix();"> 
                      <label style="font-weight: normal;" for="ma23"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q146" value="<?php echo $row['choice_four']; ?>" id="ma24" onclick="hundredFoursix();"> 
                      <label style="font-weight: normal;" for="ma24"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFoursix() {
                            var a = document.getElementById("ma21").value;
                            var b = document.getElementById("ma22").value;
                            var c = document.getElementById("ma23").value;
                            var d = document.getElementById("ma24").value;
                            var x = document.getElementById("ans_q146");

                                 if(document.getElementById('ma21').checked) { x.value = a; }
                            else if(document.getElementById('ma22').checked) { x.value = b; } 
                            else if(document.getElementById('ma23').checked) { x.value = c; } 
                            else if(document.getElementById('ma24').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 26, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Fourseven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Fourseven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q147" class="form-control form-control-sm" name="ans_q147" value="NA">
                      <h5><b>147.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q147" value="<?php echo $row['choice_one']; ?>" id="ma25" onclick="hundredFourseven();"> 
                      <label style="font-weight: normal;" for="ma25"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q147" value="<?php echo $row['choice_two']; ?>" id="ma26" onclick="hundredFourseven();"> 
                      <label style="font-weight: normal;" for="ma26"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q147" value="<?php echo $row['choice_three']; ?>" id="ma27" onclick="hundredFourseven();"> 
                      <label style="font-weight: normal;" for="ma27"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q147" value="<?php echo $row['choice_four']; ?>" id="ma28" onclick="hundredFourseven();"> 
                      <label style="font-weight: normal;" for="ma28"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFourseven() {
                            var a = document.getElementById("ma25").value;
                            var b = document.getElementById("ma26").value;
                            var c = document.getElementById("ma27").value;
                            var d = document.getElementById("ma28").value;
                            var x = document.getElementById("ans_q147");

                                 if(document.getElementById('ma25').checked) { x.value = a; }
                            else if(document.getElementById('ma26').checked) { x.value = b; } 
                            else if(document.getElementById('ma27').checked) { x.value = c; } 
                            else if(document.getElementById('ma28').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 27, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Foureight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Foureight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q148" class="form-control form-control-sm" name="ans_q148" value="NA">
                      <h5><b>148.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q148" value="<?php echo $row['choice_one']; ?>" id="ma29" onclick="hundredFoureight();"> 
                      <label style="font-weight: normal;" for="ma29"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q148" value="<?php echo $row['choice_two']; ?>" id="ma30" onclick="hundredFoureight();"> 
                      <label style="font-weight: normal;" for="ma30"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q148" value="<?php echo $row['choice_three']; ?>" id="ma31" onclick="hundredFoureight();"> 
                      <label style="font-weight: normal;" for="ma31"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q148" value="<?php echo $row['choice_four']; ?>" id="ma32" onclick="hundredFoureight();"> 
                      <label style="font-weight: normal;" for="ma32"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFoureight() {
                            var a = document.getElementById("ma29").value;
                            var b = document.getElementById("ma30").value;
                            var c = document.getElementById("ma31").value;
                            var d = document.getElementById("ma32").value;
                            var x = document.getElementById("ans_q148");

                                 if(document.getElementById('ma29').checked) { x.value = a; }
                            else if(document.getElementById('ma30').checked) { x.value = b; } 
                            else if(document.getElementById('ma31').checked) { x.value = c; } 
                            else if(document.getElementById('ma32').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 28, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Fournine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Fournine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q149" class="form-control form-control-sm" name="ans_q149" value="NA">
                      <h5><b>149.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q149" value="<?php echo $row['choice_one']; ?>" id="ma33" onclick="hundredFournine();"> 
                      <label style="font-weight: normal;" for="ma33"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q149" value="<?php echo $row['choice_two']; ?>" id="ma34" onclick="hundredFournine();"> 
                      <label style="font-weight: normal;" for="ma34"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q149" value="<?php echo $row['choice_three']; ?>" id="ma35" onclick="hundredFournine();"> 
                      <label style="font-weight: normal;" for="ma35"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q149" value="<?php echo $row['choice_four']; ?>" id="ma36" onclick="hundredFournine();"> 
                      <label style="font-weight: normal;" for="ma36"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFournine() {
                            var a = document.getElementById("ma33").value;
                            var b = document.getElementById("ma34").value;
                            var c = document.getElementById("ma35").value;
                            var d = document.getElementById("ma36").value;
                            var x = document.getElementById("mans_q149");

                                 if(document.getElementById('ma33').checked) { x.value = a; }
                            else if(document.getElementById('ma34').checked) { x.value = b; } 
                            else if(document.getElementById('ma35').checked) { x.value = c; } 
                            else if(document.getElementById('ma36').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 29, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredFivezero" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredFivezero" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q150" class="form-control form-control-sm" name="ans_q150" value="NA">
                      <h5><b>150.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q150" value="<?php echo $row['choice_one']; ?>" id="ma37" onclick="hundredFiveZero();"> 
                      <label style="font-weight: normal;" for="ma37"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q150" value="<?php echo $row['choice_two']; ?>" id="ma38" onclick="hundredFiveZero();"> 
                      <label style="font-weight: normal;" for="ma38"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q150" value="<?php echo $row['choice_three']; ?>" id="ma39" onclick="hundredFiveZero();"> 
                      <label style="font-weight: normal;" for="ma39"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q150" value="<?php echo $row['choice_four']; ?>" id="ma40" onclick="hundredFiveZero();"> 
                      <label style="font-weight: normal;" for="ma40"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFiveZero() {
                            var a = document.getElementById("ma37").value;
                            var b = document.getElementById("ma38").value;
                            var c = document.getElementById("ma39").value;
                            var d = document.getElementById("ma40").value;
                            var x = document.getElementById("ans_q150");

                                 if(document.getElementById('ma37').checked) { x.value = a; }
                            else if(document.getElementById('ma38').checked) { x.value = b; } 
                            else if(document.getElementById('ma39').checked) { x.value = c; } 
                            else if(document.getElementById('ma40').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 30, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Fiveone" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Fiveone" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q151" class="form-control form-control-sm" name="ans_q151" value="NA">
                      <h5><b>151.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q151" value="<?php echo $row['choice_one']; ?>" id="ma41" onclick="hundredFiveone();"> 
                      <label style="font-weight: normal;" for="ma41"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q151" value="<?php echo $row['choice_two']; ?>" id="ma42" onclick="hundredFiveone();"> 
                      <label style="font-weight: normal;" for="ma42"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q151" value="<?php echo $row['choice_three']; ?>" id="ma43" onclick="hundredFiveone();"> 
                      <label style="font-weight: normal;" for="ma43"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q151" value="<?php echo $row['choice_four']; ?>" id="ma44" onclick="hundredFiveone();"> 
                      <label style="font-weight: normal;" for="ma44"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredFiveone() {
                            var a = document.getElementById("ma41").value;
                            var b = document.getElementById("ma42").value;
                            var c = document.getElementById("ma43").value;
                            var d = document.getElementById("ma44").value;
                            var x = document.getElementById("ans_q151");

                                 if(document.getElementById('ma41').checked) { x.value = a; }
                            else if(document.getElementById('ma42').checked) { x.value = b; } 
                            else if(document.getElementById('ma43').checked) { x.value = c; } 
                            else if(document.getElementById('ma44').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 31, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_FiveTwo" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_FiveTwo" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q152" class="form-control form-control-sm" name="ans_q152" value="NA">
                      <h5><b>152.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q152" value="<?php echo $row['choice_one']; ?>" id="ma45" onclick="hundredFiveTwo();"> 
                      <label style="font-weight: normal;" for="ma45"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q152" value="<?php echo $row['choice_two']; ?>" id="ma46" onclick="hundredFiveTwo();"> 
                      <label style="font-weight: normal;" for="ma46"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q152" value="<?php echo $row['choice_three']; ?>" id="ma47" onclick="hundredFiveTwo();"> 
                      <label style="font-weight: normal;" for="ma47"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q152" value="<?php echo $row['choice_four']; ?>" id="ma48" onclick="hundredFiveTwo();"> 
                      <label style="font-weight: normal;" for="ma48"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredFiveTwo() {
                            var a = document.getElementById("ma45").value;
                            var b = document.getElementById("ma46").value;
                            var c = document.getElementById("ma47").value;
                            var d = document.getElementById("ma48").value;
                            var x = document.getElementById("ans_q152");

                                 if(document.getElementById('ma45').checked) { x.value = a; }
                            else if(document.getElementById('ma46').checked) { x.value = b; } 
                            else if(document.getElementById('ma47').checked) { x.value = c; } 
                            else if(document.getElementById('ma48').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 32, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Fivethree" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Fivethree" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q153" class="form-control form-control-sm" name="ans_q153" value="NA">
                      <h5><b>153.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q153" value="<?php echo $row['choice_one']; ?>" id="ma49" onclick="hundreFivethree();"> 
                      <label style="font-weight: normal;" for="ma49"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q153" value="<?php echo $row['choice_two']; ?>" id="ma50" onclick="hundreFivethree();"> 
                      <label style="font-weight: normal;" for="ma50"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q153" value="<?php echo $row['choice_three']; ?>" id="ma51" onclick="hundreFivethree();"> 
                      <label style="font-weight: normal;" for="ma51"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q153" value="<?php echo $row['choice_four']; ?>" id="ma52" onclick="hundreFivethree();"> 
                      <label style="font-weight: normal;" for="ma52"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundreFivethree() {
                            var a = document.getElementById("ma49").value;
                            var b = document.getElementById("ma50").value;
                            var c = document.getElementById("ma51").value;
                            var d = document.getElementById("ma52").value;
                            var x = document.getElementById("ans_q153");

                                 if(document.getElementById('ma49').checked) { x.value = a; }
                            else if(document.getElementById('ma50').checked) { x.value = b; } 
                            else if(document.getElementById('ma51').checked) { x.value = c; } 
                            else if(document.getElementById('ma52').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 33, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredTFivefour" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredTFivefour" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q154" class="form-control form-control-sm" name="ans_q154" value="NA">
                      <h5><b>154.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q154" value="<?php echo $row['choice_one']; ?>" id="ma53" onclick="hundredFivefour();"> 
                      <label style="font-weight: normal;" for="ma53"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q154" value="<?php echo $row['choice_two']; ?>" id="ma54" onclick="hundredFivefour();"> 
                      <label style="font-weight: normal;" for="ma54"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q154" value="<?php echo $row['choice_three']; ?>" id="ma55" onclick="hundredFivefour();"> 
                      <label style="font-weight: normal;" for="ma55"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q154" value="<?php echo $row['choice_four']; ?>" id="ma56" onclick="hundredFivefour();"> 
                      <label style="font-weight: normal;" for="ma56"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFivefour() {
                            var a = document.getElementById("ma53").value;
                            var b = document.getElementById("ma54").value;
                            var c = document.getElementById("ma55").value;
                            var d = document.getElementById("ma56").value;
                            var x = document.getElementById("ans_q154");

                                 if(document.getElementById('ma53').checked) { x.value = a; }
                            else if(document.getElementById('ma54').checked) { x.value = b; } 
                            else if(document.getElementById('ma55').checked) { x.value = c; } 
                            else if(document.getElementById('ma56').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                       $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 34, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredFivefive" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredFivefive" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q155" class="form-control form-control-sm" name="ans_q155" value="NA">
                      <h5><b>155.</b><?php echo $row['question']; ?></h5>
                      <input type="radio" name="q155" value="<?php echo $row['choice_one']; ?>" id="ma57" onclick="hundreFivefive();"> 
                      <label style="font-weight: normal;" for="ma57"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q155" value="<?php echo $row['choice_two']; ?>" id="ma58" onclick="hundreFivefive();"> 
                      <label style="font-weight: normal;" for="ma58"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q155" value="<?php echo $row['choice_three']; ?>" id="ma59" onclick="hundreFivefive();"> 
                      <label style="font-weight: normal;" for="ma59"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q155" value="<?php echo $row['choice_four']; ?>" id="ma60" onclick="hundreFivefive();"> 
                      <label style="font-weight: normal;" for="ma60"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundreFivefive() {
                            var a = document.getElementById("ma57").value;
                            var b = document.getElementById("ma58").value;
                            var c = document.getElementById("ma59").value;
                            var d = document.getElementById("ma60").value;
                            var x = document.getElementById("ans_q155");

                                 if(document.getElementById('ma57').checked) { x.value = a; }
                            else if(document.getElementById('ma58').checked) { x.value = b; } 
                            else if(document.getElementById('ma59').checked) { x.value = c; } 
                            else if(document.getElementById('ma60').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 35, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredTFivesix" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredTFivesix" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q156" class="form-control form-control-sm" name="ans_q156" value="NA">
                      <h5><b>156.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q156" value="<?php echo $row['choice_one']; ?>" id="ma61" onclick="hundredFivesix();"> 
                      <label style="font-weight: normal;" for="ma61"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q156" value="<?php echo $row['choice_two']; ?>" id="ma62" onclick="hundredFivesix();"> 
                      <label style="font-weight: normal;" for="ma62"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q156" value="<?php echo $row['choice_three']; ?>" id="ma63" onclick="hundredFivesix();"> 
                      <label style="font-weight: normal;" for="ma63"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q156" value="<?php echo $row['choice_four']; ?>" id="ma64" onclick="hundredFivesix();"> 
                      <label style="font-weight: normal;" for="ma64"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFivesix() {
                            var a = document.getElementById("ma61").value;
                            var b = document.getElementById("ma62").value;
                            var c = document.getElementById("ma63").value;
                            var d = document.getElementById("ma64").value;
                            var x = document.getElementById("ans_q156");

                                 if(document.getElementById('ma61').checked) { x.value = a; }
                            else if(document.getElementById('ma62').checked) { x.value = b; } 
                            else if(document.getElementById('ma63').checked) { x.value = c; } 
                            else if(document.getElementById('ma64').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 36, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredTFiveseven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredTFiveseven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q157" class="form-control form-control-sm" name="ans_q157" value="NA">
                      <h5><b>157.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q157" value="<?php echo $row['choice_one']; ?>" id="ma65" onclick="hundredFiveseven();"> 
                      <label style="font-weight: normal;" for="ma65"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q157" value="<?php echo $row['choice_two']; ?>" id="ma66" onclick="hundredFiveseven();"> 
                      <label style="font-weight: normal;" for="ma66"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q157" value="<?php echo $row['choice_three']; ?>" id="ma67" onclick="hundredFiveseven();"> 
                      <label style="font-weight: normal;" for="ma67"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q157" value="<?php echo $row['choice_four']; ?>" id="ma68" onclick="hundredFiveseven();"> 
                      <label style="font-weight: normal;" for="ma68"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredFiveseven() {
                            var a = document.getElementById("ma65").value;
                            var b = document.getElementById("ma66").value;
                            var c = document.getElementById("ma67").value;
                            var d = document.getElementById("ma68").value;
                            var x = document.getElementById("ans_q157");

                                 if(document.getElementById('ma65').checked) { x.value = a; }
                            else if(document.getElementById('ma66').checked) { x.value = b; } 
                            else if(document.getElementById('ma67').checked) { x.value = c; } 
                            else if(document.getElementById('ma68').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 37, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredTFiveeight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredTFiveeight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q158" class="form-control form-control-sm" name="ans_q158" value="NA">
                      <h5><b>158.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q158" value="<?php echo $row['choice_one']; ?>" id="hma69" onclick="hundredFiveeight();"> 
                      <label style="font-weight: normal;" for="hma69"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q158" value="<?php echo $row['choice_two']; ?>" id="hma70" onclick="hundredFiveeight();"> 
                      <label style="font-weight: normal;" for="hma70"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q158" value="<?php echo $row['choice_three']; ?>" id="hma71" onclick="hundredFiveeight();"> 
                      <label style="font-weight: normal;" for="hma71"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q158" value="<?php echo $row['choice_four']; ?>" id="hma72" onclick="hundredFiveeight();"> 
                      <label style="font-weight: normal;" for="hma72"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredFiveeight() {
                            var a = document.getElementById("hma69").value;
                            var b = document.getElementById("hma70").value;
                            var c = document.getElementById("hma71").value;
                            var d = document.getElementById("hma72").value;
                            var x = document.getElementById("ans_q158");

                                 if(document.getElementById('hma69').checked) { x.value = a; }
                            else if(document.getElementById('hma70').checked) { x.value = b; } 
                            else if(document.getElementById('hma71').checked) { x.value = c; } 
                            else if(document.getElementById('hma72').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 38, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredFivenine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredFivenine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q159" class="form-control form-control-sm" name="ans_q159" value="NA">
                      <h5><b>159.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q159" value="<?php echo $row['choice_one']; ?>" id="ma73" onclick="hundredFiveNine();"> 
                      <label style="font-weight: normal;" for="ma73"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q159" value="<?php echo $row['choice_two']; ?>" id="ma74" onclick="hundredFiveNine();"> 
                      <label style="font-weight: normal;" for="ma74"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q159" value="<?php echo $row['choice_three']; ?>" id="ma75" onclick="hundredFiveNine();"> 
                      <label style="font-weight: normal;" for="ma75"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q159" value="<?php echo $row['choice_four']; ?>" id="ma76" onclick="hundredFiveNine();"> 
                      <label style="font-weight: normal;" for="ma76"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredFiveNine() {
                            var a = document.getElementById("ma73").value;
                            var b = document.getElementById("ma74").value;
                            var c = document.getElementById("ma75").value;
                            var d = document.getElementById("ma76").value;
                            var x = document.getElementById("ans_q159");

                                 if(document.getElementById('ma73').checked) { x.value = a; }
                            else if(document.getElementById('ma74').checked) { x.value = b; } 
                            else if(document.getElementById('ma75').checked) { x.value = c; } 
                            else if(document.getElementById('ma76').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 39, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredSixzero" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredSixzero" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q160" class="form-control form-control-sm" name="ans_q160" value="NA">
                      <h5><b>160.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q160" value="<?php echo $row['choice_one']; ?>" id="ma77" onclick="hundredSixZero();"> 
                      <label style="font-weight: normal;" for="ma77"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q160" value="<?php echo $row['choice_two']; ?>" id="ma78" onclick="hundredSixZero();"> 
                      <label style="font-weight: normal;" for="ma78"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q160" value="<?php echo $row['choice_three']; ?>" id="ma79" onclick="hundredSixZero();"> 
                      <label style="font-weight: normal;" for="ma79"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q160" value="<?php echo $row['choice_four']; ?>" id="ma80" onclick="hundredSixZero();"> 
                      <label style="font-weight: normal;" for="ma80"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredSixZero() {
                            var a = document.getElementById("ma77").value;
                            var b = document.getElementById("ma78").value;
                            var c = document.getElementById("ma79").value;
                            var d = document.getElementById("ma80").value;
                            var x = document.getElementById("ans_q160");

                                 if(document.getElementById('ma77').checked) { x.value = a; }
                            else if(document.getElementById('ma78').checked) { x.value = b; } 
                            else if(document.getElementById('ma79').checked) { x.value = c; } 
                            else if(document.getElementById('ma80').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                    </div>

                  