<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thông Tin Sản Phẩm</title>
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
			<th class="infoMilk" colspan = "7">Thông Tin Sản Phẩm Sữa</th>
		</tr>
		<tr>
			<td>ID</td>
			<td>Tên Sản Phẩm</td>
			<td>Tên hãng sữa</td>
			<td>Loại Sữa</td>
			<td>Trọng Lượng</td>
			<td>Đơn Giá</td>
			<td>Tùy Chọn</td>
		</tr>
		<?php
			while ($products = $list_milk->fetch_assoc()) {
			    $id = $products['id'];
		 ?>
		 <tr>
		 	<td><?php echo $products['id']; ?></td>
		 	<td><?php echo $products['NameMilk']; ?></td>
		 	<td><?php echo $products['NameHS']; ?></td>
		 	<td><?php echo $products['KindMilk']; ?></td>
		 	<td><?php echo $products['WeightMilk']; ?></td>
		 	<td><?php echo $products['Price']; ?></td>
		 	<td><a href="index.php?action=edit_milk&id=<?php echo $id; ?>">Chỉnh Sửa Sản Phẩm    |</a>
				<a href="index.php?action=delete_milk&id=<?php echo $id; ?>">Xóa Sản Phẩm</a></td>
		 </tr>
		<?php
			}
		?>
		<tr>
		 	<td class="add-milk" colspan="7"><a href="index.php?action=add_milk">Thêm Hãng Sữa</a></td>
		 </tr>
		 <tr>
			<td colspan="7" style="text-align: center;"><?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($currentPage > 1 && $totalPage > 1){
                echo '<a href="index.php?action=list_milk&page='.($currentPage - 1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $totalPage; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $currentPage){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="index.php?action=list_milk&page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($currentPage < $totalPage && $totalPage > 1){
                echo '<a href="index.php?action=list_milk&page='.($currentPage + 1).'">Next</a>';
            }
           ?></td>
		 </tr>
	</table>
</body>
</html>