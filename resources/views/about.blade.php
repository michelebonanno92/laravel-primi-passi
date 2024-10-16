<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About | Laravel Hello Word</title>
    </head>
    <body> 
        <main>
            <h1>
                About
            </h1>

            <ul>
                <li>
                    <a href="{{ route('home') }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}">
                        About
                    </a>
                </li>

            </ul>
          
        </main> 
    </body>
</html>