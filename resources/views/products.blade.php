<html>
    <head>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
            }

            h1 {
                text-align: center;
                color: #333;
                font-size: 2em;
                margin-bottom: 20px;
            }

            ul {
                list-style: none;
                padding: 0;
            }

            h2 {
                font-size: 1.5em;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <h1>{{ $judul }}</h1>
        <ul>
            <?php foreach ($products as $product) : ?>
            <div style="border-radius: 10px; padding: 10px; background-color: #ebebeb; margin-bottom: 6px;">
                <li>
                    <h2><?= $product ?></h2>
                </li>
            </div>
            <?php endforeach ?>
        </ul>
    </body>
</html>
