const version = '0.0.1';
const cacheName = `sdn-${version}`;

self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(cacheName).then(cache => {
            return cache.addAll([
                `/`,
                `/index.php`,
                `/bc.php`,
                `/contato.php`,
                `/fef.php`,
                `/dr.php`,
                `/cmcp.php`,
                `/rab.php`,
                `/hqs.php`,
                `/oseca.php`,
                `/style.css`,
                `css/bootstrap.min.css`,
            ])

                .then(() => self.skipWaiting());
        })
    );
});

self.addEventListener('activate', e => {
    e.waitUntil(self.clients.claim())
});

self.addEventListener('fetch', event => {
    event.respondWith(
        caches.open(cacheName)
            .then(cache => cache.match(event.request))
            .then(response => {
                return response || fetch(event.request);
            })
    );
});