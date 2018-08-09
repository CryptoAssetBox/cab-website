$(function() {
        var $content = $('.news');
        var $status = $('.status-medium');
        var data = {
            rss_url: 'https://medium.com/feed/cazcoin'
        };
$.get('https://api.rss2json.com/v1/api.json', data, function(response) {
            if (response.status == 'ok') {
                var output = '';
$.each(response.items, function(k, item) {
    output += '<div class="col-12 col-md-12 card bg-light py-4 m-1 shadow"> <a href="'+ item.link +'" target="_blank"> <img src="'+ item.thumbnail +'" class="img-fluid" alt="cazcoin medium" width="100%"> </a>' ;
                    output += '<h2 class="pt-2"><a target="_blank" class="news-title text-primary mbr-bold" href="' + item.link + '" >' + item.title + '</h2></a>';
                    output +='<p class="text-mute">'+item.pubDate+'  <span class=" float-right text-black">By '+ item.author+'</span></p>';
                    output +='</div>';
                });
$content.html(output);
}
});





$.ajax({
        url: 'https://medium.com/cazcoin/latest?format=json',
        type: "POST",
        success: function (data, textStatus) {
            for (var x = 0; x < 2; x++) {
            alert(data.items[x].title);
             
               // updateListing(data[x]);
            }
        }
    });



});


