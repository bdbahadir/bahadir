<?php
if(! isset($_GET['is']))
	$_GET['is']='';
Switch($_GET['is']){
case 'iptal' : iptal(); listele(); break;
case 'yenibasvuru' :yenibasvuru(); break;
case 'ekle' : ekle(); listele(); break;
default: listele();
}

function ekle(){
	$c=mysqli_connect('localhost','root','','bahadir');
	if(!$c)
echo"SQL HATASI:".mysqli_error($c);
	$derskayit="INSERT INTO adaylar VALUES 
	({$_GET['TcNo']},'{$_GET['ad']}','{$_GET['soyad']}','{$_GET['eposta']}',{$_GET['HTML5']},{$_GET['CSS']},{$_GET['JS']},{$_GET['PHP']},{$_GET['BootStrap']},
	{$_GET['Metronics']},{$_GET['Ajax']},{$_GET['JSON']},{$_GET['AngularJS']},{$_GET['Jquery']},{$_GET['NET']},{$_GET['CFML']},{$_GET['JSP']},{$_GET['PYTHON']},
	{$_GET['C#']},{$_GET['C++']},{$_GET['JAVA']},{$_GET['UNITY']},{$_GET['Arduino']});";
	
	$sonuc=mysqli_query($c,$derskayit);
	mysqli_close($c);
}

function yenibasvuru(){
	
	echo" <h4> Mulakat Basvuru Formu</h4>
	
<form action=''>

	<input type=hidden name=is value=ekle><br>

	
	TcNo: <input name=TcNo type=text> <br>
	AD: <input name=ad type=text> <br>
	SOYAD: <input name=soyad type=text> <br>
	E-Mail: <input name=eposta type=text> <br>
	
	<p>Bilgi düzeyinizi 0 ile 5 arasında puanlarmısınız ? :</p>
	
	<table>
	
	<td> <p>HTML5</p>
<input type=radio id=0.Seviye name=HTML5 value=0 />
<label for=HTML5>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=HTML5 value=1 />
<label for=HTML5>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=HTML5 value=2 />
<label for=HTML5>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=HTML5 value=3 />
<label for=HTML5>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=HTML5 value=4 />
<label for=HTML5>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=HTML5 value=5 />
<label for=HTML5>5.Seviye</label>
<br />
</td>

<td>		<p>CSS</p>
<input type=radio id=0.Seviye name=CSS value=0 />
<label for=CSS>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=CSS value=1 />
<label for=CSS>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=CSS value=2 />
<label for=CSS>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=CSS value=3 />
<label for=CSS>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=CSS value=4 />
<label for=CSS>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=CSS value=5 />
<label for=CSS>5.Seviye</label>
<br />
</td>

<td>	<p>JS</p>

<input type=radio id=0.Seviye name=JS value=0 />
<label for=JS>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=JS value=1 />
<label for=JS>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=JS value=2 />
<label for=JS>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=JS value=3 />
<label for=JS>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=JS value=4 />
<label for=JS>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=JS value=5 />
<label for=JS>5.Seviye</label>
<br />
</td>
<td><p>PHP</p>
<input type=radio id=0.Seviye name=PHP value=0 />
<label for=PHP>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=PHP value=1 />
<label for=PHP>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=PHP value=2 />
<label for=PHP>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=PHP value=3 />
<label for=PHP>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=PHP value=4 />
<label for=PHP>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=PHP value=5 />
<label for=PHP>5.Seviye</label>
<br />
</td>
<td><p>BootStrap</p>
<input type=radio id=0.Seviye name=BootStrap value=0 />
<label for=BootStrap>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=BootStrap value=1 />
<label for=BootStrap>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=BootStrap value=2 />
<label for=BootStrap>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=BootStrap value=3 />
<label for=BootStrap>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=BootStrap value=4 />
<label for=BootStrap>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=BootStrap value=5 />
<label for=BootStrap>5.Seviye</label>
<br />
</td>
<td><p>Metronics</p>
<input type=radio id=0.Seviye name=Metronics value=0 />
<label for=Metronics>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=Metronics value=1 />
<label for=Metronics>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=Metronics value=2 />
<label for=Metronics>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=Metronics value=3 />
<label for=Metronics>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=Metronics value=4 />
<label for=Metronics>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=Metronics value=5 />
<label for=Metronics>5.Seviye</label>
<br />
</td>
<td><p>Ajax</p>

<input type=radio id=0.Seviye name=Ajax value=0 />
<label for=Ajax>0.Seviye</label>
<br />

<input type=radio id=1.Seviye name=Ajax value=1 />
<label for=Ajax>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=Ajax value=2 />
<label for=Ajax>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=Ajax value=3 />
<label for=Ajax>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=Ajax value=4 />
<label for=Ajax>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=Ajax value=5 />
<label for=Ajax>5.Seviye</label>
<br />
</td>
<td><p>JSON</p>

<input type=radio id=0.Seviye name=JSON value=0 />
<label for=JSON>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=JSON value=1 />
<label for=JSON>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=JSON value=2 />
<label for=JSON>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=JSON value=3 />
<label for=JSON>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=JSON value=4 />
<label for=JSON>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=JSON value=5 />
<label for=JSON>5.Seviye</label>
<br />
</td>
<td><p>AngularJS</p>

<input type=radio id=0.Seviye name=AngularJS value=0 />
<label for=AngularJS>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=AngularJS value=1 />
<label for=AngularJS>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=AngularJS value=2 />
<label for=AngularJS>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=AngularJS value=3 />
<label for=AngularJS>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=AngularJS value=4 />
<label for=AngularJS>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=AngularJS value=5 />
<label for=AngularJS>5.Seviye</label>
<br />
</td>
<tr></tr>
<td><p>Jquery</p>

<input type=radio id=0.Seviye name=Jquery value=0 />
<label for=Jquery>0.Seviye</label>
<br />

<input type=radio id=1.Seviye name=Jquery value=1 />
<label for=Jquery>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=Jquery value=2 />
<label for=Jquery>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=Jquery value=3 />
<label for=Jquery>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=Jquery value=4 />
<label for=Jquery>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=Jquery value=5 />
<label for=Jquery>5.Seviye</label>
<br />
</td>

<td><p>NET</p>

<input type=radio id=0.Seviye name=NET value=0 />
<label for=NET>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=NET value=1 />
<label for=NET>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=NET value=2 />
<label for=NET>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=NET value=3 />
<label for=NET>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=NET value=4 />
<label for=NET>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=NET value=5 />
<label for=NET>5.Seviye</label>
<br />
</td>
<td><p>CFML</p>

<input type=radio id=0.Seviye name=CFML value=0 />
<label for=CFML>0.Seviye</label>
<br />

<input type=radio id=1.Seviye name=CFML value=1 />
<label for=CFML>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=CFML value=2 />
<label for=CFML>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=CFML value=3 />
<label for=CFML>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=CFML value=4 />
<label for=CFML>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=CFML value=5 />
<label for=CFML>5.Seviye</label>
<br />
	</td>
	<td><p>JSP</p>

	<input type=radio id=0.Seviye name=JSP value=0 />
<label for=JSP>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=JSP value=1 />
<label for=JSP>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=JSP value=2 />
<label for=JSP>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=JSP value=3 />
<label for=JSP>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=JSP value=4 />
<label for=JSP>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=JSP value=5 />
<label for=JSP>5.Seviye</label>
<br />
	</td>
		<td><p>PYTHON</p>

<input type=radio id=0.Seviye name=PYTHON value=0 />
<label for=PYTHON>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=PYTHON value=1 />
<label for=PYTHON>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=PYTHON value=2 />
<label for=PYTHON>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=PYTHON value=3 />
<label for=PYTHON>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=PYTHON value=4 />
<label for=PYTHON>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=PYTHON value=5 />
<label for=PYTHON>5.Seviye</label>
<br />
</td>	
			<td><p>C#</p>

<input type=radio id=0.Seviye name=C# value=0 />
<label for=C#>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=C# value=1 />
<label for=C#>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=C# value=2 />
<label for=C#>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=C# value=3 />
<label for=C#>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=C# value=4 />
<label for=C#>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=C# value=5 />
<label for=C#>5.Seviye</label>
<br />
</td>
			<td><p>C++</p>
			
<input type=radio id=0.Seviye name=C++ value=0 />
<label for=C++>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=C++ value=1 />
<label for=C++>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=C++ value=2 />
<label for=C++>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=C++ value=3 />
<label for=C++>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=C++ value=4 />
<label for=C++>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=C++ value=5 />
<label for=C++>5.Seviye</label>
<br />
	</td>
		<td>	<p>JAVA</p>
			
<input type=radio id=0.Seviye name=JAVA value=0 />
<label for=JAVA>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=JAVA value=1 />
<label for=JAVA>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=JAVA value=2 />
<label for=JAVA>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=JAVA value=3 />
<label for=JAVA>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=JAVA value=4 />
<label for=JAVA>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=JAVA value=5 />
<label for=JAVA>5.Seviye</label>
<br />
	</td>
			<td><p>UNITY</p>
			
<input type=radio id=0.Seviye name=UNITY value=0 />
<label for=UNITY>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=UNITY value=1 />
<label for=UNITY>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=UNITY value=2 />
<label for=UNITY>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=UNITY value=3 />
<label for=UNITY>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=UNITY value=4 />
<label for=UNITY>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=UNITY value=5 />
<label for=UNITY>5.Seviye</label>
<br />
	</td>
			<td>	<p>Arduino</p>
				
<input type=radio id=0.Seviye name=Arduino value=0 />
<label for=Arduino>0.Seviye</label>
<br />
<input type=radio id=1.Seviye name=Arduino value=1 />
<label for=Arduino>1.Seviye</label>
<br />
<input type=radio id=2.Seviye name=Arduino value=2 />
<label for=Arduino>2.Seviye</label>
<br />
<input type=radio id=3.Seviye name=Arduino value=3 />
<label for=Arduino>3.Seviye</label>
<br />
<input type=radio id=4.Seviye name=Arduino value=4 />
<label for=Arduino>4.Seviye</label>
<br />
<input type=radio id=5.Seviye name=Arduino value=5 />
<label for=Arduino>5.Seviye</label>
<br />
	</td>
	
	<input name=gonder type=submit value=Olustur>
</table>
</form>";
}
function iptal(){
	$c=mysqli_connect('localhost','root','','bahadir');
	if(!$c)
		mysqli_error($c);
	$iptal= "DELETE FROM adaylar WHERE tcno= {$_GET['TcNo']};";
	$sonuc= mysqli_query($c,$iptal);
	mysqli_close($c);
}
function listele(){
	$c=mysqli_connect('localhost','root','','bahadir');
if(!$c)
	echo "SQL HATASI:".mysqli_error($c);
$Drslist=mysqli_query($c,"Select * From adaylar;");
echo "<a href='?is=yenibasvuru'>Yeni Basvuru</a>
<table style='border:2px solid red;'><tr><th>TcNo</th><th>Ad</th><th>soyad</th><th>email</th><th>HTML5</th><th>CSS</th><th>JS</th><th>PHP</th><th>BootStrap</th><th>Metronics</th><th>Ajax</th><th>JSON</th><th>AngularJS</th>
<th>Jquery</th><th>.NET</th><th>CFML</th><th>JSP</th><th>PYTHON</th><th>C#</th>
<th>C++</th><th>JAVA</th><th>UNITY</th><th>Arduino</th></tr>";
while($kayitlar=mysqli_fetch_array($Drslist)){
	echo"<tr>
			<td>".$kayitlar[0]."</td>
			<td>".$kayitlar[1]."</td>
			<td>".$kayitlar[2]."</td>
			<td>".$kayitlar[3]."</td>
			<td>".$kayitlar[4]."</td>
			<td>".$kayitlar[5]."</td>
			<td>".$kayitlar[6]."</td>
			<td>".$kayitlar[7]."</td>
			<td>".$kayitlar[8]."</td>
			<td>".$kayitlar[9]."</td>
			<td>".$kayitlar[10]."</td>
			<td>".$kayitlar[11]."</td>
			<td>".$kayitlar[12]."</td>
			<td>".$kayitlar[13]."</td>
			<td>".$kayitlar[14]."</td>
			<td>".$kayitlar[15]."</td>
			<td>".$kayitlar[16]."</td>
			<td>".$kayitlar[17]."</td>
			<td>".$kayitlar[18]."</td>
			<td>".$kayitlar[19]."</td>
			<td>".$kayitlar[20]."</td>
			<td>".$kayitlar[21]."</td>
			<td>".$kayitlar[22]."</td>
<td><a href='?is=iptal&TcNo=".$kayitlar[0]."'>iptal</a></td>
		</tr>";
}
echo"</table>";
mysqli_close($c);
}
?>