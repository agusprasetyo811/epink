
<form action="proses/p2tl.php" method="post">
<input type="hidden" name="id_prt" value="<?php echo "$baris[id_prt]" ;?>">	
					<div id="form-Pf">
                    <table>
						<tr>
							<td width="250">Nama</td>
							<td><input type="text" class="text" value="<?php echo "$baris[nama]" ;?>" readonly=readonly ></td>
						</tr>
							<tr>
							<td>Alamat</td>
							<td><input type="text" class="text" value="<?php echo "$baris[alamat]" ;?>" readonly=readonly ></td>
						</tr>
						<tr>
							<td>Daya Sekarang</td>
							<td><input type="text" class="text" value="<?php echo "$baris[daya]" ;?>" readonly=readonly ></td>
						</tr>
						<tr>
							<td>Uraian Pemutusan</td>
							<td><textarea name="text1" cols="53" rows="5"></textarea></td>							
						</tr>
						<tr>
							<td>Tanggal Lapor</td>
							<td><input type="text" class="text" name="tglPutus" /></td>
						</tr>
						<tr>
							<td height="50" valign="bottom"></td>
							<td align="right"><input type="reset" />&nbsp;&nbsp;<input type="submit" /></td>
						</tr>		
					</table>
                    </div>
					</form><br />
