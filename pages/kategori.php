

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaCode New's</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <!--  HEADER START -->
    <?php include('../include/header.php') ?>
    <!-- HEADER END -->

    <?php $kategori =  $_GET['page'] ?>
    <!-- NAV START -->
    <?php include("../include/nav.php") ?>
    <!-- NAV END -->


    <!-- MAIN CONTENT START -->
    <section class="border border-gray-800 container mx-auto p-6">
        <h1 class="font-mono text-4xl">Kategori <?= $kategori?>  </h1>
    </section>
    <!-- MAIN CONTENT END -->


    <!-- FOOTER START -->
    <?php include('../include/footer.php') ?>
    <!-- FOOTER END -->

</body>
</html>