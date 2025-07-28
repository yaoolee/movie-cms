<?php
include("admin/includes/database.php");

if ($connect) {
    echo "✅  InfinityFree 的数据库！";
} else {
    echo "❌ ：" . mysqli_connect_error();
}
?>