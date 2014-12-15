<?php
$sqli = new mysqli(SERVER, USER, PASS, DB);
mysqli_query($sqli,"SET NAMES 'UTF8'");
?>

<form action="module/chuyenmuc/xuly.php" method="post">
<div class="left">
<table width="423" height="212" border="0">
  <tr>
    <td colspan="3"><div align="center">CHỨC NĂNG THÊM MỚI CHUYÊN MỤC</div></td>
  </tr>
  <tr>
    <td width="211">Tên Chuyên Mục :</td>
    <td colspan="2"><input type="text" name="tenchuyenmuc" id="tenchuyenmuc"></td>
  </tr>
  <tr>
    <td>Loại Tin</td>
    <?php
	$sql= "select * from loaitin";
	$loaitin=mysqli_query($sqli,$sql);
	?>
    <td colspan="2"><select name="loaitin" id="loaitin">
    <?php
	while($dong_loaitin = mysqli_fetch_array($loaitin))
	{
	?>
    <option value="<?php echo $dong_loaitin["idloaitin"]?>"> <?php echo $dong_loaitin["tenloaitin"]?> </option>
    
    <?php
	}
	?>
    
    </select></td>
  </tr>
  <tr>
    <td>Thứ tự:</td>
    <td colspan="2"><label for="thutu"></label>
    <input type="text" name="thutu" id="thutu"></td>
  </tr>
  <tr>
    <td>Trạng thái:</td>
    <td colspan="2"><select name="trangthai" id="trangthai">
      <option value="Hiển thị">Hiển thị</option>
      <option value="Không hiển thị">Không hiển thị</option>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td width="54"><input type="submit" name="them" id="them" value="Thêm"></td>
    <td width="144"><input type="submit" name="reset" id="reset" value="Reset"></td>
  </tr>
</table>
</div>
</form>
