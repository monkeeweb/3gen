

        <div id="form_login">
            <?php echo validation_errors(); ?>
            <?php
            echo form_open();
            echo "<div>";
            echo form_label('Login:', 'login');
            echo form_input('login', '', 'class="login"');
            echo "</div><div>";
                
            echo form_label('Senha:', 'password');
            echo form_password('password', '', 'class="login"');
            echo "</div>";
            
            echo form_submit('submit', 'Login', 'class="bt"');
            ?>
            <?php form_close(); ?>
        </div>

    