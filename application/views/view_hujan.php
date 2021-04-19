<div class="container-fluid">

	<div class="row">

			<div class="col-md-12">
				
			<div class="card">
				<div class="card-header"><a href="<?=base_url('hujan/create')?>"   class="btn btn-info btn-sm">Tambah</a></div>
				<div class="card-body">
					<div class="table table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Tahun</th>
						<th>Januari</th>
						<th>Febuari</th>
						<th>Maret</th>
						<th>April</th>
						<th>Mei</th>
						<th>Juni</th>
						<th>Juli</th>
						<th>Agustus</th>
						<th>September</th>
						<th>Oktober</th>
						<th>November</th>
						<th>Desember</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no=1; foreach ($hujan as $data) {
					
					 ?>
					<tr>
					<td><?=$no++?></td>
					<td><?=$data['tahun']?></td>
					<td><?=$data['januari']?></td>
					<td><?=$data['febuari']?></td>
					<td><?=$data['maret']?></td>
					<td><?=$data['april']?></td>	
					<td><?=$data['mei']?></td>
					<td><?=$data['juni']?></td>
					<td><?=$data['juli']?></td>
					<td><?=$data['agustus']?></td>
					<td><?=$data['september']?></td>
					<td><?=$data['oktober']?></td>
					<td><?=$data['november']?></td>
					<td><?=$data['desember']?></td>
					<td><a href="#" onclick="edit(<?=$data['id_hujan']?>)" class="btn btn-info btn-sm">Edit</a> <a href="<?=base_url('hujan/hapus/'.$data['id_hujan'].'')?>" class="btn btn-danger btn-sm">Hapus</a></td>
					</tr>

				<?php }?>

				</tbody>
			</table>
			</div>

		</div>
		</div>
		</div>

	

	</div>
</div>

<!--Modal-->
<!-- Modal -->
<div class="modal fade" id="modal-hujan" tabindex="" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal Debit Hujan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?=base_url('hujan/add')?>" method="post">
        	<div class="form-group">
        		<label>Tahun</label>
        		<select name="tahun" class="form-control"><?php
for($i=date('Y'); $i>=date('Y')-32; $i-=1){
echo"<option value='$i'> $i </option>";
}
?></select>
        	</div>
        	<div class="form-group">
        		<label>Bulan</label>
        		<select name="bulan" class="form-control">
        			<?php
$bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
$jlh_bln=count($bulan);
for($c=0; $c<$jlh_bln; $c+=1){
    echo"<option value=$bulan[$c]> $bulan[$c] </option>";
}
?>
        		</select>
        	</div>
        	<div class="form-group">
        		<label>Debit Air</label>
        		<input type="text" name="debit" id="debit" class="form-control" required="">
        	</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script type="text/javascript">
	function tambah(){

		$('#modal-hujan').modal();

	}
	function edit(id){
		$.ajax({
			url:"<?=base_url('hujan/edit')?>/"+id,
			type:"get",
			success:function(data){
				$('#debit').val(data.debit);

			}


		});

	}
	function hapus(data){

		$.ajax({

			url:"<?=base_url('')?>",
			type:"get",
			success:function(data){


			}
		});

	}
</script>