<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TFA3 Using Array</title>
    <link rel="stylesheet" href="array.css">
</head>
<body>

<h2>Array Person List</h2>

<?php
$persons = [
    ["name"=>"Katherine Roxanne Barz", "age"=>20, "birthday"=>"Jan 6, 2006", "contact"=>"+639209597806", "img"=>"https://media.licdn.com/dms/image/v2/D4E03AQGWrGT5ElhxBQ/profile-displayphoto-crop_800_800/B4EZmJg_h7KUAI-/0/1758948752756?e=1780531200&v=beta&t=tDKa96GH1srXmU3U5v_uW-IvqCp2Vsi_TRNkrCRPs_s"],
    ["name"=>"Deign Sumalpong", "age"=>20, "birthday"=>"Nov 25, 2005", "contact"=>"+639958936814", "img"=>"https://scontent.fmnl44-1.fna.fbcdn.net/v/t39.30808-6/482117531_1850648702362693_2004448226061358545_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeGLIgQZmk9HGCDrXm1XDrZRD_IpAGkvWnYP8ikAaS9adj_96JL7an1W144yHyYaVXVnmKXAs7agZbRg5vdDSEwH&_nc_ohc=CxC2jDmu7eQQ7kNvwFrFtB5&_nc_oc=AdpGTazlBqSofoonBb0sHtUfA76tfcId18cvlkM51pKNcgY_9eUbsYR_NDCafQRdfAc&_nc_zt=23&_nc_ht=scontent.fmnl44-1.fna&_nc_gid=ebhzPYRKLnCB_jg5262QpA&_nc_ss=7a2a8&oh=00_Af4LjBkFS5bW3K96IcDAnd_Sc7MdhxUCzcSEc6UyAG4nRg&oe=6A106597"],
    ["name"=>"Marc Anthony Villuaneva", "age"=>20, "birthday"=>"Jul 6, 2005", "contact"=>"+639951476169", "img"=>"https://scontent.fmnl44-1.fna.fbcdn.net/v/t39.30808-6/480578808_1148240220021854_5687124997262849296_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeGEMMowGNjn9GXde7AyBVTR-ot2kjEj_EH6i3aSMSP8QStfokjUO9pWFaPQICnGyhxK1zLMMr3OsuFL00bbJu72&_nc_ohc=dAz6KE4nml0Q7kNvwFa221A&_nc_oc=Adrn8l0m6RVExb-i8Y11toHxhGJfA7hL_0TLFpBW_U5cB-xXi12Py8KEQUr0yd7CwKkwJgztoCo-5ZY1ik3Uy-QU&_nc_zt=23&_nc_ht=scontent.fmnl44-1.fna&_nc_gid=dnEQ5ooUSo-4jTa67HCmKw&_nc_ss=782a8&oh=00_Af6V63u5whmzkFPh4PSt4X5CLTs8ShsMeTb6qZXOYS60LA&oe=6A1070E1"],
    ["name"=>"Xander David Canlas", "age"=>21, "birthday"=>"Apr 4, 2005", "contact"=>"+639189622587", "img"=>"https://scontent.fmnl44-1.fna.fbcdn.net/v/t39.30808-6/455089112_8056071974482773_1758561720712977579_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHhsX_1bV2UUPR9rRueLyDtb7AB-GaHpIxvsAH4ZoekjFHp8kpQXZyhnLpjl8D4rb92U7cfXutSDPnFFaPMKHXh&_nc_ohc=Tlgm6usMtmwQ7kNvwFFkJAO&_nc_oc=AdpRr_-F7G_sug4WgCH_mCBN7UjIxJXI1HRi65lwohgoQ-5cIuyM6U9sNcK9z52wv4WvgyQJNew5eAcL1vpPyVut&_nc_zt=23&_nc_ht=scontent.fmnl44-1.fna&_nc_gid=Thtkigdr-8wbEOYaHFtTLQ&_nc_ss=7b2a8&oh=00_Af6rJQZ8sYHX9rvDBJC3Z6qTnxMe5BuJSD5q5BIC-91QYQ&oe=6A105D3C"],
    ["name"=>"Christian Heir Nellas", "age"=>20, "birthday"=>"May 13, 2006", "contact"=>"'09392552171", "img"=>"https://scontent.fmnl44-1.fna.fbcdn.net/v/t39.30808-6/576297011_729696203473652_2409275902990645975_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFLrwhxWuRiC-frEU-kvTXVWTW6GOQYI0RZNboY5BgjRBZDJFl_1b2eKdRFKyHEq7lv3Z1pYj_E270fNk_IYM4O&_nc_ohc=njnxWPuMQ38Q7kNvwFKFYQn&_nc_oc=AdpW0GDAT_kZTie8n0ypM8XLHxEbWLCzC44502cAuqf-3oTzZd_pvkHRGX4cl7Cf-Cf5CPQInmUJQnU9SmxLHSpA&_nc_zt=23&_nc_ht=scontent.fmnl44-1.fna&_nc_gid=LckS1GZuNufN9taa9RTf3A&_nc_ss=7b2a8&oh=00_Af7l5WGbtcYXwTyviGsyye8nfGhFVb5DkG2kU9gaKQL3Yw&oe=6A104024"],
    ["name"=>"Benedict Acuna", "age"=>21, "birthday"=>"Apr 24, 2005", "contact"=>"'09991602404", "img"=>"https://scontent.fmnl44-1.fna.fbcdn.net/v/t1.6435-9/86183223_834689623712565_8696379004174729216_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeG8eXU3OLvustsKAVCAHAgivTCuBDtuo669MK4EO26jrklzldZ3sHafjcDfrlaFghS__29muNgopt8ugddF9jOW&_nc_ohc=6xJ-bra9G-IQ7kNvwGRJeFz&_nc_oc=AdoVVtQum-eVPIyDIy_3PbBZe5HZ1-L3PqPDcgiGqssRc2ueKn-fATnsnF0o3UAOlcFdxcZCNkwabgMuWnrC7vVx&_nc_zt=23&_nc_ht=scontent.fmnl44-1.fna&_nc_gid=qCWShoueisG_2CEcqqcmAg&_nc_ss=7b2a8&oh=00_Af5T0mRW79FkLISSbQ350qYp55QR34PbeCJj5Lz4fN-UTg&oe=6A31E391"],
    ["name"=>"Alex Nadres Lauricio", "age"=>21, "birthday"=>"Mar 23, 2005", "contact"=>"09999970323", "img"=>"https://scontent.fmnl44-1.fna.fbcdn.net/v/t39.30808-1/634535072_26179313298400340_3427535764627578953_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=111&ccb=1-7&_nc_sid=1d2534&_nc_eui2=AeEq_MgGqPXnJx62gYgbFla7MTsI6hJCpE4xOwjqEkKkTojGH9yAV3_LVeNsgH95DFW6qXdFuF166Z4aeW-zmdc1&_nc_ohc=Nb0P2cak4FcQ7kNvwFRO89-&_nc_oc=AdowpX7M_CDFFTOaItA4666MQE0xd0iZJ24EumB8Ers9S-Wsdo7dSrUEOf9EX2LNgRWiKbwzXmLM_0sOUqKbobF-&_nc_zt=24&_nc_ht=scontent.fmnl44-1.fna&_nc_gid=pxYiRd_lXQn0M7bSFcK-nw&_nc_ss=7b2a8&oh=00_Af6t34aiiFn4Ld9MJUjVQwBBH3OK02ng7McRPWydNooRqQ&oe=6A106FC2"],
    ["name"=>"Zoie Alexa Sta. Mina", "age"=>21, "birthday"=>"Nov 5, 2005", "contact"=>"09195254859", "img"=>"https://scontent.fmnl44-1.fna.fbcdn.net/v/t39.30808-6/502376327_4162903387272534_8094189899750429604_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeE1CO0llABclElZGYUwMtC8xfzA0fYFEi_F_MDR9gUSL6Y0UaDIBxh9JboZu0hsgD74A-0U8OExGZtxhFEOvk-1&_nc_ohc=Fs2gnW1audMQ7kNvwFHMVIZ&_nc_oc=AdpDMEYtWQvd_wRnJ_5qg2DZrKyev9ttyGsWjYWKq4ne5vjdCCAhzb9OkVOMV42MU0K9yRnIYfM8P2aTclZu4nvZ&_nc_zt=23&_nc_ht=scontent.fmnl44-1.fna&_nc_gid=s6RAs0yLRCGyzla9pUqYew&_nc_ss=7b2a8&oh=00_Af4XHDGCVZLSkwet41r4QIgBiFqowjXZO-40hsSrMMKzrA&oe=6A106724"],
    ["name"=>"Ethan Barba", "age"=>21, "birthday"=>"Nov 20, 2005", "contact"=>"+639219225881", "img"=>"https://scontent.fmnl44-1.fna.fbcdn.net/v/t39.30808-1/571112685_4286255458311521_80502041914407759_n.jpg?stp=dst-jpg_s200x200_tt6&_nc_cat=100&ccb=1-7&_nc_sid=e99d92&_nc_eui2=AeEnPeckztZecKvKdAXU7Kw2BEA_NoMflkEEQD82gx-WQSHrDU-0W9N-TW4xhV2WAxfB4fiz72ewRQ26LSoXhKpZ&_nc_ohc=TD-SnfVEgDgQ7kNvwFjHhQP&_nc_oc=Adoml68e6CFFFrriCY-IL2f9_h2_Tly9-XJ2t7AguN-0Ljq76-EQrPEnP8TIPrjUZLVuO3iHyJLXet8wC6Zp7MTg&_nc_zt=24&_nc_ht=scontent.fmnl44-1.fna&_nc_gid=Wun6GTLx74wVPZSaqlEkUA&_nc_ss=7b2a8&oh=00_Af7ILq1XLskzoXfbQbc3Gr4o9NtDQ2QzUSZiFz9TPz8bTg&oe=6A104BE2"],
    ["name"=>"Radha Asis", "age"=>21, "birthday"=>"May 27, 2005", "contact"=>"09275017934", "img"=>"https://scontent.fmnl44-1.fna.fbcdn.net/v/t39.30808-6/506066288_24646118658311751_1925592140592902898_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeH9sbXtmbe3V07_URdD0-l9TrHrZWQE6D5OsetlZAToPg91Xrcur1oz5KB9kkAmc-q2l7yClLpWwBC4KMg1EkMq&_nc_ohc=aYotcZsbluIQ7kNvwE77tQe&_nc_oc=AdqYNGKrx9pQiPEBALeoI8MABDWPVb0wbLmP19JEYLwlgNBqWZtSvKZpSXXEJWQGYtTQLt3lm5nXTyE_76TXHAuX&_nc_zt=23&_nc_ht=scontent.fmnl44-1.fna&_nc_gid=PIJPiaOFuU9ZE-frGoWtCw&_nc_ss=7b2a8&oh=00_Af4x6t3DEYMObKJ1YJ9xkG4XfIWcXdVBOVY40NWuRxLbDQ&oe=6A104DF1"]
];

// sort alphabetically
usort($persons, function($a, $b){
    return strcmp($a['name'], $b['name']);
});

// TABLE START
echo "<table>";
echo "<tr>
        <th>No.</th>
        <th>Name</th>
        <th>Image</th>
        <th>Age</th>
        <th>Birthday</th>
        <th>Contact Number</th>
      </tr>";

$count = 1;

// display data
foreach($persons as $p){
    echo "<tr>";
    echo "<td>".$count++."</td>";
    echo "<td>".$p['name']."</td>";
    echo "<td><img src='".$p['img']."' alt='image'></td>";
    echo "<td>".$p['age']."</td>";
    echo "<td>".$p['birthday']."</td>";
    echo "<td>".$p['contact']."</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>