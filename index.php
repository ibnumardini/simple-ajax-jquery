<!DOCTYPE html>
<html>

<head>
    <title>Contoh AJAX 2 - Response HTML</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
</head>

<body>
    <button id="tombol">Klik di sini!</button>
    <div id="tampilan"></div>
    <script>
        $().ready(function() {
            $('#tombol').click(function() {
                // $.ajax({
                //     url: 'server.php',
                //     success: function(html) {
                //         $('#tampilan').html(html)
                //     }
                // })

                $.ajax({
                    url: 'server.php',
                    type: 'get',
                    data: {
                        nama: "Muhammad Fatkurozi",
                        alamat: "Bantul, Yogyakarta",
                        pekerjaan: "Programmer"
                    },
                    success: function(x) {
                        $('#tampilan').html(x)
                    }
                })
            })
        })
    </script>
</body>

</html>