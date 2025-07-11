<?php
$conn = new mysqli("localhost", "root", "", "user_data");
?>
<form method="POST" action="insert.php">
  Name: <input type="text" name="name" required>
  Age: <input type="number" name="age" required>
  <button type="submit">Submit</button>
</form>

<table border="1">
  <tr>
    <th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th>
  </tr>
  <?php
  $result = $conn->query("SELECT * FROM users1");
  while($row = $result->fetch_assoc()) {
    echo "<tr>
      <td>{$row['id']}</td>
      <td>{$row['name']}</td>
      <td>{$row['age']}</td>
      <td id='status{$row['id']}'>{$row['status']}</td>
      <td><button onclick='toggleStatus({$row['id']})'>Toggle</button></td>
    </tr>";
  }
  ?>
</table>

<script>
function toggleStatus(id) {
  fetch('toggle.php?id=' + id)
    .then(response => response.text())
    .then(data => {
      document.getElementById('status' + id).textContent = data;
    });
}
</script>
