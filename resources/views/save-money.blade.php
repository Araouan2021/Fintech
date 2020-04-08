<!DOCTYPE html>
<head>
<link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
</head>
<style>

body {background-color: beige;}

h1 {
	font-family: 'Abel', sans-serif;
	color: OliveDrab;
}

input {
	width: 100px;
	height: 25px;
	box-sizing: border-box;
    font-family: 'Dosis', sans-serif;
    font-size: 20px;
    color: OliveDrab;
    font-weight: bold;
    border: 2px solid OliveDrab;
    border-radius: 2px;
}

body {
	color: DarkOliveGreen;
	font-size: 20px;
	font-family: 'Dosis', sans-serif;
	text-anchor: center;
}

.btn {
	background-color: OliveDrab;
	font-family: 'Abel', sans-serif;
	font-size: 20px;
    color: white;
    padding: 12px 20px;
    margin: 20px;
    border: none;
    border-radius: 4px;
}

</style>
</body>
<h1>SEND MONEY</h1>
<body>
<form action="/save" method="post">
  <div class="form-group">
    {{ csrf_field() }}
    Loan Amount: <input type="number" class="form-control" name="Loan Amount"><br> 
    MOMO Number: <input type="number" name="MOMO Number"><br>
  </div>
<button type="submit" class="btn btn-primary">SEND MONEY</button>
</form>
</div> 