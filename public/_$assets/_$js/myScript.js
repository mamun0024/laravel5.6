/**
 * Created by mamun0024 on 03/12/18.
 */

var loader    = $('.loader');

toastr.options.positionClass = 'toast-bottom-right';
toastr.options.extendedTimeOut = 0; //1000;
toastr.options.timeOut = 8000;
toastr.options.fadeOut = 250;
toastr.options.fadeIn = 250;
toastr.options.closeButton = true;
toastr.options.closeHtml = '<button><i class="fa fa-close"></i></button>';
toastr.options.progressBar = true;
toastr.options.preventDuplicates = true;

function getFileNameByID(ID){
    var fullPath = document.getElementById(ID).value;
    if (fullPath) {
        var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
        var filename = fullPath.substring(startIndex);
        if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
            filename = filename.substring(1);
        }
        return filename;
    }else{
        return false;
    }
}

function getExtension(filename) {
    var parts = filename.split('.');
    return parts[parts.length - 1];
}

function lockoutSubmit(button) {
    var oldValue = button.value;

    //button.setAttribute('disabled', true);
    button.classList.add("noSelect");
    //button.value = '...Processing...';
    button.value = oldValue;

    setTimeout(function(){
        button.value = oldValue;
        //button.removeAttribute('disabled');
        button.classList.remove("noSelect");
    }, 3000)
}

$(document).ready(function() {
    $('.tooltip-bottom').tooltipster({
        position : "bottom"
    });
    $('.tooltip-left').tooltipster({
        position : "left"
    });
    $('.tooltip-right').tooltipster({
        position : "right"
    });
    $('.tooltip-top').tooltipster({
        position : "top"
    });
});