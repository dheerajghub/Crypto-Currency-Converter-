function amount(event,amount){
        var from = $('#from').val();
        var to = $("#to").val();
        $.ajax({ 
            url:"core.php?from="+from+"&to="+to+"&amount="+amount,
            method:"POST",
            success:function(data){
                $('#result').val(data.result);
                $('#resultof').val(data.resultof);
            }
        });
    event.preventDefault();
} 
function from(event,from){   
        var to = $("#to").val();
        var amount = $('#amount').val();
        console.log(from); console.log(to);
        $.ajax({ 
            url:"core.php?from="+from+"&to="+to+"&amount="+amount,
            method:"POST",
            success:function(data){
                $('#result').val(data.result);
                $('#resultof').val(data.resultof);
            }
        });
        event.preventDefault();
}
function to(event,to){
        var from = $('#from').val();
        var amount = $('#amount').val();
        console.log(from); console.log(to);
        $.ajax({ 
            url:"core.php?from="+from+"&to="+to+"&amount="+amount,
            method:"POST",
            success:function(data){
                $('#result').val(data.result);
                $('#resultof').val(data.resultof);
            }
        });
    event.preventDefault();
}