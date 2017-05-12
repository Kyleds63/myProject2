<?php
   include('session.php');
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Plans</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
    /*Container*/
    
    #container {
        margin-top: 100px;
    }
    /*Style text area where user will write plans*/
    
    textarea {
        width: 100%;
        max-width: 100%;
        font-size: 16px;
        line-height: 1.5em;
        border-left-width: 20px;
        border-color: #2f2b3d;
        color: #2f2b3d;
        background-color: #FBFFFF;
        padding: 10px;
    }
    </style>
</head>

<body>
    <!--Navigation Bar-->
    <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Project 2</a>
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Profile</a></li>
                    <li class="active"><a href="#">My Plans</a></li>
                </ul>
                <!--Login button pushed to the right-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Logged in as <b>username</b></a></li>
                    <li><a href="#">Log out</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Container -->
    <div class="container" id="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <div class="form-group">
                    <label for="planTitle">Title:</label>
                    <input class="form-control" type="text" name="title" id="title" maxlength="50" placeholder="Ex: Dr. Appointment">
                </div>
              <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Month <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li><a href="#">January</a></li>
                  <li>Feburary</li>
                  <li>March</li>
                  <li>April</li>
                  <li>May</li>
                  <li>June</li>
                  <li>July</li>
                  <li>August</li>
                  <li>September</li>
                  <li>October</li>
                  <li>November</li>
                  <li>December</li>
                </ul>
              </div>
                <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Day <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li>1</li>
                  <li>2</li>
                  <li>3</li>
                  <li>4</li>
                  <li>5</li>
                  <li>6</li>
                  <li>7</li>
                  <li>8</li>
                  <li>9</li>
                  <li>10</li>
                  <li>11</li>
                  <li>12</li>
                  <li>13</li>
                  <li>14</li>
                  <li>15</li>
                  <li>16</li>
                  <li>17</li>
                  <li>18</li>
                  <li>19</li>
                  <li>20</li>
                  <li>21</li>
                  <li>22</li>
                  <li>23</li>
                  <li>24</li>
                  <li>25</li>
                  <li>26</li>
                  <li>27</li>
                  <li>28</li>
                  <li>29</li>
                  <li>30</li>
                  <li>31</li>
                </ul>
              </div>
                <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> Year <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                  <li>2016</li>
                  <li>2017</li>
                  <li>2018</li>
                </ul>
              </div>
                <!--  Notepad to write plans on -->
                <div id="notePad">
                    <label for="planDetails">Details:</label>
                    <textarea rows="10"></textarea>
                </div>
                <div id="plans" class="plans">
                    <button id="planSubmit" type="button" class="btn btn green btn-lg pull-right" type="submit" value="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!--Footer-->
    <div class="footer">
        <div class="container">
            <p>UT Coding Bootcamp Copyright &copy; 2017</p>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
    <script src="js/logic.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>
