<form action="proses/keluhan.php" method="post">
<input type="hidden" name="id_prt" value="<?php echo "$baris[id_prt]" ;?>">	
                <div id="form-Pf">
                <table>
						<tr>
							<td width="250">Tanggal Keluhan</td>
							<td><input type="text" class="text" name="tglKeluh" /></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td><input type="text" class="text" value="<?php echo "$baris[nama]" ;?>" readonly=readonly>		
							</td>
						<tr>
							<td>Alamat</td>
							<td><input type="text" class="text" value="<?php echo "$baris[alamat]" ;?>" readonly=readonly>							
						</tr>
						<tr>
							<td>Telepon</td>
							<td><input type="text" class="text" value="<?php echo "$baris[no_telp]" ;?>" readonly=readonly>							
						</tr>								
						<tr>
							<td>Uraian Pengaduan</td>
							<td><textarea name="text1" cols="53" rows="5"></textarea></td>
						</tr>
												<tr>
							<td height="50" valign="bottom"></td>
							<td align="right"><input type="reset" />&nbsp;&nbsp;<input type="submit" /></td>
						</tr>	
				</table>
                </div>
				</form>