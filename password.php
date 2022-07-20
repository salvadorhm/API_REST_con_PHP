<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ejemplo de uso de Javascript y FastAPI">
    <meta name="theme-color" content="#317EFB" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Lorem Requests</title>
    </script>
</head>

<body>
    <div class="container">
        <h1>Password generator <a class="btn btn-primary" role="button" href="index.php">Back</a></h1>
        <div class="container">
    
            <form action="" method="POST">
                <div class=""mb-3">
                    <label for="size"  class="form-label">Number of chars</label>
                    <input class="form-control" type="number" name="size">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
        <?php
            try{
                $size=$_POST["size"];
                if(isset($size)){
                    $size = urlencode($size);
                    $url = 'https://tools4devs.herokuapp.com/password/?size='.$size;
                    $response = file_get_contents($url);
                    if($response !== false){
                        $result = json_decode($response);
                        $password = $result->password;
                        echo "<p>Size    : $size</p>";
                        echo "<p>Password: $password</p>";
                    }
                }
            } catch(Exception $e) {
                echo "Server failure";
            }
        ?>
    </div>
</body>
</html>