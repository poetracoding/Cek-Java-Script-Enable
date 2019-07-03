<!DOCTYPE html>

<head>
    <title>JavaScript</title>
    <style>
        .noscript {
            width: 100%;
            height: 100%;
            z-index: 100000;
            position: absolute;
            background: #020202cc;
        }

        .noscript #javascript-notice {
            background-color: #ffffff;
            display: block;
            position: fixed;
            text-align: center;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            border-radius: 3px;
            padding: 5px;
            width: 500px;
            height: 370px;
            top: 50%;
            left: 50%;
            margin-top: -185px;
            margin-left: -250px;
        }

        .noscript #javascript-notice p {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <noscript class="noscript">
        <div id="javascript-notice">
            <img src="logo.jpg" width="350px" alt="JavaScript Disabled Notice" title="JavaScript Disabled Notice" />
            <p>Pelajari <a href="https://www.enable-javascript.com/id/" target="_blank">cara mengaktifkan JavaScript</a> di browser Anda.<p>
        </div>
    </noscript>
    <!-- <noscript>
        <?php header('Location:blank.php'); ?>
    </noscript> -->
    Di sini pastinya banyak kode untuk menampilkan konten/elemen di situs Anda dan dengan CSS kita bisa membuatnya tertutupi oleh elemen yang ada di tag noscript.
</body>

</html>