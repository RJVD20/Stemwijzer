<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SVS</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>

    body{
      margin:0px;
      padding:0px;
    }
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }

      a {
        color: #FFFFFF;
        text-decoration: none;
      }

      a:link {
        color: #FFFFFF;
        text-decoration: none;
      }

      /* visited link */
      a:visited {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* mouse over link */
      a:hover {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* selected link */
      a:active {
          color: #FFFFFF;
          text-decoration: none;
      }
    </style>

  </head>
  <body>
	
	<div class="container">
  	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          
          <a href="index.html" class="navbar-brand headerFont text-lg">Simple Voting System</a>
        </div>

        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
            <li><a href="#featuresTab"><span class="subFont"><strong>Features</strong></span></a></li>
        	
          </ul>
          

          <span class="normalFont"><a href="admin.html" class="btn btn-success navbar-right navbar-btn" style="border-radius:0%">Admin Panel</a></span>
        </div>

      </div> <!-- end of container -->
    </nav>
    </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="jumbotron text-center text-block" style="padding-top:170px;">
              <img src="images/vote.png" width="220px" alt="Icon">
                  <h1 class="specialHead">Simple Voting System</h1>
                  <p class="normalFont">Safe . Reliable . Secure . Fast </p>

                  <a href="vault.html" class="btn btn-danger btn-lg specialHead" style="border-radius:60px"> <span class="glyphicon glyphicon-folder-close"></span> Cast Your Votes Now</a>
            </div>
          </div>
        </div>
      </div>

      <div class="conatiner" id="featuresTab">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="page-header" style="padding-top:50px;padding-bottom:50px">
              <h1 class="normalFont" style="font-size:44px;" >WHAT IS IT.</h1>
              <p class="subFont" style="font-size:24px;">A Intractive Way To Solve Conventional Voting</p>
            </div>
          </div>
        </div>
      </div>

      <div class="conatiner" style="padding:50px;" id="aboutTab">
        <div class="row">

          

          <div class="col-sm-4 text-center">
            
            <img src="images/Nominee.png" width="100" height="100" alt=""/>
            <h2 class="normalFont" style="font-size:28px;">VOTE ONLINE.</h2>
            <p>You Just Need Basic Details of Yours and We Will Let You Vote</p>

          </div>
          <div class="col-sm-4 text-center">

            <img src="images/Vote.png" width="100" height="100" alt=""/>
            <h2 class="normalFont" style="font-size:28px;" >NOMINATION</h2>
            <p>Admin's Control Panel allows you to manage the list of  filled nomination</p>

          </div>
          <div class="col-sm-4 text-center"> 
            
            <img src="images/Stats.png" width="100" height="100" alt=""/>
            <h2 class="normalFont" style="font-size:28px;" >Statitics</h2>
            <p>SHows You the Graphical Data Representation of your votes. And, It is in Admin's Control Panel</p>

          </div>

         
        </div>
      </div>
        <hr>
        
      
      <footer>
        <div class="container">
          <div class="row">
            <div class="col-sm-6 text-center">
             <h3 class="specialHead">Developed By Abhishek Kumar Ravi</h3>
            </div>
            <div class="col-sm-6 text-center">
              <img src="images/Facebook.png" width="50" height="50" alt="">
              <img src="images/Twitter.png" width="50" height="50" alt="">
              <img src="images/GitHub.png" width="50" height="50" alt="">
            </div>

          </div>
        </div>
      </footer>
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
