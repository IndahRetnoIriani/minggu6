<!DOCTYPE html>
<html>
    <head>
        <title>Kelender Maret</title>
        <Link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <!--Membuat tabel kalender (bulan, tahun dan hari-->
        <table  width=400 cellspacing=10>
        <tr>
            <td align=center><b>Maret</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td align=center><b>2022</td>
        </tr>
        <tr>
            <td align=center><font color="#FF0000">Min</font></td>
            <td align=center><b>Sen</td>
            <td align=center><b>Sel</td>
            <td align=center><b>Rab</td>
            <td align=center><b>Kam</td>
            <td align=center><b>Jum</td>
            <td align=center><b>Sab</td>
        </tr>

  <?php
  //Mengecek jumlah hari/tanggal dalam bulan 3 (maret) tahun 2022
  $jumlahhari=date("t",mktime(0,0,0,3,1,2022));
    //Mengecek tanggal 1 ada di hari apa
    $s=date("w", mktime (0,0,0,3,1,2022));
        //Perulangan untuk tanggal bulan maret 2022
        for ($t=1;$t<=$s;$t++) {
            echo "<td></td>";
        } 
        //Perulangan untuk menampilkan tanggal
        for ($d=1;$d<=$jumlahhari;$d++) {
            //pemilihan apabila w=0 maka akan membuat baris baru
            if (date("w",mktime (0,0,0,3,$d,2022)) == 0) {
		        echo "<tr>"; 
		    }
                $warna="#000000"; // warna pada hari selain minggu
            if (date("l",mktime (0,0,0,3,$d,2022)) == "Sunday"){ 
                $warna="#FF0000";//warna pada hari minggu 
            }
                echo "<td align=center valign=middle> <span style=\"color:$warna\">$d</span></td>";
            //pemilihan apabila w=tanggal 9 dan  hari sabtu maka akan pindah baris
            if (date("w",mktime (0,0,0,3,$d,2022)) == 9){ 
                echo "</tr>"; 
            }
        }
        echo '</table>';
    ?>
</body>
</html>