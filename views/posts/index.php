
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<style>
			h2{
				display:flex;
				justify-content:center;
				
			}
			.addtitle{
				width: 150px;
				padding: 5px;
				background-color: #7EC08B;
				font-size:24px;
				text-align:center;
				
				font-weight:bold;
				margin-bottom:20px;border-radius: 10px;
				
			}
			a:link, a:visited{
				text-decoration: none;	
				display: inline-block;
				text-decoration: none;	
				color:black;
			}
			li{
				display:flex;
				
				gap:10px;border:1px solid black;
				font-size:18px;
				padding:10px;
				
			}
		
	</style>
</head>
<body>
<div class="container mt-3">
	<h2>Danh sách </h2>
<div class="addtitle" ><a href="index.php?controller=posts&action=insert">Thêm mới </a><br></div>

	<table class="table  table-bordered">
	<thead class="table-danger">
		<tr style="font-size:22px ;border:1px solid black">
				<th style="width: 200px ;border:0.5px solid black; text-align:center" >Tiêu đề</th>
				<th style="width: 70px ;border:1px solid black"></th>
				<th style="width: 70px;border:1px solid black"></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($posts as $post):?>
			
		<tr>	
				
		<td style="border:1px solid black ;padding:10px;"><a href="index.php?controller=posts&action=showPost&id=<?= $post->id ?>" ><?=$post->title ?></a></td>
		<td style="border:1px solid black ;padding:10px;"><a href="index.php?controller=posts&action=edit&id=<?= $post->id ?>"><button >Sửa</button></a></td>
		<td style="border:1px solid black ;padding:10px;"><a href="index.php?controller=posts&action=delete&id=<?= $post->id ?>"><button onclick="return confirm ('Ban muon xoa?')" >Xóa</button></a></td>
</tr>
				
		   
			<?php endforeach; ?>
	</tbody>
	</table>
</div>
			
		

</body>
</html>
