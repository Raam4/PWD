<?php
$Titulo = "Carga de pelicula - Cinem@s";
include_once("../estructura/header.php");
?>
        <!--
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-10"></div>
                            <div class="col-md-2">
                                <button type="button" class="btn-close btn-sm"></button>
                            </div>
                        </div>
                        <div class="card-body text-center">
                            <h4>Member Login</h4>
                            <br />
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text p-3"><i class="fas fa-user"></i></span>
                                </div>
                                <input id="username" class="form-control" type="text" placeholder="Username">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text p-3"><i class="fas fa-user"></i></span>
                                </div>
                                <input id="password" class="form-control" type="text" placeholder="Password">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <button class="btn btn-success btn-md btn-block w-100" type="submit">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        -->
        <div class="container">
        <form name="login" id="login" method="POST" action="controlej3.php" onsubmit="return valida();">
            <input type="text" id="user" name="user" placeholder="Username">
            <input type="password" id="pass" name="pass" placeholder="Password">
            <button type="submit" id="btn">Login</button>
        </form>
        <p id= "warn" style="visibility: hidden; color: red;">Wrong Credentials!</p>
        <script>
            function valida(){
                var user = document.getElementById("user");
                var pass = document.getElementById("pass");
                var warn = document.getElementById("warn");
                var ver = false;
                var regex = /^[a-z0-9]{8,18}$/;
                if(user.value != "" && pass.value != ""){
                    if(!(ver = pass.value != user.value && pass.value.length > 8 && regex.test(pass.value))){
                        warn.style.visibility = 'visible';
                    }
                }else{
                    if(user.value == ""){
                        user.style.borderColor = 'red';
                    }
                    if(pass.value == ""){
                        pass.style.borderColor = 'red';
                    }
                }
                return ver;
            }
        </script>
        </div>
<?php include_once("../estructura/footer.php"); ?>