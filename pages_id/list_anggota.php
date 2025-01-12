<?php
include '../api/koneksi.php';

// Pagination variables
$limit = 10; // Number of records per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1; // Current page
$offset = ($page - 1) * $limit; // Offset for SQL query

// Search variable
$search = isset($_GET['search']) ? $koneksi->real_escape_string($_GET['search']) : '';

// Fetch data with LIMIT, OFFSET, and SEARCH
$sql = "SELECT * FROM pt_dalam_apjapti 
        WHERE nama_pt LIKE '%$search%' 
        LIMIT $limit OFFSET $offset";
$result = $koneksi->query($sql);

// Total number of rows for pagination
$total_sql = "SELECT COUNT(*) AS total FROM pt_dalam_apjapti 
              WHERE nama_pt LIKE '%$search%'";
$total_result = $koneksi->query($total_sql);
$total_rows = $total_result->fetch_assoc()['total'];
$total_pages = ceil($total_rows / $limit);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Perusahaan</title>
    <link rel="icon" type="image/png" href="../src/assets/logo_apjati.png">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../src/list_anggota.css">
</head>
<style>
    body {
        padding: 0;
    }


    .container {
        margin-top: 20px;
    }
</style>

<body>
    <!-- navbar -->
    <nav class="nav h-[65px] lg:h-[112px]" <?php include 'navbar.php'; ?>>
    </nav>

    <div class="container px-5">
        <!-- <h1>Company Data</h1> -->
        <p class="subtitle text-sm lg:text-lg">
        Selamat datang di Direktori Perusahaan Mitra APJATI. Temukan informasi lengkap, alamat, dan detail kontak perusahaan di seluruh Indonesia. Seluruh perusahaan yang terdaftar telah bergabung dengan APJATI, memberikan Anda akses ke mitra terpercaya.</p>
        <div class="flex-header">
            <div class="search-container">
                <input
                    type="text"
                    id="search"
                    placeholder="Cari berdasarkan nama perusahaan">
            </div>
        </div>

        <div class="table-container" id="data-container">
            <!-- Data from the server will be loaded here -->
        </div>

        <div class="pagination-container" id="pagination-container">
            <!-- Pagination will be rendered here -->
        </div>
    </div>
</body>

<script>
    $(document).ready(function() {
        function loadData(search = '', page = 1) {
            $.ajax({
                url: "../api/load_data.php",
                method: "GET",
                data: {
                    search: search,
                    page: page
                },
                success: function(data) {
                    $("#data-container").html(data.table);
                    $("#pagination-container").html(data.pagination);
                },
                dataType: "json"
            });
        }

        // Load initial data
        loadData();

        // Trigger search on input change
        $("#search").on("input", function() {
            const searchValue = $(this).val();
            loadData(searchValue);
        });

        // Handle pagination clicks
        $(document).on("click", ".pagination a", function(e) {
            e.preventDefault();
            const page = $(this).data("page");
            const searchValue = $("#search").val();
            loadData(searchValue, page);
        });

        // Handle direct page input
        $(document).on("click", "#go-to-page", function() {
            const page = $("#page-input").val();
            const searchValue = $("#search").val();
            loadData(searchValue, page);
        });

        // Handle previous/next button click
        $(document).on("click", ".pagination .prev", function(e) {
            e.preventDefault();
            const page = $(this).data("page");
            const searchValue = $("#search").val();
            loadData(searchValue, page);
        });

        $(document).on("click", ".pagination .next", function(e) {
            e.preventDefault();
            const page = $(this).data("page");
            const searchValue = $("#search").val();
            loadData(searchValue, page);
        });
    });
</script>

<div id="data-container">
    <!-- Data from the server will be loaded here -->
</div>

<!-- footer -->
<?php include 'footer.php'; ?>

</body>

</html>

<?php
$koneksi->close();
?>