<div class="row">
	<div class="col">
		<div style="margin-top: 14px; background-color: white;padding: 30px">
			<h5 class="text-info">Daftar Nota di tanggal <?php echo $tanggal; ?></h5>
			<table class="table table-sm">
				<tr>
					<td>No</td>
					<td>No Nota</td>
					<td>Kasir</td>
					<td>Total</td>
					<td></td>
				</tr>
				<?php $no = 1 ?>
				<?php foreach ($hasil as $data): ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $data->id_nota; ?></td>
						<td><?php echo $data->username ?></td>
						<td><?php echo $data->total_bayar_nota ?></td>
						<td><a href="<?php echo base_url('index.php/admin/histori/hari/'.$data->tgl_nota.'/'.$data->id_nota) ?>">Detail</a></td>
					</tr>
					<?php $no++ ?>
				<?php endforeach ?>
			</table>
		</div>
	</div>
	<div class="col">
		<div style="margin-top: 14px; background-color: white;padding: 30px">
			<h5 class="text-info">Hasil</h5>
			<?php if ($idnota == TRUE): ?>
				<?php if ($harnota == TRUE): ?>
					<table>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td><?php echo $detnota->tgl_nota; ?></td>
						</tr>
						<tr>
							<td>Waktu</td>
							<td>:</td>
							<td><?php echo $detnota->jam_nota; ?></td>
						</tr>
						<tr>
							<td>No Nota</td>
							<td>:</td>
							<td><?php echo $detnota->id_nota; ?></td>
						</tr>
						<tr>
							<td>Kasir</td>
							<td>:</td>
							<td><?php echo $detnota->username; ?></td>
						</tr>
						<tr>
							<td>Status</td>
							<td>:</td>
							<td><?php echo $detnota->nm_status; ?></td>
						</tr>
					</table>
					<?php if ($harnota==TRUE): ?>
						<?php $no=1 ?>
						<table class="table table-sm">
							<?php foreach ($harnota as $data): ?>
								<form action="<?php echo base_url('index.php/admin/pembelian/update_menu_nota/'.$data->id_menu_to_nota) ?>" method="post">
									<tr>
										<td><?php echo $no; ?></td>
										<td><?php echo $data->nama_menu; ?></td>
										<td>x<?php echo $data->jml_menu ?></td>
										<td><?php echo 'Rp.'.$data->total_bayar; ?></td>
									</tr>
								</form>
								<?php $no++ ?>
							<?php endforeach ?>
							<tr>
								<td colspan="3">Total</td>
								<td>
									<?php $harga = 0 ?>
									<?php foreach ($harnota as $data): ?>
										<?php $harga = $data->total_bayar + (int)@$harga; ?>
									<?php endforeach; ?>
									<b ><?php echo 'Rp.'.$harga; ?></b>
								</td>
								<td></td>
							</tr>
							<tr>
								<td colspan="3">Jumlah Bayar</td>
								<td colspan="2"><b><?php echo 'Rp.'.$detnota->jumlah_bayar; ?></b></td>
							</tr>
							<tr>
								<td colspan="3">Kembalian</td>
								<td colspan="2"><b><?php echo 'Rp.'.$detnota->kembalian; ?></b></td>
							</tr>
							<tr>
								<td colspan="5"><a href="<?php echo base_url('index.php/admin/pembelian/cetak_struk/'.$detnota->id_nota) ?>" class="btn btn-outline-info btn-sm" style="width: 100%" target="_blank">Cetak Struk</a></td>
							</tr>
						</table>
					<?php else: ?>
						<div class="border border-danger" style="padding: 14px">Belum ada barang di pilih</div>
					<?php endif ?>
				<?php else: ?>
					<div class="border border border-danger">Tidak ada hasil transaksi dibulan ini, silahkan pilih bulan lain</div>
				<?php endif ?>
			<?php else: ?>
				<div class="border border border-danger">Tidak ada hasil transaksi dibulan ini, silahkan pilih bulan lain</div>
			<?php endif ?>
		</div>
	</div>
</div>