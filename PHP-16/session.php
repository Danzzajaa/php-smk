<nav>

    <ul>
        <li><a href="?menu-isi">isi</a></li>
        <li><a href="?menu-hapus">hapus</a></li>
        <li><a href="?menu-destroy">destroy</a></li>
    </ul>

</nav>



<?php

    session_start();

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        echo $menu;
    }


    var_dump($_SESSION);

    function isiseason(){
        echo $_SESSION['user'] = 'joni';

        echo $_SESSION['nama'] = 'joni rambo';

        echo $_SESSION['alamat'] = 'sidoarjo';
    }

?>