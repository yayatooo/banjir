<div class="container-fluid">

	<div class="row">

			<div class="col-md-12">

				<div class="card">
					<div class="card-body">
						<form action="<?=base_url('user/update/'.$edit['id_user'].'')?>" method="post">
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" value="<?=$edit['username']?>" class="form-control" required="">
							</div>
							
							<div class="form-group">
								<label>Level</label>
								<select name="level" class="form-control">
									<option value="1" <?php if ($edit['id_user']==1) {
										echo "selected";
									} ?>>Admin</option>
									<option value="2"  <?php if ($edit['id_user']==2) {
										echo "selected";
									} ?>>User</option>
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
