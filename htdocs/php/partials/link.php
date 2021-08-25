<?php
if ($rPath === 'home') {
    echo "<a href='signin' class='me-2'>signin</a>";
    echo "<a href='register'>register</a>";
} elseif ($rPath === 'signin') {
    echo "<a href='home' class='me-2'>home</a>";
    echo "<a href='register'>register</a>";
} elseif ($rPath === 'register') {
    echo "<a href='home' class='me-2'>home</a>";
    echo "<a href='signin'>signin</a>";
} ?>
