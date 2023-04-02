<!DOCTYPE html>
<html>
<head>
  <title>PRAK 203</title>
</head>
<body>
<p>Output yang diinginkan:</p>
  <form method="post">
    <label for="value">Nilai:</label>
    <input type="text" name="value" id="value" required><br>
    <label for="from" name="to">Dari:</label><br>
            <input type="radio" name="dari" value="°C">
            <label for="celcius">Celcius</label><br>
            <input type="radio" name="dari" value="°F">
            <label for="fahrenheit">Fahrenheit</label><br>
            <input type="radio" name="dari" value="°R">
            <label for="rheamur">Rheamur</label><br>
            <input type="radio" name="dari" value="°K">
            <label for="kelvin">Kelvin</label><br>

            <label for="to" name="to">Ke:</label><br>
            <input type="radio" name="ke" value="°C">
            <label for="celcius">Celcius</label><br>
            <input type="radio" name="ke" value="°F">
            <label for="fahrenheit">Fahrenheit</label><br>
            <input type="radio" name="ke" value="°R">
            <label for="rheamur">Rheamur</label><br>
            <input type="radio" name="ke" value="°K">
            <label for="kelvin">Kelvin</label><br>
   <input type="submit" name="konversi" value="konversi">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function convertTemperature($value, $dari, $ke) {
      switch($dari) {
        case '°C':
          switch($ke) {
            case '°F':
              return ($value * 9/5) + 32;
            case '°R':
              return $value * 4/5;
            case '°K':
              return $value + 273.15;
            default:
              return $value;
          }
        case '°F':
          switch($dari) {
            case '°C':
              return ($value - 32) * 5/9;
            case '°R':
              return ($value - 32) * 4/9;
            case '°K':
              return ($value + 459.67) * 5/9;
            default:
              return $value;
          }
        case '°R':
          switch($ke) {
            case '°C':
              return $value * 5/4;
            case '°F':
              return ($value * 9/4) + 32;
            case '°K':
              return ($value * 5/4) + 273.15;
            default:
              return $value;
          }
        case '°K':
          switch($dari) {
            case '°C':
              return $value - 273.15;
            case '°F':
              return ($value * 9/5) - 459.67;
            case '°R':
              return ($value - 273.15) * 4/5;
            default:
              return $value;
          }
        default:
          return $value;
      }
    }

    $value = $_POST['value'];
    $dari = $_POST['dari'];
    $ke = $_POST['ke'];

    // konversi
    $result = convertTemperature($value, $dari, $ke);
    echo "<h1>Hasil Konversi:  $result  $ke</h1>";
  }
  ?>