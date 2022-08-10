<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet"
        href=" https://cdnjs.cloudflare.com/ajax/libs/twitterl-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">

    <link rel="icon" href="{{ asset('img/logo-tab-melati.png') }}">

    <link rel="stylesheet" href="{{ asset('css/style_dosen.css') }}">

    <title>Melati | {{ $sidebar }}</title>
</head>

<body>

    <div class="screen-cover d-none d-xl-none"></div>

    @include('partials.sidebar_dosen')

    @yield('konten_dosen')






    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
        const navbar = document.querySelector('.col-navbar')
        const cover = document.querySelector('.screen-cover')

        const sidebar_items = document.querySelectorAll('.sidebar-item')

        function toggleNavbar() {
            navbar.classList.toggle('appear')
            cover.classList.toggle('d-none')
        }

        function toggleActive(e) {
            sidebar_items.forEach(function(v, k) {
                v.classList.remove('active')
            })
            e.closest('.sidebar-item').classList.add('active')

        }
    </script>

    {{-- Select data matakuliah --}}
    <script>
        $(document).ready(function(){
            $('select[name="nama_matakuliah"]').on('change', function () {
                let matakuliahId = $(this).val();
                if (matakuliahId) {
                    jQuery.ajax({
                        url: '/matakuliah/'+matakuliahId,
                        type: "GET",
                        dataType: "json",
                        success: function (response) {
                            $('.tampilDataKelas').attr("value", response).val(response);
                        },
                    });
                }
            });
        });
    </script>

{{-- <script>
   
    $("#nama_matakuliah").change(function () {
        var matakuliah_id = $(this).attr("matakuliah-id");
        var 

        $.ajax({
            url: '/tampilDataKelas',
            data: {
                matakuliah_id: matakuliah_id,
            },
            type: 'post',
            success: function (resp) {
                $(".tampilDataKelas").html(resp);
            },
            error: function () {
                alert("error");
            }
        });
        // $.ajax({
        //     url: '/tampilBerat',
        //     data: {
        //         berat: berat,
        //         ukuran: ukuran,
        //         produk_id: produk_id
        //     },
        //     type: 'post',
        //     success: function (resp) {
        //         $('.tampilBerat').attr("value", resp).val(resp);
        //     },
        //     error: function () {
        //         alert("error");
        //     }
        // });
        // $.ajax({
        // 	url: '/tampilProdukHarga',
        // 	data:{ukuran:ukuran, produk_id:produk_id},
        // 	type:'post',
        // 	success:function(resp){
        // 		// alert(resp);
        // 		$(".tampilAtributHarga").html("Rp. "+resp);
        // 	}, error:function(){
        // 		alert("error");
        // 	}
        // });
    });
</script> --}}
</body>

</html>
