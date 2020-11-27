function download() {

    const blob = new Blob(["Some new Blob"], {type: "text/pdf"});
    downloadFile(blob, "newfile.txt");
}

function downloadFile(blob, filename) {
    const url = window.URL.createObjectURL(blob);

    const a = document.createElement("a");

    a.href = url;
    a.download = filename;

    a.click();

    a.remove();
    a.addEventListener("focus", w => {
        window.URL.revokeObjectURL(blob)
    })
}