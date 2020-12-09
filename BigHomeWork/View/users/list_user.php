<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông Tin Khách Hàng</title>
	<style>
		*{
			margin: 0 auto;
		}

		.infoMilk {
			text-align: center;
		}

		.add-milk {
			text-align: center;
		}
	</style>
</head>
<body>
	<table border="1">
		<tr>
			<th class="infoMilk" colspan = "8">Thông Tin Khách Hàng Sữa</th>
		</tr>
		<tr>
			<td>ID</td>
			<td>Mã Khách Hàng</td>
			<td>Tên Khách Hàng</td>
			<td>Giới Tính</td>
			<td>Địa Chỉ</td>
			<td>Số Điện Thoại</td>
			<td>Email</td>
			<td>Tùy Chọn</td>
		</tr>
		<?php
			while ($users = $list_user->fetch_assoc()) {
			    $id = $users['id'];
		 ?>
		 <tr>
		 	<td><?php echo $users['id']; ?></td>
		 	<td><?php echo $users['MaKH']; ?></td>
		 	<td><?php echo $users['NameKH']; ?></td>
		 	<td><?php echo $users['Gender']; ?></td>
		 	<td><?php echo $users['Address']; ?></td>
		 	<td><?php echo $users['PhoneNumber']; ?></td>
		 	<td><?php echo $users['Email']; ?></td>
		 	<td><a href="index.php?action=edit_user&id=<?php echo $id; ?>">Chỉnh Sửa Khách Hàng    |</a>
				<a href="index.php?action=delete_user&id=<?php echo $id; ?>">Xóa Khách Hàng</a></td>
		 </tr>
		<?php
			}
		?>
		<tr>
		 	<td class="add-milk" colspan="8"><a href="index.php?action=add_user">Thêm Khách Hàng</a></td>
		 </tr>
	</table>
</body>
</html>