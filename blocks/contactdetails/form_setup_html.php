<?php defined('C5_EXECUTE') or die("Access Denied.");?>


    <div class="form-group">

      <?php
      echo '<label  class="control-label" for="companyName" name = "companyName"> Company Name </label>';
      echo $form->text('companyName', $companyName);

      echo '<label  class="control-label" for="honorific" name = "honorific"> Honorific</label>';
      echo $form->text('honorific', $honorific);

      echo '<label  class="control-label" for="firstName" name = "firstName"> First Name </label>';
      echo $form->text('firstName', $firstName);

      echo '<label  class="control-label" for="lastName" name = "lastName"> Last Name </label>';
      echo $form->text('lastName', $lastName);

      echo '<label  class="control-label" for="title" name = "title"> Title /Role /Position</label>';
      echo $form->text('title', $title);

      echo '<label  class="control-label" for="department" name = "department"> Department</label>';
      echo $form->text('department', $department);

      echo '<label  class="control-label" for="image" name = "image">Photo </label>';
      echo $form->text('image', $image);

      echo '<label  class="control-label" for="email" name = "email">Email </label>';
      echo $form->text('email', $email);

      echo '<label  class="control-label" for="secondaryEmail" name = "secondaryEmail">Secondary email</label>';
      echo $form->text('secondaryEmail', $secondaryEmail);

      echo '<label  class="control-label" for="phone" name = "phone">Phone</label>';
      echo $form->text('phone', $phone);

      echo '<label  class="control-label" for="fax" name = "fax"> Fax </label>';
      echo $form->text('fax', $fax);

      echo '<label  class="control-label" for="mobile" name = "mobil"> Mobile</label>';
      echo $form->text('mobile', $mobile);

      echo '<label  class="control-label" for="otherPhone" name = "otherPhone"> Other Phone </label>';
      echo $form->text('otherPhone', $otherPhone);

      echo '<label  class="control-label" for="facebook" name = "facebook"> Facebook </label>';
      echo $form->text('facebook', $facebook);

      echo '<label  class="control-label" for="skypeId" name = "skypeId"> SkypeID </label>';
      echo $form->text('skypeId', $skypeId);

      echo '<label  class="control-label" for="postalAddress" name = "postalAddress">Postal Address </label>';
      echo $form->text('postalAddress', $postalAddress);

      echo '<label  class="control-label" for="otherAddress" name = "otherAddress"> Other Address</label>';
      echo $form->text('otherAddress', $otherAddress);

      ?>
    </div>
