$(document).ready(function(){
    //data load
    loadData();
    
    //form add loader
    $("#contentData").on("click","#addButton",function(){
        $.ajax({
            url: '../add.php',
            type: 'get',
            success: function(data){
                $('#contentData').html(data);
            }
        });
    });

    //form edit loader
    $("#contentData").on("click","#editButton",function(){
        var id_member = $(this).attr("value");
        $.ajax({
            url: '../edit.php',
            type: 'get',
            data:{
                id_member : id_member
            },
            success: function(data){
                $('#contentData').html(data);
            }
        });
    });

    //cancel button
    $("#contentData").on("click","#cancelButton",function(){
        loadData();
    });

    //save case
    $("#contentData").on("submit", "#formAdd", function(e) {
        e.preventDefault();
        $.ajax({
            url: 'services.php?action=save',
            type: 'post',data: $(this).serialize(),
            success: function(data) {
                alert(data);
                loadData();
            }
        });
    });

    //edit case
    $("#contentData").on("submit", "#formEdit", function(e) {
        e.preventDefault();
        $.ajax({
            url: 'services.php?action=edit',
            type: 'post',
            data: $(this).serialize(),
            success: function(data) {
                alert(data);
                loadData();
            }
        });
    });

    //remove case
    $("#contentData").on("click", "#DeleteButton", function() {
        var id_member = $(this).attr("value");
        $.ajax({
            url: 'service.php?action=delete',
            type: 'post',
            data: {id_member: id_member},
            success: function(data) {
                alert(data);
                loadData();
            }
        });
    });

})

    function loadData() {
        $.ajax({
            url: '../main.php',
            type: 'get',
            success: function(data) {
                $('#contentData').html(data);
            }
        });
    }