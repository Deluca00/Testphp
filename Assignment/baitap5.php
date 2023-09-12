<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quadratic Equation Solver</title>
</head>
<body>
    <?php  
    if(isset($_POST["a"])=='' && isset($_POST["b"])=='' && isset($_POST["c"])=='')
    $nghiem = 'Vui lòng nhập các cơ số ';

    function giai_pt_bac_1($a, $b) {
        if($a=='' && $b=='' )
           $nghiem ='Vui lòng nhập các cơ số';
        if ($a == 0) {
            if ($b == 0)
                $nghiem = "Phương trình có vô số nghiệm";
            else
                $nghiem = "Phương trình vô nghiệm";
        } else {
            $nghiem = "x = " . round(-($b/$a), 2);
        }
        return $nghiem;
    }

    function giai_pt_bac_2($a, $b, $c) {
        if($a=='' or $b=='' or $c==''){
           $nghiem ='Vui lòng nhập các cơ số';
        }else if ($a == 0)
            $nghiem = giai_pt_bac_1($b, $c);
        else {
            $delta = pow($b, 2) - 4 * $a * $c;
            if ($delta < 0)
                $nghiem = "Phương trình vô nghiệm";
            elseif ($delta == 0) {
                $nghiem = "Phương trình có nghiệm kép x1 = x2 = " . -($b / (2 * $a));
            } else {
                $can = sqrt($delta);
                $x1 = (-$b + $can) / (2 * $a);
                $x2 = (-$b - $can) / (2 * $a);
                $nghiem = "Phương trình có 2 nghiệm phân biệt: x1 = " . round($x1, 3) . ", x2 = " . round($x2, 3);
            }
        }
        return $nghiem;
    }

    $nghiem = "";
    if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
        $nghiem = giai_pt_bac_2($_POST["a"], $_POST["b"], $_POST["c"]);
    
    }
    ?>
    <form action="baitap5.php" method="post">
        <table width="806" border="1">
            <tr>
                <td colspan="10" bgcolor="#336699"><strong>Giai phuong trinh bac 2</strong></td>
            </tr>
            <tr>
                <td>Phuong trinh</td>
                <td width="240"><input type="text" name="a"> X^2 +</td>
                <td width="220"><label for="textfield3"></label><input type="text" name="b" id="textfield3"> X +</td>
                <td width="240"><label for="textfield"></label><input type="text" name="c" id="textfield"> = 0</td>
            </tr>
            <tr>
                <td colspan="8">Nghiem
                    <label for="textfield2"></label>
                    <input type="text" name="textfield" id="textfield2"  value="<?php if(isset($nghiem)) echo $nghiem; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="10" align="center" valign="middle">
                    <input type="submit" name="chao" id="chao" value="Xuat">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
