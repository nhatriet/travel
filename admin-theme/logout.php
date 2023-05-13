<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="logout.css">

	<title>F5 Admin</title>
</head>
<body>
    <div class="site-content cf">
    <div class="boxed-group dangerzone">
  
      <h3>Log Out</h3>
  
      <div class="boxed-group-inner">
        <section>
          <h4>Do you want exit?</h4>
                  <script>
										function clickonlogout(){
											alert("LOGGED OUT");
										}
									</script>
          <button class="btn btn-danger boxed-action" id="delete-account"><a href="index_logout.php" onclick="clickonlogout()">EXIT</a></button>
          <p>You are about to close your account. It will exit your account along with its associated data. Are you sure you want to continue?</p>
          </dialog>
  
        </section>
      </div>
    </div>
  </div>
</body>

<script>
    (function($) {
    'use strict';

    var $accountDelete = $('#delete-account'),
        $accountDeleteDialog = $('#confirm-delete');

    $accountDelete.on('click', function() {
        $accountDeleteDialog[0].show();
    });

    $('#cancel').on('click', function() {
        $accountDeleteDialog[0].close();
    });

    })(jQuery);
</script>