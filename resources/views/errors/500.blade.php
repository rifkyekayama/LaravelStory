<div class="content">
    <div class="title">Something went wrong.</div>
@unless(empty($sentryID))
    <!-- Sentry JS SDK 2.1.+ required -->
        <script src="https://cdn.ravenjs.com/3.3.0/raven.min.js"></script>

        <script>
            Raven.showReportDialog({
                eventId: '{{ $sentryID }}',

                // use the public DSN (dont include your secret!)
                dsn: 'https://8e694f79bfc0419bbba1b50ad8c64756@sentry.io/189512'
            });
        </script>
    @endunless
</div>