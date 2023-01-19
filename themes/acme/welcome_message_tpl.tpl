<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<body>

<div id="container">
	<h1>{heading}</h1>

	<div id="body">
        <h2>Welcome</h2>

	</div>

	<p class="footer">Страница сгенерирорана за <strong>{elapsed_time}</strong> секунд. <?php echo  (ENVIRONMENT === 'development') ?  'Версия CodeIgniter <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>