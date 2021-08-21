<?php

//Hapus session
session_start();
$_SESSION = [];
session_unset();
session_destroy();
?>

<script>
    window.location='home.php';
</script>
<?php

?>