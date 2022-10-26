<!-- arrays -->
<?php 
    $userTypes = ["Admin", "Instructor", "Student"];
    $users = [
        [
            "userType" => "Admin",
            "userName" => "admin",
            "password" => "admin123"

        ],
        [
            "userType" => "Instructor",
            "userName" => "Johnpaul",
            "password" => "pogi1234"

        ],
        [
            "userType" => "Student",
            "userName" => "airon",
            "password" => "ronron"
        ],
    ];

    if(isset($_POST['btnLogIn'])){
        $typeOfUser = $_POST['typeOfUser'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        
        $isValid = False;

        if(isset($users)){
            foreach($users as $key => $user){
                if(($user['userType'] == $typeOfUser) and ($user['userName'] == $userName) and ($user['password'] == $password)){
                    $isValid = true;
                    break;
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StaticLogIn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/custom.css">
</head>
<body>
    <?php
        if(isset($_POST['btnLogIn'])){
            $alertSuccess = 
                '<div class="alert alert-success alert-dismissible fade show" role="alert">'."
                    Welcome to the system $userName".'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';

            $alertInvaid = 
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Invalid UserName/Password
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';

            if($isValid == true){
                echo $alertSuccess;
            }
            else{
                echo $alertInvaid;
            }
        }
    ?>

    <div class="container h-100">
        <div class="row h-100 d-flex justify-content-center align-items-center">
            <div class="col-6 ">
                <div class="card">
                    <div class="card-body text-center shadow-sm p-5">
                        <img src="img/profile.png" alt="Profile Picture" class="w-25">
                        <form method="post" class ="centerAlignment">
                                <!-- <i class="fas fa-user"></i> -->
                            <div class="user">
                                <select name="typeOfUser" class="typeOfUser">
                                    <?php 
                                        foreach ($userTypes as $userType){
                                            echo '<option value="'.$userType.'">'. $userType .'</option>';
                                            }
                                        ?>
                                    </select><br>

                                <input type="text" name="userName" class="userName" placeholder=" Username"><br>
                                                    
                                <input type="password" name="password" class="password" placeholder="Password"><br>

                                <button type="submit" name="btnLogIn" class="btnLogIn">Log In</button><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>