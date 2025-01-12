<?php
include 'koneksi.php';

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

// Table HTML
$table_html = '<table>
    <tr>
        <th>No</th>
        <th>Nama PT</th>
        <th>Alamat PT</th>
        <th>Email PT</th>
        <th>Nomor PT</th>
        <th>Status</th>
    </tr>';
if ($result->num_rows > 0) {
    $no = $offset + 1;
    while ($row = $result->fetch_assoc()) {
        $table_html .= "<tr>
            <td>{$no}</td>
            <td>{$row['nama_pt']}</td>
            <td>{$row['alamat_pt']}</td>
            <td>{$row['email_pt']}</td>
            <td>{$row['nomor_pt']}</td>
            <td>{$row['status']}</td>
        </tr>";
        $no++;
    }
} else {
    $table_html .= "<tr>
        <td colspan='5'>No data found</td>
    </tr>";
}
$table_html .= '</table>';

// Pagination HTML
$pagination_html = '<div class="pagination">';
if ($page > 1) {
    $pagination_html .= '<a href="#" data-page="' . ($page - 1) . '" class="prev">Previous</a>';
}

$start_page = max(1, $page - 1);
$end_page = min($total_pages, $page + 1);

for ($i = $start_page; $i <= $end_page; $i++) {
    $pagination_html .= '<a href="#" data-page="' . $i . '" class="' . ($i == $page ? 'current-page' : '') . '">' . $i . '</a>';
}

if ($page < $total_pages) {
    $pagination_html .= '<a href="#" data-page="' . ($page + 1) . '" class="next">Next</a>';
}

$pagination_html .= '</div>';

// Return data as JSON
echo json_encode([
    'table' => $table_html,
    'pagination' => $pagination_html
]);

$koneksi->close();
