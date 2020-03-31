<h1>Loan Application</h1>
<body>

<form method="post" action="/applications">
  <div class="form-group">
    {{ csrf_field() }}
    First Name: <input type="text" class="form-control" name="First Name"><br> 
    Last Name: <input type="text" name="Last Name"><br>
    Phone Number: <input type="number" name="Phone Number"><br>
    Farm Location: <input type="text" name="Farm Location"><br>
    Loan Amount: <input type="number" name="Loan Amount"><br>
    MOMO number: <input type="number" name="MOMO number"><br>
  </div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div> 