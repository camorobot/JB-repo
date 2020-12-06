<?php
// Deleting a cookie
setcookie("Allow_Cookies", "", time()-3600);
echo setcookie("Allow_Cookies", "", time()-3600);
?>
<script>
document.cookie = 'Allow_Cookies=; Max-Age=0; path=/; domain=' + location.host;
</script>