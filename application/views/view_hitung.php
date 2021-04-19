<div class="container-fluid">

	<div class="row">

			<div class="col-md-12">
				
			<div class="card">
				 <div class="flash-data" data-flashdata="<?php echo $this->session->flashdata('flash') ?>"></div>
				<div class="card-header"><a href="<?=base_url('hitung/create')?>"   class="btn btn-info btn-sm">Tambah</a></div>
				<div class="card-body">
					<div class="table table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Tahun</th>
						<th>Bulan</th>
						<th>Curah Hujan</th>
						<th>Forceast</th>
						<th>Error</th>
						<th>Absolute</th>
						<th>Squared</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; $totalforceast=0; $totalerror=0; $totalabsolute=0; $totalsquared=0; foreach ($hujan as $data) {
						# code...
					 ?>
					<tr>
						<td><?=$no++?></td>
						<td><?=$data['tahun']?></td>
						<td><?=$data['bulan']?></td>
						<td><?=$data['nilai']?></td>
						<td><?=$data['forceast']?></td>
						<td><?=$data['error']?></td>
						<td><?=$data['absolute']?></td>
						<td><?=$data['squared']?></td>
						<td><a href="<?=base_url('hitung/edit/'.$data['id_hasil'].'')?>" class="btn btn-danger btn-sm">Edit</a><a href="<?=base_url('hitung/hapus/'.$data['id_hasil'].'')?>" class="btn btn-danger btn-sm tombol-hapus">Hapus</a></td>
					</tr>
				<?php $totalforceast +=$data['forceast']; $totalerror +=$data['error']; $totalabsolute +=$data['absolute']; $totalsquared +=$data['squared']; }?>
				<tr>
					<td colspan="4"><center>Total</center></td><td><?=$totalforceast?></td><td><?=$totalerror?></td><td><?=$totalabsolute?></td><td><?=$totalsquared?></td>
				</tr>
				<tr>
					<td colspan="4">Rata-Rata</td><td><?=$totalforceast/$count['jumlah']?></td><td><?=$totalerror/$count['jumlah']?></td><td><?=$totalabsolute/$count['jumlah']?></td><td><?=$totalsquared/$count['jumlah']?></td>
				</tr>
				<tr><td colspan="5"></td> <td>MAPE</td> <td>MAD</td><td>MSD</td></tr>
				<tr><td colspan="5"></td><td colspan="2">SE</td><td><?=sqrt($totalsquared/8)?></td></tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>