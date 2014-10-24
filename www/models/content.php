<div class="content">		
			<!--Start botton-->
      <?php 
        if(!$_SESSION['login']){
          ?>
          <a href="#modalRegistry" class="btn btn-registry" name="registry"><?php ?><?=$dict['btn_registry']?></a>
          <a  href="#modalLogin" class="btn btn-login" name="login"><?=$dict['btn_login']?></a>
        <?php
        } else {
          ?>
            <a  href="#" class="btn btn-logout" name="logout"><?=$dict['btn_logout']?></a>

          <?php
        }



      ?>
			
        	<!--End botton-->
        	<!-- форма для смены языка -->
    		<form action="change_language.php" method="post" name="change_lang" id='change_lang_form'>
       			<?php echo $d[1]; ?>
       			<select name="language" id="change_lang" onChange="javascript:submit();">
          		<!-- список доступных языков -->
         			 <option value="en" <?php if ($_SESSION["lang"] != 'ru') { echo 'selected="selected"';}?>>English</option>
          			<option value="ru" <?php if ($_SESSION["lang"] == 'ru') { echo 'selected="selected"';}?>>Русский</option>
       			</select>
    		</form>
		</div>	