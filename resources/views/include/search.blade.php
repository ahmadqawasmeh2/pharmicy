
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>JavaScript Shield UI Demos</title>
    <link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
</head>
<body class="theme-light">
<div class="outerDiv">
    <div class="container">
        <div class="chooseFruit">
            <label for="autocomplete">Choose your favourite fruit</label><br />
            <input id="autocomplete" type="text" placeholder="Select fruit..." /><br />
            <span class="hint">Start typing the fruit name</span>
        </div>
    </div>
</div>
<script type="text/javascript">
    var fruits = [
        "Apple", "Apricot", "Avocado", "Banana", "Breadfruit", "Bilberry", "Blackberry",
        "Blackcurrant", "Blueberry", "Boysenberry", "Cantaloupe", "Currant",
        "Cherry", "Cherimoya", "Cloudberry", "Coconut", "Cranberry", "Cucumber",
        "Damson", "Date", "Dragonfruit", "Durian", "Eggplant", "Elderberry",
        "Feijoa", "Fig", "Goji berry", "Gooseberry", "Grape", "Grapefruit",
        "Guava", "Huckleberry", "Honeydew", "Jackfruit", "Jambul", "Jujube",
        "Kiwi fruit", "Kumquat", "Lemon", "Lime", "Loquat", "Lychee", "Mango",
        "Melon", "Canary melon", "Cantaloupe", "Honeydew", "Watermelon",
        "Rock melon", "Mulberry", "Nectarine", "Nut", "Olive", "Orange",
        "Clementine", "Mandarine", "Tangerine", "Pamelo", "Papaya",
        "Passionfruit", "Peach", "Pepper", "Chili Pepper", "Bell Pepper",
        "Pear", "Persimmon", "Physalis", "Plum/prune", "Pineapple",
        "Pomegranate", "Pomelo", "Purple Mangosteen", "Quince", "Raspberry",
        "Western raspberry", "Rambutan", "Redcurrant", "Salal berry", "Satsuma",
        "Star fruit", "Strawberry", "Tamarillo", "Watermelon"
    ];
    jQuery(function ($) {
        $("#autocomplete").shieldAutoComplete({
            dataSource: {
                data: fruits
            },
            minLength: 1
        });
    });
</script>
<style>
    .outerDiv
    {       
        content: ".";
        display: block;
        overflow: hidden;
    }
    .container
    {
        background-image: url("/Content/img/autocomplete/fruits.jpg");
        background-position: center;
        background-repeat: no-repeat;       
        height: 282px;
        width: 438px;   
        margin-left: auto;
        margin-right: auto;
    }
    .chooseFruit
    {
        float:left;
        padding: 20px;
    }
    .hint
    {
        color: #C4C4C4;
        font-size: 12px;
        font-style: italic;
    }
    .chooseFruit input
    {
        margin-top: 5px;
    }
</style>
</body>
</html>
