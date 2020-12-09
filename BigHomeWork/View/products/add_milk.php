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
					<p class="label">Mã Sữa</p>
					<input class="input-data" type="text" name="MaS">
				
					<p class="label">Tên Sữa</p>
					<input class="input-data" type="text" name="NameMilk">
				
					<p class="label">Tên Hãng Sữa</p>
					<input class="input-data" type="text" name="NameCompany">
				
					<p class="label">Loại Sữa</p>
					<input class="input-data" type="text" name="KindMilk">
				
					<p class="label">Trọng Lượng</p>
					<input class="input-data" type="text" name="WieghtMilk">
				
					<p class="label">Đơn Giá</p>
					<input class="input-data" type="text" name="Price">
				
					<p class="label">Thành Phần</p>
					<input class="input-data" type="text" name="Ingradient">
				
					<p class="label">Lợi Ích</p>
					<input class="input-data" type="text" name="Benefit">
				
					<p class="label">Hình Ảnh</p>
					<input class="input-data" type="file" name="Image">
				</td>
			</tr>
			<tr>
				<th class="btnSubmit" colspan="9"><input type="submit" name="btnAdditionMilk" value="Thêm Sản Phẩm"></th>
			</tr>
		</form>
	</table>
</body>
</html>