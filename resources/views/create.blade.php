<!DOCTYPE html>
<head>
<link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
</head>
<style>

h1 {
	font-family: 'Abel', sans-serif;
	color: OliveDrab;
}

input {
	width: 100%;
	padding: 15px 30px;
    margin: 10px 0;
    box-sizing: border-box;
    font-family: 'Dosis', sans-serif;
    font-size: 20px;
}

body {
	color: DarkOliveGreen;
	font-size: 20px;
	font-family: 'Dosis', sans-serif;
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
<h1>Loan Application</h1>
<body>

<form method="post" action="/applications">
  <div class="form-group">
    {{ csrf_field() }}
    First Name: <input type="text" class="form-control" name="First Name"><br> 
    Last Name: <input type="text" name="Last Name"><br>
    Phone Number: <input type="number" name="Phone Number"><br>
    Farm Location: <input type="text" name="Farm Location"><br>
    MOMO number: <input type="number" name="MOMO number"><br>
    Loan Amount: <input type="number" name="Loan Amount"><br>
  </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div> 


