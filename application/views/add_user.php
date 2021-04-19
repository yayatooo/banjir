<div class="container-fluid">

	<div class="row">

			<div class="col-md-12">

				<div class="card">
					<div class="card-body">
						<form action="<?=base_url('user/store')?>" method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" required="">
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="text" name="password" class="form-control" required="">
							</div>
							<div class="form-group">
								<label>Level</label>
								<select name="level" class="form-control">
									<option value="1">Admin</option>
									<option value="2">User</option>
								</select>
							</div>
							<div class="form-group">
								<button class="btn btn-success btn-sm">Simpan</button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
