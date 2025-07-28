<?php
include("admin/includes/database.php");

if ($connect) {
    echo "✅ 成功连接到 InfinityFree 的数据库！";
} else {
    echo "❌ 数据库连接失败：" . mysqli_connect_error();
}
?>