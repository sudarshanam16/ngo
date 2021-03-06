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

    <title>GAKAAY SOLUTIONS</title>

</head>

<body class="background-index">
    <div class="mt-5">
        <nav class="fixed-top navbar navbar-expand-lg navbar-light navbar-background-index">
            <a class="navbar-brand active" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse  navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link " href="gakaayabout.html">Gakaay</a>
                    <a class="nav-item nav-link " href="missanabout.html">Missan</a>
                    <a class="nav-item nav-link " href="palasa.html">Palasa</a>
                </div>
            </div>
        </nav>
    </div>

    <div class="d-flex flex-column flex-md-row">
        <div class="col-md-8">
            <div class="container text-center">
                <h2 class="brand-before heading">
                    Welcome to
                </h2>
                <h1 class="text-light">GAKAAY SOLUTIONS</h1>
                <hr>
                <h4 class="text-light">
                    One of the fast growing IT Development and HR Recruitment firms serving the best CMMI Level 5 companies across the globe.
                </h4>
            </div>
            <div class="container text-center">
                <hr>
                <h2 class="text-light">ABOUT</h2>
                <hr>
                <div style="text-align: center;">
                    <ul class="text-light">
                        <li>Gakaay Solutions is a recruitment firm founded by Mr. Amit Sridhar.</li>
                        <li>It is a company with three pillars -</li>
                        <li>While Gakaay Solutions recruits able people,
                        <li>Missan Foundation recruits specially abled individuals,</li>
                        <li>and Palasa Trainings provides trainings in various skills.</li>
                    </ul>
                </div>
            </div>
            <div class="container text-center">
                <div class="heading"><h1>Links</h1></div><br/>
                <a href="gakaayabout.html"><button><h4>Gakaay Solutions</h4></button></a><br/><br/>
                <a href="missanabout.html"><button><h4>Missan Foundation</h4></button></a><br/><br/>
                <a href="missanabout.html"><button><h4>Palasa Trainings</h4></button></a>
            </div>
            <div class="container text-center" id="fup">
                <h1 class="heading">Upload your resume</h1>
                <br/><div class="text-light">Your resume file must be in the PDF format only.</div><br/>
                <form method="POST" action="file_upload.php" enctype="multipart/form-data" class="justify-content-center text-light">
                    <input type="file" name="fileToUpload" id="fileToUpload" style="padding:0.3rem; width:15rem;"><br/><br/>
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
        </div>

        <div class="col-md-4">
            <div class="container sticky-top" style="top: 5rem;">
                <div class="heading text-center"><h2>News</h2></div>
                <div style=" height: 70vh; overflow: auto;">
                    <div class="about-info">
                        <i>Urgently required for Leading Insurance Sector.</i><br/>
                        Full time/ part time jobs.<br/>
                        <i>Gender:</i> Male/Female .<br/>
                        <i>Designation:</i> Financial Advisor and Agency Partner.<br/>
                        <i>Eligibility:</i> Working Employees any Sector and any types of employment, House wife, Retired professionals, Business man,<br/>
                        <i>Qualification:</i> X/XII/Graduation in any discipline.<br/>
                        <i>Training Selection mode:</i> online zoom meeting.<br/>
                        If anybody interested, kindly contact us<br/>
                        <i>Location:</i> All over india and NRI .<br/>
                        <i>CTC per month:</i> 30k+Incentive.<br/>
                        Durairaj.<br/>
                        HR Recruiter.<br/>
                        Kotak Life insurance.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center mb-4">
        <div class="copy">
            &copy;Copyright GAKAAY SOLUTIONS 2021
        </div>
        <div class="design">
            Designed, developed, and maintained at
            <a href="https://github.com/sudarshanam16/ngo">ngo</a>.
        </div>
    </div>

    
</body>

</html>