<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm Sữa</title>
	<style>
		*{
			margin: 0 auto;
		}

		.addMilk {
			text-align: center;
		}

		.btnSubmit {
			text-align: center;
		}

		.label {
			width: 25%;
			margin-left: 20px;
			float: left;
		}

		.input-data {
			width: 93%;
		    float: left;
		    margin-left: 20px;
		}

		#gender {
			width: 70%;
		}

	</style>
</head>
<body>
	<table border="1" class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
		<form  enctype="multipart/form-data" method="POST">
			<tr>
				<th class="addMilk">Thêm Sữa</th>
			</tr>
			<tr>
				<td>
					<p class="label">Mã Khách Hàng</p>
					<input class="input-data" type="text" name="MaKH">
				
					<p class="label">Tên Khách Hàng</p>
					<input class="input-data" type="text" name="NameKH">
				
					<p class="label">Giới Tính :
					  <select name="Gender" id="gender">
					  	<option value="male">Nam</option>
					  	<option value="female">Nữ</option>
					  </select>
					</p>

					<p class="label" style="width: 99%;">Địa Chỉ</p>
					<input class="input-data" type="text" name="Address">
				
					<p class="label">Số Điện Thoại</p>
					<input class="input-data" type="text" name="PhoneNumber">
				
					<p class="label">Email</p>
					<input class="input-data" type="text" name="Email">
				</td>
			</tr>
			<tr>
				<th class="btnSubmit" colspan="9"><input type="submit" name="btnAdditionUser" value="Thêm Người Dùng"></th>
			</tr>
		</form>
	</table>
</body>
</html>