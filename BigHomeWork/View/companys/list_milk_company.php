<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hãng sữa</title>
	<style>
		*{
			margin: 0 auto;
		}

		.infoMilkCompany {
			text-align: center;
		}

		.add-milk-company {
			text-align: center;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<th class="infoMilkCompany" colspan = "7">Thông Tin Hãng Sữa</th>
		</tr>
		<tr>
			<td>ID</td>
			<td>Mã HS</td>
			<td>Tên hãng sữa</td>
			<td>Địa chỉ</td>
			<td>Điện Thoại</td>
			<td>Email</td>
			<td>Tùy Chọn</td>
		</tr>
		<?php
			while ($companys = $list_milk_company->fetch_assoc()) {
			    $id = $companys['id'];
		 ?>
		 <tr>
		 	<td><?php echo $companys['id']; ?></td>
		 	<td><?php echo $companys['MaHS']; ?></td>
		 	<td><?php echo $companys['NameHS']; ?></td>
		 	<td><?php echo $companys['Address']; ?></td>
		 	<td><?php echo $companys['PhoneNumber']; ?></td>
		 	<td><?php echo $companys['Email']; ?></td>
		 	<td><a href="index.php?action=edit_milk_company&id=<?php echo $id; ?>">Chỉnh Sửa    |</a>
				<a href="index.php?action=delete_milk_company&id=<?php echo $id; ?>">Xóa Hãng Sữa</a></td>
		 </tr>
		<?php
			}
		?>
		<tr>
		 	<td class="add-milk-company" colspan="7"><a href="index.php?action=addition_milk_company">Thêm Hãng Sữa</a></td>
		 </tr>
	</table>
</body>
</html>