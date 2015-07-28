<html>
<head>
    <title>Page Title</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
    <?php
    $myfile = fopen("color.txt", "r") or die();

<form class="" action="#" method="post">
    <input type="color" name="color" id="color">

</form>

<script type="text/javascript">
    $('#color').change(function(e) {
        e.preventDefault();
        $.ajax({
            method: "POST",
            url: "send.php",
            data: { color: color.value }
        });
        console.log(color.value);
    });

</script>
</body>
</html>
