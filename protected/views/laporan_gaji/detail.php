<?php
/* @var $this DashboardController */

$this->breadcrumbs=array(
	'Dashboard',
);
?>
<h1>Laporan Gaji - <?php echo $_SESSION['site_name']; ?></h1>

<div class="container-fluid" id="content-area">

    <div class="row-fluid">

        <div class="span12">
			<table border="1" cellpadding="5" cellspacing="0" width="100%">
        		<tr>
	        		<th>No.</th>
	        		<th>Program</th>
	        		<th colspan="2">Kelas Reguler</th>
	        		<th colspan="2">Kelas Privat</th>
	        		<th>Sub Total</th>
	        	</tr>
            <?php
            	$total = 0;
            	$no = 0;
            	foreach ($arr_gaji as $key => $value) {
            		$honor_reguler = $value['harga_reguler']*40/100/$value['pertemuan_reguler'];
            		$honor_private = $value['harga_privat']*50/100;
            		$sub_total = ($honor_reguler*$value['jumlah_murid_reguler']) + (($honor_private+5000)*$value['jumlah_murid_privat']);
            		$total = $total+$sub_total;
            	?>
	        		<tr>
		        		<th><?php echo $key+1; ?></th>
		        		<th><?php echo $value['nama_program']; ?></th>
		        		<th>
		        			<?php echo $honor_reguler; ?>
		        		</th>
		        		<th>
		        			<?php echo $value['jumlah_murid_reguler']; ?> orang
		        		</th>
		        		<th>
		        			<?php echo $honor_private; ?> + 5000
		        		</th>
		        		<th>
		        			<?php echo $value['jumlah_murid_privat']; ?> orang
		        		</th>
		        		<th><?php echo $sub_total; ?></th>
		        	</tr>
		        <?php
		        	$no = $key;
            	}
            ?>
            <?php
            	foreach ($arr_tunjangan as $keys => $values) {
            		$total = $total+$values['jumlah'];
            	?>
	        		<tr>
		        		<th><?php echo $no+$keys+2; ?></th>
		        		<th><?php echo $values['nama_transaksi']; ?></th>
		        		<th colspan="4"></th>
		        		<th>
		        			<?php echo $values['jumlah']; ?>
		        		</th>
		        	</tr>
		        <?php
            	}
            ?>
        		<tr>
	        		<th colspan="6">Total.</th>
	        		<th><?php echo $total; ?></th>
	        	</tr>
        	</table>        </div>

    </div>
</div>