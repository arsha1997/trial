<!DOCTYPE html>
<html>
<head>
<title>first site</title>
<style>
	table,td{
		padding: 20px;
		font-size: 20px;
		border: 2px solid;
		border-collapse:collapse;
	}
	
	</style>
</head>
<body>
	<form method="post" action="">
	<table>
		<tr>
			<td>Firstname</td>
			<td>Lastname</td>
			<td>Usename</td>
			<td>Mobile</td>
			<td>email</td>
			<td>Approve</td>
			<td>Reject</td>
			</tr>
			<?php
			if($n->num_rows()>0)
			{
				foreach($n->result() as $row)
				{
					?>
					<tr>
						<td><?php echo $row->fname;?></td>
						<td><?php echo $row->lname;?></td>
						<td><?php echo $row->uname;?></td>
						<td><?php echo $row->mobile;?></td>
						<td><?php echo $row->email;?></td>
						
						<?php
						if($row->status==1)
						{
							?>
							<td>approved</td>
							<td><a href="<?php echo base_url()?>main/ureject/<?php echo $row->id;?>">Reject</a></td>

							<?php
						}
						elseif($row->status==2)
						{
							?>
							<td>Rejected</td>
							<td><a href="<?php echo base_url()?>main/uapprove/<?php echo $row->id;?>">Approve
						</a>
						</td>
							<?php
						}
						else
						{
							?>
		
						<td><a href="<?php echo base_url()?>main/uapprove/<?php echo $row->id;?>">Approve
						</a>
						</td>
						<td><a href="<?php echo base_url()?>main/ureject/<?php echo $row->id;?>">Reject</a></td>
						<?php
					}
					?>
				</tr>

						
					<?php
				}
			}
			
				?>
				


	</table>
	
</form>
</body>
</html>