<?php

  include 'connect.php';

  $sql_1 = "SELECT * FROM products";
  $result_1 = $conn->query($sql_1);
  $all_products = [];

  $sql_2 = "SELECT * FROM products WHERE category_id = 7";
  $result_2 = $conn->query($sql_2);
  $new_arrivals_products = [];

  $sql_3 = "SELECT * FROM products WHERE category_id = 9";
  $result_3 = $conn->query($sql_3);
  $trending_now_products = [];

  $sql_4 = "SELECT * FROM products WHERE category_id = 10";
  $result_4 = $conn->query($sql_4);
  $essentials_products = [];

  $sql_5 = "SELECT * FROM products WHERE category_id = 3";
  $result_5 = $conn->query($sql_5);
  $hoddies_and_sweaters_products = [];

  $sql_6 = "SELECT * FROM products WHERE category_id = 4";
  $result_6 = $conn->query($sql_6);
  $t_shirts_products = [];

  $sql_7 = "SELECT * FROM products WHERE category_id = 2";
  $result_7 = $conn->query($sql_7);
  $jeans_products = [];

  $sql_8 = "SELECT * FROM products WHERE category_id = 1";
  $result_8 = $conn->query($sql_8);
  $shoes_products = [];

  $sql_9 = "SELECT * FROM products WHERE category_id = 5";
  $result_9 = $conn->query($sql_9);
  $headwear_products = [];

  $sql_10 = "SELECT * FROM products WHERE category_id = 6";
  $result_10 = $conn->query($sql_10);
  $outwear_products = [];


    while($row_1 = $result_1->fetch_assoc()){
      $all_products[] = $row_1;
    }

   while($row_2 = $result_2->fetch_assoc()){
      $new_arrivals_products[] = $row_2;
   }

   while($row_3 = $result_3->fetch_assoc()){
      $trending_now_products[] = $row_3;
   }

   while($row_4 = $result_4->fetch_assoc()){
      $essentials_products[] = $row_4;
   }

   while($row_5 = $result_5->fetch_assoc()){
      $hoddies_and_sweaters_products[] = $row_5;
   }

   while($row_6 = $result_6->fetch_assoc()){
      $t_shirts_products[] = $row_6;
   }

   while($row_7 = $result_7->fetch_assoc()){
      $jeans_products[] = $row_7;
   }

   while($row_8 = $result_8->fetch_assoc()){
      $shoes_products[] = $row_8;
   }

   while($row_9 = $result_9->fetch_assoc()){
      $headwear_products[] = $row_9;
   }

   while($row_10 = $result_10->fetch_assoc()){
      $outwear_products[] = $row_10;
   }


   $category_id = isset($_GET['category_id']) ? (int)$_GET['category_id'] : null;

   if ($category_id) {
       $stmt = $pdo->prepare("SELECT * FROM products WHERE category_id = ?");
       $stmt->execute([$category_id]);
       $filtered_products = $stmt->fetchAll(PDO::FETCH_ASSOC);
   } else {
       $filtered_products = []; // empty when no filter selected
   }



  // Close the database connection
  include 'db_close.php';

  ?>
