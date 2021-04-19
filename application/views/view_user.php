<div class="container-fluid">

	<div class="row">

			<div class="col-md-12">
				 <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash') ?>"></div>
			<div class="card">
				<div class="card-header"><a href="<?=base_url('user/create')?>"   class="btn btn-info btn-sm">Tambah</a></div>
				<div class="card-body">
					<div class="table table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Level</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($user as $data) {
						
					 ?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$data->username?></td>
						<td><?php if ($data->level==1) {
							echo "Admin";
						}else{

							echo "User";
						} ?></td>
						<td><a href="<?=base_url('user/edit/'.$data->id_user.'')?>" class="btn btn-info btn-sm">Edit</a> <a href="<?=base_url('user/delete/'.$data->id_user.'')?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a></td>
					</tr>
				<?php }?>
				</tbody>

			</table>