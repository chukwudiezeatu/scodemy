

<section class="mt-5 container">

   

    <h1 class="text-center display-5">PROFILE</h1>

    <div class="rounded-circle mx-auto bg-light mt-3 overflow-hidden" style="height : 200px; width :200px;
                background : url( '<?php echo !empty($_SESSION["profile_picture"]) ? "uploads/".$_SESSION["profile_picture"] : "images/default_pics.png" ?>') no-repeat center center; background-size: cover">
                
    </div>

    </div>
    

    <div class="mt-3 text-center mb-3">
        <i class="bi bi-person-circle fs-4"></i><h5>fullname: </h5>
        <span class="fs-4 fw-bold"> <?php echo $_SESSION["fullname"]
         ?></span>
         <hr>
    </div>
    <div class="mt-3 text-center mb-3">
        <i class="bi bi-envelope fs-4"></i><h5>Email: </h5>
        <span class="fs-4 fw-bold"> <?php echo $_SESSION["email"]
         ?></span>
         <hr>
    </div>

    <div class="mt-3 text-center mb-3">
        <i class="bi bi-person-workspace fs-4"></i><h5>Username: </h5>
        <span class="fs-4 fw-bold"> <?php echo $_SESSION["username"]
         ?></span>
         <hr>
    </div>

    <div class="mt-3 text-center mb-3">
        <i class="bi fs-4 bi-<?php if ($_SESSION["gender"] == "female"){
            echo "person-standing-dress";
        }
        else {
              echo "person-standing";
        }
         ?>" ></i><h5>Gender: </h5>
        <span class="fs-5 fw-bold"><?php echo !empty($_SESSION["gender"]) ? $_SESSION["gender"] : '<span class="lead">UPDATE PROFILE</span>' ?></span>
         <hr>

          <div class="mt-3 text-center mb-3">
        <i class="bi bi-telephone fs-4"></i><h5>Phone: </h5>
        <span class="fs-5 fw-bold"><?php echo !empty($_SESSION["phone_number"]) ? $_SESSION["phone_number"] : '<span class="lead">UPDATE PROFILE</span>' ?></span>
         <hr>

         <div class="mt-3 text-center mb-3">
        <i class="bi bi-telephone fs-4"></i><h5>Date Of Birth: </h5>
        <span class="fs-4 fw-bold"><?php $userdob = strtotime($_SESSION["dob"]); $_SESSION["dob"] !==null ? date('F J, Y, $userdob') : '<span class="lead">UPDATE PROFILE</span>' ?></span>
         <hr>

         <div class="d-grid d-md-block">
                        <a href="update_profile.php" class="btn btn-primary">Edit</a>
                    </div>
    </div>
    </div>
    <form action="includes/delete_profile.inc.php" method="post">
        <button class = "btn btn-danger" name ="submit" type = "submit"> Delete Account</button>
    </form>

</section>

