<?php
/**
 * Created by PhpStorm.
 * User: Erkin Pardayev
 * Date: 02.02.2018
 * Time: 11:33
 */
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1 align="center">
			Main page
		</h1>
	</section>

	<!-- Main content -->
	<section class="content">

		<!-- Default box -->
		<div class="box">
			<div class="box-body">
				<div class="col-md-12">
					<!-- small box -->
					<table class="table table-responsive table-bordered">
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>Email</th>
						</tr>
						<?php $i = 0; foreach ($users as $user): $i++ ?>
							<tr>
								<td><?= $i ?></td>
								<td><?= $user->username ?></td>
								<td><?= $user->email ?></td>
							</tr>
						<?php endforeach; ?>
					</table>
				</div>
			</div>
		</div>
		<!-- /.box -->

	</section>
	<!-- /.content -->
</div>
