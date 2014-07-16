<script>
    $(document).ready(function(){

        $("#register").click(function(){

            if($("[name='password']").val()!=''&&$("[name='con_password']").val()!=''){

                if($("[name='password']").val()!=$("[name='con_password']").val()){
                    $("#msg").text("Password not match!");
                    return false;
                }

                if($("[name='password']").val().length < 6 || $("[name='con_password']").val().length < 6){

                    $("#msg").text("Password Need more than 5 characters!");
                    return false;
                }
            }
        });


    });

</script>
	<div class="register">
        <form role="form">
            <h3>Create an Acount</h3>
            <div class="text-center">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="con_password" placeholder="Retype Password" required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>
                    <p>By acount condition to <a href="#" style="color:white">Terms &amp; Condition of use</a></p>
                    <button type="submit" class="btn btn-primary" id="register">&nbsp;&nbsp; Register &nbsp;&nbsp;</button>
                <h4 id="msg" style="margin: auto; color:#ff0000"></h4>
            </div>
        </form>

    </div>
