<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Output OOP PHP</title>
</head>
<body>
    
    <form action="" method="POST">
        <label for="input1">Masukan data: </label>
        <input type="text" name="data" id="input1">
        <input type="submit" value="Submit" name="submit">
    </form>

</body>
</html>
<?php

class Biodata {
    public $data;

    public function setData($data) {
        return $this->data = $data;
    }

}

$datas = new Biodata;

if (isset($_POST['submit'])) {
    if (!empty($_POST['data'])) {
        $data = $_POST['data'];
        echo $datas->setData($data);
    } else {
        echo "Data masih kosong!";
    }
} else {
    echo "Masukan data terlebih dahulu!";
}
?>