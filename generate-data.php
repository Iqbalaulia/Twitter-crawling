<?php
include "library/twitteroauth.php";
include("config.php");

$consumer_key ="AhYt2eSniXyp37REtmjv0kSkg";
$consumer_secret ="Nmp7Li9gdiI5BthAvuWcrEpMxwTV6R3m06AebK9jce6cD2ZZG2";
$acces_token ="829150783-TAzpWDHnjDG5MvJiqFh2foQhYa5jnk70Zq4PBBIw";
$acces_token_screet ="0RdF5PK2bTtHfIOYZ0QK2shTml7Gq9P99pKI71xkpHVRo";

// @$keyword = $_POST['keyword'];

$twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

$tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q=stikom&result_type=recent&count=1000');
echo "<pre>";
echo json_encode($tweets);
//print_r($tweets);
echo "</pre>";
// $result = array();
$status = $tweets->statuses;


 foreach ($status as $key => $tweet) {
  // echo $tweet->created_at;
  //array_push($result, array('nama'=>$tweet->user->screen_name,'status'=>$tweet->text,'url_profil'=>$tweet->user->profile_image_url,'tanggal'=>$tweet->created_at));
    $screen_name = $tweet->user->screen_name;
    $name = $tweet->user->name;
    $status = $tweet->text;
    $gambar = $tweet->user->profile_image_url;
    $tanggal = $tweet->created_at;
    $lokasi = $tweet->user->location;

    $sql = "INSERT INTO twitter_timeline(nama,screen_name,tweet,gambar,tanggal,lokasi) VALUE ('$name','$screen_name','$status','$gambar','$tanggal','$lokasi')";
    $query = mysqli_query($db, $sql);

 }
  //echo json_encode(array("result"=>$result));


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>