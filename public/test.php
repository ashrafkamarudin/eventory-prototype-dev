<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		.red {
			background-color: red;
		}

		.blue {
			background-color: blue;
		}
	</style>
</head>
<body>

	<?php $variable = ['red', 'green'] // array ?>

	<table>
		<thead>
			<th>no</th>
			<th>value</th>
		</thead>
		<tbody>
			<?php  foreach ($variable as $key => $value) { ?>

				<?php
				if ($value == 'red') {
					$color = 'red';
				} elseif ($value == 'blue') {
					$color = 'blue';
				}
				?>

				<tr>
					<td><?php echo $key+1; ?></td>
					<td class=" <?php echo $color; ?>  "><?php echo $value; ?></td>
				</tr>
			<? } ?>
		</tbody>
	</table>

</body>
</html>