<div id="footer-main">
    <div id="footer-fmt">
        <div id="footer">
            <div>
                <p class="footer_title">Social</p>
                <a href="https://www.facebook.com/profile.php?id=100006320341649">
                    <p>Facebook</p>
                </a>
                <a href="https://twitter.com/RKozielTO">
                    <p>Twitter</p>
                </a>
                <a href="https://www.instagram.com/robertthepianoguy/">
                    <p>Instagram</p>
                </a>
                <a href="https://www.youtube.com/channel/UCQJ0lSghEiCTpcC_g8nvEug">
                    <p>Youtube</p>
                </a>
            </div>
            <div>
                <p class="footer_title">Platform</p>
                <a href="https://music.amazon.com/artists/B06XH56NHJ">
                    <p>Amazon</p>
                </a>
                <a href="https://music.apple.com/ca/album/moonrise-single/1472810858">
                    <p>Apple Music</p>
                </a>
                <a href="https://play.google.com/music/listen?u=0#/artist//Robert+Koziel">
                    <p>Google Music</p>
                </a>
                <a href="https://open.spotify.com/artist/08w1yPL6mZ6hcRG8aLdhYp">
                    <p>Spotify</p>
                </a>
                <a href="https://soundcloud.com/robertkoziel">
                    <p>SoundCloud</p>
                </a>
            </div>
            <div>
                <p class="footer_title">Contact</p>
                <p>pianorobertkoziel@gmail.com</p>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="js/green-audio-player.min.js"></script>
<script>
    $(window).scroll(function () {
        var $window = $(window),
            $body = $('body'),
            $panel = $('.panel');
        var scroll = $window.scrollTop() + ($window.height() / 2);

        $panel.each(function () {
            var $this = $(this);

            if ($this.position().top <= scroll && $this.position().top + $this.height() > scroll) {

                $body.removeClass(function (index, css) {
                    return (css.match(/(^|\s)color-\S+/g) || []).join(' ');
                });

                $body.addClass('color-' + $(this).data('color'));
            }
        });
    }).scroll();
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        GreenAudioPlayer.init({
            selector: '.player',
            stopOthersOnPlay: true
        });
    });
</script>
<script>
    $(window).unload(function () {
        $(window).scrollTop(0);
    });
    $("#img-btn-text").click(function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#moonrise").offset().top - $(window).height() / 6
        }, 300);
    });
    document.getElementById("moonrise").addEventListener('click', function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#moonrise").offset().top - $(window).height() / 6
        }, 300);
    });
    document.getElementById("devotion").addEventListener('click', function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#devotion").offset().top - $(window).height() / 6
        }, 300);
    });
    document.getElementById("journey").addEventListener('click', function () {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("#journey").offset().top - $(window).height() / 6
        }, 300);
    });
</script>
</div>
</body>
</html>
