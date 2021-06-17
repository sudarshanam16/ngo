<?php
session_start(); 
?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <title>Recruitments</title>

</head>

<body>
    <div class="mt-5">
        <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-transparent">
            <a class="navbar-brand" href="index.html">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link " href="gakaayabout.html">Gakaay</a>
                    <a class="nav-item nav-link " href="missanabout.html">Missan</a>
                    <a class="nav-item nav-link active" href="recruit.php">Recruitments</a>

                </div>
            </div>
        </nav>
    </div>

    <div class="container text-center">
        <h1 class="heading">Upload your resume</h1>
        <br/><div class="text-light">Your resume file must be in the PDF format only.</div><br/>
        <form method="POST" action="file_upload.php" enctype="multipart/form-data" class="justify-content-center text-light"
        style="display:flex; flex-wrap:wrap; width:min-content; margin: auto;">
            <input type="file" name="fileToUpload" id="fileToUpload"><br/><br/>
            <input type="submit" value="Upload" name="submit" disabled>
        </form>
        <br/>
        <?php
            if (isset($_SESSION['message']) && $_SESSION['message'])
            {
            printf('<div class="text-light">%s</div>', $_SESSION['message']);
            unset($_SESSION['message']);
            }
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript">
        $(document).ready(
            function(){
                $('input:file').change(
                    function(){
                        if ($(this).val()) {
                            $('input:submit').attr('disabled',false);
                        } 
                    }
                    );
            });
    </script>
    
</body>

</html>