<!-- One "tab" for each step in the form: -->
                    <div class="tab">
                      <h4 class="bg-light text-center">Mathematics category</h4>
                      <hr>
                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 40, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredSixone" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredSixone" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q161" class="form-control form-control-sm" name="ans_q161" value="NA">
                      <h5><b>161.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q161" value="<?php echo $row['choice_one']; ?>" id="mat1" onclick="hundredSixOne();"> 
                      <label style="font-weight: normal;" for="mat1"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q161" value="<?php echo $row['choice_two']; ?>" id="mat2" onclick="hundredSixOne();"> 
                      <label style="font-weight: normal;" for="mat2"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q161" value="<?php echo $row['choice_three']; ?>" id="mat3" onclick="hundredSixOne();"> 
                      <label style="font-weight: normal;" for="mat3"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q161" value="<?php echo $row['choice_four']; ?>" id="mat4" onclick="hundredSixOne();"> 
                      <label style="font-weight: normal;" for="mat4"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSixOne() {
                            var a = document.getElementById("mat1").value;
                            var b = document.getElementById("mat2").value;
                            var c = document.getElementById("mat3").value;
                            var d = document.getElementById("mat4").value;
                            var x = document.getElementById("ans_q161");

                                 if(document.getElementById('mat1').checked) { x.value = a; }
                            else if(document.getElementById('mat2').checked) { x.value = b; } 
                            else if(document.getElementById('mat3').checked) { x.value = c; } 
                            else if(document.getElementById('mat4').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                       <?php           
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 41, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredSixtwo" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredSixtwo" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q162" class="form-control form-control-sm" name="ans_q162" value="NA">
                      <h5><b>162.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q162" value="<?php echo $row['choice_one']; ?>" id="mat5" onclick="hundredSixTwo();"> 
                      <label style="font-weight: normal;" for="mat5"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q162" value="<?php echo $row['choice_two']; ?>" id="mat6" onclick="hundredSixTwo();"> 
                      <label style="font-weight: normal;" for="mat6"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q162" value="<?php echo $row['choice_three']; ?>" id="mat7" onclick="hundredSixTwo();"> 
                      <label style="font-weight: normal;" for="mat7"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q162" value="<?php echo $row['choice_four']; ?>" id="mat8" onclick="hundredSixTwo();"> 
                      <label style="font-weight: normal;" for="mat8"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSixTwo() {
                            var a = document.getElementById("mat5").value;
                            var b = document.getElementById("mat6").value;
                            var c = document.getElementById("mat7").value;
                            var d = document.getElementById("mat8").value;
                            var x = document.getElementById("ans_q162");

                                 if(document.getElementById('mat5').checked) { x.value = a; }
                            else if(document.getElementById('mat6').checked) { x.value = b; } 
                            else if(document.getElementById('mat7').checked) { x.value = c; } 
                            else if(document.getElementById('mat8').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 42, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Sixthree" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Sixthree" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q163" class="form-control form-control-sm" name="ans_q163" value="NA">
                      <h5><b>163.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q163" value="<?php echo $row['choice_one']; ?>" id="mat9" onclick="hundredSixthree();"> 
                      <label style="font-weight: normal;" for="mat9"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q163" value="<?php echo $row['choice_two']; ?>" id="mat10" onclick="hundredSixthree();"> 
                      <label style="font-weight: normal;" for="mat10"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q163" value="<?php echo $row['choice_three']; ?>" id="mat11" onclick="hundredSixthree();"> 
                      <label style="font-weight: normal;" for="mat11"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q163" value="<?php echo $row['choice_four']; ?>" id="mat12" onclick="hundredSixthree();"> 
                      <label style="font-weight: normal;" for="mat12"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredSixthree() {
                            var a = document.getElementById("mat9").value;
                            var b = document.getElementById("mat10").value;
                            var c = document.getElementById("mat11").value;
                            var d = document.getElementById("mat12").value;
                            var x = document.getElementById("ans_q163");

                                 if(document.getElementById('mat9').checked) { x.value = a; }
                            else if(document.getElementById('mat10').checked) { x.value = b; } 
                            else if(document.getElementById('mat11').checked) { x.value = c; } 
                            else if(document.getElementById('mat12').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 43, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Sixfour" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Sixfour" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q164" class="form-control form-control-sm" name="ans_q164" value="NA">
                      <h5><b>164.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q164" value="<?php echo $row['choice_one']; ?>" id="mat13" onclick="hundredSixfour();"> 
                      <label style="font-weight: normal;" for="mat13"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q164" value="<?php echo $row['choice_two']; ?>" id="mat14" onclick="hundredSixfour();"> 
                      <label style="font-weight: normal;" for="mat14"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q164" value="<?php echo $row['choice_three']; ?>" id="mat15" onclick="hundredSixfour();"> 
                      <label style="font-weight: normal;" for="mat15"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q164" value="<?php echo $row['choice_four']; ?>" id="mat16" onclick="hundredSixfour();"> 
                      <label style="font-weight: normal;" for="mat16"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredSixfour() {
                            var a = document.getElementById("mat13").value;
                            var b = document.getElementById("mat14").value;
                            var c = document.getElementById("mat15").value;
                            var d = document.getElementById("mat16").value;
                            var x = document.getElementById("ans_q164");

                                 if(document.getElementById('mat13').checked) { x.value = a; }
                            else if(document.getElementById('mat14').checked) { x.value = b; } 
                            else if(document.getElementById('mat15').checked) { x.value = c; } 
                            else if(document.getElementById('mat16').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 44, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Sixfive" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Sixfive" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q165" class="form-control form-control-sm" name="ans_q165" value="NA">
                      <h5><b>165.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q165" value="<?php echo $row['choice_one']; ?>" id="mat17" onclick="hundredSixfive();"> 
                      <label style="font-weight: normal;" for="mat17"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q165" value="<?php echo $row['choice_two']; ?>" id="mat18" onclick="hundredSixfive();"> 
                      <label style="font-weight: normal;" for="mat18"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q165" value="<?php echo $row['choice_three']; ?>" id="mat19" onclick="hundredSixfive();"> 
                      <label style="font-weight: normal;" for="mat19"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q165" value="<?php echo $row['choice_four']; ?>" id="mat20" onclick="hundredSixfive();"> 
                      <label style="font-weight: normal;" for="mat20"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSixfive() {
                            var a = document.getElementById("mat17").value;
                            var b = document.getElementById("mat18").value;
                            var c = document.getElementById("mat19").value;
                            var d = document.getElementById("mat20").value;
                            var x = document.getElementById("ans_q165");

                                 if(document.getElementById('mat17').checked) { x.value = a; }
                            else if(document.getElementById('mat18').checked) { x.value = b; } 
                            else if(document.getElementById('mat19').checked) { x.value = c; } 
                            else if(document.getElementById('mat20').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 45, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Sixsix" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Sixsix" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q166" class="form-control form-control-sm" name="ans_q166" value="NA">
                      <h5><b>166.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q166" value="<?php echo $row['choice_one']; ?>" id="mat21" onclick="hundredSixsix();"> 
                      <label style="font-weight: normal;" for="mat21"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q166" value="<?php echo $row['choice_two']; ?>" id="mat22" onclick="hundredSixsix();"> 
                      <label style="font-weight: normal;" for="mat22"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q166" value="<?php echo $row['choice_three']; ?>" id="mat23" onclick="hundredSixsix();"> 
                      <label style="font-weight: normal;" for="mat23"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q166" value="<?php echo $row['choice_four']; ?>" id="mat24" onclick="hundredSixsix();"> 
                      <label style="font-weight: normal;" for="mat24"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSixsix() {
                            var a = document.getElementById("mat21").value;
                            var b = document.getElementById("mat22").value;
                            var c = document.getElementById("mat23").value;
                            var d = document.getElementById("mat24").value;
                            var x = document.getElementById("ans_q166");

                                 if(document.getElementById('mat21').checked) { x.value = a; }
                            else if(document.getElementById('mat22').checked) { x.value = b; } 
                            else if(document.getElementById('mat23').checked) { x.value = c; } 
                            else if(document.getElementById('mat24').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 46, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Sixseven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Sixseven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q167" class="form-control form-control-sm" name="ans_q167" value="NA">
                      <h5><b>167.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q167" value="<?php echo $row['choice_one']; ?>" id="mat25" onclick="hundredSixseven();"> 
                      <label style="font-weight: normal;" for="mat25"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q167" value="<?php echo $row['choice_two']; ?>" id="mat26" onclick="hundredSixseven();"> 
                      <label style="font-weight: normal;" for="mat26"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q167" value="<?php echo $row['choice_three']; ?>" id="mat27" onclick="hundredSixseven();"> 
                      <label style="font-weight: normal;" for="mat27"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q167" value="<?php echo $row['choice_four']; ?>" id="mat28" onclick="hundredSixseven();"> 
                      <label style="font-weight: normal;" for="mat28"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSixseven() {
                            var a = document.getElementById("mat25").value;
                            var b = document.getElementById("mat26").value;
                            var c = document.getElementById("mat27").value;
                            var d = document.getElementById("mat28").value;
                            var x = document.getElementById("ans_q167");

                                 if(document.getElementById('mat25').checked) { x.value = a; }
                            else if(document.getElementById('mat26').checked) { x.value = b; } 
                            else if(document.getElementById('mat27').checked) { x.value = c; } 
                            else if(document.getElementById('mat28').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 47, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Sixeight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Sixeight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q168" class="form-control form-control-sm" name="ans_q168" value="NA">
                      <h5><b>168.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q168" value="<?php echo $row['choice_one']; ?>" id="mat29" onclick="hundredSixeight();"> 
                      <label style="font-weight: normal;" for="mat29"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q168" value="<?php echo $row['choice_two']; ?>" id="mat30" onclick="hundredSixeight();"> 
                      <label style="font-weight: normal;" for="mat30"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q168" value="<?php echo $row['choice_three']; ?>" id="mat31" onclick="hundredSixeight();"> 
                      <label style="font-weight: normal;" for="mat31"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q168" value="<?php echo $row['choice_four']; ?>" id="mat32" onclick="hundredSixeight();"> 
                      <label style="font-weight: normal;" for="mat32"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSixeight() {
                            var a = document.getElementById("mat29").value;
                            var b = document.getElementById("mat30").value;
                            var c = document.getElementById("mat31").value;
                            var d = document.getElementById("mat32").value;
                            var x = document.getElementById("ans_q168");

                                 if(document.getElementById('mat29').checked) { x.value = a; }
                            else if(document.getElementById('mat30').checked) { x.value = b; } 
                            else if(document.getElementById('mat31').checked) { x.value = c; } 
                            else if(document.getElementById('mat32').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 48, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Sixnine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Sixnine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q169" class="form-control form-control-sm" name="ans_q169" value="NA">
                      <h5><b>169.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q169" value="<?php echo $row['choice_one']; ?>" id="mat33" onclick="hundredSixnine();"> 
                      <label style="font-weight: normal;" for="mat33"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q169" value="<?php echo $row['choice_two']; ?>" id="mat34" onclick="hundredSixnine();"> 
                      <label style="font-weight: normal;" for="mat34"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q169" value="<?mathp echo $row['choice_three']; ?>" id="mat35" onclick="hundredSixnine();"> 
                      <label style="font-weight: normal;" for="mat35"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q169" value="<?php echo $row['choice_four']; ?>" id="mat36" onclick="hundredSixnine();"> 
                      <label style="font-weight: normal;" for="mat36"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSixnine() {
                            var a = document.getElementById("mat33").value;
                            var b = document.getElementById("mat34").value;
                            var c = document.getElementById("mat35").value;
                            var d = document.getElementById("mat36").value;
                            var x = document.getElementById("ans_q169");

                                 if(document.getElementById('mat33').checked) { x.value = a; }
                            else if(document.getElementById('mat34').checked) { x.value = b; } 
                            else if(document.getElementById('mat35').checked) { x.value = c; } 
                            else if(document.getElementById('mat36').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 49, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredSevenzero" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredSevenzero" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q170" class="form-control form-control-sm" name="ans_q170" value="NA">
                      <h5><b>170.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q170" value="<?php echo $row['choice_one']; ?>" id="mat37" onclick="hundredSevenZero();"> 
                      <label style="font-weight: normal;" for="mat37"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q170" value="<?php echo $row['choice_two']; ?>" id="mat38" onclick="hundredSevenZero();"> 
                      <label style="font-weight: normal;" for="mat38"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q170" value="<?php echo $row['choice_three']; ?>" id="mat39" onclick="hundredSevenZero();"> 
                      <label style="font-weight: normal;" for="mat39"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q170" value="<?php echo $row['choice_four']; ?>" id="mat40" onclick="hundredSevenZero();"> 
                      <label style="font-weight: normal;" for="mat40"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSevenZero() {
                            var a = document.getElementById("mat37").value;
                            var b = document.getElementById("mat38").value;
                            var c = document.getElementById("mat39").value;
                            var d = document.getElementById("mat40").value;
                            var x = document.getElementById("ans_q170");

                                 if(document.getElementById('mat37').checked) { x.value = a; }
                            else if(document.getElementById('mat38').checked) { x.value = b; } 
                            else if(document.getElementById('mat39').checked) { x.value = c; } 
                            else if(document.getElementById('mat40').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 50, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Sevenone" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Sevenone" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q171" class="form-control form-control-sm" name="ans_q171" value="NA">
                      <h5><b>171.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q171" value="<?php echo $row['choice_one']; ?>" id="mat41" onclick="hundredSevenone();"> 
                      <label style="font-weight: normal;" for="mat41"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q171" value="<?php echo $row['choice_two']; ?>" id="mat42" onclick="hundredSevenone();"> 
                      <label style="font-weight: normal;" for="mat42"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q171" value="<?php echo $row['choice_three']; ?>" id="mat43" onclick="hundredSevenone();"> 
                      <label style="font-weight: normal;" for="mat43"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q171" value="<?php echo $row['choice_four']; ?>" id="mat44" onclick="hundredSevenone();"> 
                      <label style="font-weight: normal;" for="mat44"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredSevenone() {
                            var a = document.getElementById("mat41").value;
                            var b = document.getElementById("mat42").value;
                            var c = document.getElementById("mat43").value;
                            var d = document.getElementById("mat44").value;
                            var x = document.getElementById("ans_q171");

                                 if(document.getElementById('mat41').checked) { x.value = a; }
                            else if(document.getElementById('mat42').checked) { x.value = b; } 
                            else if(document.getElementById('mat43').checked) { x.value = c; } 
                            else if(document.getElementById('mat44').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 51, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_SevenTwo" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_SevenTwo" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q172" class="form-control form-control-sm" name="ans_q172" value="NA">
                      <h5><b>172.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q172" value="<?php echo $row['choice_one']; ?>" id="mat45" onclick="hundredSevenTwo();"> 
                      <label style="font-weight: normal;" for="mat45"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q172" value="<?php echo $row['choice_two']; ?>" id="mat46" onclick="hundredSevenTwo();"> 
                      <label style="font-weight: normal;" for="mat46"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q172" value="<?php echo $row['choice_three']; ?>" id="mat47" onclick="hundredSevenTwo();"> 
                      <label style="font-weight: normal;" for="mat47"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q172" value="<?php echo $row['choice_four']; ?>" id="mat48" onclick="hundredSevenTwo();"> 
                      <label style="font-weight: normal;" for="mat48"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredSevenTwo() {
                            var a = document.getElementById("mat45").value;
                            var b = document.getElementById("mat46").value;
                            var c = document.getElementById("mat47").value;
                            var d = document.getElementById("mat48").value;
                            var x = document.getElementById("ans_q172");

                                 if(document.getElementById('mat45').checked) { x.value = a; }
                            else if(document.getElementById('mat46').checked) { x.value = b; } 
                            else if(document.getElementById('mat47').checked) { x.value = c; } 
                            else if(document.getElementById('mat48').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 52, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundred_Seventhree" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundred_Seventhree" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q173" class="form-control form-control-sm" name="ans_q173" value="NA">
                      <h5><b>173.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q173" value="<?php echo $row['choice_one']; ?>" id="mat49" onclick="hundredSeventhree();"> 
                      <label style="font-weight: normal;" for="mat49"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q173" value="<?php echo $row['choice_two']; ?>" id="mat50" onclick="hundredSeventhree();"> 
                      <label style="font-weight: normal;" for="mat50"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q173" value="<?php echo $row['choice_three']; ?>" id="mat51" onclick="hundredSeventhree();"> 
                      <label style="font-weight: normal;" for="mat51"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q173" value="<?php echo $row['choice_four']; ?>" id="mat52" onclick="hundredSeventhree();"> 
                      <label style="font-weight: normal;" for="mat52"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredSeventhree() {
                            var a = document.getElementById("mat49").value;
                            var b = document.getElementById("mat50").value;
                            var c = document.getElementById("mat51").value;
                            var d = document.getElementById("mat52").value;
                            var x = document.getElementById("ans_q173");

                                 if(document.getElementById('mat49').checked) { x.value = a; }
                            else if(document.getElementById('mat50').checked) { x.value = b; } 
                            else if(document.getElementById('mat51').checked) { x.value = c; } 
                            else if(document.getElementById('mat52').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 53, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredTSevenfour" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredTSevenfour" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q174" class="form-control form-control-sm" name="ans_q174" value="NA">
                      <h5><b>174.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q174" value="<?php echo $row['choice_one']; ?>" id="mat53" onclick="hundredSevenfour();"> 
                      <label style="font-weight: normal;" for="mat53"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q174" value="<?php echo $row['choice_two']; ?>" id="mat54" onclick="hundredSevenfour();"> 
                      <label style="font-weight: normal;" for="mat54"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q174" value="<?php echo $row['choice_three']; ?>" id="mat55" onclick="hundredSevenfour();"> 
                      <label style="font-weight: normal;" for="mat55"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q174" value="<?php echo $row['choice_four']; ?>" id="mat56" onclick="hundredSevenfour();"> 
                      <label style="font-weight: normal;" for="mat56"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSevenfour() {
                            var a = document.getElementById("mat53").value;
                            var b = document.getElementById("mat54").value;
                            var c = document.getElementById("mat55").value;
                            var d = document.getElementById("mat56").value;
                            var x = document.getElementById("ans_q174");

                                 if(document.getElementById('mat53').checked) { x.value = a; }
                            else if(document.getElementById('mat54').checked) { x.value = b; } 
                            else if(document.getElementById('mat55').checked) { x.value = c; } 
                            else if(document.getElementById('mat56').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                       $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 54, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredSevenfive" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredSevenfive" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q175" class="form-control form-control-sm" name="ans_q175" value="NA">
                      <h5><b>175.</b><?php echo $row['question']; ?></h5>
                      <input type="radio" name="q175" value="<?php echo $row['choice_one']; ?>" id="mat57" onclick="hundreSevenfive();"> 
                      <label style="font-weight: normal;" for="mat57"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q175" value="<?php echo $row['choice_two']; ?>" id="mat58" onclick="hundreSevenfive();"> 
                      <label style="font-weight: normal;" for="mat58"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q175" value="<?php echo $row['choice_three']; ?>" id="mat59" onclick="hundreSevenfive();"> 
                      <label style="font-weight: normal;" for="mat59"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q175" value="<?php echo $row['choice_four']; ?>" id="mat60" onclick="hundreSevenfive();"> 
                      <label style="font-weight: normal;" for="mat60"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundreSevenfive() {
                            var a = document.getElementById("mat57").value;
                            var b = document.getElementById("mat58").value;
                            var c = document.getElementById("mat59").value;
                            var d = document.getElementById("mat60").value;
                            var x = document.getElementById("ans_q175");

                                 if(document.getElementById('mat57').checked) { x.value = a; }
                            else if(document.getElementById('mat58').checked) { x.value = b; } 
                            else if(document.getElementById('mat59').checked) { x.value = c; } 
                            else if(document.getElementById('mat60').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 55, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredSevensix" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredSevensix" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q176" class="form-control form-control-sm" name="ans_q176" value="NA">
                      <h5><b>176.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q176" value="<?php echo $row['choice_one']; ?>" id="mat61" onclick="hundredSevenSix();"> 
                      <label style="font-weight: normal;" for="mat61"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q176" value="<?php echo $row['choice_two']; ?>" id="mat62" onclick="hundredSevenSix();"> 
                      <label style="font-weight: normal;" for="mat62"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q176" value="<?php echo $row['choice_three']; ?>" id="mat63" onclick="hundredSevenSix();"> 
                      <label style="font-weight: normal;" for="mat63"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q176" value="<?php echo $row['choice_four']; ?>" id="mat64" onclick="hundredSevenSix();"> 
                      <label style="font-weight: normal;" for="mat64"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSevenSix() {
                            var a = document.getElementById("mat61").value;
                            var b = document.getElementById("mat62").value;
                            var c = document.getElementById("mat63").value;
                            var d = document.getElementById("mat64").value;
                            var x = document.getElementById("ans_q176");

                                 if(document.getElementById('mat61').checked) { x.value = a; }
                            else if(document.getElementById('mat62').checked) { x.value = b; } 
                            else if(document.getElementById('mat63').checked) { x.value = c; } 
                            else if(document.getElementById('mat64').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                       <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 56, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredSevenseven" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredSevenseven" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q177" class="form-control form-control-sm" name="ans_q177" value="NA">
                      <h5><b>177.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q177" value="<?php echo $row['choice_one']; ?>" id="mat65" onclick="hundredSevenSeven();"> 
                      <label style="font-weight: normal;" for="mat65"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q177" value="<?php echo $row['choice_two']; ?>" id="mat66" onclick="hundredSevenSeven();"> 
                      <label style="font-weight: normal;" for="mat66"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q177" value="<?php echo $row['choice_three']; ?>" id="mat67" onclick="hundredSevenSeven();"> 
                      <label style="font-weight: normal;" for="mat67"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q177" value="<?php echo $row['choice_four']; ?>" id="mat68" onclick="hundredSevenSeven();"> 
                      <label style="font-weight: normal;" for="mat68"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredSevenSeven() {
                            var a = document.getElementById("mat65").value;
                            var b = document.getElementById("mat66").value;
                            var c = document.getElementById("mat67").value;
                            var d = document.getElementById("mat68").value;
                            var x = document.getElementById("ans_q177");

                                 if(document.getElementById('mat65').checked) { x.value = a; }
                            else if(document.getElementById('mat66').checked) { x.value = b; } 
                            else if(document.getElementById('mat67').checked) { x.value = c; } 
                            else if(document.getElementById('mat68').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 57, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredSeveneight" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredSeveneight" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q178" class="form-control form-control-sm" name="ans_q178" value="NA">
                      <h5><b>178.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q178" value="<?php echo $row['choice_one']; ?>" id="mat69" onclick="hundredSevenEight();"> 
                      <label style="font-weight: normal;" for="mat69"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q178" value="<?php echo $row['choice_two']; ?>" id="mat70" onclick="hundredSevenEight();"> 
                      <label style="font-weight: normal;" for="mat70"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q178" value="<?php echo $row['choice_three']; ?>" id="mat71" onclick="hundredSevenEight();"> 
                      <label style="font-weight: normal;" for="mat71"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q178" value="<?php echo $row['choice_four']; ?>" id="mat72" onclick="hundredSevenEight();"> 
                      <label style="font-weight: normal;" for="mat72"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredSevenEight() {
                            var a = document.getElementById("mat69").value;
                            var b = document.getElementById("mat70").value;
                            var c = document.getElementById("mat71").value;
                            var d = document.getElementById("mat72").value;
                            var x = document.getElementById("ans_q178");

                                 if(document.getElementById('mat69').checked) { x.value = a; }
                            else if(document.getElementById('mat70').checked) { x.value = b; } 
                            else if(document.getElementById('mat71').checked) { x.value = c; } 
                            else if(document.getElementById('mat72').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 58, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredSevennine" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredSevennine" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q179" class="form-control form-control-sm" name="ans_q179" value="NA">
                      <h5><b>179.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q179" value="<?php echo $row['choice_one']; ?>" id="mat73" onclick="hundredSevenNine();"> 
                      <label style="font-weight: normal;" for="mat73"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q179" value="<?php echo $row['choice_two']; ?>" id="mat74" onclick="hundredSevenNine();"> 
                      <label style="font-weight: normal;" for="mat74"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q179" value="<?php echo $row['choice_three']; ?>" id="mat75" onclick="hundredSevenNine();"> 
                      <label style="font-weight: normal;" for="mat75"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q179" value="<?php echo $row['choice_four']; ?>" id="mat76" onclick="hundredSevenNine();"> 
                      <label style="font-weight: normal;" for="mat76"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                      <script>
                        function hundredSevenNine() {
                            var a = document.getElementById("mat73").value;
                            var b = document.getElementById("mat74").value;
                            var c = document.getElementById("mat75").value;
                            var d = document.getElementById("mat76").value;
                            var x = document.getElementById("ans_q179");

                                 if(document.getElementById('mat73').checked) { x.value = a; }
                            else if(document.getElementById('mat74').checked) { x.value = b; } 
                            else if(document.getElementById('mat75').checked) { x.value = c; } 
                            else if(document.getElementById('mat76').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>


                      <?php
                        $fetch = mysqli_query($conn, "SELECT * FROM questions JOIN category ON questions.quest_category_Id=category.cat_Id WHERE cat_name='Mathematics' LIMIT 59, 1");
                        if(mysqli_num_rows($fetch) > 0) {
                        $row = mysqli_fetch_array($fetch);
                      ?>
                      <input type="hidden" class="form-control" name="hundredEightzero" value="<?php echo $row['quest_Id']; ?>">
                      <input type="hidden" class="form-control" name="correct_hundredEightzero" value="<?php echo $row['correct_answer']; ?>">
                      <input type="hidden" id="ans_q180" class="form-control form-control-sm" name="ans_q180" value="NA">
                      <h5><b>180.</b> <?php echo $row['question']; ?></h5>
                      <input type="radio" name="q180" value="<?php echo $row['choice_one']; ?>" id="mat77" onclick="hundredEightZero();"> 
                      <label style="font-weight: normal;" for="mat77"><?php echo $row['choice_one']; ?></label>
                      <br>
                      <input type="radio" name="q180" value="<?php echo $row['choice_two']; ?>" id="mat78" onclick="hundredEightZero();"> 
                      <label style="font-weight: normal;" for="mat78"><?php echo $row['choice_two']; ?></label>
                      <br>
                      <input type="radio" name="q180" value="<?php echo $row['choice_three']; ?>" id="mat79" onclick="hundredEightZero();"> 
                      <label style="font-weight: normal;" for="mat79"><?php echo $row['choice_three']; ?></label>
                      <br>
                      <input type="radio" name="q180" value="<?php echo $row['choice_four']; ?>" id="mat80" onclick="hundredEightZero();"> 
                      <label style="font-weight: normal;" for="mat80"><?php echo $row['choice_four']; ?></label>
                      <br>
                      <br>
                       <script>
                        function hundredEightZero() {
                            var a = document.getElementById("mat77").value;
                            var b = document.getElementById("mat78").value;
                            var c = document.getElementById("mat79").value;
                            var d = document.getElementById("mat80").value;
                            var x = document.getElementById("ans_q180");

                                 if(document.getElementById('mat77').checked) { x.value = a; }
                            else if(document.getElementById('mat78').checked) { x.value = b; } 
                            else if(document.getElementById('mat79').checked) { x.value = c; } 
                            else if(document.getElementById('mat80').checked) { x.value = d; }
                            else { x.value = "NA"; }
                        }
                      </script>
                      <?php } ?>

                    </div>

                  