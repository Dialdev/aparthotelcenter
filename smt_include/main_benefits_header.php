<style>
#block-search, #block-search * {
    box-sizing: border-box;
}
#block-search {
   background: #FFFFFF;
   box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
  }

 .tl-container {
   padding: 0 30px;
  }
</style>
<!-- start TL Search form script -->
<div id='block-search'>
    <div id='tl-search-form' class='tl-container'>
        <noindex><a href='http://www.travelline.ru/products/tl-hotel' rel='nofollow'>система онлайн-бронирования</a></noindex>
    </div>
</div>
<script type='text/javascript'>
    (function(w) {
        var q = [
            ['setContext', 'TL-INT-appartcener-dev-dialtest', 'ru'],
            ['embed', 'search-form', {
                container: 'tl-search-form'
            }]
        ];
        var t = w.travelline = (w.travelline || {}),
            ti = t.integration = (t.integration || {});
        ti.__cq = ti.__cq ? ti.__cq.concat(q) : q;
        if (!ti.__loader) {
            ti.__loader = true;
            var d = w.document,
                p = d.location.protocol,
                s = d.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = (p == 'https:' ? p : 'http:') + '//ibe.tlintegration.com/integration/loader.js';
            (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s);
        }
    })(window);
</script>
<!-- end TL Search form script -->