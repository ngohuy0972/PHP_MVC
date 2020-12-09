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
				<th class="editMilkCompany" colspan="6">Chỉnh Sửa Khách Hàng</th>
			</tr>
			<tr>
				<th>
					<p>Mã Khách Hàng</p>
					<input type="text" name="newMaKH" value="<?php echo $oldValue['MaKH'] ?>">
				</th>
				<th>
					<p>Tên Khách Hàng</p>
					<input type="text" name="newNameKH" value="<?php echo $oldValue['NameKH'] ?>">
				</th>
				<th>
					<p class="label">Giới Tính :
					  <select id="gender" name="newGender">
					  	<option value="male">Nam</option>
					  	<option value="female">Nữ</option>
					  </select>
					</p>
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
				<th class="btnSubmit" colspan="6"><input type="submit" name="btnEditUser" value="Chỉnh Sửa"></th>
			</tr>
		</form>
	</table>
</body>
</html>