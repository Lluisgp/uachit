<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script type = 'text/javascript' src = "<?php echo base_url(); ?>js/jquery-3.2.1.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <!-- Custom files -->
        <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/custom.css">
        <style>            
            .cercar{
                width: 50% !important;
            }
        </style>
    </head>
    <body>
        <?php $this->view('header'); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4" style="margin:auto;">
                    <div class="login-panel panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">Login</h3>
                        </div>
                        <?php
                        $success_msg = $this->session->flashdata('success_msg');
                        $error_msg = $this->session->flashdata('error_msg');

                        if ($success_msg) {
                            ?>
                            <div class="alert alert-success">
                                <?php echo $success_msg; ?>
                            </div>
                            <?php
                        }
                        if ($error_msg) {
                            ?>
                            <div class="alert alert-danger">
                                <?php echo $error_msg; ?>
                            </div>
                            <?php
                        }
                        ?>

                        <div class="panel-body">
                            <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                                <fieldset>
                                    <div class="form-group"  >
                                        <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                                    </div>


                                    <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >

                                </fieldset>
                            </form>   
                            <center><b>¿No estas registrado?</b> <br></b><a href="<?php echo base_url('user'); ?>">Hazlo aquí!</a></center><!--for centered text-->

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </body>
</html>
