$(document).ready(function() {
    $('.custom-select').select2();

    $('.btn-delete').click(function(){
        if (confirm("Do you want save as this record?")) {
            return true;
        }
        return false;
    });
});