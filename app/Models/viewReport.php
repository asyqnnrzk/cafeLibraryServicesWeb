<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viewReport extends Model
{
    use HasFactory;

    public function showTable(): void
    {

        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "library_cafe_services";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
    }

        $sql = "SELECT * FROM report";
        $result = $conn->query($sql);

        $conn->close();

        
    }
}
