<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
    @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css");
    .divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .subtitle {
        text-decoration: none;
    }

    .brand {
        font-size: 5rem;
    }

    .mt-6 {
        margin-top: 6rem;
    }

    * {
        font-family: 'JetBrains Mono';
    }

    @media (max-width: 600px) {
        .brand {
            font-size: 3rem;
        }
    }

    /* fonts */
    @font-face {
        font-family: 'JetBrains Mono';
        src: url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff2/JetBrainsMono-Bold-Italic.woff2') format('woff2'),
        url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff/JetBrainsMono-Bold-Italic.woff') format('woff');
        font-weight: 700;
        font-style: italic;
        font-display: swap;
        }
    
    @font-face {
        font-family: 'JetBrains Mono';
        src: url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff2/JetBrainsMono-Bold.woff2') format('woff2'),
        url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff/JetBrainsMono-Bold.woff') format('woff');
        font-weight: 700;
        font-style: normal;
        font-display: swap;
    }
    
    @font-face {
        font-family: 'JetBrains Mono';
        src: url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff2/JetBrainsMono-ExtraBold-Italic.woff2') format('woff2'),
        url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff/JetBrainsMono-ExtraBold-Italic.woff') format('woff');
        font-weight: 800;
        font-style: italic;
        font-display: swap;
    }
    
    @font-face {
        font-family: 'JetBrains Mono';
        src: url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff2/JetBrainsMono-ExtraBold.woff2') format('woff2'),
        url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff/JetBrainsMono-ExtraBold.woff') format('woff');
        font-weight: 800;
        font-style: normal;
        font-display: swap;
    }
    
    @font-face {
        font-family: 'JetBrains Mono';
        src: url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff2/JetBrainsMono-Italic.woff2') format('woff2'),
        url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff/JetBrainsMono-Italic.woff') format('woff');
        font-weight: 400;
        font-style: italic;
        font-display: swap;
    }
    
    @font-face {
        font-family: 'JetBrains Mono';
        src: url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff2/JetBrainsMono-Medium-Italic.woff2') format('woff2'),
        url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff/JetBrainsMono-Medium-Italic.woff') format('woff');
        font-weight: 500;
        font-style: italic;
        font-display: swap;
    }
    
    @font-face {
        font-family: 'JetBrains Mono';
        src: url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff2/JetBrainsMono-Medium.woff2') format('woff2'),
        url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff/JetBrainsMono-Medium.woff') format('woff');
        font-weight: 500;
        font-style: normal;
        font-display: swap;
    }
    
    @font-face {
        font-family: 'JetBrains Mono';
        src: url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff2/JetBrainsMono-Regular.woff2') format('woff2'),
        url('https://cdn.jsdelivr.net/gh/JetBrains/JetBrainsMono/web/woff/JetBrainsMono-Regular.woff') format('woff');
        font-weight: 400;
        font-style: normal;
        font-display: swap;
    }
</style>