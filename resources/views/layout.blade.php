<!DOCTYPE html>
<html>
    <head>
        <title>@yield("title","Programming class")</title>
    </head>
    <body>
       <ul>
           <a href="php"><li>PHP page</li></a>
           <a href="js"><li>JS page</li></a>
       </ul> 
       @yield("content")
    </body>
</html>
