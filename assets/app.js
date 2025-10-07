/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

//JQUERY
import $ from 'jquery';
global.$ = global.jQuery = $;

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