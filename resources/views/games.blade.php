<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 5/18/2018
 * Time: 2:39 PM
 */
?>

<html>
<head>
    <meta charset="UTF-8">
    <title>Games</title>
</head>
<body>
<table border="1">
    <tr>
        <td>Title</td>
        <td>Publisher</td>
        <td>Year of Release</td>
        <td>Action</td>
    </tr>
    @foreach($games as $game)
        <tr>
            <td>{{$game->title}}</td>
            <td>{{$game->publisher}}</td>
            <td>{{$game->releaseyear}}</td>
            <td>
                <a href="">View</a>
                <a href="">Edit</a>
                <a href="">Remove</a>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
