<?php
/**
 * Created by PhpStorm.
 * User: thien
 * Date: 19/09/2017
 * Time: 10:32
 */
?>
<section class="header_text sub">
    <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
    <h4><span>Login or Regsiter</span></h4>
</section>
<section class="main-content">
    <div class="row">

        <div class="span7">
            <h4 class="title"><span class="text"><strong>Register</strong> Form</span></h4>
            <form action="<?php echo base_url('index.php/frontend/register/create_acount') ?>" method="post" class="form-stacked">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label">Username</label>
                        <div class="controls">
                            <input type="text" name="username" placeholder="Enter your username" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Email address:</label>
                        <div class="controls">
                            <input type="password" name="email" placeholder="Enter your email" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Password:</label>
                        <div class="controls">
                            <input type="password" name="password" placeholder="Enter your password" class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Tai Khoan Trung Tam</label>
                        <div class="controls">
                            <input type="checkbox" name="check_acount" value="1"  class="input-xlarge">
                        </div>
                    </div>
                    <div class="control-group">
                        <p>Now that we know who you are. I'm not a mistake! In a comic, you know how you can tell who the arch-villain's going to be?</p>
                    </div>
                    <hr>
                    <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Create your account"></div>
                </fieldset>
            </form>
        </div>
    </div>
</section>
