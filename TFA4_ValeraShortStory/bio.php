<?php
$selectedFriend = isset($_GET['friend']) ? $_GET['friend'] : "";
$selectedFriend = strtolower($selectedFriend);

function displayFriend($name, $image, $bio) {
    echo "<h2>" . ucwords($name) . "</h2>"; 
    echo "<img src='$image' alt='$name'>";
    echo "<p>$bio</p>";
}

switch ($selectedFriend) {

    case "deign":
        displayFriend(
            "Deign Sumalpong",
            "https://scontent.fmnl4-4.fna.fbcdn.net/v/t39.30808-6/482117531_1850648702362693_2004448226061358545_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeGLIgQZmk9HGCDrXm1XDrZRD_IpAGkvWnYP8ikAaS9adj_96JL7an1W144yHyYaVXVnmKXAs7agZbRg5vdDSEwH&_nc_ohc=CxC2jDmu7eQQ7kNvwGviUNW&_nc_oc=AdorBr5_HIT_OcR0sNPrIvwFZjcZIg8jbIToD9U-jrpfyDxbH9ZpafQQr4x_B9_qXBvtkgM6XOyHMsyp0uaV4JIC&_nc_zt=23&_nc_ht=scontent.fmnl4-4.fna&_nc_gid=DZvztZ08YBMdfNtFQQuIFA&_nc_ss=7b2a8&oh=00_Af43iDvUj1UhbBZvflWHKSFqm71jYbwdsHvdZeGk-yT2UQ&oe=6A10D617",
            "Deign is my JHS best friend even until now. He is very friendly and passionate about his talent, the guitar. He enjoys rock music and bands."
        );
        break;

    case "marc":
        displayFriend(
            "Marc Villuaneva",
            "https://scontent.fmnl4-4.fna.fbcdn.net/v/t39.30808-6/480578808_1148240220021854_5687124997262849296_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeGEMMowGNjn9GXde7AyBVTR-ot2kjEj_EH6i3aSMSP8QStfokjUO9pWFaPQICnGyhxK1zLMMr3OsuFL00bbJu72&_nc_ohc=dAz6KE4nml0Q7kNvwEC6-lt&_nc_oc=AdrFAbXOe8aemMzXYwdNPlEjkhVbr66MbYeF1Wd2SkyJG3je1AFrz_S0WcDu0ntZVocIhJCqoASP63DxXG7KSgTP&_nc_zt=23&_nc_ht=scontent.fmnl4-4.fna&_nc_gid=51_GytEl08LJlyHJX_c7pA&_nc_ss=7b2a8&oh=00_Af4feWzUopzalIexicBR8cPIThYgmRQQPIJDBj61K5GexA&oe=6A10E161",
            "Marc is the most handsome of all of us during our time in Scouting. Every girl looks at him, or at least he knows them!"
        );
        break;

    case "katherine":
        displayFriend(
            "Katherine Barz",
            "https://media.licdn.com/dms/image/v2/D4E03AQGWrGT5ElhxBQ/profile-displayphoto-scale_400_400/B4EZmJg_h7KUAg-/0/1758948752835?e=1780531200&v=beta&t=3tCp6HEGObuWzprrN-_e2CFdnVodOXKnYa6fBNmalyg",
            "Katherine is my first female friend after the pandemic and hybrid f2f class in SHS. She prefers sometimes to be alone, but whenever approached, she is very friendly."
        );
        break;

    case "christian":
        displayFriend(
            "Christian Nellas",
            "https://scontent.fmnl4-7.fna.fbcdn.net/v/t39.30808-6/576297011_729696203473652_2409275902990645975_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFLrwhxWuRiC-frEU-kvTXVWTW6GOQYI0RZNboY5BgjRBZDJFl_1b2eKdRFKyHEq7lv3Z1pYj_E270fNk_IYM4O&_nc_ohc=njnxWPuMQ38Q7kNvwEmKL9Q&_nc_oc=AdrbM5ljov8eOPl7dOnRNS7GTecRqJA1EERm26erFC584yQEqu8JrGaKivu6HX-CnpZCFtVUCRrx2HEjklJdkkvb&_nc_zt=23&_nc_ht=scontent.fmnl4-7.fna&_nc_gid=WzvTbHFzp_IGTdYlZqlqKA&_nc_ss=7b2a8&oh=00_Af5XJ-GRsL8wZNJlgStcYDQ0zN4xXuxAeS0KNPbD16CgQg&oe=6A10B0A4",
            "Christian is hardworking,g especially in scouting. He always dreamt of studying in UST, which he did, and hopes to apply his experiences in scouting to UST's honor guards."
        );
        break;

    case "xander":
        displayFriend(
            "Xander Canlas",
            "https://scontent.fmnl4-4.fna.fbcdn.net/v/t39.30808-6/455089112_8056071974482773_1758561720712977579_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=a5f93a&_nc_eui2=AeHhsX_1bV2UUPR9rRueLyDtb7AB-GaHpIxvsAH4ZoekjFHp8kpQXZyhnLpjl8D4rb92U7cfXutSDPnFFaPMKHXh&_nc_ohc=Tlgm6usMtmwQ7kNvwHs0UlG&_nc_oc=Adpk9r5Ix747QV9GmttszypsjTWwa3yKgR-jqY3q3Wakduq9t8CUXdbvwCpl32MejUzxuBN21kpuSzo6ftqoHeaz&_nc_zt=23&_nc_ht=scontent.fmnl4-4.fna&_nc_gid=8dwJ2ehPL5hkCbYXJjFYsQ&_nc_ss=7b2a8&oh=00_Af4SwswNLzMXoKvz9bvMHJb2oLD04bD-DHcuYTpK7z6bmw&oe=6A10CDBC",
            "Xander has been my childhood friend since nursery, elementary days, and even until my high school days! I didn't expect him to study in FEU Tech and really pursued his passion in technology related to security and cybersecurity."
        );
        break;

    default:
        echo "<h2>Welcome!</h2>";
        echo "<p>Select a friend to view their biography.</p>";
}
?>