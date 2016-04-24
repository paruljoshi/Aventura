<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
@if (session('status'))
        {{ session('status') }}
@endif

@if ($errors->any())
        {{ implode('', $errors->all(':message')) }}
@endif
<form action="/event/save" method="post">
	<input type="text" name = "eventName"></input>
	<input type="text" name = "eventDesc"></input>
	<input type="text" name = "eventCountry"></input>
	<input type="text" name = "eventTicket"></input>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="submit" name="addEvent" value ="Add Event"></input>
</form>
</body>
</html>