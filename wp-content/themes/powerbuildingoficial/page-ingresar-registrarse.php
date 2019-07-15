<?php  get_header(); ?>
<section id="voting">

    <div class="container" style="margin-top:200px">

            <div class="voting-posts-content">
              <div class="row">

                <!-- Post 1 -->
                <div class="col-md-12 col-sm-12 col-xs-12">


                    <form action="#" method="POST" name="register-form" class="register_form">
                      <h2 style="margin-bottom:20px">!Regístrate!</h2>
                      <p style="margin-bottom:20px" class="register-message" style="display:none"></p>
                      <div class="row">
                        <div class="col-sm-6 col-12" style="margin-bottom:15px">
                          <input class="form-control" type="text"  name="new_user_name" placeholder="Usuario" id="new-username">
                        </div>
                        <div class="col-sm-6 col-12" style="margin-bottom:15px">
                          <input class="form-control" type="email"  name="new_user_email" placeholder="Dirección de correo electrónico" id="new-useremail">
                        </div>
                      </div> 
        
                      <div class="row">
                        <div class="col-sm-6 col-12" style="margin-bottom:15px">
                          <input class="form-control" type="password"  name="Contraseña" placeholder="Password" id="new-userpassword">
                        </div>
                        <div class="col-sm-6 col-12" style="margin-bottom:15px">
                         <input class="form-control" type="password"  name="re_pwd" placeholder="Confirmar contraseña" id="re-pwd">
                        </div>
                      </div> 

                      <input type="submit"  class="custom-coach buttom-gradient-red" id="register-button" value="Registrarse" >
                    </form>       
                </div>
              </div>
            </div>
            <hr>
            <!-- login -->  
            <div class="voting-posts-content" style="margin-top:50px">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                   <h2>Ingresar</h2>

                   <form id="login" action="login" class="login_form" method="post">
                     <p class="status"></p>
                     <div class="col-sm-6 col-12" style="margin-bottom:15px">
                       <input class="form-control" id="username" type="text" name="username" placeholder="Nombre de usuario">
                     </div>
                     <div class="col-sm-6 col-12" style="margin-bottom:15px">     
                       <input class="form-control" id="password" type="password" name="password" placeholder="Contraseña">
                     </div>
                     <div class="col-sm-6 col-12" style="margin-bottom:15px">  
                       <input class="custom-coach buttom-gradient-red" type="submit" value="Ingresar" name="submit">
                     </div>   
                     <?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
                   </form>
                   <div class="modal_text">
                     <br>
                     <a href="<?php echo $reset_pass ?>">¿Has olvidado tu contraseña?</a>
                   </div>                
                </div>
              </div>
            </div>    


    </div>

</section>
<script type="text/javascript">
  // Envío y registro 
 jQuery('#register-button').on('click',function(e){
e.preventDefault();
var newUserName = jQuery('#new-username').val();
var newUserEmail = jQuery('#new-useremail').val();
var newUserPassword = jQuery('#new-userpassword').val();
var confirm_password = jQuery('#re-pwd').val();

jQuery.ajax({
    type:"POST",
    url:"<?php echo admin_url('admin-ajax.php'); ?>",
    data: {
    action: "register_user_front_end",
    new_user_name : newUserName,
    new_user_email : newUserEmail,
    new_user_password : newUserPassword,
    re_pwd : confirm_password,
    },
    success: function(results){
    console.log(results);
    jQuery('.register-message').text(results).show();
    },
     error: function(results) {
     }
 });
}); 
</script>
<?php  get_footer(); ?>

