<?php
include 'common.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $lang['PAGE_TITLE']; ?></title>
        <link rel="stylesheet" href="styles/styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta property="og:url"                content="https://https://neverland-buu.herokuapp.com/" />
        <meta property="og:type"               content="article" />
        <meta property="og:title"              content="SEA-51 Neverland - Handmade Joy engine" />
        <meta property="og:description"        content="An engine to support playing Handmade Joy event" />
        <meta property="og:image"              content="https://media.discordapp.net/attachments/864719318612705311/996831875219861575/Neverland_Logo_No_BG.png?width=521&height=586" />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="bootstrap-maxlength.min.js"></script>
        <script src="highlight.pack.js"></script>
        <style>
            body {
                width: 100%;
                height:90%;
            }
        </style>

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript">

            $(document).ready(function () {

                $('#xmasForm').change(function () {
                   // skin_value = $("input[name='optionsSkins']:checked").val();
                   // face_value = $("input[name='optionsFaces']:checked").val();
                   // hair_value = $("input[name='optionsHairs']:checked").val();
                   // color_value = $("input[name='optionsHairColors']:checked").val();
                   // scarf_value = $("input[name='optionsScarfs']:checked").val();
                    h1s1 = $("#optionsHeir1Slot1 option:selected").text();
					h1s2 = $("#optionsHeir1Slot2 option:selected").text();
					h1s3 = $("#optionsHeir1Slot3 option:selected").text();
					h2s1 = $("#optionsHeir2Slot1 option:selected").text();
					h2s2 = $("#optionsHeir2Slot2 option:selected").text();
					h2s3 = $("#optionsHeir2Slot3 option:selected").text();
					h3s1 = $("#optionsHeir3Slot1 option:selected").text();
					h3s2 = $("#optionsHeir3Slot2 option:selected").text();
					h3s3 = $("#optionsHeir3Slot3 option:selected").text();
					joy1 = $("#optionsHeir1Joy option:selected").text();
					grace1 = $("#optionsHeir1Grace option:selected").text();
					brave1 = $("#optionsHeir1Bravery option:selected").text();
					ink1 = $("#optionsHeir1Ink option:selected").text();
					joy2 = $("#optionsHeir2Joy option:selected").text();
					grace2 = $("#optionsHeir2Grace option:selected").text();
					brave2 = $("#optionsHeir2Bravery option:selected").text();
					ink2 = $("#optionsHeir2Ink option:selected").text();
					joy3 = $("#optionsHeir3Joy option:selected").text();
					grace3 = $("#optionsHeir3Grace option:selected").text();
					brave3 = $("#optionsHeir3Bravery option:selected").text();
					ink3 = $("#optionsHeir3Ink option:selected").text();
					duration = $("#duration").val();
                  //  glass_value = $("input[name='optionsGlass']:checked").val();
                     //  alert(h1s1);
					 
					 if (duration  === '') {
						alert('Please input the duration you will be away.');
						return false;
					}
					
					 if (isNaN(duration)) {
						alert('Please input number of minutes only');
						return false;
					}

                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function () {
                        if (this.readyState == 4 && this.status == 200) {
                            //alert(this.responseText);
                            document.getElementById("preview-image").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "calculator.php?h1s1=" + h1s1 + 
                            "&h1s2=" + h1s2 + "&h1s3=" + h1s3 +
                            "&h2s1=" + h2s1 + "&h2s2=" + h2s2 +
                            "&h2s3=" + h2s3 + "&h3s1=" + h3s1 +
							"&h3s2=" + h3s2 + "&h3s3=" + h3s3 +
							"&joy1=" + joy1 + "&grace1=" + grace1 +
							"&brave1=" + brave1 + "&ink1=" + ink1 +
							"&joy2=" + joy2 + "&grace2=" + grace2 +
							"&brave2=" + brave2 + "&ink2=" + ink2 +
							"&joy3=" + joy3 + "&grace3=" + grace3 +
							"&brave3=" + brave3 + "&ink3=" + ink3 + "&duration=" + duration, true);
                    xmlhttp.send();

                    /*$.ajax({
                     url: 'image-xmas.php',
                     type: 'POST',
                     dataType: 'json',
                     'success': function (response) {
                     if (response.status == 'success') {
                     lastInput = rdio.val();
                     } else {
                     $('input[name="radio_group"][value="' + lastInput + '"]').prop('checked', true);
                     }
                     },
                     });*/
                });
                
                             });

            
        </script>
    </head>
    <body style="background-color:#AFEBDD;">
        <?php
        $text = "What are you doing?";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $text = test_input($_POST["yourowl"]);
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>

        <div style="width: 100%; margin: auto; background-color:#AFEBDD;" class="container-fluid">
            <div style="width: 100%; margin: auto;  background-color:#AFEBDD;" class="container-fluid bg-3">

                <form style="width: 70%;" class="ajax-call" id="xmasForm" action="image-xmas.php" method="get" role="form">
                    <br/><br/>
                    <!--hi
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo $lang['LB_CHOOSE_SKIN']; ?></label>
                        <div class="col-sm-10">
                            <label>
                                <input type="radio" name="optionsSkins" id="optionsRadios1" value="option1" checked>
                                Sáng
                                <?php //echo $lang['OWL_1']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsSkins" id="optionsRadios2" value="option2">
                                Trung 
                                <?php // echo $lang['OWL_2']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsSkins" id="optionsRadios3" value="option3">
                                Đen
                                <?php //echo $lang['OWL_3']; ?>
                            </label><br><br>
                        </div>
                    </div>
                    

                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo $lang['LB_CHOOSE_FACE']; ?></label>
                        <div class="col-sm-10">
                            <label>
                                <input type="radio" name="optionsFaces" id="optionsRadios1" value="option1" checked>
                                Lườm
                                <?php //echo $lang['OWL_1']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsFaces" id="optionsRadios2" value="option2">
                                Mếu
                                <?php // echo $lang['OWL_2']; ?>
                            </label><br><br>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo $lang['LB_CHOOSE_HAIR']; ?></label>
                        <div class="col-sm-10">
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios1" value="option1" checked>
                                Tóc 1
                                <?php //echo $lang['BG_1']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios2" value="option2">
                                Tóc 2
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios3" value="option3">
                                Tóc 3
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios4" value="option4">
                                Tóc 4
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios5" value="option5">
                                Tóc 5
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios6" value="option6">
                                Tóc 6
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios7" value="option7">
                                Tóc 7
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios8" value="option8">
                                Tóc 8
                                <?php //echo $lang['BG_5']; ?>
                            </label><br><label>
                                <input type="radio" name="optionsHairs" id="optionsRadios9" value="option9">
                                Tóc 9
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios10" value="option10">
                                Tóc 10
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios11" value="option11">
                                Tóc 11
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios12" value="option12">
                                Tóc 12
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios13" value="option13">
                                Tóc 13
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios14" value="option14">
                                Tóc 14
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairs" id="optionsRadios15" value="option15">
                                Tóc 15
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <br>
                        </div>
                    </div>
                    
                     <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo $lang['LB_CHOOSE_HAIR_COLOR']; ?></label>
                        <div class="col-sm-10">
                            <label>
                                <input type="radio" name="optionsHairColors" id="optionsRadios1" value="option1" checked>
                                Bạch kim
                                <?php //echo $lang['BG_1']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairColors" id="optionsRadios2" value="option2">
                                Đỏ
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairColors" id="optionsRadios3" value="option3">
                                Hồng
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairColors" id="optionsRadios4" value="option4">
                                Xanh
                                <?php //echo $lang['BG_5']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsHairColors" id="optionsRadios5" value="option5">
                                Đen
                                <?php //echo $lang['BG_5']; ?>
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="optionsHairColors" id="optionsRadios6" value="option6">
                                Nâu
                                <?php //echo $lang['BG_5']; ?>
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="optionsHairColors" id="optionsRadios7" value="option7">
                                Tím
                                <?php //echo $lang['BG_5']; ?>
                            </label><br><br>
                        </div>
                    </div>
                    
                     <div class="form-group" id="chooseJumper">
                        <label for="name" class="col-sm-2 control-label"><?php echo $lang['LB_CHOOSE_JUMPER']; ?></label>
                        <div class="col-sm-10">
                            <label>
                                <input type="radio" name="optionsJumpers" id="optionsRadios1" value="option1" checked>
                                Áo tím
        
                                <?php //echo $lang['BG_1']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsJumpers" id="optionsRadios2" value="option2">
                                 Áo hồng
                                <?php //echo $lang['BG_5']; ?>
                            </label><br><br>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo $lang['LB_CHOOSE_SCARF']; ?></label>
                        <div class="col-sm-10">
                            <label>
                                <input type="radio" name="optionsScarfs" id="optionsRadios1" value="option1" checked>
                                Slytherin
        
                                <?php //echo $lang['BG_1']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsScarfs" id="optionsRadios2" value="option2">
                                 Gryffindors
                                <?php //echo $lang['BG_5']; ?>
                            </label><br><br>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo $lang['LB_CHOOSE_GLASS']; ?></label>
                        <div class="col-sm-10">
                            <label>
                                <input type="radio" name="optionsGlass" id="optionsRadios1" value="yes" >
                                Có
                                <?php //echo $lang['OWL_1']; ?>
                            </label><br>
                            <label>
                                <input type="radio" name="optionsGlass" id="optionsRadios2" value="no" checked>
                                Không
                                <?php // echo $lang['OWL_2']; ?>
                            </label><br><br>
                        </div>
                    </div>-->
                    <div class="form-group">
						<label for="name" class="col-sm-2 control-label"><?php echo 'How long will you be offline/afk? (In Minute)' ?></label>
						<div class="col-sm-10">
							<textarea id="duration" class="form-control" name="duration" rows="1" placeholder="<?php echo 'Input the minute and ONLY NUMBER. For example: 10, 40, 120, 540' ?>" maxlength="9" minlength="1"></textarea><br />
						</div>
					</div>
					
					<div>
					<h4>Stats of 1st Heir</h4>
					
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Joy' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir1Joy" name="optionsHeir1Joy">
								<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					 <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Grace' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir1Grace" name="optionsHeir1Grace">
							<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Bravery' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir1Bravery" name="optionsHeir1Bravery">
							<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Ink' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir1Ink" name="optionsHeir1Ink">
							<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					</div>
					
					<div>
					<h4>Stats of 2nd Heir</h4>
					
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Joy' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir2Joy" name="optionsHeir2Joy">
							<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					 <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Grace' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir2Grace" name="optionsHeir2Grace">
							<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Bravery' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir2Bravery" name="optionsHeir2Bravery">
							<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Ink' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir2Ink" name="optionsHeir2Ink">
							<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					</div>
					
					<div>
					<h4>Stats of 3rd Heir</h4>
					
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Joy' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir3Joy" name="optionsHeir3Joy">
							<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					 <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Grace' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir3Grace" name="optionsHeir3Grace">
							<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Bravery' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir3Bravery" name="optionsHeir3Bravery">
							<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Ink' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir3Ink" name="optionsHeir3Ink">
							<option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					</div>
					
					<div>
					<h4>Set courses for 1st heir</h4>
					
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Slot 1' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir1Slot1" name="optionsHeir1Slot1">
								<option>None</option>
                                <option>Joy Bell</option>
                                <option>Joy Doll</option>
                                <option>Grace Bell</option>
                                <option>Grace Doll</option>
                                <option>Bravery Bell</option>
                                <option>Bravery Doll</option>
                                <option>Ink Bell</option>
                                <option>Ink Doll</option>
                                <option>Club</option>
								<option>Ceremony</option>
								<option>Advertise</option>
								<option>Fun</option>
								<option>Help</option>
								<option>Business</option>
								<option>Advance Leisure</option>
								<option>Advance Social</option>
								<option>Advance Fight</option>
								<option>Advance Literature</option>
								<option>Medium Leisure</option>
								<option>Medium Social</option>
								<option>Medium Fight</option>
								<option>Medium Literature</option>
								<option>Basic Fight</option>
								<option>Basic Literature</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Slot 2' ?></label>
                        <div class="col-sm-10" >
                            <select id="optionsHeir1Slot2" name="optionsHeir1Slot2">
								<option>None</option>
                                <option>Joy Bell</option>
                                <option>Joy Doll</option>
                                <option>Grace Bell</option>
                                <option>Grace Doll</option>
                                <option>Bravery Bell</option>
                                <option>Bravery Doll</option>
                                <option>Ink Bell</option>
                                <option>Ink Doll</option>
                                <option>Club</option>
								<option>Ceremony</option>
								<option>Advertise</option>
								<option>Fun</option>
								<option>Help</option>
								<option>Business</option>
								<option>Advance Leisure</option>
								<option>Advance Social</option>
								<option>Advance Fight</option>
								<option>Advance Literature</option>
								<option>Medium Leisure</option>
								<option>Medium Social</option>
								<option>Medium Fight</option>
								<option>Medium Literature</option>
								<option>Basic Fight</option>
								<option>Basic Literature</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Slot 3' ?></label>
                        <div class="col-sm-10" style="display:inline">
                            <select id="optionsHeir1Slot3" name="optionsHeir1Slot3">
								<option>None</option>
                                <option>Joy Bell</option>
                                <option>Joy Doll</option>
                                <option>Grace Bell</option>
                                <option>Grace Doll</option>
                                <option>Bravery Bell</option>
                                <option>Bravery Doll</option>
                                <option>Ink Bell</option>
                                <option>Ink Doll</option>
                                <option>Club</option>
								<option>Ceremony</option>
								<option>Advertise</option>
								<option>Fun</option>
								<option>Help</option>
								<option>Business</option>
								<option>Advance Leisure</option>
								<option>Advance Social</option>
								<option>Advance Fight</option>
								<option>Advance Literature</option>
								<option>Medium Leisure</option>
								<option>Medium Social</option>
								<option>Medium Fight</option>
								<option>Medium Literature</option>
								<option>Basic Fight</option>
								<option>Basic Literature</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					</div>
					
					<div>
					<h4>Set courses for 2nd heir</h4>
					
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Slot 1' ?></label>
                        <div class="col-sm-10">
                            <select id="optionsHeir2Slot1" name="optionsHeir2Slot1">
								<option>None</option>
                                <option>Joy Bell</option>
                                <option>Joy Doll</option>
                                <option>Grace Bell</option>
                                <option>Grace Doll</option>
                                <option>Bravery Bell</option>
                                <option>Bravery Doll</option>
                                <option>Ink Bell</option>
                                <option>Ink Doll</option>
                                <option>Club</option>
								<option>Ceremony</option>
								<option>Advertise</option>
								<option>Fun</option>
								<option>Help</option>
								<option>Business</option>
								<option>Advance Leisure</option>
								<option>Advance Social</option>
								<option>Advance Fight</option>
								<option>Advance Literature</option>
								<option>Medium Leisure</option>
								<option>Medium Social</option>
								<option>Medium Fight</option>
								<option>Medium Literature</option>
								<option>Basic Fight</option>
								<option>Basic Literature</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Slot 2' ?></label>
                        <div class="col-sm-10">
                            <select id="optionsHeir2Slot2" name="optionsHeir2Slot2">
								<option>None</option>
                                <option>Joy Bell</option>
                                <option>Joy Doll</option>
                                <option>Grace Bell</option>
                                <option>Grace Doll</option>
                                <option>Bravery Bell</option>
                                <option>Bravery Doll</option>
                                <option>Ink Bell</option>
                                <option>Ink Doll</option>
                                <option>Club</option>
								<option>Ceremony</option>
								<option>Advertise</option>
								<option>Fun</option>
								<option>Help</option>
								<option>Business</option>
								<option>Advance Leisure</option>
								<option>Advance Social</option>
								<option>Advance Fight</option>
								<option>Advance Literature</option>
								<option>Medium Leisure</option>
								<option>Medium Social</option>
								<option>Medium Fight</option>
								<option>Medium Literature</option>
								<option>Basic Fight</option>
								<option>Basic Literature</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Slot 3' ?></label>
                        <div class="col-sm-10">
                            <select id="optionsHeir2Slot3" name="optionsHeir2Slot3">
								<option>None</option>
                                <option>Joy Bell</option>
                                <option>Joy Doll</option>
                                <option>Grace Bell</option>
                                <option>Grace Doll</option>
                                <option>Bravery Bell</option>
                                <option>Bravery Doll</option>
                                <option>Ink Bell</option>
                                <option>Ink Doll</option>
                                <option>Club</option>
								<option>Ceremony</option>
								<option>Advertise</option>
								<option>Fun</option>
								<option>Help</option>
								<option>Business</option>
								<option>Advance Leisure</option>
								<option>Advance Social</option>
								<option>Advance Fight</option>
								<option>Advance Literature</option>
								<option>Medium Leisure</option>
								<option>Medium Social</option>
								<option>Medium Fight</option>
								<option>Medium Literature</option>
								<option>Basic Fight</option>
								<option>Basic Literature</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					</div>
					
					<div>
					<h4>Set courses for 3rd heir</h4>
					
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Slot 1' ?></label>
                        <div class="col-sm-10">
                            <select id="optionsHeir3Slot1" name="optionsHeir3Slot1">
								<option>None</option>
                                <option>Joy Bell</option>
                                <option>Joy Doll</option>
                                <option>Grace Bell</option>
                                <option>Grace Doll</option>
                                <option>Bravery Bell</option>
                                <option>Bravery Doll</option>
                                <option>Ink Bell</option>
                                <option>Ink Doll</option>
                                <option>Club</option>
								<option>Ceremony</option>
								<option>Advertise</option>
								<option>Fun</option>
								<option>Help</option>
								<option>Business</option>
								<option>Advance Leisure</option>
								<option>Advance Social</option>
								<option>Advance Fight</option>
								<option>Advance Literature</option>
								<option>Medium Leisure</option>
								<option>Medium Social</option>
								<option>Medium Fight</option>
								<option>Medium Literature</option>
								<option>Basic Fight</option>
								<option>Basic Literature</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Slot 2' ?></label>
                        <div class="col-sm-10">
                            <select id="optionsHeir3Slot2" name="optionsHeir3Slot2">
								<option>None</option>
                                <option>Joy Bell</option>
                                <option>Joy Doll</option>
                                <option>Grace Bell</option>
                                <option>Grace Doll</option>
                                <option>Bravery Bell</option>
                                <option>Bravery Doll</option>
                                <option>Ink Bell</option>
                                <option>Ink Doll</option>
                                <option>Club</option>
								<option>Ceremony</option>
								<option>Advertise</option>
								<option>Fun</option>
								<option>Help</option>
								<option>Business</option>
								<option>Advance Leisure</option>
								<option>Advance Social</option>
								<option>Advance Fight</option>
								<option>Advance Literature</option>
								<option>Medium Leisure</option>
								<option>Medium Social</option>
								<option>Medium Fight</option>
								<option>Medium Literature</option>
								<option>Basic Fight</option>
								<option>Basic Literature</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label for="name" class="col-sm-2 control-label"><?php echo 'Slot 3' ?></label>
                        <div class="col-sm-10">
                            <select id="optionsHeir3Slot3" name="optionsHeir3Slot3">
								<option>None</option>
                                <option>Joy Bell</option>
                                <option>Joy Doll</option>
                                <option>Grace Bell</option>
                                <option>Grace Doll</option>
                                <option>Bravery Bell</option>
                                <option>Bravery Doll</option>
                                <option>Ink Bell</option>
                                <option>Ink Doll</option>
                                <option>Club</option>
								<option>Ceremony</option>
								<option>Advertise</option>
								<option>Fun</option>
								<option>Help</option>
								<option>Business</option>
								<option>Advance Leisure</option>
								<option>Advance Social</option>
								<option>Advance Fight</option>
								<option>Advance Literature</option>
								<option>Medium Leisure</option>
								<option>Medium Social</option>
								<option>Medium Fight</option>
								<option>Medium Literature</option>
								<option>Basic Fight</option>
								<option>Basic Literature</option>
                            </select>
                            <br><br>
                        </div>
                    </div>
					</div>

					
			
                    <!--<div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                            <input id="btn-download" name="btnDownload" onclick="downloadImage()" type="button" value="<?php echo $lang['BUTTON_CREATE_XMAS']; ?>" class="btn btn-default">
                        </div>
                    </div>-->

                </form>

				

                <!--<img id="preview-image" src="images/default3.jpg" class="" width="30%" height="30%" download="myImage">-->
				<div id="preview-image" class="bg-3 text-center" style="color:red; background-color:#AFEBDD;"></div>
            </div>
			
		<!--	<div class="bg-3 text-center" style="background-color:#AFEBDD;"><a href="https://gogetfunding.com/?p=7700516">Find it helpful? Buy us a chestnut cake</a></div>-->
			
			
        </div>
    </body>
</html>
