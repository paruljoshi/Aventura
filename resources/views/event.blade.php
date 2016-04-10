<html>
<body>
	<h2>Your search results are:</h2>
	<table  border="1" style="width:100%">
    <tr>
    <h3>
		<th>Name</th>
		<th>Description</th>
		<th>Timings</th>
		<th>Ticket</th>
		<th>Ratings</th>
	</h3>
	</tr>
	
	@if(Session::has('events'))
	@foreach(Session::get('events') as $event)
		<tr>
			<td>{{ $event->name }} </td>
			<td>{{ $event->desc }} </td>
			<td>{{ $event->timings }}</td>
			<td>{{ $event->ticket }} </td>
			<td>{{ $event->ratings }} </td>
		</tr>
	@endforeach
	@endif
	
    </table>

    Ratings: 
    <form action="/event" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <select name = "ratings">
    	<option value="nil"> </option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>

	</select>
    <input type="submit" value="Search"></input>
   </form>
@if ($errors->any())
        {{ implode('', $errors->all(':message')) }}
@endif
</body>
</html>