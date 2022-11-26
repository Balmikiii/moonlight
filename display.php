<!DOCTYPE html>
<html lang="en">
<head>
  <title>Balmiki</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>msg</th>
      </tr>
    </thead>
    <tbody>
    <?php
$conn = mysqli_connect('localhost','root','','moonlight');
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM msg";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo "<tr>
        <td>" . $row["id"]. "</td>
        <td>" . $row["name"] . "</td>
        <td>". $row["email"]. "</td>
        <td>". $row["msg"]. "</td>
    </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
    </tbody>
  </table>
</div>

</body>
</html>
