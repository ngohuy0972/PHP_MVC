<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm Hãng Sữa</title>
	<style>
		*{
			margin: 0 auto;
		}

		.addMilkCompany {
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
	</style>
</head>
<body>
	<table border="1" class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
		<form  enctype="multipart/form-data" method="POST">
			<tr>
				<th class="addMilkCompany" colspan="5">Thêm Hãng Sữa</th>
			</tr>
			<tr>
				<th>
					<p class="label">Mã Hãng Sữa</p>
					<input class="input-data" type="text" name="MaHS">
				
					<p class="label">Tên Hãng Sữa</p>
					<input class="input-data" type="text" name="NameCompany">
				
					<p class="label">Địa chỉ</p>
					<input class="input-data" type="text" name="Address">
				
					<p class="label">Số Điện Thoại</p>
					<input class="input-data" type="text" name="PhoneNumber">
				
					<p class="label">Email</p>
					<input class="input-data" type="text" name="Email">
				</th>
			</tr>
			<tr>
				<th class="btnSubmit" colspan="5"><input type="submit" name="btnAdditionCompany" value="Thêm Hãng"></th>
			</tr>
		</form>
	</table>
</body>
</html>