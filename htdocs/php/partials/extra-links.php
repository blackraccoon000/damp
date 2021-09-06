<?php
namespace partials;
function extraLinks () {
?>
<h3>GET</h3> -->
    <form action="<?php echo BASE_CONTEXT_PATH; ?>signin" method="GET">
        <input type="submit" value="signin" />
    </form>
    <form action="<?php echo BASE_CONTEXT_PATH; ?>register" method="GET">
        <input type="submit" value="Register" />
    </form>
    <form action="<?php echo BASE_CONTEXT_PATH; ?>home" method="GET">
        <input type="submit" value="Home" />
    </form>

<h3 class="mt-3">POST</h3>
    <form action="<?php echo BASE_CONTEXT_PATH; ?>signin" method="POST">
        <input type="submit" value="signin" />
    </form>
    <form action="<?php echo BASE_CONTEXT_PATH; ?>register" method="POST">
        <input type="submit" value="Register" />
    </form>
    <form action="<?php echo BASE_CONTEXT_PATH; ?>home" method="POST">
        <input type="submit" value="Home" />
    </form>
<?php
// if ($rPath === 'home') {
//     echo "<a href='signin' class='me-2'>signin</a>";
//     echo "<a href='register'>register</a>";
// } elseif ($rPath === 'signin') {
//     echo "<a href='home' class='me-2'>home</a>";
//     echo "<a href='register'>register</a>";
// } elseif ($rPath === 'register') {
//     echo "<a href='home' class='me-2'>home</a>";
//     echo "<a href='signin'>signin</a>";
// }
};
?>