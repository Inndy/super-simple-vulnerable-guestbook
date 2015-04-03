<?php if(!isset($conn)) die; ?><header>
    <h1>Super-Simple-Vunlerable-Guestbook</h1>

    <ul class="nav">
    <?php
        $navs = [
            [ 'Home', '/'],
            [ 'New Post', '/?mod=new' ],
            [ 'Hack', '/?mod=hack' ],
            [ 'Hash', '/?mod=hash' ],
        ];
        foreach ($navs as $item)
            echo "<li><a href=\"{$item[1]}\">{$item[0]}</a></li>";
    ?>
    </ul>
</header>
