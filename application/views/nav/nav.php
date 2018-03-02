<h6 class="text-secondary">Navigator</h6>
<ul class="navbar-nav mr-auto">
	
	<?php if ($this->ion_auth->in_group('admin')): ?>
		<a href="<?php echo base_url('index.php/admin/dashboard/') ?>"><li class="linkmenu text-dark"><i class="fa fa-desktop text-info"></i> Beranda</li></a>
	<a href="<?php echo base_url('index.php/admin/kategori/') ?>"><li class="linkmenu text-dark"><i class="fa fa-tags text-info"></i> Kategori</li></a>
	<a href="<?php echo base_url('index.php/admin/obat/') ?>"><li class="linkmenu text-dark"><i class="fa fa-list text-info"></i> List Barang</li></a>
	<a href="<?php echo base_url('index.php/admin/pembelian/') ?>"><li class="linkmenu text-dark"><i class="fa fa-shopping-basket text-info"></i> Pembelian</li>
	</a>
	<a href="<?php echo base_url('index.php/admin/histori/') ?>"><li class="linkmenu text-dark"><i class="fa fa-trophy text-info"></i> History</li></a>
	<a href="<?php echo base_url('index.php/admin/member/') ?>"><li class="linkmenu text-dark"><i class="fa fa-users text-info"></i> Member</li></a>
	<a href="<?php echo base_url('index.php/admin/users/') ?>"><li class="linkmenu text-dark"><i class="fa fa-user-o text-info"></i> User</li></a>
	<a href="<?php echo base_url('index.php/admin/setting/') ?>"><li class="linkmenu text-dark"><i class="fa fa-gear text-info"></i> Setting</li></a>
<?php else: ?>
	<a href="<?php echo base_url('index.php/admin/dashboard/') ?>"><li class="linkmenu text-dark"><i class="fa fa-desktop text-info"></i> Beranda</li></a>
	<a href="<?php echo base_url('index.php/admin/pembelian/') ?>"><li class="linkmenu text-dark"><i class="fa fa-shopping-basket text-info"></i> Pembelian</li>
	<a href="<?php echo base_url('index.php/admin/obat/') ?>"><li class="linkmenu text-dark"><i class="fa fa-list text-info"></i> List Barang</li></a>
	<a href="<?php echo base_url('index.php/admin/member/') ?>"><li class="linkmenu text-dark"><i class="fa fa-users text-info"></i> Member</li></a>
	<?php endif ?>
	
</ul>