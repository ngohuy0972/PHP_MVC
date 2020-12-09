<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chỉnh Sửa Công Ty</title>
	<style>
		*{
			margin: 0 auto;
		}

		.editMilkCompany {
			text-align: center;
		}

		.btnSubmit {
			text-align: center;
		}
	</style>
</head>
<body>
	<table border="1">
		<form  enctype="multipart/form-data" method="POST">
			<tr>
				<th class="editMilkCompany" colspan="5">Chỉnh Sửa Công Ty</th>
			</tr>
			<tr>
				<th>
					<p>Mã Hãng Sữa</p>
					<input type="text" name="newMaHS" value="<?php echo $oldValue['MaHS'] ?>">
				</th>
				<th>
					<p>Tên Hãng Sữa</p>
					<input type="text" name="newNameCompany" value="<?php echo $oldValue['NameHS'] ?>">
				</th>
				<th>
					<p>Địa chỉ</p>
					<input type="text" name="newAddress" value="<?php echo $oldValue['Address'] ?>">
				</th>
				<th>
					<p>Số Điện Thoại</p>
					<input type="text" name="newPhoneNumber" value="<?php echo $oldValue['PhoneNumber'] ?>">
				</th>
				<th>
					<p>Email</p>
					<input type="text" name="newEmail" value="<?php echo $oldValue['Email'] ?>">
				</th>
			</tr>
			<tr>
				<th class="btnSubmit" colspan="5"><input type="submit" name="btnEditCompany" value="Chỉnh Sửa"></th>
			</tr>
		</form>
	</table>
</body>
</html>