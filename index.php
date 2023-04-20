<?php 

require __DIR__ . '/functions.php';

    if(isset($_GET['lunghezza'])){
       $response = generatoreDiPassword($_GET['lunghezza']);
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Generatore di Password Sicura</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    
    <main class="ms_bg">
        <div class="container">
            
                <div class="text-center p-5">
                    <h1 class="text-secondary">Strong Password Generator</h1>
                    <h2 class="text-white">Genera una password sicura</h2>
                </div>
                <?php if(isset($response)){ ?>
                <div class="alert alert-primary w-50 mx-auto my-3" role="alert">
                    <?php echo $response; ?>
                </div>
                <?php } ?>
                <div class="card w-50 m-auto ms_card">
                    <form class="m-3" methods="GET" action="index.php">
                        <div class="mb-3 d-flex justify-content-between">
                            <label for="lunghezza" class="form-label">Lunghezza password:</label>
                            <input type="number" class="form-control w-25" id="lunghezza" name="lunghezza" min="8" max="32" >
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            
        </div>
    </main>
    
</body>
</html>