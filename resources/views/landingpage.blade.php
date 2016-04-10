<html>
<body>
    <H1>Aventura Home Page</H1>
<form action="/search" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input placeholder="Search" name ="search"></input>
    <input type="submit" value="Search"></input>
    </form>
    @if ($errors->any())
        {{ implode('', $errors->all(':message')) }}
@endif
</body>
</html>