<?php
session_start();
session_destroy();
?>
<script>
    alert("로그아웃🔓");
    location.replace('pro_main.php');
</script>