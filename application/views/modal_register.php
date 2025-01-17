<div class="modal fade" id="modRegister" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="AddWardLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<form class = "form-control" name = "frmRegistration" id = "frmRegistration" method = "post" action = "<?php echo base_url("Welcome/register"); ?>">
				<div class="modal-header bg-primary text-white">
					<h5 class="modal-title" id="Title">Register User</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa-regular fa-user"></i><span class = "text-danger">*</span></span>
						<input type="text" id = "fullname" name = "fullname" class="form-control" placeholder="Fullname" required value="<?php echo set_value('fullname') ?>" />
					</div>

					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa-solid fa-envelope"></i><span class = "text-danger">*</span></span>
						<input type="email" id = "email" name = "email" class="form-control" placeholder="Email" required value="<?php echo set_value('email') ?>" />
					</div>

					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa-regular fa-user"></i><span class = "text-danger">*</span></span>
						<input type="text" id = "username" name = "username" class="form-control" placeholder="Username" required value="<?php echo set_value('username') ?>" />
					</div>

					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa-solid fa-lock"></i><span class = "text-danger">*</span></span>
						<input type="password" id = "passwordReg" autocomplete = "off" name = "passwordReg" class="form-control" placeholder="Password" required/>
						<button class="btn btn-outline-secondary" onclick="showPasswordReg()" type="button" id="inputGroupFileAddon04"><i class="fa-solid fa-eye"></i></button>
					</div>

					<div class="input-group mb-3">
						<span class="input-group-text"><i class="fa-solid fa-lock"></i><span class = "text-danger">*</span></span>
						<input type="password" id = "confirm_password" autocomplete = "off" name = "confirm_password" class="form-control" placeholder="Re-enters password" required/>
						<button class="btn btn-outline-secondary" onclick="showPasswordRegConfirm()" type="button" id="inputGroupFileAddon04"><i class="fa-solid fa-eye"></i></button>
					</div>
				</div>
				<div class="modal-footer">
					<div class="clearfix">
						<button type="submit" class="width-35 float-end btn btn-sm btn-primary" id = "submitRegister" name = "submitRegister">
							<i class="icon-signin"></i>
							<span class="bigger-110">Register</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


<script type="text/javascript">
	function showPasswordReg() {
		var passField = document.getElementById("passwordReg");
		if (passField.type === "password") {
			passField.type = "text";
		} else {
			passField.type = "password";
		}
	}

	function showPasswordRegConfirm() {
		var passField = document.getElementById("confirm_password");
		if (passField.type === "password") {
			passField.type = "text";
		} else {
			passField.type = "password";
		}
	}
</script>
