var parseNames = function ()
{
    var result   = document.querySelector('#js-result'),
        textarea = document.querySelector('#textarea');
        // Regex to Match the @ char and any word char globally
        regex    = /(@)((\w)+)/g;

    textarea.onkeyup = function() {
        result.innerHTML = textarea.value.replace(regex,
            function(whole, part1, part2) {
                return '<a href="#'+part2+'" title="'+part2+'">'+part2+'</a>';
            }
        );
    }
}();
