<?php if(!isset($conn)) die; ?><header>
    <h1>Super-Simple-Vunlerable-Guestbook</h1>

    <ul class="nav">
    <?php
        function protect($url, $pwd) {
            return "javascript:(prompt('Password') == '{$pwd}') && (location.href = '{$url}') || void(0);";
        }

        $navs = [
            [ 'Home', './'],
            [ 'New Post', './?mod=new' ],
            [ 'Hack', protect('./?mod=hack', 'h@ckme') ],
            [ 'Hash', './?mod=hash' ],
        ];
        foreach ($navs as $item)
            echo "<li><a href=\"{$item[1]}\">{$item[0]}</a></li>";
    ?>
    </ul>
</header>
