<!DOCTYPE HTML>
<html>
<head>
	<title>Control Struktur Pada Blade Template</title>
</head>
<body>
	@if (count($produk)==1)
	<p>Jumlah Produk adalah satu</p>
	@elseif(count($produk)>1)
	<p><b>Perulangan dengan FOR</b></p>
	@for ( $i = 0; $i < count($produk); $i++)
	<p> {{'No : '.$i.' Nama Produk :'.$produk[$i] }}</p>
	@endfor
	<hr>

	<p><b>Perulangan dengan Foreach</b></p>
	@foreach ($produk as $x => $v)
	<p> {{ 'No : '.$x.' Nama Produk :'.$v }}</p>
	@endforeach

	<hr>
	<p><b>Perulangan dengan While</b></p>
	@php
		$no = 1;
	@endphp

	@while ($no<=5)
		<p>Ini adalah perulangan ke {{ $no }}</p>
		@php 
			$no++;
	@endphp

	@endwhile 
	@else
	<p>Tidak ada Data Produk</p>
	@endif
</body>
</html>