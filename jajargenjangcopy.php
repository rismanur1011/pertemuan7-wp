<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jajargenjang</title>
</head>
<body>
<?php
    $alas=$_POST['alas'];
    $tinggi=$_POST['tinggi'];
    $sisi_miring=$_POST['sisi_miring'];
    
    $luas=$alas * $tinggi;
    $keliling=2 * ($alas+$sisi_miring);
    $pilih = $_POST['pilih']
    ?>

<a href="index.php">Home</a>
   <h1>jajargenjang</h1> 
   <table>
        <?php if($pilih === "keliling"){ ?>
            <tr>
                <th>
                    rumus
                </th>
            </tr>
            <tr>
                <td>
                    Keliling =2 x (alas+sisi miring) =
                </td>
                <td>
                    <?php echo $keliling;?>
                </td>
            </tr>
            <?php } else if ($pilih === "luas"){ ?>
                <tr>
                    <td>
                        Luas = alas x tinggi    =
                    </td>
                    <td>
                        <?php echo $luas;?>
                    </td>
                </tr>
                
                <?php } else{ ?>
                    <tr>
                        <td>
                           Luas= alas x tinggi =
                        </td>

                        <td>
                            <?php echo $luas;?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Keliling = 2 x (alas+sisi miring) =  
                        </td>

                        <td>
                            <?php echo $keliling;?>
                        </td>
                    </tr>

                    <?php }?>
    </table>

   <!-- <h4>Luas = alas x tinggi = <?php echo $luas;?></h4> -->
   <!-- <h4>Keliling = 2 x (alas+sisi miring) = <?php echo $keliling;?></h4> -->
   <img src="rumus_luas_jajar_genjang-x.width-800.format-webp.webp" width="300" height="300" alt="ilang">
</body>
</html>