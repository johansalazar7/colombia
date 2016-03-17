<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Show Category</title>
    </head>
    <body>
        <div class = 'container'>
            <h1>Show Category</h1>
            <form method = 'get' action = 'http://localhost:8000/category'>
                <button class = 'btn blue'>Category Index</button>
            </form>
            <table class = 'highlight bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>name : </i></b>
                        </td>
                        <td>{{$category->name}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>slug : </i></b>
                        </td>
                        <td>{{$category->slug}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>description : </i></b>
                        </td>
                        <td>{{$category->description}}</td>
                    </tr>
                    

                        
                </tbody>
            </table>
        </div>
    </body>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</html>
