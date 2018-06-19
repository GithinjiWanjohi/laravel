<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/29/2018
 * Time: 3:44 PM
 */
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Games</title>
</head>
<body>
<table border="1">
    <form action="/games/save" method="post">
        {{csrf_field()}}
        <input type="text" class="form-control" id="title" value="{{$game->title or ''}}" placeholder="Title">
        <input type="text" class="form-control" id="-publisher" value="{{$game->title or ''}}" placeholder="Publisher">
        <input type="text" class="form-control" id="yor" value="{{$game->title or ''}}" placeholder="Year of release">
        <input type="submit" value="submit">
        <input type="hidden" value={{$game->id or ''}} name="id">
    </form>
</table>
</body>
</html>
