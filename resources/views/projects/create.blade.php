<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1> Create a new project </h1>

    <form action="/projects" method="POST">
        @csrf
    <input type="text" name="title" placeholder="Project title" value="{{ old('title') }}"><br>
        <textarea name="description" name="description" cols="25" rows="5">{{ old('description') }} </textarea ><br>
        <button type="submit"> Create project </button>
    </form>

</body>
</html>