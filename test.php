<?php
  // CSV dosyasının yolu
  $file = "data.csv";

  // CSV dosyasındaki verileri oku
  $rows = array_map('str_getcsv', file($file));

  // İlk satırı sütun başlıkları olarak kullan
  $header = array_shift($rows);

  // Verileri HTML tablosu olarak ekrana yaz
  echo "<table>";
  echo "<thead>";
  echo "<tr>";
  foreach ($header as $column) {
    echo "<th>$column</th>";
  }
  echo "</tr>";
  echo "</thead>";
  echo "<tbody>";
  foreach ($rows as $row) {
    echo "<tr>";
    foreach ($row as $column) {
      echo "<td>$column</td>";
    }
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
?>
