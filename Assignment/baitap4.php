<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        $so_dau= $_POST["sodau"];
        $so_cuoi= $_POST["socuoi"];
        $tong = 0;
        $tong_chan = 0;
        $tong_le = 0;
        $tich = 1;
        for ($i = $so_dau; $i <= $so_cuoi; $i++) {
            $tong += $i;
        }
        for ($i = $so_dau; $i <= $so_cuoi; $i++) {
            $tich = $tich * $i;
        }
        for ($i = $so_dau; $i <= $so_cuoi; $i++) {
            if ($i % 2 == 0) {
                $tong_chan += $i;
            }
        }
        for ($i = $so_dau; $i <= $so_cuoi; $i++) {
            if ($i % 2 != 0) {
                $tong_le += $i;
            }
        }
    ?>
    <form action="baitap4.php" method="POST">
        <table width="728" border="1">
            <tr>
                <td width="122">&nbsp;</td>
                <td width="76">So bat dau</td>
                <td>
                    <label for="textfield"></label>
                    <input type="text" name="sodau" id="textfield" value="<?php  if(isset($so_dau)) echo $so_dau;
                    ?>">
                </td>
                <td width="152">So ket thuc</td>
                <td width="175">
                    <label for="textfield2"></label>
                    <input type="text" name="socuoi" id="textfield2" value="<?php if(isset($so_cuoi)) echo $so_cuoi;
                    ?>">
                </td>
            </tr>
            <tr>
                <td colspan="5">Ket qua
                    <label for="textfield3"></label>
                </td>
            </tr>
            <tr>
                <td>Tong cac so</td>
                <td colspan="4">
                    <label for="textfield4"></label>
                    <input type="text" name="tong" id="textfield4" value="<?php echo $tong;?>">
                </td>
            </tr>
            <tr>
                <td>Tich cac so</td>
                <td colspan="4">
                    <label for="textfield5"></label>
                    <input type="text" name="tich" id="textfield5" value="<?php echo $tich; ?>">
                </td>
            </tr>
            <tr>
                <td>Tong cac so chan</td>
                <td colspan="4">
                    <label for="textfield6"></label>
                    <input type="text" name="tong_chan+" id="textfield6" value="<?php echo $tong_chan; ?>">
                </td>
            </tr>
            <tr>
                <td>Tong cac so le</td>
                <td colspan="4">
                    <label for="textfield7"></label>
                    <input type="text" name="tong_le" id="textfield7" value="<?php echo $tong_le; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="5">
                    <input type="submit" name="button" id="button" value="Tinh toan">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>