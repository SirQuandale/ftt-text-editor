<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTT Text Editor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <button>Save</button>
        <button>Load</button>
        <button>Page Font</button>
        <button>Page Letter Size</button>
        <p class="cols">Current Line Number 0 Current Column Index 0</p>
        <button id="aTag">Print</button>
    </header>
    <div class="paper-container" id="print-content">
        <form method="post" class="ttt">
            <textarea type="text" name="text" onkeyup="getLineNumberAndColumnIndex(this);" onmouseup="this.onkeyup();" id="GFG_DOWN"></textarea>
            <p class="printable"></p>
        </form>
    </div>
    <script src="script.js"></script>
</body>

</html>