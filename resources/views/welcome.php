<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title><?php echo $nama_web; ?></title>
  </head>
  <body class="py-4">
    <header class="container py-3">
        <h1 class="h4"><?php echo $nama_web; ?></h1>
    </header>
    <div class="container my-2">
        <div class="row">
            <div class="col-sm-3">
                <ul class="list-group sticky-top pt-3">
                    <a href="#province" class="list-group-item">Province</a>
                    <a href="#city" class="list-group-item">City</a>
                    <a href="#subdistrict" class="list-group-item">Subdistrict</a>

                </ul>
            </div>
            <div class="col-sm-9">
                <div class="card mt-3">
                    <div id="province" class="card-body">
                        <h5 class="card-title">Provinces</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Method "province" digunakan untuk mendapatkan daftar propinsi yang ada di Indonesia.</h6>
                        <p class="card-text">GET <?php echo $url_web;?>/api/provinces</p>
                        <pre>
                            <code>
                            [
                                {
                                    "province_id": 1,
                                    "province": "Bali",
                                    "code": "BA"
                                },
                                {
                                    "province_id": 2,
                                    "province": "Bangka Belitung",
                                    "code": "BB"
                                }....
                            </code>
                        </pre>
                        <p class="card-text">GET <?php echo $url_web;?>/api/provinces/1</p>
                        <pre>
                            <code>
                            [
                                {
                                    "province_id": 1,
                                    "province": "Bali",
                                    "code": "BA"
                                }
                            ]
                            </code>
                        </pre>
                        <br>
                    </div>
                    <div id="city" class="card-body">
                        <h5 class="card-title">City</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Method "cities" digunakan untuk mendapatkan daftar kota yang ada di Indonesia.</h6>
                        <p class="card-text">GET <?php echo $url_web;?>/api/cities</p>
                        <pre>
                            <code>
                            [
                                {
                                    "city_id": 1,
                                    "province_id": 21,
                                    "province": "Nanggroe Aceh Darussalam (NAD)",
                                    "type": "Kabupaten",
                                    "city_name": "Aceh Barat",
                                    "postal_code": 23681
                                },
                                {
                                    "city_id": 2,
                                    "province_id": 21,
                                    "province": "Nanggroe Aceh Darussalam (NAD)",
                                    "type": "Kabupaten",
                                    "city_name": "Aceh Barat Daya",
                                    "postal_code": 23764
                                }...
                            </code>
                        </pre>
                        <p class="card-text">GET <?php echo $url_web;?>/api/cities/1</p>
                        <pre>
                            <code>
                            [
                                {
                                    "city_id": 1,
                                    "province_id": 21,
                                    "province": "Nanggroe Aceh Darussalam (NAD)",
                                    "type": "Kabupaten",
                                    "city_name": "Aceh Barat",
                                    "postal_code": 23681
                                }
                            ]
                            </code>
                        </pre>
                        <br>
                    </div>
                    <div id="subdistrict" class="card-body">
                        <h5 class="card-title">Subdistrict</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Method "province" digunakan untuk mendapatkan daftar kecamatan yang ada di Indonesia.</h6>
                        <p class="card-text">GET <?php echo $url_web;?>/api/subdistricts</p>
                        <pre>
                            <code>
                            [
                                {
                                    "subdistrict_id": 1,
                                    "province_id": 21,
                                    "province": "Nanggroe Aceh Darussalam (NAD)",
                                    "city_id": 1,
                                    "city": "Aceh Barat",
                                    "type": "Kabupaten",
                                    "subdistrict_name": "Arongan Lambalek"
                                },
                                {
                                    "subdistrict_id": 2,
                                    "province_id": 21,
                                    "province": "Nanggroe Aceh Darussalam (NAD)",
                                    "city_id": 1,
                                    "city": "Aceh Barat",
                                    "type": "Kabupaten",
                                    "subdistrict_name": "Bubon"
                                }...
                            </code>
                        </pre>
                        <p class="card-text">GET <?php echo $url_web;?>/api/subdistricts/city/1</p>
                        <pre>
                            <code>
                            [
                                {
                                    "subdistrict_id": 1,
                                    "province_id": 21,
                                    "province": "Nanggroe Aceh Darussalam (NAD)",
                                    "city_id": 1,
                                    "city": "Aceh Barat",
                                    "type": "Kabupaten",
                                    "subdistrict_name": "Arongan Lambalek"
                                },
                                {
                                    "subdistrict_id": 2,
                                    "province_id": 21,
                                    "province": "Nanggroe Aceh Darussalam (NAD)",
                                    "city_id": 1,
                                    "city": "Aceh Barat",
                                    "type": "Kabupaten",
                                    "subdistrict_name": "Bubon"
                                }...
                            </code>
                        </pre>
                        <p class="card-text">GET <?php echo $url_web;?>/api/subdistricts/1</p>
                        <pre>
                            <code>
                            [
                                {
                                    "subdistrict_id": 1,
                                    "province_id": 21,
                                    "province": "Nanggroe Aceh Darussalam (NAD)",
                                    "city_id": 1,
                                    "city": "Aceh Barat",
                                    "type": "Kabupaten",
                                    "subdistrict_name": "Arongan Lambalek"
                                }
                            ]
                            </code>
                        </pre>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>