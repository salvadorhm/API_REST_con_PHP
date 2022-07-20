<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ejemplo de uso de Javascript y FastAPI">
    <meta name="theme-color" content="#317EFB" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Encrypt Requests</title>
    </script>
</head>

<body>
    <div class="container">
        <h1>Encrypt <a class="btn btn-primary" role="button" href="index.php">Back</a></h1>
        <div class="container">
    
            <form action="" method="POST">
                <div class=""mb-3">
                    <label for="text"  class="form-label">Text</label>
                    <input class="form-control" type="text" name="text">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        <?php
            try {
                $text=$_POST["text"];
                if(isset($text)){
                    $text = urlencode($text);
                    $url = 'https://tools4devs.herokuapp.com/encrypt/?text='.$text;
                    $response = file_get_contents($url);
                    if($response !== false){
                        $result = json_decode($response);
                        $md5 = $result->md5;
                        $sha256 = $result->sha256;
                        $sha1= $result->sha1;
                        echo "<p>Text : $text</p>";
                        echo "<p>MD5  : $md5</p>";
                        echo "<p>SHA26: $sha256</p>";
                        echo "<p>SHA1 : $sha1</p>";
                    }
                }
            } catch(Exception $e) {
                echo "Server failure";
            }
        ?>
    </div>
</body>
</html>