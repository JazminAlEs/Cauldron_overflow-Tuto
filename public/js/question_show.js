
$('.js-vote-arrows a').on('click', function(e) {
    e.preventDefault();
    var $link = $(e.currentTarget);

    var $currentVoteContainer = $link.closest('.js-vote-arrows');

    $.ajax({
        url: '/comments/10/vote/' + $link.data('direction'),
        method: 'POST'
    }).then(function(data) {
        $currentVoteContainer.find('.js-vote-total').text(data.votes);
    });
});