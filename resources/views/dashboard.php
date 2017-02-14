<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Notulennya Bu Lia</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
	<!-- <link rel="stylesheet" href=".\node_modules\bootstrap\dist\css\bootstrap.css"> -->
	<link rel="stylesheet" href="../styles/style.css">
	<base href="/">
</head>

<body ng-app="formApp">
	<div class="container">
		<div ui-view></div>
	</div>
</body>

<!-- Application dependencies -->

<script src="node_modules/angular/angular.min.js"></script>
<script src="node_modules/angular-ui-router/release/angular-ui-router.min.js"></script>
<script src="node_modules/angular-animate/angular-animate.min.js"></script>

<!-- Application scripts -->
<script src="scripts/app.js"></script>
<!-- <script src="scripts/authController.js"></script>
<script src="scripts/userController.js"></script> -->

</html>
