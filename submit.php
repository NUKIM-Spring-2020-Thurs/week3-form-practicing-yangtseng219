<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>表單回應</title>
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap');
		*{
			font-family:  'Noto Sans TC', sans-serif;
			/* background-color: #34495e; */
		}
	body{
		background-color: #34495e;
	}
	.center{
		width:80%;
		/* border:1px solid white; */
		margin:0 auto;
	}
	table{
		/* border:1px solid red; */
		/* background-color:#333; */
		color:#fff;
		border-collapse:collapse;
		text-align:center;
		margin:0 auto;
		border-spacing:10px;
	}
	tr{
		margin:10px 0;
		line-height:30px;

	}
	th{
		font-size:1.5rem;
	}
	tr:nth-child(even){
		background-color:#888;
	}

</style>
</head>
<body>
<?php 

$name=$_POST["sname"];
$gender=$_POST["gender"];
$bday=$_POST["birthday"];
$id=$_POST["id"];
$telnum=$_POST["telnum"];
$sos=$_POST["username"];
$relation=$_POST["relation"];
$tel=$_POST["tel"];
$live=$_POST["live"];
$address=$_POST["add"];
$senior=$_POST["school"];
$size=$_POST["size"];
$say=$_POST["comment"];

 ?>
<div class="center">
	<table cellpadding="5">
		<thead>
			<tr>
				<th colspan="2">表單回應</th>
				
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>您的姓名:</td>
				<td><?php echo $name?></td>
			</tr>
			<tr>
				<td>您的性別:</td>
				<td><?php echo $gender?></td>
			</tr>
			<tr>
				<td>您的生日:</td>
				<td><?php echo $bday?></td>
			</tr>
			<tr>
				<td>您的身分證字號:</td>
				<td><?php echo $id?></td>
			</tr>
			<tr>
				<td>您的聯絡手機:</td>
				<td><?php echo $telnum?></td>
			</tr>
			<tr>
				<td>您的緊急聯絡人:</td>
				<td><?php echo $sos?></td>
			</tr>
			<tr>
				<td>您與緊急連絡人關係:</td>
				<td><?php echo $relation?></td>
			</tr>
			<tr>
				<td>您的緊急聯絡人手機:</td>
				<td><?php echo $tel?></td>
			</tr>
			<tr>
				<td>您的居住地:</td>
				<td><?php  $livenumber=count($live);
					for($i=0;$i<$livenumber;$i++){
					echo $live[$i]."<br/>";
					}?>
				</td>
			</tr>
			<tr>
				<td>您的通訊地址:</td>
				<td><?php echo $address?></td>
			</tr>
			<tr>
				<td>您就讀的學校:</td>
				<td><?php echo $senior?></td>
			</tr>
			<tr>
				<td>您的衣服尺寸:</td>
				<td><?php echo $size?></td>
			</tr>
			<tr>
				<td>您的備註:</td>
				<td><?php echo $say?></td>
			</tr>
		</tbody>
	</table>
</div>




</body>
</html>