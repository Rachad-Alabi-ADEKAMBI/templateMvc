<?php
/*
function getConnexion(){
    return new PDO("mysql:host=localhost; dbname=frankobizness; charset=UTF8", "root", "");
}


function getLastCars(){

    $pdo = getConnexion();

      $req = $pdo->query(
        "SELECT *  FROM cars ORDER BY id DESC LIMIT 3"
    );

    $posts = [];
    while (($row = $req->fetch())) {
        $data = [
            'id' => $row['id'],
            'name' =>$row['name'],
            'category' =>$row['category'],
            'description' =>$row['description'],
            'year' =>$row['year'],
            'rate' =>$row['rate'],
            'color' =>$row['color'],
            'price' =>$row['price'],
            'pic1' => $row['pic1'],
            'pic2' => $row['pic2'],
            'pic3' => $row['pic3'],
            'pic4' => $row['pic4']
        ];

        $posts[] = $data;

    }
        return $posts;
    }

        $pdo = getConnexion();

          $req = $pdo->query(
            "SELECT *  FROM cars WHERE
            category = 'En vente' ORDER BY id DESC LIMIT 3"
        );

        $datas = [];
        while (($row = $req->fetch())) {
            $data = [
                'id' => $row['id'],
                'name' =>$row['name'],
                'category' =>$row['category'],
                'description' =>$row['description'],
                'year' =>$row['year'],
                'rate' =>$row['rate'],
                'color' =>$row['color'],
                'price' =>$row['price'],
                'pic1' => $row['pic1'],
                'pic2' => $row['pic2'],
                'pic3' => $row['pic3'],
                'pic4' => $row['pic4']
            ];

            $datas[] = $data;

        }
            return $datas;
        }
        */