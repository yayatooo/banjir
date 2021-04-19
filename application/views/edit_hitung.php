<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-body">
					
				
			<form action="<?=base_url('hitung/update/'.$edit['id_hasil'].'')?>" method="post">
                <input type="hidden" name="" id="id" value="<?=$edit['id_hasil']?>">
				<div class="form-group">
        		<label>Tahun</label>
        		<select name="tahun" class="form-control"><?php
for($i=date('Y'); $i>=date('Y')-32; $i-=1){?>
<option value='<?=$i?>' <?php if ($i==$edit['tahun']) {
   echo "selected";
} ?>><?= $i?> </option>
<?php }
?></select>
        	</div>
        	<div class="form-group">
        		<label>Bulan</label>
        		<select name="bulan" class="form-control">
        		<?php	$bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
$jlh_bln=count($bulan);
for($c=0; $c<$jlh_bln; $c+=1){?>
    <option value='<?=$bulan[$c]?>' <?php if ($bulan[$c]==$edit['bulan']) {
        echo "selected";
    } ?> ><?= $bulan[$c]?> </option>

    <?php 
}?>
        		</select>
        	</div>
        	<div class="form-group">
        		<label>Curah Hujan</label>
        		<input type="text" name="curah_hujan" id="curah_hujan" value="<?=$edit['nilai']?>" class="form-control">
        	</div>
        	<div class="form-group">
        		<label>Forceast</label>
        		<input type="text" name="forceast" id="forceast" value="<?=$edit['forceast']?>" class="form-control" readonly="">
        	</div>
        	<div class="form-group">
        		<label>Error</label>
        		<input type="text" name="error" id="error" value="<?=$edit['error']?>" class="form-control" readonly="">
        	</div>
        	<div class="form-group">
        		<label>Absolute</label>
        		<input type="text" name="absolute" id="absolute" value="<?=$edit['absolute']?>" class="form-control" readonly="">
        	</div>
        	<div class="form-group">
        		<label>Squared</label>
        		<input type="text" name="squared" id="squared" value="<?=$edit['squared']?>" class="form-control" readonly="">
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
<script type="text/javascript">
	$(document).ready(function(){

		$('#curah_hujan').keyup(function(){
			var curah_hujan=$('#curah_hujan').val();
            var id=$('#id').val();
			$.ajax({
				url:"<?=base_url('hitung/forceastedit')?>/"+curah_hujan+"/"+id,
				type:"get",
				dataType:"JSON",
				success:function(data){
//alert(data.forceast);
					$('#forceast').val(data.forceast);
					$('#error').val(data.error);
					$('#absolute').val(data.absolute);
					$('#squared').val(data.squared);
				}


			});
		})
	})
</script>
