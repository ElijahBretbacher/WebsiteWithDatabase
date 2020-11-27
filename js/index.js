//SIMPLE FULL WINDOW DISPLAY
function previewFile(filePromise, fileName) {
    var adobeDCView = new AdobeDC.View({

        clientId: "abf118ce53e8470a921ada908de0c4c6",

        divId: "adobe-dc-view",
    });


    adobeDCView.previewFile({
        content: {
            promise: filePromise,
        },
        metaData: {
            fileName: fileName
        }
    }, {});
}

function isValidPDF(file) {
    if (file.type === "application/pdf") {
        return true;
    }
    if (file.type === "" && file.name) {
        var fileName = file.name;
        var lastDotIndex = fileName.lastIndexOf(".");
        return !(lastDotIndex === -1 || fileName.substr(lastDotIndex).toUpperCase() !== "PDF");
    }
    return false;
}


function listenForFileUpload() {
    var fileToRead = document.getElementById("file-picker");
    fileToRead.addEventListener("change", function (event) {
        var files = fileToRead.files;
        if (files.length > 0 && isValidPDF(files[0])) {
            var fileName = files[0].name;
            var reader = new FileReader();
            reader.onloadend = function (e) {
                var filePromise = Promise.resolve(e.target.result);
                previewFile(filePromise, fileName);
            };
            reader.readAsArrayBuffer(files[0]);
        }
    }, false);
}