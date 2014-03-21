<script type="text/javascript" src="<?php echo asset_url('js/validation.js'); ?>"></script>

<div class="row">
    <h1>Edit Details</h1>
    <div style="color:red;"><?php echo validation_errors(); ?></div>
        <?php echo form_open('account/processEditDetails', array('role' => 'form')); ?>                                           
        <?php foreach($user as $r): ?>
              <?php $titleCurrent = $r->title; ?>
              <?php $forenameCurrent = $r->forename; ?>
              <?php $surnameCurrent = $r->surname; ?>
              <?php $emailCurrent = $r->email; ?>
              <?php $address1Current = $r->address1; ?>
              <?php $address2Current = $r->address2; ?>     
              <?php $phoneNumCurrent = $r->phone; ?>
              <?php $townCurrent = $r->town; ?>
              <?php $postcodeCurrent = $r->postcode; ?>
              <?php $countyCurrent = $r->county; ?>
              <?php $countryCurrent = $r->country; ?>
        <?php endforeach; ?>               
       
        <div class="col-lg-5 border-right">
            <div class="form-group">
                <label for="username"><?php echo $titleCurrent; ?></label>
                <select name="title" class="form-control">
                    <option name="title" value="Mr" <?php if(isset($title) && $title == 'Mr'){ echo 'checked'; } ?>>Mr.</option>
                    <option name="title" value="Mrs" <?php if(isset($title) && $title == 'Mrs'){ echo 'checked'; } ?>>Mrs.</option>
                    <option name="title" value="Miss" <?php if(isset($title) && $title == 'Miss'){ echo 'checked'; } ?>>Miss.</option>
                    <option name="title" value="Ms" <?php if(isset($title) && $title == 'Ms'){ echo 'checked'; } ?>>Ms.</option>
                    <option name="title" value="Dr" <?php if(isset($title) && $title == 'Dr'){ echo 'checked'; } ?>>Dr.</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="forename"><?php echo $forenameCurrent; ?></label>
                <input name="forename" type="text" class="form-control" id="forename" placeholder="Forename" value="<?php if(isset($forename)){echo $forename;} ?>">
            </div>
        
            <div class="form-group">
                <label for="surname"><?php echo $surnameCurrent; ?></label>
                <input name="surname" type="text" class="form-control" id="surname" placeholder="Surname"  value="<?php if(isset($surname)){echo $surname;} ?>">
            </div>
            
            <div class="form-group">
                <label for="phone"><?php echo $phoneNumCurrent; ?></label>
                <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" value="<?php if(isset($phone)){echo $phone;} ?>">
            </div>

            <div id="emailGroup" class="form-group">
                <label for="email"><?php echo $emailCurrent; ?></label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?php if(isset($email)){echo $email;} ?>" onchange="validateEmail()" onpropertychange="validateEmail()" onkeyup="validateEmail()">
                <span id="emailSpan" class=""></span>
                <label id="emailError"></label>
            </div>                                              
                 
            <div class="checkbox">
                <label>
                  <input name="newsletter" type="checkbox" value="0" <?php if(isset($newsletter)){echo 'checked';} ?>>I do not wish to subscribe to the monthly newsletter
                </label>
            </div>            
                       
            <div class="pagination">
                <button name="submit" value="Save" type="submit" class="btn btn-default">Save Changes</button>
            </div>            
        </div>
    
        <div class="col-lg-5">
            
            <div class="form-group">
                <label for="address1"><?php echo $address1Current; ?></label>
                <input name="address1" type="text" class="form-control" id="address1" placeholder="Address Line 1" value="<?php if(isset($address1)){echo $address1;} ?>">
            </div>
            
            <div class="form-group">
                <label for="address2"><?php echo $address2Current; ?></label>
                <input name="address2" type="text" class="form-control" id="address2" placeholder="Address Line 2" value="<?php if(isset($address2)){echo $address2;} ?>">
            </div>
            
            <div class="form-group">
                <label for="town"><?php echo $townCurrent; ?></label>
                <input name="town" type="text" class="form-control" id="town" placeholder="Town" value="<?php if(isset($town)){echo $town;} ?>">
            </div>
            
            <div class="form-group">
                <label for="postcode"><?php echo $postcodeCurrent; ?></label>
                <input name="postcode" type="text" class="form-control" id="postcode" placeholder="Postcode" value="<?php if(isset($postcode)){echo $postcode;} ?>">
            </div>
            
            <div class="form-group">
                <label for="county"><?php echo $countyCurrent; ?></label>
                <input name="county" type="text" class="form-control" id="county" placeholder="County" value="<?php if(isset($county)){echo $county;} ?>">
            </div>
            
            <div class="form-group">
                <label for="country"><?php echo $countryCurrent; ?></label>
                <select name="country" class="form-control">
                    <option name="country" value="UK" <?php if(isset($country) && $country == 'UK'){ echo 'checked'; } ?>>UK</option>
                    <option name="country" value="Ireland" <?php if(isset($country) && $country == 'Ireland'){ echo 'checked'; } ?>>Ireland</option>
                </select>
            </div>       
            
        </div>
    </form>
</div>