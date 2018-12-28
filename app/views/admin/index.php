<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo SITENAME . ' | ' . $data['title']; ?></title>

    <!-- vendor css -->
    <link href="<?php echo URLROOT; ?>/lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?php echo URLROOT; ?>/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bracket.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/bracket.simple-white.css">
</head>

<body>

<div class="d-flex align-items-center justify-content-center bg-gray-200 ht-100v">

    <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><span class="tx-normal">[</span> admin <span
                    class="tx-info">panel</span> <span class="tx-normal">]</span></div>
        <div class="tx-center mg-b-60">Login</div>
        <form action="<?php echo URLROOT; ?>/admin/login" method="post" data-parsley-validate>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter your username" required>
            </div>
            <!--form-group-->
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Enter your password" required>
                <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
            </div>
           <!-- form-group-->
            <button type="submit" class="btn btn-info btn-block">Sign In</button>
            <div class="mg-t-60 tx-center">Not yet a member? <a href="" class="tx-info">Sign Up</a></div>
        </form>
    </div><!-- login-wrapper -->
</div><!-- d-flex -->

<script src="<?php echo URLROOT; ?>/lib/jquery/jquery.min.js"></script>
<script src="<?php echo URLROOT; ?>/lib/jquery-ui/ui/widgets/datepicker.js"></script>
<script src="<?php echo URLROOT; ?>/lib/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
