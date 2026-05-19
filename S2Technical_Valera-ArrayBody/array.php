<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Human Body Parts Directory</title>
    <link rel="stylesheet" href="array.css">
</head>
<body>

<h2>Human Body Parts Directory</h2>

<?php
$bodyParts = [
    ["name"=>"Brain",
     "description"=>"Controls the body and processes sensory information",
     "facts"=>"The brain uses about 20% of the body's energy.",
     "img"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Brain_autopsy_lateral_view.jpg/1280px-Brain_autopsy_lateral_view.jpg"],

    ["name"=>"Heart",
     "description"=>"Pumps blood throughout the body",
     "facts"=>"The heart beats about 100,000 times per day. The human heart is also a size of an adult's fist",
     "img"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/8/8e/%D0%9F%D0%B5%D1%80%D0%B5%D1%81%D0%B0%D0%B6%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5_%D1%81%D0%B5%D1%80%D0%B4%D1%86%D0%B5_%D0%B2_%D0%B3%D1%80%D1%83%D0%B4%D0%BD%D0%BE%D0%B9_%D0%BA%D0%BB%D0%B5%D1%82%D0%BA%D0%B5_%D1%80%D0%B5%D1%86%D0%B8%D0%BF%D0%B8%D0%B5%D0%BD%D1%82%D0%B0.JPG/250px-%D0%9F%D0%B5%D1%80%D0%B5%D1%81%D0%B0%D0%B6%D0%B5%D0%BD%D0%BD%D0%BE%D0%B5_%D1%81%D0%B5%D1%80%D0%B4%D1%86%D0%B5_%D0%B2_%D0%B3%D1%80%D1%83%D0%B4%D0%BD%D0%BE%D0%B9_%D0%BA%D0%BB%D0%B5%D1%82%D0%BA%D0%B5_%D1%80%D0%B5%D1%86%D0%B8%D0%BF%D0%B8%D0%B5%D0%BD%D1%82%D0%B0.JPG"],

    ["name"=>"Lungs",
     "description"=>"Helps in breathing and oxygen exchange",
     "facts"=>"A normal person can live and breathe with one lung.",
     "img"=>"https://i0.wp.com/drkamranali.com/wp-content/uploads/2023/01/ae6c1a5a-0ec8-4143-bcc3-6136dacd886b-1.jpg?resize=300%2C254&ssl=1"],

    ["name"=>"Eyes",
     "description"=>"Responsible for vision",
     "facts"=>"Eyes can distinguish about 10 million colors.",
     "img"=>"https://c02.purpledshub.com/uploads/sites/41/2023/12/the-human-eye.jpg?w=1200&webp=1"],

    ["name"=>"Skin",
     "description"=>"Protects the body from external damage",
     "facts"=>"Skin is the largest organ of the body.",
     "img"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/a/a4/Diagram_of_human_skin.jpg/960px-Diagram_of_human_skin.jpg?_=20060111131250"],

    ["name"=>"Liver",
     "description"=>"Processes nutrients and detoxifies chemicals",
     "facts"=>"The liver can regenerate itself.",
     "img"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/6/6f/Human_Hepar.jpg/1280px-Human_Hepar.jpg"],

    ["name"=>"Kidneys",
     "description"=>"Filters waste from the blood",
     "facts"=>"Each kidney contains about 1 million filters.",
     "img"=>"https://ars.els-cdn.com/content/image/1-s2.0-S1959031817300908-gr001_lrg.jpg"],

    ["name"=>"Stomach",
     "description"=>"Breaks down and digests food",
     "facts"=>"Digestive acids in the stomach are very strong and can melt metals.",
     "img"=>"https://i.ytimg.com/vi/MLd4K5hKosw/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBZB0LgV7VSvSYVAarRijk2DXlBxg"],

    ["name"=>"Bones",
     "description"=>"Provides structure and support",
     "facts"=>"An adult human has 206 bones.",
     "img"=>"https://upload.wikimedia.org/wikipedia/commons/thumb/1/14/Human-Skeleton.jpg/250px-Human-Skeleton.jpg"],

    ["name"=>"Muscles",
     "description"=>"Helps movement of the body",
     "facts"=>"The human body has over 600 muscles.",
     "img"=>"https://innerbody.imgix.net/muscular_system.png"]
];

usort($bodyParts, function($a, $b){
    return strcmp($a['name'], $b['name']);
});

// TABLE
echo "<table>";
echo "<tr>
        <th>No.</th>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Facts</th>
      </tr>";

$count = 1;

foreach($bodyParts as $part){
    echo "<tr>";
    echo "<td>".$count++."</td>";
    echo "<td><img src='".$part['img']."' alt='image'></td>";
    echo "<td>".$part['name']."</td>";
    echo "<td>".$part['description']."</td>";
    echo "<td>".$part['facts']."</td>";
    echo "</tr>";
}

echo "</table>";
?>

</body>
</html>
