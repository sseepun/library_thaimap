<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tech Origin | Library Thai Map</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" />

    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/blocks.css" media="screen" />
</head>
<body>
    <section class="section-padding">
        <div class="container">
            <div class="thai-map-container">
                <div class="option">
                    <h4 class="text-center color-secondary"></h4>
                    <a class="color-black h-color-primary btn-back" href="05-local-award.php">
                        <i class="zmdi zmdi-chevron-left mr-1"></i> กลับหน้าหลัก
                    </a>
                </div>
                <div class="thai-map-wrapper">
                    <div class="wrapper">
                        <div class="thai-map" id="thai-map"></div>
                        <div class="region-tags">
                            <img class="region region-1" src="assets/img/region-1.png" alt="Region 1" />
                            <img class="region region-2" src="assets/img/region-2.png" alt="Region 2" />
                            <img class="region region-3" src="assets/img/region-3.png" alt="Region 3" />
                            <img class="region region-5" src="assets/img/region-5.png" alt="Region 5" />
                            <img class="region region-4" src="assets/img/region-4.png" alt="Region 4" />
                            <img class="region region-6" src="assets/img/region-6.png" alt="Region 6" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/d3.v5.min.js"></script>
    <script src="assets/js/thai-map.js"></script>
    <script src="assets/js/thai-map-process.js"></script>
</body>
</html>
