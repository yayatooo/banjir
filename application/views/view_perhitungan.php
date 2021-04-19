<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Tahun</th>
						<th>Januari</th>
						<th>Forceast</th>
						<th>Error</th>
						<th>Absolute</th>
						<th>Squared</th>

					</tr>
				</thead>
				<tbody>
					<?php $no=1; $s=1; $tampung=0; foreach ($isi as $key => $data) {
						$new=$no++;
						 $thn=$data['tahun']-1;
						$sql=$this->db->get_where('tb_curah_hujan',['tahun'=>$thn])->result_array();
						//foreach ($sql as $row) {
							
					 ?>
					<tr>
						<td><?=$new?></td>
						<td><?=$data['tahun']?></td>
						<td><?=$data['januari']?></td>
						<td><?php if ($new==1) {
							echo $data['januari'];
						}else if($new==2){
							foreach ($sql as $row) {

								echo $tampung= $row['januari']+0.8*($row['januari']-183);
							}

						}else{

	for($i=0; $i < count($sql); $i++){
   // echo $sql[$i]['januari']."<br>";

			echo $tampung= $sql[$i]['januari']+0.8*($sql[$i]['januari']-$tampung);
}

							//	echo $tampung= $row->januari+0.8*($row->januari-$tampung);
							

						} ?></td>

					</tr>
				<?php }?>
				</tbody>
			</table>
		</div>
	</div>
</div>