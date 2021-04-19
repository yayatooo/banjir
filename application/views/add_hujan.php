<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					
				
			<form action="<?=base_url('hujan/store')?>" method="post">
				<div class="form-group">
        		<label>Tahun</label>
        		<select name="tahun" class="form-control"><?php
for($i=date('Y'); $i>=date('Y')-32; $i-=1){
echo"<option value='$i'> $i </option>";
}
?></select>
        	</div>
				<div class="form-row">
					<div class="col-md-6">
				<div class="form-group">
					<label>Januari</label>
					<input type="text" name="januari" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Febuari</label>
					<input type="text" name="febuari" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Maret</label>
					<input type="text" name="maret" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>April</label>
					<input type="text" name="april" class="form-control" required="">
				</div>
				<div class="form-group">
					<label>Mei</label>
					<input type="text" name="mei" class="form-control" required="">
				</div>
				<div class="form-group">
	<label>Juni</label>
	<input type="text" name="juni" class="form-control" required="">
</div>	
</div>
<div class="col-md-6">

<div class="form-group">
	<label>Juli</label>
	<input type="text" name="juli" class="form-control" required="">
</div>	
<div class="form-group">
	<label>Agustus</label>
	<input type="text" name="agustus" class="form-control" required="">
</div>	
<div class="form-group">
	<label>September</label>
	<input type="text" name="september" class="form-control" required="">
</div>	
<div class="form-group">
	<label>Oktober</label>
	<input type="text" name="oktober" class="form-control" required="">
</div>
<div class="form-group">
	<label>November</label>
	<input type="text" name="november" class="form-control" required="">
</div>
<div class="form-group">
	<label>Desember</label>
	<input type="text" name="desember" class="form-control" required="">
</div>
</div>
				</div>
				<center>
				<div class="form-group"><button class="btn btn-success btn-sm">Simpan</button> <a href="" class="btn btn-danger btn-sm">Kembali</a></div></center>
			</form>
			</div>
			</div>
		</div>
	</div>
</div>