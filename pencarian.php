<h2>Data Peserta</h2>

<table border="1">
    <tr>
            <td>ID Peserta</td>
            <td>Kode Skema</td>
            <td>Nama Peserta</td>
            <td>jekel</td>
            <td>Alamat</td>
            <td>No Handphone</td>
        </tr>
    <?php 
			include('connect.php');
				if(isset($_GET['kata_cari'])) {
					
                    $kata_cari = $_GET['kata_cari'];
					$query = "SELECT * FROM peserta WHERE Nm_peserta like '%".
                    $kata_cari."%' OR kd_skema like '%".
                    $kata_cari."%' OR Jekel like '%".
                    $kata_cari."%' OR Alamat like '%".
                    $kata_cari."%' OR No_hp like '%".
                    $kata_cari."%' ORDER BY id ASC";
				} else {
					
                    $query = "SELECT * FROM peserta ORDER BY id ASC";
				}
				
				$result = mysqli_query($conn, $query);

				if(!$result) {
					die("Query Error : ".mysqli_errno($conn)." - ".mysqli_error($conn));
				}
				//kalau ini melakukan foreach atau perulangan
				while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['kd_skema']; ?></td>
				<td><?php echo $row['Nm_peserta']; ?></td>
                <td><?php echo $row['Jekel']; ?></td>
                <td><?php echo $row['Alamat']; ?></td>
                <td><?php echo $row['No_hp']; ?></td>
			</tr>
			<?php
			}
			?>
    </table>
    <br>
    <nav>
        <a href="index.php">KEMBALI</a>
    </nav>