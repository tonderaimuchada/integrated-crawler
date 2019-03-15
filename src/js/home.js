$('document').ready(function(){
    $('#searchButton').click(function(){
        var search = $('#searchText').val();
        alert(search);
        console.log('text data');
        // $.post('../searchusers.php',{search: search},function(response){
        //     $('#userSearchResultsTable').html(response);
        // });
    })
    $('#usersSearch').keypress(function(e){
        if(e.which == 13){//Enter key pressed
            $('#searchButton').click();//Trigger search button click event
        }
    });

});