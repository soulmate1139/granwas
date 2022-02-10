
         
<?php
include 'db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";

$sql = "SELECT * FROM winnersList";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
  while($row = $result->fetch_assoc()) {?>
    <tr>
    <td><?php echo $row['name'];?></td>
    <td><?php echo $row['country'];?></td>
    <td><?php echo $row['winnings'];?></td>
    <td><?php echo $row['processingFee'];?></td>
    <td><?php echo $row['status'];?></td>
    </tr>
  <?php  }
} else {
  echo "0 results";
}


CloseCon($conn);
?>