<div class="modal fade" id="login" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AddWardLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="Title">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class = "form-control" name = "frmLogin" id = "frmLogin" method = "post" action = "Welcome/login">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-regular fa-user"></i></span>
                            <input type="text" id = "username" name = "username" autocomplete = "off" class="form-control" placeholder="Email" />
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" id = "password" autocomplete = "off" name = "password" class="form-control" placeholder="Password" />
                            <button class="btn btn-outline-secondary" onclick="showPassword()" type="button" id="inputGroupFileAddon04"><i class="fa-solid fa-eye"></i></button>
                        </div>
                </form>
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <button type="submit" class="width-35 float-end btn btn-sm btn-primary" id = "submitLogin" name = "submitLogin">
                        <i class="icon-signin"></i>
                        <span class="bigger-110">Login</span>
                    </button>
                    <small> Do not have an account? <a class = "text-primary" data-bs-toggle="modal" data-bs-target="#modRegister" style = "padding-right:15px; "><u>Register here</u></a></small>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
	function showPassword() {
		var passField = document.getElementById("password");
		if (passField.type === "password") {
			passField.type = "text";
		} else {
			passField.type = "password";
		}
	}
</script>