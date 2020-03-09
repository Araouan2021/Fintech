<!DOCTYPE html>

<h1>SEND MONEY</h1>
<body>

<form action="{{route('applications.save')}}" method="post">
  <div class="form-group">
    {{ csrf_field() }}
    Amount: <input type="text" class="form-control" name="Amount"><br> 
    MOMO number: <input type="MOMO number" name="MOMO number"><br>
  </div>
<button type="submit" class="btn btn-primary">SEND MONEY</button>
</form>
</div> 
