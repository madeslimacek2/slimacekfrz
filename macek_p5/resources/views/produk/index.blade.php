<!DOCTYPE HTML>
<HTML>
<HEAD>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="5/bootstrap/js/jquery.min.js"></script>
  <script src="5/bootstrap/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row content">
    <div class="">
      <div class="input-group">
        <span class="input-group-btn">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>
    <div class="col-sm-4"><br>
      <a class="btn btn-default">Data Produk</a></h4>

      <hr>
      <div class="table-responsive">          
  <table class="table">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama Produk</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($produk as $i => $v)
		<tr>
			<td>{{ $i+1 }}</td>
			<td>{{ $v }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</body>
</HTML>