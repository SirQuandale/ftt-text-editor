function getLineNumberAndColumnIndex(textarea) {
    var textLines = textarea.value.substr(0, textarea.selectionStart).split("\n");
    var currentLineNumber = textLines.length;
    var currentColumnIndex = textLines[textLines.length - 1].length;
    document.querySelector(".cols").textContent = "Current Line Number " + currentLineNumber + " Current Column Index " + currentColumnIndex;
}

const el = document.getElementById("aTag");
el.addEventListener("click", () => {
    document.querySelector(".printable").textContent = document.querySelector("#GFG_DOWN").textContent;


    window.print();
    // document.querySelector("#GFG_DOWN").print();
});