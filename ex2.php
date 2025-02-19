<?php
    include("conn.php");
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
<!-- เพิ่มส่วน ใช้งาน Bootstrap -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- ส่วนของ DataTable -->
<link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css" rel="stylesheet">

<!-- เพิ่มส่วน ใช้งาน Google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&family=Sriracha&display=swap" rel="stylesheet">

<!-- เพิ่ม CSS ให้ใช้ Font  -->


<style>
    body {
  font-family: "IBM Plex Sans Thai", serif;
  font-weight: 500;
  font-style: normal;
  margin-left: 150px;
  margin-right: 100px;
  margin-top: 100px;
  margin-bottom: 200px;
  color:#8B3A3A;
    }
    
    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ทดสอบสร้างตาราง</title>
</head>
<body>
    <h1>ตารางข้อมูลพนักงาน</h1>
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>รหัสสินค้า</th>
                <th>ยี่ห้อ</th>
                <th>รุ่น</th>
                <th>หน่วยความจำ</th>
                <th>ความจุฮาร์ดไดรฟ์</th>
                <th>ราคา</th>
                <th>รายละเอียด</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM computers";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>" ;
                echo "<td>".$row["brand"]."</td>" ;
                echo "<td>".$row["model"]."</td>" ;
                echo "<td>".$row["processor"]."</td>" ;
                echo "<td>".$row["ram"]."</td>" ;
                echo "<td>".$row["storage"]."</td>" ;
                echo "<td>".$row["price"]."</td>" ;
                echo "</tr>";

              }
            } else {
              echo "0 results";
            }
            $conn->close();
                ?>
           
        </tbody>
    </table>

</body>

<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.2.0/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.2.0/js/dataTables.bootstrap5.js"></script>

<script>
new DataTable('#example');
</script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>