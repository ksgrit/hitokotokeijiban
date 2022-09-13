<?php
 
//クッキー情報の読み出し
var_dump( $_COOKIE );
?>
$success_message = null;
<?php if( !empty($success_message) ): ?>
        <p class="success_message"><?php echo $success_message; ?></p>
    <?php endif; ?>
