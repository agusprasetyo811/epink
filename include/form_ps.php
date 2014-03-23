<script language="javascript">
</script>
<form name="formPS" action="proses/ps.php" method="post">
				<input type="hidden" name="id_prt" value="<?php echo "$baris[id_prt]" ;?>">					
				<div id="form-Pf">
                <table>
						<tr>
						<td width="250">Id Pelanggan</td>
						<td><input type="text" class="text" value="<?php echo "$baris[id_prt]" ;?>" readonly=readonly ></td>
						</tr>
                        <tr>
						<td width="250">Nama</td>
						<td><input type="text" class="text" value="<?php echo "$baris[nama]" ;?>" readonly=readonly ></td>
						</tr>
						<tr>
							<td>Daya Sekarang</td>
							<td><input type="text" class="text" value="<?php echo "$baris[daya]" ;?>" readonly=readonly >		
							</td>
						</tr>
						<tr>
							<td>Daya Baru</td> 
							<td>
                            <select class="select" name="dayaIngin"> 
									<option value="80">80 VA</option>
									<option value="150">150 VA</option>
									<option value="300">300 VA</option>
									<option value="500">500 VA</option>
								</select> <font style="font-size:8;color:#BB0000">* Ket Lihat Menu Penyambungan Sementara </font>
 							</td> 
						</tr>
						<tr>
							<td>Alamat</td>
							<td>
							<input type="text" class="text" value="<?php echo "$baris[alamat]" ;?>" readonly=readonly>	
							</td>
						</tr>
						<tr>
							<td>Tarif</td>
							<td>
							<input type="text" class="text" value="<?php echo "$baris[tarif]" ;?>" readonly=readonly>	
							</td>
						</tr>
						<tr>
							<td>Pemohon</td>
							<td><input type="text" class="text" name="pemohon" /></td>
						</tr>
						<tr>
							<td>Keperluan</td>
							<td><input type="text" class="text" name="keperluan" size="50" /></td>
						</tr>
						<tr>
							<td>Mulai pemakaian</td>
							<td>
                            <input type="text" class="text" name="tglMulai" onclick="dayaValue()" />
                            </td>
						</tr>	
						<tr>
							<td>Akhir pemakaian</td>
							<td>
                            <input type="text" class="text" name="tglAkhir"/>
                            </td>
						</tr>	
						<tr height="50" valign="bottom">
							<td></td>
							<td align="right"><input type="reset" />&nbsp;&nbsp;<input type="submit" /></td>
						</tr>								
					</table>
                    </div>
					</form><br />
					